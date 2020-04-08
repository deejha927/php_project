<?php

$link = mysqli_connect("localhost", "root", "", "home");
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$name=$_POST['name'];
$price=$_POST['price'];
$bprice=$_POST['bprice'];
$txtarea=$_POST['txtarea'];
$stock=$_POST['stock'];
$cat=$_POST['country'];
//$pimage=$_POST['pimage'];
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["btnsave"])) 
{
    if($bprice > $price)
   {?>
    <script>alert("Buying Price Should Be less Than Selling price");
     location.href='AddProduct.php';</script>
    
     <?php
    }
    else if(!is_numeric($stock) || $stock < 0)
   {?>
    <script>alert("Stock Must be Number and Greater than 0");
     location.href='AddProduct.php';</script>
    
     <?php
    }
    else
        {      
            $qry="insert into addproduct(pname,pprize,buy_price,pdetail,pimage,categoryid,in_stock,total_product_bought)values('$name','$price','$bprice','$txtarea','$target_file','$cat','$stock','$stock')";	

            if(mysqli_query($link, $qry))
            {?>
                <script>alert("Record Inserted");
                 location.href='AddProduct.php';</script>
                
                 <?php
                }
            else
            {
                echo "ERROR: Could not able to execute . " . mysqli_error($link);
            }
        }
} 
            // Close connection
            mysqli_close($link);
            ?>

