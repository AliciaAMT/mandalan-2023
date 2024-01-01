<?php include ('php/header1.php'); ?>

<?php

  require_once('recaptchalib.php');
  $privatekey = "6LcTYsgSAAAAAGL7de-AMbT9cXzhwsuOrKRen3fC";
  $resp = recaptcha_check_answer ($privatekey,
                                $_SERVER["REMOTE_ADDR"],
                                $_POST["recaptcha_challenge_field"],
                                $_POST["recaptcha_response_field"]);

  if (!$resp->is_valid) 
  {
    // What happens when the CAPTCHA was entered incorrectly
    die ("The reCAPTCHA wasn't entered correctly. Go back and try it again.<a href=\"guestbook.php\">Guestbook</a>" .
         "(reCAPTCHA said: " . $resp->error . ")");
  }
  else 
  {
   


include ('php/connect.php');
$name=strip_tags($_POST["name"]);
$location=strip_tags($_POST["location"]);
$comments=strip_tags($_POST["comments"]);$answer=4;
$date=time();

$to = "aliciataylorguitar@gmail.com";
 $subject = "New Guestbook";
 
 if (mail($to, $subject, $comments)) 
{
   echo("<p>Message successfully sent!</p>");
  } 
else 
{
   echo("<p>Message delivery failed...</p>");
  }


if (!$name || !$comments)
{
die ("You must fill out the form completely. Please try again by pressing the back button in your browser.</td></tr></table></td></tr></table></body></html>
");
}


if ($answer==4)
{
$querys = sprintf("insert into guestbook 
values('%s', '%s', '%s', '%s');", mysql_real_escape_string($name),
mysql_real_escape_string($location),
mysql_real_escape_string($comments),
mysql_real_escape_string($date));

mysql_query($querys, $con);

echo "<br />";
echo "Name: ";
echo $name;
echo "<br />";
echo "Location: ";
echo $location;
echo "<br />";
echo "Comments: ";
echo $comments;
echo "<br /><br />Your signature has been posted to the guestbook. Thank you for your visit!<br /><br /><table class=\"page\"><tr><td class=\"menu\"><a href=\"guestbook.php\">View Guestbook</a></td></tr></table><br /><br />";
mysql_close($con);
}
else
{
die ("You must fill out the form completely. Please try again by pressing the back button in your browser.</td></tr></table></td></tr></table></body></html>");
}
 // Your code here to handle a successful verification
  }
  
?>

</body></html>