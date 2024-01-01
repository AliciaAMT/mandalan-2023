<?php include ('php/getcookie.php'); ?>

<?php include ('php/header2.php'); ?>


<body onload="chat_api_onload('Main Room', false, '<?php $name=$_COOKIE["name"]; echo $name; ?>', 'pass');">
<?php
$chat_list = array('Main Room', 'Party Room', 'Room 2');
$chat_logs = array('add' => false, 'get' => false, 'log' => false);
$chat_show = array('login' => false, 'guest' => false);
$chat_path = 'ajax-chat/';
include_once 'ajax-chat/ajax-chat.php';
?>
</body></html>