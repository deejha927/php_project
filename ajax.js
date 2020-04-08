
var xmlhttp=false;
	if(window.XMLHttpRequest)
	{
		xmlhttp=new XMLHttpRequest();
	}
	else
	{
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	function myfunc()
	{
		if(xmlhttp)
		{
			var path="b.php?str="+document.getElementById("t1").value;
			xmlhttp.open("GET",path);
			xmlhttp.onreadystatechange=function()
			{
				if(xmlhttp.readyState==4 && xmlhttp.status==200)
				{
					document.getElementById("mydiv").innerHTML=xmlhttp.responseText;
				}
			}
			xmlhttp.send();
		}
	}
