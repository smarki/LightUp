<?php
//if(!defined('RemoteAccess')){die('Direct access not premitted');}

include ($_SESSION['baseURI'] .'/core/config.php');

if($db['Type'] == 'postgresql'){
$dbconn = pg_connect('host='.$db['Host'].' port=' .$db['Port'].' dbname='.$db['Name'].' user='.$db['Username'].' password='.$db['Password']);
}
?>
