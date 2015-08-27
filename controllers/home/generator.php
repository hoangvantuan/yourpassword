<?php
session_start();
require_once '../../config.php';
require_once '../../model/mysql_query.php';
if(isset($_POST['password']) && isset($_POST['description'])){

	$username = $_SESSION['username'];
	$password = $_POST['password'];
	$description = $_POST['description'];
	$id = getIdBy($username);
	$data = array('password'=>$password,'description'=>$description,'user_id'=>$id);
	insert('passwords',$data);
	$id = getLastId('passwords');
	$result = '<tr><td>'.$password.'</td><td>'.$description.'</td><td><a href="#">Delete</a>';
	echo $result;
}
mysql_close($db);	

 ?>