<?php 

$root = (strcmp($_SERVER['HTTP_HOST'], 'localhost')==0 ? ($_SERVER['DOCUMENT_ROOT']. '/03_bottasso_2017_07_07') : '') . '/';

	require_once $root . 'model/DB.php';


class LessonController{


	function insert($lesson){
		$conn = new DB();
		$sql = 'INSERT INTO lesson(id_subject, date_lesson) VALUES(?,?)';
		$params = array($lesson->getIdSubject(), $lesson->getDate());
		return $conn->execAssoc($sql, $params);
	}
	function selectAll(&$results){
		$conn = new DB();
		$sql = 'SELECT * FROM lesson';
		$params = array();
		$state = $conn->execClass($sql, $params, $results, "Lesson");
		return $state;
	}
	function select($id, &$result){
		$conn = new DB();
		$sql = 'SELECT * FROM lesson WHERE id=?';
		$params = array($id);
		$state = $conn->execClass($sql, $params, $result, "Lesson");
		return $state;
	}
	function selectIdSubject($id_subject, &$results){
		$conn = new DB();
		$sql = 'SELECT * FROM lesson WHERE id_subject=?';
		$params = array($id_subject);
		$state = $conn->execClass($sql, $params, $results, "Lesson");
		return $state;
	}
	function update($lesson){
		$conn = new DB();
		$sql = 'UPDATE lesson SET id_subject=?, date_lesson=? WHERE id=?';
		$params = array($lesson->getIdSubject(), $lesson->getDate(), $registation->getID());
		return $conn->execAssoc($sql, $params);
	}
	function delete($id){
		$conn = new DB();
		$sql = 'DELETE FROM lesson WHERE id=?';
		$params = array($id);
		return $conn->execAssoc($sql, $params);
	}
}