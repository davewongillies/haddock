<?php

/*
OC::$CLASSPATH['OC_Contacts_Addressbook'] = 'apps/contacts/lib/addressbook.php';
OC::$CLASSPATH['OC_Contacts_VCard'] = 'apps/contacts/lib/vcard.php';
OC::$CLASSPATH['OC_Contacts_Hooks'] = 'apps/contacts/lib/hooks.php';
OC::$CLASSPATH['OC_Connector_Sabre_CardDAV'] = 'apps/contacts/lib/connector_sabre.php';
OC_HOOK::connect('OC_User', 'post_createUser', 'OC_Contacts_Hooks', 'deleteUser');
*/
OC_App::register( array(
  'order' => 70,
  'id' => 'haddock',
  'name' => 'Tomboy Online' ));

OC_App::addNavigationEntry( array(
  'id' => 'haddock_main',
  'order' => 71,
  'href' => OC_Helper::linkTo( 'haddock', 'index.php' ),
  'icon' => OC_Helper::imagePath( 'haddock', 'Tomboy_logo.svg' ),
  'name' => 'Tomboy Online' ));

OC_APP::registerPersonal('haddock','settings');
