<?php
	require_once '../../config.php';
	require_once '../../model/mysql_query.php';

	if(isset($_POST['username']) && isset($_POST['password']))
		{
			$username = $_POST['username'];
			$password = $_POST['password'];

			$password = md5($password);
			$data = array('username'=>$username);
			if(!checkAvailable('users',$data)){
				$data = array('username'=>$username,'password'=>$password);
				$check = insert('users',$data);
				if($check){
					echo "Register sucessfull";
						}
				else echo 'Register failure ';
			}
			else echo "Account is avalible";

		}
	mysql_close($db);
 ?>