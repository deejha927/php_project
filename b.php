
<?php include("head.php");?>
<?php include("config.php");
session_start();?>

<div class="">

<?php
if(isset($_GET['str']))
{

mysql_connect("localhost","root","");
mysql_select_db("rest");
$a=$_GET['str'];
if($a=="")
{

}
else
{
$q=mysql_query("select * from addproduct where pname like '$a%'");
if(isset($q))
{
	while($r=mysql_fetch_array($q))
	{
		extract($r);
		if(isset($_SESSION['email']))
		{?>
		<a class="fancybox fancybox.iframe" href="view.php?id=<?=$r["productid"]?>">
			<font style="position:relative;left:30;color:black;"><li ><?=$pname?>
			</li></font>
		</a>
		<?php
		}
		else
		{?>
		<a class="fancybox fancybox.iframe" href="view1.php?id=<?=$r["productid"]?>">
		<font style="position:relative;left:30;color:black;"><li style="postion:absolute;left:20;"><?=$pname?>
			</li></font>
		</a>
		<?php
		}
		?>
    <?php
	}
} 


}
}
?>

       



