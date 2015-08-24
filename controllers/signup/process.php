<?php
	if(isset($_POST['username']) && isset($_POST['password']))
		{
			$username = $_POST['username'];
			$password = $_POST['password'];

			$password = md5($password);

			$sql = "INSERT INTO `users` SET `username`=>$username,`password`=>$password";
			mysql_query($sql);
	
		}
 ?>