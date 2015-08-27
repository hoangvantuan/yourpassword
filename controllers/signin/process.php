<?php
	session_start();
	require_once '../../config.php';
	require_once '../../model/mysql_query.php';
	if(isset($_POST['username']) && isset($_POST['password']))
		{
			$username = $_POST['username'];
			$password = $_POST['password'];
			if(checkAccount($username,$password)){
				$_SESSION['username'] = $username;
				echo true;
			}
			else echo "Password or Username are wrong"; 
		}
	mysql_close($db);
 ?>