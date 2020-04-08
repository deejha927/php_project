<html>
<head>
<?php include("config.php");?>
<?php include("head.php");?>
<?php include("admin/fancy.php");
error_reporting(0);
?>
<title>
</title>
</head>
<body>
<div class="">
<?php include("header.php");?>
<?php include("menu.php");?>

<div class="row">
<form method="post" style="margin-right:50px;float:right;">
<div class="dropdown">
  <button type="button" class="dropdown-toggle" data-toggle="dropdown">SORT</button>
  <input type="Submit" class="btn btn-primary btn-sm" name="sub" value="OK">

  <div class="dropdown-menu">
  <input type="radio" name="radio" value="asc">LOW TO HIGH
  <br>
  <input type="radio" name="radio" value="desc">HIGH TO LOW
   </div>
</div> 


</form>
  </div>
  <br>
  


<?php
if(isset($_POST["sub"]))
{
if(isset($_POST["radio"]))
	{
		extract($_POST);
		$qry=mysql_query("select * from addproduct where categoryid=8 order by pprize ".$_POST["radio"]);
		if($qry === FALSE) { 
			die(mysql_error()); // TODO: better error handling
		}
		while($r=mysql_fetch_array($qry))
		{
			extract($r);
			?>
			<div class="col-md-4">
				<div class="panel" >
					<div class="panel-heading" >
						<h3 class="panel-title" ><center><?=$pname?></center></h3>
					</div>
						<div class="panel-body">
								<table>
								<tr>
								</tr>
								<tr>
								<td>
								<img src="<?=$r['pimage']?>" height="300px" width="100%" ><br><br>
								</td>
								</tr>
								<tr>
								<td>
								<font size="4">
								Price:
								<?=$r["pprize"]?>
								₹</font>
								</td>
								</tr>
								<tr>
								<td>
								<?php 
									if($r["in_stock"] >0)
								{
									?>
								<a class="fancybox fancybox.iframe" href="view.php?id=<?=$r["productid"]?>"><input type="submit" class="btn btn-primary btn-sm" value="SELECT" /></a>
								<?php
								}
								else
								{
									echo"<button type='button' class='btn btn-primary disabled'>SELECT</button>";
								}
								?>
							</td>

							<td>
							<?php 
							if($r["in_stock"] >0)
							{
								echo"<h5><font color='green'>".$r["in_stock"]." AVAILABLE</font></h5>";
							}
						else
						{
							echo"<h5><font color='red'>OUT OF STOCK</font></h5>";
						}
								
							?>
							</td>
							</tR>
							</table>
					</div>
				</div>
		</div>

		<?php
		}
	}
}
else
{
			$qry=mysql_query("select * from addproduct where categoryid=8");
		if($qry === FALSE) { 
			die(mysql_error()); // TODO: better error handling
		}
		while($r=mysql_fetch_array($qry))
		{
			extract($r);
			?>
			<div class="col-md-4">
				<div class="panel" >
					<div class="panel-heading" >
						<h3 class="panel-title" ><center><?=$pname?></center></h3>
					</div>
					<div class="panel-body">
								<table>
									<tr>
									</tr>
									<tr>
									<td>
									<img src="<?=$r['pimage']?>" height="300px" width="100%" ><br><br>
									</td>
									</tr>
									<tr>
									<td>
									<font size="4">
									Price:
									<?=$r["pprize"]?>
									₹</font>
									</td>
									</tr>
									<tr>
									<td>
								<?php 
									if($r["in_stock"] >0)
								{
									?>
								<a class="fancybox fancybox.iframe" href="view.php?id=<?=$r["productid"]?>"><input type="submit" class="btn btn-primary btn-sm" value="SELECT" /></a>
								<?php
								}
								else
								{
									echo"<button type='button' class='btn btn-primary disabled'>SELECT</button>";
								}
								?>
							</td>

									<td>
									<?php 
									if($r["in_stock"] >0)
									{
										echo"<h5><font color='green'>  ".$r["in_stock"]." AVAILABLE</font></h5>";
									}
								else
								{
									echo"<h5><font color='red'>OUT OF STOCK</font></h5>";
								}
										
									?>
									</td>
									</tR>
								</table>
						</div>
				</div>

			</div>

		<?php
		}
}
?>


<div class="col-md-12">
<?php include("footer.php");?>
</div>
    <style>
input
{
	border-radius: 5px 5px 5px 5px;	
}
body
{
background-color:#D4E6F1;
}

</style>
</input>
</body>

</html>

