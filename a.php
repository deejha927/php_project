<html>
<head>
<?php include("config.php");?>
<?php include("head.php");?>
<?php include("admin/fancy.php");
error_reporting(0);
?>
<title>
</title>
</head>
<body>
<div class="">
<?php include("header.php");?>
<?php include("menu.php");?>

<?php

$qry=mysql_query("select * from addproduct");
if($qry === FALSE) { 
    die(mysql_error()); // TODO: better error handling
}
while($r=mysql_fetch_array($qry))
{
	extract($r);
	?>
	<div class="col-sm-4">
 <div class="panel">
            <div class="panel-heading">
              <h3 class="panel-title"><center><?=$pname?></center></h3>
            </div>
            <div class="panel-body">
	<table>
    <tr>
    </tr>
	<tr>
	<td>
	<img src="<?=$r['pimage']?>" height="220px" width="100%" ><br /><br />
	</td>
	</tr>
	<tr>
	<td>
	<font size="4">
	Price:
	<?=$r["pprize"] ?>
	₹
	</font>
	</td>
	</tr>
	<tr>
	<td>
	<?php 
		if($r["in_stock"] >0)
	{
		?>
	<a class="fancybox fancybox.iframe" href="view.php?id=<?=$r["productid"]?>"><input type="submit" class="btn btn-primary btn-sm" value="SELECT" /></a>
	<?php
	}
	else
	{
		echo"<button type='button' class='btn btn-primary disabled'>SELECT</button>";
	}
	?>
</td>
<td>
<?php 
if($r["in_stock"] >0)
	{
		echo"<h5><font color='green'>".$r["in_stock"]." AVAILABLE</font></h5>";
	}
else
{
	echo"<h5><font color='red'>OUT OF STOCK</font></h5>";
}
	
?>
</td>
</tR>
</table>
	</div>
          </div>
		  
</div>

<?php
}?>
<div class="col-md-12">
<?php include("footer.php");?>
</div>
    <style>
input{
	border-radius: 5px 5px 5px 5px;
	
	}
	body{
		background-color:#D4E6F1;	
	}</style>

</body>

</html>

