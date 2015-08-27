<?php
if(!isset($_SESSION['username']))
	require_once('view/home/index.php');
else
	{
		$username = $_SESSION['username'];
		$id = getIdBy($username);
		$where = array('user_id'=>$id);
		$data = getAll('passwords',$where);
		require_once('view/home/listpass.php');
	}
	
 ?>