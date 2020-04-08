<?php
mysql_connect("localhost","root","");
mysql_select_db("rest");
include("config.php");
include("head.php");
include("leftcol.php");
?>
<div id="printablediv" >
<table>
<script language="javascript" type="text/javascript">
        function printDiv(divID) {
            //Get the HTML of div
            var divElements = document.getElementById(divID).innerHTML;
            //Get the HTML of whole page
            var oldPage = document.body.innerHTML;

            //Reset the page's HTML with div's HTML only
            document.body.innerHTML = 
              "<body>" + 
              divElements + "</body>";

            //Print Page
            window.print();

            //Restore orignal HTML
            document.body.innerHTML = oldPage;

          
        }
    </script>
<?php 
?>
<form method="post">
<table class="table table-bordered" border="1" style="color:#000000">
<tr>
<td>
Productid
</td>
<td>
Name
</td>
<td>
price
</td>
<td>
Detail
</td>
<td>
Image
</td>
</tr>
<?php
$q=mysql_query("select * from addproduct");

?>

<?php
while($r=mysql_fetch_array($q))
{
	extract($r);
	?>
    

<tr><td><?=$r["productid"]?></td>
<td><?=$r["pname"]?></td>
<td><?=$r["pprize"]?></td>
<td><?=$r["pdetail"]?></td>
<td><?=$r["pimage"]?></td>
</tr>


    <?php
}

?>


</table>
</div>
<input type="button" value="Print" style="color:#000000" class="btn btn-success" onClick="javascript:printDiv('printablediv')" />
