<html>
<head>
<script type="text/javascript">
function loadXMLDoc()
{
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
  /placeholder for hash table as cache 
var cache = []; 
 
var getPage = function(pageNr){ 
    if(cache[pageNr]){ 
        //content is already in cache, use it from there 
        handleContent(cache[pageNr]); 
    } 
    else{ 
        //object with parameteres sent with GET request 
        var params = {}; 
        params.page = pageNr; 
 
        $.ajax({ 
          url: "getHTML.php", 
          data: params, 
          cache: false, 
          success: function(response){ 
                //handle your response here 
                handleContent(response); 
 
                //store the response in the cache for later use 
            cache[pageNr] = response; 
          } 
        }); 
    } 
}; 

xmlhttp.open("GET","random.php?<php include timestamp; ?>",true);
xmlhttp.send();
}
</script>
</head>
<body>

<div id="myDiv"><h2>Random Number Here</h2></div>
<button type="button" onclick="loadXMLDoc()">Change Content</button>

</body>
</html>
