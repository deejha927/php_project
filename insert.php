

<?php
session_start();
$email=$_POST['email'];
$name=$_POST['name'];
$phone=$_POST['phone'];
$add=$_POST['add'];
$res=0;
mysql_connect("localhost","root","");
mysql_select_db("home");

$d= date('Y/m/d');

$qry="delete from addtocart where email='".$_SESSION["email"]."'";
	mysql_query($qry);
	$qry=1;
	


$res="insert into location(email,address,name,phone,date) values ('$email','$add','$name','$phone','$d')";
mysql_query($res);
	$res=1;
	if($res==1 && $qry==1)
{
	echo"<script>alert('your order has been placed succesfully');window.location='bill.php';</script>";
	

}


?>