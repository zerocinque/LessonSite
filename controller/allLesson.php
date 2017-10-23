<?php 

	$root = (strcmp($_SERVER['HTTP_HOST'], 'localhost')==0 ? ($_SERVER['DOCUMENT_ROOT']. '/03_bottasso_2017_07_07') : '') . '/';

	require_once $root . 'controller/lesson_controller.php';

	$allLesson  = true;


	$contr = new LessonController();

	$state = $contr->selectAll($allLesson);
