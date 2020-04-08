<?php
session_start();
 include("config.php");
 error_reporting(0);
 $cnt=0;
?>
<div class="">
<?php
 include("head.php");

 include("menu.php");
?>

<?php
if(isset($_SESSION["email"]))
{
 $qry=mysql_query("select * from wishlist where email='".$_SESSION["email"]."'");
 while($r=mysql_fetch_array($qry))
 {
	 extract($r);
	 ?>
     
     <?php
 }
}else
	{
echo"<script>alert('Please Login to continue.........');window.location='login.php';</script>";   
    }
?>
	
<?php



$qry=mysql_query("select * from wishlist,addproduct where addproduct.productid=wishlist.productid and email='".$_SESSION["email"]."'");
while($r=mysql_fetch_array($qry))
{
	extract($r);
	$i=$r["wish_id"];
	?>
<div class="container" >
<div class="row" >
<div class="col-md-4">

<div class="panel panel-primary" id="margin" >
            <div class="panel-heading" >
			<body id="index">
			<h4 class="panel-title"><center><?=$pname?></center></h4>
            </div>
            <div class="panel-body" align="center" >
<form method="post">
	<table align="left" >
	<tr>
	<td>
	<img src="<?=$r["img"];?>" height="100px" width="100px" name="img"/><br /><br />
	</td>
	</tr>
	<tr>
	<td>
	ProductNo:
	</td>
	
	<td>
	<?=$q=$productid?>
	</td>
	</tr>
	<tr>
	<td>
	Name:
	</td>
	<td>
    <?=$pname?>
    </Td>
	</tr>
	<tr>
    <td>
	Price:
	</td>
	<td>
	<?=$pprize."₹"?>
	</td>
	</tr>
	<tr><td>
    <br>
	<input type="submit" value="REMOVE FROM WISHLIST" class="btn btn-danger btn-xs" name="delete"  align="center"/>
</td></tr>
	</table>
	</div>
	</div>
	</div>
	</div>
	</div>
	

	<?php
    $cnt=$cnt+1;
}
if($cnt==0)
{
    ?>
     <div class="container-fluid">
  <img src="uploads/e5.gif"  style="height:70%;width:100%;">
  <div class="centered"><h1>YOUR WISHLIST IS EMPTY</h1></div>
</div> 
<?php
}
	?>
	
		
	
	<?php
	if(isset($_POST['delete']))
	{
	extract($_POST);

	$qry=0;
	$qry=mysql_query("delete from wishlist where wish_id='$i' and  productid='$q' and email='".$_SESSION["email"]."'");
	$qry=1;
	if($qry==1)
	{
		echo"<script>alert('ITEM DELETED FROM CART');location.href='wishlist.php';</script>";
		
	}
	}
	?>
	
	

	<br>
	<div>
		<?php 
	include("footer.php");
	?>
	</div>
	</body>
	</div>
<style>
body
{
background-color:#D4E6F1;
}
.centered {
  position: absolute;
  top: 20%;
  left: 50%;
  transform: translate(-50%, -50%);
}
#bannerImage{
    padding-top:100px;
    padding-left:100px;
    padding-bottom:100px;
    margin-bottom: 100px;
   
    
 
}

</style>