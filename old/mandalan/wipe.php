<html>
<head>
<script type="text/javascript">
function wipedatabase()
{
var xmlHttp;
try
  {
  // Firefox, Opera 8.0+, Safari
  xmlHttp=new XMLHttpRequest();
  }
catch (e)
  {
  // Internet Explorer
  try
    {
    xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");
    }
  catch (e)
    {
    try
      {
      xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
      }
    catch (e)
      {
      alert("Your browser does not support AJAX!");
      return false;
      }
    }
  }
  
  
  xmlHttp.onreadystatechange=function()
    {
    if(xmlHttp.readyState==4)
      {
      document.getElementById("outcome").innerHTML=xmlHttp.responseText;
      }
    }
  xmlHttp.open("GET","php/wipedb.php/path?normal=parms&ts="+(new Date()).getTime(),true);
  xmlHttp.send(null);
  }

</script>
<title>game database maker</title>

</head>

<body onload="wipedatabase()"><span id="outcome"></span>

</body>
</html>