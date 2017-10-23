<?php 

$root = (strcmp($_SERVER['HTTP_HOST'], 'localhost')==0 ? ($_SERVER['DOCUMENT_ROOT']. '/03_bottasso_2017_07_07') : '') . '/';

require_once $root . 'model/DB.php';


$db = new DB();
$db_state = $db->getLink();
$db = null;

if(isset($db_state['error']) && $db_state['error'] == 1049){
	$db_connection = "mysql";
	$db_host = "127.0.0.1";
	$db_username = "root";
	$db_password = '';
	$db_name = "lesson";

	try{
		$conn = new PDO($db_connection . ':host=' . $db_host, $db_username, $db_password);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = 'CREATE DATABASE ' . $db_name;
		$conn->exec($sql);
		$conn = null;

		$conn = new PDO($db_connection . ':host=' . $db_host . ';dbname=' . $db_name, $db_username, $db_password);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		
		$sql = "
		CREATE TABLE Subject (
			  id int(11) AUTO_INCREMENT PRIMARY KEY,
			  subject_name varchar(255) NOT NULL
			);
			CREATE TABLE Lesson (
			  id int(11) AUTO_INCREMENT PRIMARY KEY,
			  id_subject int(11) NOT NULL,
			  date_lesson datetime NOT NULL,
			  FOREIGN KEY(id_subject) REFERENCES subject(id)
			);
			CREATE TABLE Registration (
			  id int(11) AUTO_INCREMENT PRIMARY KEY,
			  id_lesson int(11) NOT NULL,
			  name varchar(255) NOT NULL,
			  surname varchar(255) NOT NULL,
			  FOREIGN KEY(id_lesson) REFERENCES lesson(id)
			);
		";
		$conn->exec($sql);

		require_once $root . 'model/value.php';

		foreach ($subject as $value) {
			$sql = 'INSERT INTO subject(subject_name) VALUES(?)';
			$stmt = $conn->prepare($sql);
			$stmt->execute(array($value));
		}
		$n_lesson = 30;
		for ($i=0; $i < $n_lesson; $i++) { 
			$j = rand(1, count($subject));
			$date = rand_date('2017-09-1', '2018-03-31');
			$sql = 'INSERT INTO lesson(id_subject, date_lesson) VALUES(?, ?)';
			$stmt = $conn->prepare($sql);
			$stmt->execute(array($j, $date));
		}

		for ($i=0; $i < 50; $i++) { 
			$j = rand(0, count($name)-1);
			$k = rand(0, count($surname)-1);
			$h = rand(1, $n_lesson);
			$sql = 'INSERT INTO registration(id_lesson, name, surname) VALUES(?,?,?)';
			$stmt = $conn->prepare($sql);
			$stmt->execute(array($h, $name[$j], $surname[$k]));
		}


	}catch(PDOException $e){
		//echo $e->getMessage();
    	header('location:  /03_bottasso_2017_07_07/view/error.php?er=' . $e->getCode());
    }

}

header('location: /03_bottasso_2017_07_07/view/');
