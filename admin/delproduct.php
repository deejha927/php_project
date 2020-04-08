<html>
<head>
</head>
<body>
<?php
include("head.php");
include("leftcol.php");
include("config.php");
error_reporting(null);
?>
<table class="table table-bordered" border="1" style="color:#000000">
<Tr>
<td>
Name:
</td>
<td>
image:
</td>
<td>
price:
</td>
<td>
Detail
</td>
</Tr>
<?php
include("fancy.php");
$qry=mysql_query("select * from addproduct");
while($row=mysql_fetch_array($qry))
{
?>
<tr>
<td><?=$row["pname"]?></td>
<td><?=$row["pimage"]?></td>
<td><?=$row["pprize"]?></td>
<td><?=$row["pdetail"]?></td>
<td><a class="fancybox fancybox.iframe" href="del.php?id=<?=$row["productid"]?>">select</a></td>
</tr>

<?php
}
if($_GET['id'])
{
$qry=mysql_query( "select * from addproduct where productid=".$_GET['productid']);
if($r=mysql_fetch_array($qry))
{
extract($r);
}

}
else if(isset($_POST['btndelete']))
{
extract($_POST);
$qry=mysql_query("delete from addproduct where productid=".$_GET['productid']);
if($qry==1)
{
?>
<script>alert("Records Inserted Sucessfully");</script>

<?php
}

}
?>


</table>
<table>
<form action="post">
<tr>
<td>
</td>
</tr></form>
</table>
</body>
</html>