<html>
<head>
<script type="text/javascript">



function loadXMLDoc()
{
Response.CacheControl = "no-cache"; 
Response.AddHeader("Pragma", "no-cache"); 
Response.Expires = -1; 

if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("myDiv").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","random.php",true);
xmlhttp.send();
}
</script>
</head>
<body>

<div id="myDiv"><h2><?php include ('random.php'); ?></h2></div>
<button type="button" onclick="loadXMLDoc()">Change Content</button>

</body>
</html>

