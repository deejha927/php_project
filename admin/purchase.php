<?php
mysql_connect("localhost","root","");
mysql_select_db("rest");
include("config.php");
include("head.php");
include("leftcol.php");
?>
<div>
<h3>Purchase Report According To Dates</h3> <br>
    <form method="post">
    <input type="text" name="start" Placeholder="Start Date(yyyy-mm-dd)"><br><br>
    <input type="text" name="end" Placeholder="End Date(yyyy-mm-dd)"><br>
    <br>
    <input type="submit" class="btn btn-success btn-sm" value="SEARCH" name="find" style="border-radius:5px;">
    </form>
</div>
<?php
if(isset($_POST['find']))
{ 
    $date1=$_POST['start'];
    $date2=$_POST['end'];
    

?>
<div id="printablediv" >
<table class="table table-bordered" border="1" style="color:#000000">
<Tr>
<td>
UserEmail
</td>
<td>
Product Name
</td>
<td>
Product Price
</td>
<td>
Buying Date
</Tr>

<?php
$qry=mysql_query("select email,pname,price,date from purchase where  date >= '$date1' and date <= '$date2'");
while($row=mysql_fetch_array($qry))
    {
        ?>
        <tr>
<td><?=$row["email"]?></td>
<td><?=$row["pname"]?></td>
<td><?=$row["price"]?></td>
<td><?=$row["date"]?></td>

</tr>
<?php
    }
}
?>
</table>
</div>