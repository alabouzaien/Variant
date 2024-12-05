
<?php 


  session_start(); 
 $x = $_GET['MyUsername'];

 
  
if(!isset($_SESSION['UserData']['user_name'])){
  header("location:auth.php");
  
  exit;
  }
  
  ?>
  
  
  <?php





echo "Привет, ".$x.".";

?> 

<?php
if ( isset($_GET["logout"])&& $_GET['logout'] == "yes")
{
	setcookie("user_name", "");
	setcookie("password", "");
	header("Location: /LR22 ");
}

?> 

 <br> <br>
        
<input type="button" value="Logout" onclick="location='logout.php'" />