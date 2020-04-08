<?php
session_start();
include("head.php");
include("config.php");
?>
<div class="">
<?php
include("menu.php");
$img="";
$entry_order_type="";
mysql_connect("localhost","root","");
mysql_select_db("home");
$a=$_GET["id"];
$qry=mysql_query("select * from addproduct where productid='$a'");
	
while($r=mysql_fetch_array($qry))
{
extract($r);
?>
<div class="content" >
<div class="row">
<div class="col-md-3" >
</div>
<div class="col-md-6" >

<div class="panel " >
            <div class="panel-heading" >
			<body id="index">
			<h4 class="panel-title"><center>PRODUCT INFO</center></h4>
            </div>
            <div class="panel-body" align="center" >

                <form method="post">
                <table class="table border=2">
                    <tr>
                    <td>Name:
                    <?=strtoupper($pname)?>
                    </Td>
                    </tr>
                    <tr>
                    <td>
                    <img src="<?=$r["pimage"];?>" height="350px" width="300px" name="img"/><br /><br />
                    </td>
                    </tr>
                    <tr>
                    <td>
                    Details:
                    <?=strtoupper($pdetail)?>
                    </td>
                    </tr>
                    <tr>
                    <td>
                    Price:
                    <?=$r["pprize"]."₹"?>
                    </td>
                    </tr>
                    
                    </table>
                    </form>
                </div>
                </div>
                </div>
                </div>
                </div>
                <?php
                include("footer.php");
}?>