<? ob_start(); ?>
<?php 
//anusha pc to master branch
//delete above comment
    include("db.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Hardik Wealth Management</title>
<link rel="shortcut icon" href="images/favicon.png" />
<link rel="stylesheet" href="css/screen.css" type="text/css" media="screen" title="default" />
<!--  jquery core -->
<script src="js/jquery/jquery-1.4.1.min.js" type="text/javascript"></script>
<!-- Custom jquery scripts -->
<script src="js/jquery/custom_jquery.js" type="text/javascript"></script>

</head>
<body id="login-bg"> 
<!-- Start: login-holder -->
<div id="login-holder">
	<!-- start logo -->
	<div id="logo-login">
		<!--<a href="index.php"><img src="" width="150" height="150" alt="" /></a>-->
	</div>
	<br>
	<br>
	<!-- end logo -->
        <div class="clear"></div>
	<!--  start loginbox ................................................................................. -->
	<div id="loginbox">
	<div style="color:#00FF00; font-size:160%;"> <?php if(isset($_REQUEST['msg'])){ echo $client_lang[$_REQUEST['msg']]; }?></div><br />
	<!--  start login-inner -->
	<div id="login-inner">
		<form action="login_db.php" method="post" enctype="multipart/form-data" onsubmit="return checkValidation(this);">
			<label>Email</label>
			<input type="text"  class="login-inp" name="email" id="username" value=""/>
			<br/>
			<label>Password</label>
			<input type="password" value="" name="password" id="password"  onfocus="this.value=''" class="login-inp" />
			<input type="submit" name="submit" value="submit" class="submit-login" /></td>
		</form>
		<div class="clear"></div>
	</div>
 	<!--  end login-inner -->
	<div class="clear"></div>
    <!--<a href="" class="forgot-pwd">Forgot Password?</a>-->
	 <img class="adm-pic" src="images/login/admin-pic.png" alt="" />
 </div>
 <!--  end loginbox -->
 <!--  start forgotbox ................................................................................... -->
	<div id="forgotbox">
		<!--  start forgot-inner -->
		<div id="forgot-inner">
		  <div id="forgotbox-text">Please send us your email and we'll send your password.</div>
  		<form action="forgot.php" method="post" enctype="multipart/form-data">
    		<label>Email address:</label>
    		<input type="text" name="email" value="" class="login-inp" required />
    		<input type="submit" name="send" class="submit-login"  />
  		</form>
  		<div class="clear"></div>
  		
		</div>
		<!--  end forgot-inner -->
		<div class="clear"></div>
		<a href="" class="back-login">Back to login</a>
		<img class="forgot-pwd1" src="images/login/forgot-pwd.png" alt="" />
	</div>
	<!--  end forgotbox -->
   <center><?php if(isset($msg)) echo $msg; ?></center>
</div>
<!-- End: login-holder -->

</body>
</html>
<? ob_flush();?>
