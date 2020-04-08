<html>
<head>
<?php 
session_start();
include("config.php");
include("head.php");?>
<title>
</title>
</head>
<body>
<div class="">
<?php include("header.php");?>
<?php include("menu.php");?>



<div class="container">
<div class="row">

<div class="">
<div class="col-sm-7">

<div class="panel panel" id="pan">
            <div class="panel-heading" id="pan1">
			<body id="index">
			<font size=6 class="panel-title"><center>ADDRESS</center></font>
            </div>
            <div class="panel-body" >
			<form method="post" id="contact" action="insert.php">
			<table class="table-condensed" >
			<tr>
			<td>
			EMAIL:
			</td>
			<td>
			<input type="email" name="email" class="form-control" required />
			</td>
			</tr>
			<br>
			<tr>
			<td>
			NAME:
			</td>
			<td>
			<input type="text" name="name" class="form-control" required />
			</td>
			</tr>
			<tr>
			<td>
			PHONE NO:
			</td>
			<td>
			<input type="text" name="phone" maxlength="10" title=" enter 10 digit phone number"class="form-control" required />
			</td>
			</tr>
			<tr>
			<td>
			ADDRESS:
			</td>
			<td>
			<input type="text" name="add" class="form-control" required/>
			</td>
			</tr>
			</table>
			<br>
			<table class="table-condensed">
			<tr>
			<td>
			 <div class="alert alert-warning" role="alert">
        <strong>Note!</strong> Please Enter Address within 20km from our Shop.
      </div></td>
     </tr>
			<tr>
			<td>
			<center><input type="submit" name="ok" value="ORDER" class="btn"/><center>
			</td>
			</tr>
			</form>
			</table>
			
</div>
</div>
</div>
</div>



</div>
</div>
</body>
<br>
<?php include("footer.php");?>
</div>
<style>
input
{
	border-radius: 10px 10px 10px 10px;
}
input[type=email]:hover {
  background-color: #EFFBF2 ;
}
input[type=text]:hover {
  background-color: #EFFBF2 ;
}

input[type=submit]:hover{
  background-color: #00FF00 ;
}
#pan
{
	background-color:#44B6F9 ;
}
#pan1
{
	background-color:#44B6F9 ;
} 
input[type=submit]{
  background-color: #90FDFA ;
}
#contact {
border-radius: 4px  4px 4px 4px;
  background: #F9F9F9;
  padding: 25px;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}

</style>
