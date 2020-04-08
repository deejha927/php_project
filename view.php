<?php
session_start();
include("head.php");
include("config.php");
?>
<div class="">
<?php
$d= date('Y/m/d');
include("menu.php");
$img="";
$entry_order_type="";
mysql_connect("localhost","root","");
mysql_select_db("home");
$a=$_GET["id"];
if(isset($_POST['add']))
{
	$entry_order_type = $_POST['size'];
}


if(isset($_SESSION["email"]))
{
if(isset($_POST["add"]))
{

extract($_POST);
$q="insert into addtocart(email,productid,img,size)values('".$_SESSION["email"]."','$a','$img','$entry_order_type')";
mysql_query($q);
echo"<script>alert('ADD TO CART');location.href='viewcart.php';</script>";	
?>

<?php
}
else if(isset($_POST["wishlist"]))
{
	extract($_POST);
		$q="insert into wishlist(email,productid,img)values('".$_SESSION["email"]."','$a','$img')";
		mysql_query($q);
		echo"<script>alert('ADD TO WISHLIST');location.href='wishlist.php';</script>";
}
$qry=mysql_query("select * from addproduct where productid='$a'");
	
while($r=mysql_fetch_array($qry))
{
extract($r);


if(isset($_POST['add']))
{	
$name=$r["pname"];
$price=$r["pprize"];
$stock=$r['in_stock']-1;
$qry2="UPDATE addproduct SET in_stock='$stock' where productid='$a'";
mysql_query($qry2);
$img1=$r["pimage"];
$qry1="UPDATE addtocart SET img='$img1' where productid='$a'";
mysql_query($qry1);
$qry3="insert into purchase(email,pname,price,date)values('".$_SESSION["email"]."','$name','$price','$d')";
mysql_query($qry3);
}
if(isset($_POST["wishlist"]))
{
	
	$qry1="UPDATE wishlist SET img='$img1' where productid='$a'";
	mysql_query($qry1);
}
?>

<div class="content" >
<div class="row">
<div class="col-md-3" >
</div>
<div class="col-md-6" >

<div class="panel " >
            <div class="panel-heading" >
			<body id="index">
			<h4 class="panel-title"><center>PRODUCT INFO</center></h4>
            </div>
            <div class="panel-body" align="center" >

<form method="post">
<table class="table border=2">
    <tr>
	<td>Name:
    <?=strtoupper($pname)?>
    </Td>
    </tr>
	<tr>
	<td>
	<img src="<?=$r["pimage"];?>" height="350px" width="300px" name="img"/><br /><br />
	</td>
	</tr>
	<tr>
	<?php
	if($r["categoryid"]=="8" || $r["categoryid"]=="6")
	{
		?>
		<td>
	COLOR:
	<select name="size">
  <option value="Red">RED</option>
  <option value="Pink">PINK</option>
  <option value="Orange">ORANGE</option>
  <option value="Blue">BLUE</option>
  <option value="Baby Pink">BABY PINK</option>
	</select> 
    </Td>
	
	<?php
	}
	else
	{
		?>
		<td>
	SIZE CHART:
	<select name="size">
  <option value="Small">SMALL</option>
  <option value="Medium">MEDIUM</option>
  <option value="Large">LARGE</option>
  <option value="Xl(Extra Large)">XL</option>
  <option value="xxl(Extra Extra Large)">XXL</option>
	</select> 
    </Td>
	<?php
	}
	?>
    </tr>
	<tr>
	<td>
	Details:
	<?=strtoupper($pdetail)?>
	</td>
	</tr>
	<tr>
	<td>
	Price:
	<?=$r["pprize"]."₹"?>
	
	</td>
	</tr>
	<tr>
	<td align="center"><input  type="submit" class="btn btn-warning btn-sm" value="ADD TO WISHLIST" name="wishlist"/></a>
								</a><input type="submit" class="btn btn-success btn-sm"  name="add" col-span=2 align="center" value="AddToCart" /></td>
	</tr>

<?php
}
}
else
	{
echo"<script>alert('Please Login to continue.........');window.location='login.php';</script>";   
    }
?>
</table>
</form>
</div>
</div>
</div>
</div>
</div>
</body>
<style>
body
{
background-color:#D4E6F1;
}

</style>

<?php include("footer.php");?>
</div>

