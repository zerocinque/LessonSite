<?php 

	$root = (strcmp($_SERVER['HTTP_HOST'], 'localhost')==0 ? ($_SERVER['DOCUMENT_ROOT']. '/03_bottasso_2017_07_07') : '') . '/';
	require_once $root . 'view/components/session.php';
	require_once $root . 'controller/registration_controller.php';

	if(!isset($_GET['les']))
		header('location: /03_bottasso_2017_07_07/view/lesson.php');

	$registrations  = true;


	$contr = new RegistrationController();
	$reg = new Registration();
	$reg->id_lesson = $_GET['les'];
	$reg->name = $_SESSION['user']->name;
	$reg->surname = $_SESSION['user']->surname;

	$state = $contr->insert($reg);

	if(isset($state['error']))
		header('location: /03_bottasso_2017_07_07/view/no_reg.php');
	else
		header('location: /03_bottasso_2017_07_07/view/reg_ok.php');
