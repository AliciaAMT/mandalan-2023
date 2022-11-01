<?php include ('../php/getcookie2.php'); ?>
<?php include ('../php/allaccess.php'); ?>
<!DOCTYPE html PUBLIC"-//W3C//DTD XHTML 1.0 Transitional//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head><meta name="Keywords" content="" /><meta name="Description" content="" /><link rel="stylesheet" type="text/css" href="../main.css" />
<?php
echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"ajax-chat/style/style.css\" /><style type=\"text/css\"> html, body { padding: 0px; margin: 0px; } </style></head>"; ?>

<body onload="chat_api_onload('Main Room', false, '<?php $username=$_COOKIE["name"]; echo $username; ?>', '<?php $password=$_COOKIE["password"]; echo $password; ?>');">

<img src="../images/border1.png" width="100%" border="0" /><br /><br /><h1>Alicia's Private Wonderland</h1><i>Freedom is a state of mind.</i><br /><br /><img src="../images/border2.png" width="100%" border="0" /><table class="page"><tr><td class="page"><table class="menu"><tr><td class="menu"><a href="../home.php">Rabbit Hole</a></td><td class="menu"><a href="../library.php">Library</a></td><td class="menu"><a href="../forum.php">Dear Abba</a></td><td class="menu"><a href="chat.php">Mad Hatter's</a></td><td class="menu"><a href="../volunteer.php">The Looking Glass</a></td><td class="menu"><a href="../login.php">Login</a></td></tr></table></td></tr></table>
<?php
$chat_list = array('Main Room', 'Room 1', 'Room 2');
$chat_logs = array('add' => false, 'get' => false, 'log' => false);
$chat_show = array('login' => false, 'guest' => false);
$chat_path = 'ajax-chat/';
include_once 'ajax-chat/ajax-chat.php';
?>
</body>
</html>