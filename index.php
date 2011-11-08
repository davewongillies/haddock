<?php
/**
 * ownCloud - Haddock :: Tomboy Online
 *
 * @author Anthony W. Rainer
 * @copyright 2011 Anthony W. Rainer <pristine.source@gmial.com>
 *
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU AFFERO GENERAL PUBLIC LICENSE
 * License as published by the Free Software Foundation; either
 * version 3 of the License, or any later version.
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU AFFERO GENERAL PUBLIC LICENSE for more details.
 *
 * You should have received a copy of the GNU Affero General Public
 * License along with this library.  If not, see <http://www.gnu.org/licenses/>.
 *
 */

// Init owncloud
$result = include_once('../../lib/base.php');
if(!$result) require_once('/var/www/owncloud/lib/base.php');

// Check if we are a user
OC_Util::checkLoggedIn();
OC_Util::checkAppEnabled('haddock');

// Check if the tomboy-online is configured



// Process the template
$tmpl = new OC_Template( 'haddock', 'index', 'user' );
/*
$tmpl->assign('addressbooks', $addressbooks);
$tmpl->assign('contacts', $contacts);
$tmpl->assign('details', $details );
$tmpl->assign('id',$id);
*/
$tmpl->printPage();
