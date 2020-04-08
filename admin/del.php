<?php
include("head.php");
include("fancy.php");
include("config.php");
error_reporting(null);
if($_GET['id'])
{
$qry=mysql_query( "select * from addproduct where productid=".$_GET['id']);
while($r=mysql_fetch_array($qry))
{
?>

<form method="post">
<table>

<tr>
<td>
Image:
</td>
<td>
<img src="<?php echo $r['pimage']; ?>" height="120" width="120">
</td>
</tr>
<tr>
<td>
Name: 
</td>
<td>
<input type='text' value='<?php echo $r['pname']; ?>' name="txtname">
</td>
</tr>
<tr>
<td>
Price:
</td>
<td> 
<input type='text' value='<?php echo $r['pprize']; ?>' name="txtp">
</td>
</tr>
<tr>
<td>
Detail: 
</td>
<td>
<input type='text' value='<?php echo $r['pdetail'];  ?>' name="txtd">
</td>
</tr>

<tr>
<td>
<input type="submit" name="btndelete" value="delete" class="btn btn-danger" />
<input type="submit" name="btnupdate" value="update" class="btn btn-warning" />
</td>
</tr>
<?php

}
}
if(isset($_POST['btndelete']))
{
extract($_POST);
$qry=mysql_query("delete from addproduct where productid=".$_GET['id']);
if($qry==1)
{
?>
<script>parent.jQuery.fancybox.close();</script>

<?php
}
}
else if(isset($_POST['btnupdate']))
{
extract($_POST);
$qry=mysql_query("update addproduct set pname='$txtname',pprize='$txtp',pdetail='$txtd' where productid=".$_GET['id']);
if($qry==1)
{
?>
<script>parent.jQuery.fancybox.close();</script>

<?php
}
}
?>


</html>