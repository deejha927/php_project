<?php
include("head.php");
include("leftcol.php");
include("config.php");
error_reporting(null);
if($_GET['subcategoryid'])
{
$qry=mysql_query( "select * from subcategory where subcategoryid=".$_GET['subcategoryid']);
if(mysql_num_rows($qry)==1)
{
$row=mysql_fetch_array($qry);

extract($row);
}

}

?>
<html>
<div class="content">
<div class="row">
<div class="col-md-6">

<div class="panel panel-default">
            <div class="panel-heading">
			<body id="index">
			<h4 class="panel-title">Add SubCategory</h4>
            </div>
            <div class="panel-body">
<form method="post">


<table class="table-condensed">

<tr>
<td>
Add SubCategory Name:
</td>
<td>
<input type="text" name="txtname" value="<?=$sname?>"/>
</td>
</tr>
<tr>
<td>
Category Name:
</td>
<td>
<select name="c">
<?php
$i=1;
$qry=mysql_query("select * from category");
while($b=mysql_fetch_array($qry))
{
	echo "<option value=".$b['cname'].">".$b['cname']."</option>";
	$i=$i+1;
}
?>

</select></td> 
</tr><tr>
<td>
<input type="submit" name='sub' value="Add" class="btn btn-success">
<input type="submit" name='del' value="Delete" class="btn btn-danger">
</td>
</tr>
</table>
</form>
</html>



<?php
$a=$_POST['c'];
$c=$_POST['txtname'];
if(isset($_POST['sub']))
{
	
	$qe=mysql_query("select * from category where cname='$a'") or die(mysql_error());
	while($r=mysql_fetch_array($qe))
	{	
		$v=$r['categoryid'];
	} 
	
	
	mysql_query("insert into subcategory(sname, categoryid) values('$c', '$v')") or die(mysql_error());
	
}
else if(isset($_POST['del']))
{
extract($_POST);
$qry=mysql_query("delete from subcategory where subcategoryid=".$_GET['subcategoryid']);
if($qry==1)
{
?>
<script>alert("Records Deleted Sucessfully");</script>

<?php
}
}

?>
<table class="table table-bordered" border="1" style="color:#000000">
<Tr>
<td>
Subcategoryid
</td>
<td>
Subcategory name
</td>
<td>
Categoryid
</td>
</Tr>
<?php
$qry=mysql_query("select * from subcategory");
while($row=mysql_fetch_array($qry))
{
?>
<tr>
<td><?=$row["subcategoryid"]?></td>
<td><?=$row["sname"]?></td>
<td><?=$row["categoryid"]?></td>
<td><a href="addsubcategory.php?subcategoryid=<?=$row["subcategoryid"]?>">select</a></td>
</tr>
<?php
}
?>
