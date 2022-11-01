<?php include ('php/header1.php'); ?>

<?php
include ('php/connect.php');
$name=strip_tags($_POST["name"]);
$location=strip_tags($_POST["location"]);
$email=strip_tags($_POST["email"]);
$date=time();
$age=strip_tags($_POST["age"]);
$password=strip_tags($_POST["password"]);
if (!$name || !$email || !$password)
{
die ("You must fill out the form completely. Please try again by pressing the back button in your browser.</td></tr></table></td></tr></table></body></html>
");
}

$results=mysql_query("select * from members");
while ($row = mysql_fetch_array($results))
{
if ($row['name']==$name)
	{
	die ("The name you have chosen already exists. Please use the back button in your browser and try another user name.</td></tr></table></td></tr></table></body></html>");
}


}
$querys = sprintf("insert into members 
values('%s', '%s', '%s', '%s', '%s', '%s');", mysql_real_escape_string($name),
mysql_real_escape_string($location),
mysql_real_escape_string($email),
mysql_real_escape_string($password),
mysql_real_escape_string($age),
mysql_real_escape_string($date));

mysql_query($querys, $con);

echo "<br />";
echo "Name: ";
echo $name;
echo "<br />";
echo "Location: ";
echo $location;
echo "<br />";
echo "Password: ";
echo $password;
echo "<br />";
echo "Email: ";
echo $email;
echo "<br /><br />Your membership has been accepted, welcome to Alicia's Wonderland!<br /><br /><a href=\"members.php\">View Other Members</a><br /><br />";

?>
</body></html>