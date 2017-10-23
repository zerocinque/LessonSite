<?php 

	$root = (strcmp($_SERVER['HTTP_HOST'], 'localhost')==0 ? ($_SERVER['DOCUMENT_ROOT']. '/03_bottasso_2017_07_07') : '') . '/';

	require_once $root . 'controller/subject_controller.php';

	$allSubject  = true;


	$contr = new SubjectController();

	$state = $contr->selectAll($allSubject);
