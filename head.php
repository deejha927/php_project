
<?php
/*
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
		header("location:a.php");
		}
	}
}
?>
<?php
@session_start();
$con = mysqli_connect('localhost','root','','home');
if(isset($_SESSION['id']))
{
	$user_id = $_SESSION['id'];
	$query_bring =mysqli_query($con,"select * from register where `id`='$user_id'");
	while($row=mysqli_fetch_assoc($query_bring))
	{
		$user_name = $row['name'];
	}
	echo "Welcome ".$user_name;
}*/
?>
 <link href="boot/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="boot/dist/css/bootstrap-theme.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="theme.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="boot/assets/js/ie-emulation-modes-warning.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="boot/assets/js/ie10-viewport-bug-workaround.js"></script>
	<script src="boot/dist/myjs.js"></script>
    <script src="boot/dist/js/bootstrap.min.js"></script>
    <script src="boot/assets/js/docs.min.js"></script>
	<style>
	.wrapper
	{
	margin-left:10%;
	margin-right:10%;
	}
	body
	{
	background-image:url("bak.jpg");
	
	}
	
	</style>
