<?php
	session_start();
	require_once '../../config.php';
	require_once '../../model/mysql_query.php';
	
	if(isset($_POST['id'])){
		deleteById('passwords',$_POST['id']);
		echo 'Delete Success';
	}
	mysql_close($db);
 ?>