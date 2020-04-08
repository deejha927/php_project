
<html>
<head>
<?php 
session_start();
include("config.php");?>
<?php include("head.php");
error_reporting(0);

?>
<?php
$f=0;
include("config.php");
if(isset($_POST['login']))
{
	extract($_POST);
	$q=mysql_query("select * from register");
	
	while($r=mysql_fetch_array($q))
	{
		
		if($uname==$r['email'] && $pass==$r['pass'])
		{
		
		$_SESSION["id"]=$r['id'];
		$_SESSION["email"]=$r['email'];
		$f=1;
		
		
		}
		
			

	}
	if($f==1)
		{
			header("location:a.php");
		}
		else
		{
			echo"<script>alert('EMAIL OR PASSWORD WRONG');location.href='login.php';</script>";
		}
}
	
		
?>

<title>
</title>
</head>
<body>
<div class="">
<?php include("header.php");?>
<?php include("menu.php");?>
<br>
<div class="content">
<div class="row">
<div class="col-md-3">
</div>
<div class="col-md-6">

<div class="panel panel-success">
            <div class="panel-heading" >
			<body id="index">
			<h3 class="panel-title"><font color=black ><center>USER DETAILS</center></font></h3>
            </div>
            <div class="panel-body" >
<form method="post">

<table align=center border=0  width=100% height=100%>

<tr><td>
	<br><br><br>

<center><font size=4 >USERNAME:</font>&nbsp;&nbsp;&nbsp;
<input type="email" name="uname" placeholder="Email" required><br><br><br>

<font size=4 color="black">PASSWORD:</font>&nbsp;&nbsp;
<input type="PASSWORD" name="pass" placeholder="Password" required><br><br>
<br><br><br><br><br>
<center><input type="submit" class="btn btn-success btn-lg" value=" LOGIN " name="login"></center><br>

     
	<input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" /> 

			<label for="loginkeeping"><font size=3 color=green >KEEP ME LOGGED IN.</font></label>
	


<br><br>

<a href="register.php" align="right"><font color=red size=4>NEW USER</font></a></td></center>
</tr>

</table>
</form>
</div>
</div>
</div>
      </div>
          </div>
<a href="a.php" class="fancybox fancybox.iframe"></a>
<?php include("footer.php");?>
</div>
</body>
</html>
<style>

table{
	border-color: black;background-image: url("");background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
	
    width: 100%;
    height: 70%;
}
input
{
border-radius: 5px 5px 5px 5px;
}
body
{
background-color:#D4E6F1;
}

</style>


