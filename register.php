<html>
<head>
<?php include("config.php")?>
<?php include("head.php");?>
<!DOCTYPE html>
  <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
        <title>JQuery Validation Engine</title>
        <script type='text/javascript'>
function notEmpty(elem, helperMsg){
	if(elem.value.length == 0){
		alert(helperMsg);
		elem.focus();
		return false;
	}
	return true;
}
</script>
        <link rel="stylesheet" href="css/validationEngine.jquery.css" type="text/css"/>
        <link rel="stylesheet" href="css/template.css" type="text/css"/>
        <script src="js/jquery-1.6.min.js" type="text/javascript">
        </script>
        <script src="js/languages/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8">
        </script>
        <script src="js/jquery.validationEngine.js" type="text/javascript" charset="utf-8">
        </script>
        <script>
            jQuery(document).ready(function(){
                // binds form submission and fields to the validation engine
                jQuery("#formID").validationEngine();
            });
            
            /**
             *
             * @param {jqObject} the field where the validation applies
             * @param {Array[String]} validation rules for this field
             * @param {int} rule index
             * @param {Map} form options
             * @return an error string if validation failed
             */
            function checkHELLO(field, rules, i, options){
                if (field.val() != "HELLO") {
                    // this allows to use i18 for the error msgs
                    return options.allrules.validate2fields.alertText;
                }
            }
        </script>


<?php
error_reporting(null);

if(isset($_POST["save"]))
{

extract($_POST);
$res=mysql_query("insert into register(name,email,pass,contact,address) values ('$name','$email','$pass','$contact','$address')");
if($res==1)
{
?>

<script>alert("Registration Sucessfully!!!!!");</script>

<?php
}
header("location:login.php");
}
?>


<title>
</title>
</head>
<body>
<div class="">
<?php include("header.php");?>
<?php include("menu.php");?>
<div class="content">
<div class="row">
<div class="col-md-3">
</div>

<div class="col-md-6">

<div class="panel panel-info">
            <div class="panel-heading">
			<body id="index">
			<h4 class="panel-title"><center>REGISTRATION</center></h4>
            </div>
 <div class="panel-body" >
           
<table height=100% width=100% border=0>
<form id="formID" class="formular" method="post" action="">

<Tr>
<td>
&nbsp;NAME:<br>
</td>

<td>
<input class="formular"  type="text" name="name"  >
</td>
</Tr>
<Tr>
<td>
&nbsp;EMAIL:<br>
</td>

<td>
<input type="email" class="validate[required,custom[email]] text-input"  name="email" id="url" required>

</td>
</Tr>
<Tr>
<td>
&nbsp;PASSWORD:<br>
</td>

<td>
<input value="" class="validate[required,minSize[8]] text-input" type="password" name="pass" id="password" required>
</td>
</Tr>
<tr>
<td>
&nbsp;REENTER PASSWORD:<br>
</td>

<td>
<input value="" class="validate[required,equals[password]] text-input" type="password" name="password2" id="password2" required>
</td>
</tr>
<Tr>
<td>
&nbsp;PHONE NO:<br>
</td>

<td>
<input  class="validate[required,minSize[10],maxSize[12]] text-input" name="contact" id="minsize" required>
</td>
</Tr>
<TR>
<Td>
&nbsp;ADDRESS:<br>
</Td>

<td>
<textarea tabindex="5" class="formular" name="address" required></textarea>


</td>
</TR>
<td margin-left="100">

<input type="submit" class="btn btn-success" value="SUBMIT" name="save">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="reset" class="btn btn-primary" value="RESET" name="submit">


</td>


</form>
</table>
</div>

      
</div>
</div>
      </div>
          </div>

<?php include("footer.php");?>
</div>
</body>
</html>
<style>
#index h4
{
color:#000000;
}
table{
	border-color: black;background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    color:#ffffff;
    width: 100%;
    height: 70%;
}
body
{
background-color:#D4E6F1;
}
input
{
border-radius: 2px;

}
td
{
	font-size: 15;
  color:black;
}
</style>
