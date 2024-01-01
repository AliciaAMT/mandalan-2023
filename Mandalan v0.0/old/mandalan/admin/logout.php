<?php
//include config
require_once( $_SERVER['DOCUMENT_ROOT'] . '/includes/config2.php');

//log user out
$user->logout();
header('Location: index.php'); 

?>