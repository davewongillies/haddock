<?php

header("Content-Type: text/plain");

require_once ('../../lib/base.php');
require_once '../../3rdparty/MDB2/Schema.php';

$options = array(
    'log_line_break' => '<br>',
    'idxname_format' => '%s',
    'debug' => true,
    'quote_identifier' => true,
    'force_defaults' => false,
    'portability' => true
);
$dsn = 'mysql://root:@localhost/oauthphp';

$schema =& MDB2_Schema::factory($dsn, $options);

if (PEAR::isError($schema)) {
    $error = $schema->getMessage();
} else {
    // this method _attempts_ to get the defintition from the database
    // make sure you have tested it with your database to see if it
    // returns what you expect
    $definition = $schema->getDefinitionFromDatabase();

    if (PEAR::isError($definition)) {
      $error = $definition->getMessage();
    }
    
    print_r($definition);
    
    $schema->dumpDatabase($definition, array("output_mode"=>"file", "output"=>"test.xml"), MDB2_SCHEMA_DUMP_STRUCTURE);
}

if (isset($error)) {
  var_dump($error);
}

$schema->disconnect();
?> 