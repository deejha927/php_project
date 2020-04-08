<html>
<head>
<?php include("head.php");?>
<?php include("config.php");?>
<title>
</title>
</head>
<body>
<div class="">
<?php include("header.php");?>
<?php include("menu.php");?>


		 <div class="abc">
<div class="container">
<body>
<?php
	if(isset($_POST['submit']))
	{
		header("location: index.php");
		
	}
?>
<div id="body">
<div class="row">
<div class="col-xs-3">
</div>

<div class="col-xs-7">

<div class="panel " id="back">
            
            <div class="panel-body">

  <form id="contact" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post"  >
    <font size=5 color="#44B6F9"><center>ShOp Boutique</center></font>
    <h4><center>FEEDBACK FORM</center></h4>
    <fieldset>
    <center><input placeholder="Your name" type="text" tabindex="1" name="name" required autofocus></center>
    </fieldset>
    <fieldset>
    <center><input placeholder="Your Email Address" type="email" name="email" tabindex="2" required></center>
    </fieldset>
    <fieldset>
    <center><input placeholder="Your Phone Number (optional)" type="tel" tabindex="3" ></center>
    </fieldset>
    <fieldset>
    <center><input placeholder="Your Web Site (optional)" type="url" tabindex="4" ></center>
    </fieldset>
    <fieldset>
    <center><textarea placeholder="Type your message here...." tabindex="5" name="msg"required></textarea></center>
    </fieldset>
    <fieldset>
      <center><button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button></center>
    </fieldset>
   
  </form>
</div>
</div>
</div>
</div>
      
          </div>
		  </div></div>
<br>


</div>



<?php include("footer.php");?>
</div>

</body>
</html>
<style>




body {
  font-family: "Roboto", Helvetica, Arial, sans-serif;
  font-weight: 100;
  font-size: 12px;
  line-height: 30px;
  color: #777;
 
}

.container {
 
  width: 95%;
	
  margin: 0 auto;
  position: relative;
}



#contact {
border-radius: 10px  10px 10px 10px;
  background: #F9F9F9;
  padding: 25px;
  
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}




fieldset {

  border: medium none !important;
  margin: 0 0 10px;
  min-width: 100%;
  padding: 0;
  width: 100%;
}

#contact input[type="text"],
#contact input[type="email"],
#contact input[type="tel"],
#contact input[type="url"],
#contact textarea {
  width: 70%;
  border: 1px solid #ccc;
  background: #FFF;
  margin: 0 0 5px;
  padding: 10px;
}


#contact textarea {
  height: 100px;
  max-width: 100%;
  resize: none;

}

#contact button[type="submit"] {
border-radius: 5px  5px 5px 5px;
  cursor: pointer;
  width: 25%;
  border: none;
  background: #81F7F3;
  color: #FFF;
  margin: 0 0 5px;
  padding: 10px;
  font-size: 15px;
}

#contact button[type="submit"]:hover {
  background: #4CAF50;
  -webkit-transition: background 0.1s ease-in-out;
  -moz-transition: background 0.1s ease-in-out;
  transition: background-color 0.1s ease-in-out;
}

#contact button[type="submit"]:active {
  box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.5);
}



#contact input:focus,
#contact textarea:focus {
  outline: 0;
  border: 1px solid #aaa;
}

#placeholder {
  color: #B0E8E4;
}
#back
{
	background-color:#D4E6F1;
	height:130%;
}

#pt
{
	background:;
}
input
{
	border-radius: 5px  5px 5px 5px;
}
body
{
background-color:#D4E6F1;
}
</style>

<style>

</style>

<?php

if(isset($_POST["submit"]))
{

extract($_POST);
$res=mysql_query("insert into contact(cname,cmail,cmsg) values ('$name','$email','$msg')");
if($res==1)
{
?>

<script>alert("Your message send Successfully!!!!!");</script>
<?php
}
}
?>



        
