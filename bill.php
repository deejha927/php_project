
<?php
if(isset($_POST['sure']))
{
	header("location:a.php");
}
?><?php

 include("config.php");
 $bill=0;
?>
<div class="">
<?php
 include("head.php");

 include("menu.php");
?>
</div>
<div class="container-fluid">
<div class="page-header">
        <h2>THANKS FOR ORDERING FROM FABULOUS FOREVER</h2>
      </div>
      <div class="alert alert-success" role="alert">
        <strong><font size=5>THANK YOU!</font></strong> You will recieve your order soon. <br>
	WANT TO GIVE US FEEDBACK <a href="contact.php">CLICK HERE</a>  </div>
	 
<center><form method="post">
<input type="submit"  class="btn btn-warning btn-lg" value="CONTINUE SHOPPING" name="sure" ></form></center>
<br>
</div>
<div>
<?php include("footer.php");?>
</div>