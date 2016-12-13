<?php
//require_once('include/config.php');
include "db.php" ;
$msg=''; 
if (isset($_REQUEST['submit'])) 
{
     if (empty($_POST['email']) || empty($_POST['password']))
	{
		echo "<script>document.location='index.php?msg=1';</script>"; 
        }
	else
	{	
		 $username=$_POST['email'];
		 $password=$_POST['password'];
		 $query = "SELECT * FROM admin where email = '$username' AND password = '$password'" ;
	         $row =  mysqli_query($conn, $query) ;
				$count = mysqli_num_rows($row);

		  if($count == 0)
		  {
		   echo "<script>document.location='index.php?msg=4';</script>";  
		  }
		 else 
	          { 
		      session_start();
		      $_SESSION['login_user'] = $username;
	              echo "<script>document.location='Add_truth_or_dare.php';</script>"; 
	          }
	 }
 }

?>


