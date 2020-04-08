<html>
<head>
<?php
@session_start();
$con = mysqli_connect('localhost','root','','home');
$msg="";
if(isset($_SESSION['id']))
{
	$user_id = $_SESSION['id'];
	$query_bring =mysqli_query($con,"select * from register where `id`='$user_id'");
	while($row=mysqli_fetch_assoc($query_bring))
	{
		$user_name = $row['name'];
	}
	 $msg="<font size=5 id='fnt' color=#FF192C>Welcome " .$user_name." to MY SITE.....</font>";
	
}


?>
<script>
(function($){
	$(document).ready(function(){
		$('ul.dropdown-menu [data-toggle=dropdown]').on('click', function(event) {
			event.preventDefault(); 
			event.stopPropagation(); 
			$(this).parent().siblings().removeClass('open');
			$(this).parent().toggleClass('open');
		});
	});
})(jQuery);
</script>
</head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

</style>
<?php
if(isset($_SESSION['id']))
{
?>
<div class="">
  <nav class="navbar navbar-default navbar-fixed-static-top marginBottom-0 " role="navigation" >
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
              
            </div>
            
            <div class="collapse navbar-collapse" id="navbar-collapse-1">
		      <div class="navbar-header">
      		    <a class="navbar-brand" href="index.php"><img src="uploads/logo.jpeg" height="40"  width="110" style="position:relative;bottom:10;right:10;"></a>
    			</div>
                <ul class="nav navbar-nav">
                    <li class="active">
                   
					
                    

        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle"  id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <font size=4>CLOTHING</font>
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" data-toggle="dropdown" href="#">INDIAN</a>
            <ul class="dropdown-menu" style="text-align: center;">
              <a class="dropdown-item" href="a2.php">TOP-WEAR</a>
              <a class="dropdown-item" href="a1.php">BOTTOM-WEAR</a>
            </ul>
            <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" data-toggle="dropdown" href="#">WESTERN</a>
            <ul class="dropdown-menu" style="text-align: center;">
              <a class="dropdown-item" href="a4.php">SHIRTS</a>
              <a class="dropdown-item" href="a3.php">TOPS</a>
            </ul>
          </li>
        </ul>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle"  id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <font size=4>ACCESSORIES</font>
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
        <li><a  href="a5.php">PURSES </a>
            
            <li><a href="a6.php">BAGS</a>
        </ul>
      </li>


      
				
					<li><a href="contact.php"><font size=4>FEEDBACK</font></a></li>
          <li><script src="ajax.js"></script>
          
         <div> <input class="form-control" type="text" onKeyUp="myfunc()" id="t1" placeholder="SEARCH" style="margin-top:10px;margin-left:15px;"><span class="glyphicon glyphicon-search"></span></div>
<div id="mydiv">
</div>
</li>
					</ul>
		<ul class="nav navbar-nav navbar-right">
    
    <li><a href="viewcart.php"><span class="glyphicon glyphicon-shopping-cart"></span></a></li>
    <li><a href="wishlist.php"><span class="glyphicon glyphicon-heart"></span> WISHLIST</a></li>
      <li><a href="logout.php"><span class="glyphicon glyphicon-user"></span>LOGOUT</a></li>
    </ul>
					
				
      </div><!-- /.navbar-collapse -->
        </nav>
        
        

</div>
<?php
}
else
{?>
<div class="">
  <nav class="navbar navbar-default navbar-fixed-static-top marginBottom-0 " role="navigation" >
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
              
            </div>
            
            <div class="collapse navbar-collapse" id="navbar-collapse-1">
		      <div class="navbar-header">
      		    <a class="navbar-brand" href="index.php"><img src="uploads/logo.jpeg" height="40"  width="110" style="position:relative;bottom:10;right:10;"></a>
    			</div>
                <ul class="nav navbar-nav">
                    <li class="active">
                   
					
                    

        <li class="nav-item dropdown">
          <a class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <font size=4>CLOTHING</font>
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" data-toggle="dropdown" href="#">INDIAN</a>
            <ul class="dropdown-menu" style="text-align: center;">
              <a class="dropdown-item" href="a2.php">TOP-WEAR</a>
              <a class="dropdown-item" href="a1.php">BOTTOM-WEAR</a>
            </ul>
            <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" data-toggle="dropdown" href="#">WESTERN</a>
            <ul class="dropdown-menu" style="text-align: center;">
              
              <a class="dropdown-item" href="a4.php">SHIRTS</a>
              <a class="dropdown-item" href="a3.php">TOPS</a>
            </ul>
          </li>
        </ul>
      </li>

      <li class="nav-item dropdown">
        <a class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <font size=4>ACCESSORIES</font>
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <li><a  href="a5.php">PURSES </a>
            
            <li><a href="a6.php">BAGS</a>
            
          </li>
        </ul>
      </li>


      
				
					<li><a href="contact.php"><font size=4>FEEDBACK</font></a></li>
          <li><script src="ajax.js"></script>
          
         <div> <input class="form-control" type="text" onKeyUp="myfunc()" id="t1" placeholder="SEARCH" style="margin-top:10px;margin-left:15px;"><span class="glyphicon glyphicon-search"></span></div>
<div id="mydiv">
</div>
</li>
					</ul>
		<ul class="nav navbar-nav navbar-right">
    
      <li><a href="register.php"><span class="glyphicon glyphicon-user"></span>SIGN UP</a></li>
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> LOGIN</a></li>
    </ul>
					
				
      </div><!-- /.navbar-collapse -->
        </nav>
        
        

</div>
<?php
}
?>

<style>
#fnt:hover {
  background-color:#94EFFC ;
}
.dropdown-submenu{
    position: relative;
}
.dropdown-submenu a::after{
    transform: rotate(-90deg);
    position: absolute;
    right: 3px;
    top: 40%;
}
.form-control {
  padding-right: 30px;
}

.form-control + .glyphicon {
  position: absolute;
  top:11;
  left: 172;
  padding: 8px 27px;
}

.dropdown-submenu:hover .dropdown-menu, .dropdown-submenu:focus .dropdown-menu{
    display: flex;
    flex-direction: column;
    position: absolute !important;
    margin-top: -30px;
    left: 100%;
}
@media (max-width: 992px) {
    .dropdown-menu{
        width: 50%;
    }
    .dropdown-menu .dropdown-submenu{
        width: auto;
    }
    
}
</style>
</html>
 
