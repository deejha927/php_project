<?php
require_once("dbcontroller.php");
$db_handle = new DBController();
if(!empty($_POST["country_id"])) {
	$query ="SELECT * FROM subcategory WHERE categoryid = '" . $_POST["country_id"] . "'";
	$results = $db_handle->runQuery($query);
?>
	<option value="">Select Subcategory</option>
<?php
	foreach($results as $state) {
?>
	<option value="<?php echo $state["subcategoryid"]; ?>"><?php echo $state["sname"]; ?></option>
<?php
	}
}
?>