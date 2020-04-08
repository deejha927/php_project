<?php
require_once("dbcontroller.php");
$db_handle = new DBController();
$query ="SELECT * FROM country";
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
<?php
if(isset($_POST['btnsave']))
{
	extract($_POST);
	mysql_query("insert into merge(cid,sid)values('$country','$state')");
}
?>
<form method="post">
<div class="frmDronpDown">
<div class="row">
<label>Country:</label><br/>
<select name="country" id="country-list" class="demoInputBox" onChange="getState(this.value);">
<option value="">Select Country</option>
<?php
foreach($results as $country) {
?>
<option value="<?php echo $country["id"]; ?>"><?php echo $country["name"]; ?></option>
<?php
}
?>
</select>
</div>
<div class="row">
<label>State:</label><br/>
<select name="state" id="state-list" class="demoInputBox">
<option value="">Select State</option>
</select>
</div>
</div>
<input type="submit" name="btnsave">
</form>

