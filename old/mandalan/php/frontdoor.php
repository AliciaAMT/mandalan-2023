<?php

echo "<table class=\"page\"><tr><td class=\"border\">

<table class=\"page\"><tr><td class=\"page\"><h2>House of Elders</h2><br />

</tr></td><tr><td class=\"left\">\"I'm sorry little one, but that silly scroll won't fool me! It's a fake, and you are NOT getting in to see Old Solias. Goodbye,\" answers an old, miserly-looking chap.</td></tr><tr><td class=\"page\">

<form action=\"maingraphics.php\" method=\"post\"><input type=\"submit\" class=\"small\" value=\"Leave\" /></form></td></tr></table></td></tr></table></body></html>";

$query=sprintf("update flags set houseofelders=1 where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

?>