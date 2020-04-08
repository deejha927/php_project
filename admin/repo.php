<html>
<head>
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
</head>
<body>
<?php
include("head.php");
include("leftcol.php");
include("config.php");
error_reporting(null);
$sum=0;
$sum1=0;
?>
<div id="printablediv" >
<table class="table table-bordered" border="1" style="color:#000000">
<Tr>
<td>
Name:
</td>

<td>
SELLING PRICE
</td>
<td>
BUY PRICE
</td>
<td>
QUANTITY AVAILABLE IN STOCK
</td>
<td>
QUANTITY BOUGHT
</td>
<td>
TOTAL COST FOR BUYING
</td>
<td>
SOLD
</td>
<td>
PROFIT AFTER 1 ITEM SOLD
</td>
<td>
CURRENT PROFIT
</td>
</Tr>
<?php
include("fancy.php");
$qry=mysql_query("select * from addproduct");
while($row=mysql_fetch_array($qry))
{
    $buy1=$row["pprize"]-$row["buy_price"];
   $buy=$row["buy_price"]*$row["total_product_bought"];
   $sell=$row["pprize"]*$row["total_product_bought"];
    $sum=$sum+$buy;
    $sold=$row["total_product_bought"]-$row["in_stock"];
    $profit=$sold*$buy1;
    $sum1=$sum1+$profit;


?>
<tr>
<td><?=$row["pname"]?></td>
<td><?=$row["pprize"]?></td>
<td><?=$row["buy_price"]?></td>
<td><?=$row["in_stock"]?></td>
<td><?=$row["total_product_bought"]?></td>
<td><?=$buy?></td>
<td><?=$sold?></td>
<td><?=$buy1?></td>
<td><?=$profit?></td>

</tr>

<?php
}
?>
<tr>
<td>
TOTAL COST FOR BUYING:
</td>
<td>
<?=$sum."₹"?>
</td>
<td>
CURRENT PROFIT:
</td>
<td>
<?=$sum1."₹"?>
</td>
</tr>



</table>
</div>
<input type="button" value="Print" style="color:#000000" class="btn btn-success" onClick="javascript:printDiv('printablediv')" />

</body>
</html>