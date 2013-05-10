<?php
if(!defined('RemoteAccess')){die('Direct access not premitted');}
/*
* In future hopefully we will support more databases
* $dbType = postgresql | mysql etc. 
*/
$db = array('Type' =>'postgresql',
			'Host' => 'localhost',
			'Name' =>'pg',
			'Port' =>'5432',
			'Username' => 'postgres',
			'Password' => 'bob12345'
			);

?>