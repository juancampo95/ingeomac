<?php 
	session_start();
	unset($_SESSION['userw']);
	unset($_SESSION['passw']);
				
	echo "<script>location=('../admin_login.php')</script>;";
 ?>