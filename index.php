<?php session_start(); ?>
<?php require_once('config.php'); ?>
<?php require_once('librarys/function.php'); ?>
<?php require_once('model/mysql_query.php'); ?>

<?php

/**get request from browser and direct to page.**/
if(isset($_GET['controller'])) $controller = $_GET['controller'];
else $controller = 'home';

if(isset($_GET['action'])) $action = $_GET['action'];
else $action = 'index';

$file = 'controllers/'.$controller.'/'.$action.'.php';
if(file_exists($file))
{
	require($file);

}
else
	echo 'have error';	
mysql_close($db);
 ?>