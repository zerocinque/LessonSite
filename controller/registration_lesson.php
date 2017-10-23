<?php 

	$root = (strcmp($_SERVER['HTTP_HOST'], 'localhost')==0 ? ($_SERVER['DOCUMENT_ROOT']. '/03_bottasso_2017_07_07') : '') . '/';

	require_once $root . 'controller/registration_controller.php';

	if(!isset($_GET['les']))
		header('location: /03_bottasso_2017_07_07/view/lesson.php');

	$registrations  = true;


	$contr = new RegistrationController();

	$state = $contr->selectIdSubject($_GET['les'], $registrations);
