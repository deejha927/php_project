<?php
include("head.php");
include("leftcol.php");
include("config.php");
error_reporting(null);
?>
<?php
if(isset($_POST['add']))
{
	extract($_POST);
	$qry=mysql_query("insert into category(cname) values('$txtname')");
	if($qry==1)
{
?>

<script>alert("Category Added Successfully.");</script>
<?php
}
}
else if(isset($_POST['del']))
{
	$cat=$_POST['txtname'];
	echo $cat;
	$qry=mysql_query("delete from category where categoryid='$cat'");
	if($qry==1)
{
?>

<script>alert("Category Deleted Succesfully.");</script>
<?php
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
			<h4 class="panel-title">Add Category</h4>
            </div>
            <div class="panel-body">

<form method="post">


<table class="table-condensed">

<tr>
<td>
Add Category Name:
</td>
<td>
<input type="text"  name="txtname" required />
</td>
</tr>
<tr>
<td>
<input type="submit" name="add" value="Add" class="btn btn-success"/>

<input type="submit" name="del" value="Delete" class="btn btn-danger" />
</td>
</tr>
</table>
</form>
</html>
<table class="table table-bordered" border="1" style="color:black;">
<Tr>
<td>
Categoryid
</td>
<td>
Category name
</td>
</Tr>
<?php
$qry=mysql_query("select * from category");
while($row=mysql_fetch_array($qry))
{
?>
<tr>
<td><?=$row["categoryid"]?></td>
<td><?=$row["cname"]?></td>

</tr>
<?php
}
?>