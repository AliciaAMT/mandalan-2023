<?php include ('php/header1.php'); ?>
<img src="mandalalogo.jpg" /></td></tr><tr><td class="page"><table class="page"><tr><td class="page"><img src="images/mandala.jpg" border="3" /></td><td class="page"><table class="page"><tr><td class="left"><b>Jewelry & Accessories</b></td></tr><tr><td class="left">Necklaces<br />Chokers<br />Earrings<br />Jewelry Sets</td></tr></table></td></tr><tr><td class="page" colspan="2"><p><a name="guestbook"><h2>Guestbook</h2></a></p><p>Please don't forget to sign our guestbook. We love to hear from visitors!</p><p><form action="signbook.php? <?php echo time(); ?>" method="post"><table><tr><td class="left">Name: </td><td class="left"><input class="mine" type="text" name="name" maxlength="20" /></td></tr><tr><td class="left">Location: </td><td class="left"><input class="mine" type="text" name="location" maxlength="20" /></td></tr><tr><td class="left">Comments: </td><td class="left"><textarea name="comments" maxlength="5000" rows="7" cols="40"></textarea></td></tr><tr><td class="left" colspan="2">
<?php
 require_once('recaptchalib.php');
  $publickey = "6LcTYsgSAAAAABS-P2q-KP31by_nE3RRqx4_-f94";
  echo recaptcha_get_html($publickey);
  ?>
  

</td></tr><tr><td class="page" colspan="2"><input class="small" type="submit" value="Submit" /></td></table></form><br /><table class="page"><tr><td class="menu"><a href="guestbook.php"><b>View Guestbook</b></a></td></tr></table></p><hr></td></tr></table></td></tr></table></td></tr></table></body></html>