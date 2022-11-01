<?php
	$smoke=0;
$smokeamt=0;


include ('../php/getstats.php');


$query=sprintf("select * from stats where username='%s';",mysql_real_escape_string($username));

$result = mysql_query($query);
while($row = mysql_fetch_array($result))
	{
		
	
	$smoke=$smoke+$row['sfsmoke'];
	
	
$smokeamt=$smokeamt+5;
$smokeamt=$smokeamt*$row['level'];
	
	}
?>