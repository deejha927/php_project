 
 <?php
 error_reporting(null);
 ?>
 <div class="row">
 
             



<?php include("head.php");?>
<?php include("leftcol.php");?>
<?php include("config.php");?>
<?php

$qry=mysql_query("select * from contact");
while($r=mysql_fetch_array($qry))
{
extract($r);
?>
<div class="col-md-6">
 <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">Feedback</h3>
            </div>
            <div class="panel-body">
			<table>
<Tr>
<Td>
Name: &nbsp;&nbsp;
</Td>
<td>
<?=$r["cname"]?>
</td>
</Tr>
<tr>
<td>
Email: &nbsp;&nbsp;
</td>
<td>
<?=$r["cmail"]?>
</td>
</tr>
<tr>
<td>
Massage: &nbsp;&nbsp;
</td>
<td>
<?=$r["cmsg"]?>
</td>
</tr>
</table>
</div>
          </div>

</div>

<?php
}

?>
</div>

            

