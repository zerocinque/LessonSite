<?php 
	header('Content-Tipe: application/json; charset=utf-8');
	
	$root = (strcmp($_SERVER['HTTP_HOST'], 'localhost')==0 ? ($_SERVER['DOCUMENT_ROOT']. '/03_bottasso_2017_07_07') : '') . '/';

	require_once $root . 'view/components/session.php';

	if(isset($_POST['user'])){

		$user = json_decode($_POST['user']);
		$user->name = ucwords(strtolower($user->name));
		$user->surname = ucwords(strtolower($user->surname));

		//var_dump($user);
		$_SESSION['user'] = $user;

		echo json_encode(array("state" => (isset($_SESSION['user']) ? true : false)));
		
	}
