<?php include ('php/getcookie.php'); ?>
<?php include ('php/header1.php'); ?>

<table class="page"><tr><td class="page"><h2>Forum</h2></td></tr><tr><td class="page">
<form name="entry" action="entryp.php?<?php echo time(); ?>" method="get">Message Title: <input type="text" name="title" maxlength="50" /><br />
<textarea rows="10" cols="70" name="message" maxlength="5000" /></textarea><br /><table class="page"><tr><td class="page"><input type="submit" value="Submit" class="small" /></td></tr></table></form>


</td></tr></table></body></html>