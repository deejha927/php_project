<?php
session_start();
 include("config.php");
 error_reporting(0);
 $bill=0;
 $cnt=0;
?>
<div class="">
<?php
 include("head.php");

 include("menu.php");
?>
</div>
<?php
if(isset($_SESSION["email"]))
{
 $qry=mysql_query("select * from addtocart where email='".$_SESSION["email"]."'");
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



$qry=mysql_query("select * from addproduct,addtocart where addproduct.productid=addtocart.productid and email='".$_SESSION["email"]."'");
while($r=mysql_fetch_array($qry))
{
	extract($r);
	$i=$id;
	$q=$productid;
	
	if(isset($_POST['delete']))
	{
	extract($_POST);
	$stock=$r['in_stock']+1;
	$qry2="UPDATE addproduct SET in_stock='$stock' where productid='$q'";
	mysql_query($qry2);
	$qry=0;
	
	$qry=mysql_query("delete from addtocart where id='$i' and productid='$q' and email='".$_SESSION["email"]."'");
	$qry=1;
	if($qry==1)
	{
		echo"<script>alert('ITEM DELETED FROM CART');location.href='viewcart.php';</script>";
		
	}
	
	}
	
	?>
<div class="content" >
<div class="row" >
<div class="col-sm-1">
</div>
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
	Name:
	</td>
	<td>
    <?=$pname?>
    </Td>
	</tr>
	<tr>
	<td>
	Size/Color:
	</td>
	<td>
    <?=$size?>
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
	<input type="submit" value="DELETE" class="btn btn-danger" name="delete"  align="center"/>
</td></tr>
	</table>
	</div>
	</div>
	</div>
	</div>
	</div>
	<?php
	$sub=$sub+$pprize;
	$gst=$sub*0.05;
	$tot=$sub+$gst;

	$cnt=$cnt+1;
	}
	?>
	
		<?php
if($cnt==0)
{?>
	<div class="container-fluid">
  <img src="uploads/e4.gif"  style="height:100%;width:100%;border-radius:5px;">
  <div class="centered"><h1>YOUR CART IS EMPTY</h1></div>
  <div id="bottom"><a href="a.php">START SHOPPING</a></div>
</div> 
<?php
}
else
{
?>
<div class="content" >
<div class="row">
<div class="col-sm-1" >
</div>
<div class="col-md-4" >

<div class="panel panel-Primary" >
            <div class="panel-heading" >
			<body id="index">
			<h4 class="panel-title"><center>TOTAL</center></h4>
            </div>
            <div class="panel-body" align="center" >
<table>
<tr>
<td>
SubTotal:
</td>
<td>
<?php echo"$sub"."₹";?>
	</tr>
	<tr>
<td>
GST:
</td>
<td>
<?php echo"$gst(5%)"."₹";?>
	</tr>
	<tr>
<td>
Total:
</td>
<td>
<?php echo"$tot"."₹";?>
	</tr>

	</table>
	</div>
	</div>
	</div>
	</div>
	</div>
	
	</div>
	<div>
		<table align="center">
<tr><td>
<center><a href="card.php" ><font color="black" size="5">CARD PAYMENT</font></a><br><br>
<a href="location.php" ><font color="black" size="5">CASH ON DELIVERY</font></a></center>
</td>
</tr>
	</table>

	</div>
<?php 
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
  top: 107%;
  left: 50%;
  transform: translate(-50%, -50%);
}
#bottom
{
	position: absolute;
  top: 100%;
  left: 50%;
  transform: translate(-50%, -50%);
}

</style>