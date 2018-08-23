<?php 
	session_start();
	unset($_SESSION['email_service']);
	unset($_SESSION['passw_service']);
				
	echo "<script>location=('../services_login.php')</script>;";
 ?>