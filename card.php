
<?php
	
	if(isset($_POST['submit']))	
	{
		header("location:location.php");
	}
?>


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Credit Card Validation Demo</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/styles.css">
    <link rel="stylesheet" type="text/css" href="assets/css/demo.css">
</head>
<div class="row">
<?php
 include("head.php");

 include("menu.php");
?>
</div>
<div class="">
<div class="col-xs-2">
</div>
<div class="col-xs-8">

    <div class="panel panel-info">
        <div class="panel-heading" >
			<body id="index">
			<h4 class="panel-title"><center>CARD INFO</center></h4>
        </div>
           
	<div class="panel-body"  >
		<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
		    <table class="table-condensed" >

                <Tr>
                <td>
                <label>OWNER</label>&nbsp;&nbsp;
            
                <input type="text" required  name="own"  pattern="[a-z]{1,15}" title="ALPHABETS ONLY"required>&nbsp;&nbsp;&nbsp;&nbsp;
                </td>		
                <td>
                <label>CVV</label>&nbsp;&nbsp;&nbsp;
            
                <input type="text" required  name="cvv" size="10" placeholder="CVV" pattern="[0-9]{3}" title="3 DIGIT ONLY" required>
                </td>
                </tr>
                <tr>
                <td>
                <label>CARD NUMBER</label>
            
                <input type="text"  size="35" name="card" pattern="[0-9]{16}" title="16 DIGIT CARD NUMBER" required>
                </td>
                </tr>
                <tr>
                <td>
                <label>EXPIRATION DATE</label>
                &nbsp;&nbsp;&nbsp;&nbsp;
                            <select>
                                <option value="01">January</option>
                                <option value="02">February </option>
                                <option value="03">March</option>
                                <option value="04">April</option>
                                <option value="05">May</option>
                                <option value="06">June</option>
                                <option value="07">July</option>
                                <option value="08">August</option>
                                <option value="09">September</option>
                                <option value="10">October</option>
                                <option value="11">November</option>
                                <option value="12">December</option>
                            </select>
                            <select>
                                <option value="16"> 2016</option>
                                <option value="17"> 2017</option>
                                <option value="18"> 2018</option>
                                <option value="19"> 2019</option>
                                <option value="20"> 2020</option>
                                <option value="21"> 2021</option>
                                <option value="22"> 2022</option>
                                <option value="23"> 2023</option>
                                <option value="24"> 2024</option>
                                <option value="25"> 2025</option>
                                <option value="26"> 2026</option>
                                <option value="27"> 2027</option>
                                <option value="28"> 2028</option>
                                <option value="29"> 2029</option>
                                <option value="30"> 2030</option>
                                <option value="31"> 2031</option>
                            </select>
                    </td>
                    </tr>
                    <br>
                            <tr>
                                <td>
                                    <img src="assets/images/visa.jpg" id="visa">&nbsp;&nbsp;&nbsp;&nbsp;     
                                    <img src="assets/images/mastercard.jpg" id="visa">&nbsp;&nbsp;&nbsp;&nbsp;
                                    <img src="assets/images/amex.jpg" id="visa">
                                </td>
                            </tr>
                            <tr>
                                <br>
                                <td>
                                    <center><input type="submit" class="btn btn-success" name="submit" value="CONFIRM" /><center>
                                </td>
                            <tr>
	        </table>
        </form>
   </div>
</div>
        <H4><center>Here are some dummy credit card numbers and CVV codes .</center></h4>

        <div class="examples">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Type</th>
                            <th>Card Number</th>
                            <th>CVV</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Visa</td>
                            <td>4716108999716531</td>
                            <td>257</td>
                        </tr>
                        <tr>
                            <td>Master Card</td>
                            <td>5281037048916168</td>
                            <td>043</td>
                        </tr>
                        <tr>
                            <td>American Express</td>
                            <td>342498818630298</td>
                            <td>3156</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        
   </div>
   
</div>
<div class="col-xs-12">

<?php include("footer.php"); ?> 
</div>

<style>
input
{
	border-radius: 3px;
}
body
{
background-color:#D4E6F1;
}

</style>





