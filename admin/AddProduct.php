
<?php
include("head.php");
include("leftcol.php");
include("config.php");
error_reporting(null);

require_once("dbcontroller.php");
$db_handle = new DBController();
$query ="SELECT * FROM category";
$results = $db_handle->runQuery($query);

?>

<script src="ajaxdropdown.js" type="text/javascript"></script>
<script>
function getState(val) {
	$.ajax({
	type: "POST",
	url: "get_state.php",
	data:'country_id='+val,
	success: function(data){
		$("#state-list").html(data);
	}
	});
}

function selectCountry(val) {
$("#search-box").val(val);
$("#suggesstion-box").hide();
}
</script>

<div class="content">
<div class="row">
<div class="col-md-6">

<div class="panel panel-info">
            <div class="panel-heading">
			<body id="index">
			<h4 class="panel-title">ADD PRODUCT</h4>
            </div>
            <div class="panel-body">

<form method="post" enctype="multipart/form-data" action="upload.php">
<table class="table-condensed">
<tr>
<div class="frmDronpDown">
<tr>
<td>
<label>Category:</label><br/>
</td>
<td>
<select name="country" id="country-list" class="demoInputBox" onChange="getState(this.value);">
<option value="">Select Category</option>
<?php
foreach($results as $country) {
?>
<option value="<?php echo $country['categoryid']; ?>"
>
<?php echo $country['categoryid']."-";echo $country["cname"]; ?></option>
<?php
}
?>
</select>
</td>
</tr>

<tr>
<td>
Product Name:
</td>
<td>
<input type="text" name="name" required/>
</td>
</tr>
<tr>
<td>
Buying Price:
</td>
<td>
<input type="text" name="bprice" required />
</td>
</tr>
<tr>
<td>
Selling Price:
</td>
<td>
<input type="text" name="price" required />
</td>
</tr>
<tr>
<td>
Product Detail:
</td>
<td>
<textarea name="txtarea"></textarea>
</td>
</tr>
<tr>
<td>
Product Image:
</td>
<td>

<input type="file" name="fileToUpload" id="fileToUpload" />
</td>
</tr>
<tr>
<td>
In Stock
</td>
<td>
<input type="number" name="stock">
</td>

</tr>
<tr>
<td>
</td>

<td>
<input type="submit" name="btnsave" class="btn btn-success" value="Add">
</td>
</tr>
</div>
</table>
</form>
</div>
</div>
</div>

<
</div>
<style>
#del1{
	margin-left:88px;
}
</style>
