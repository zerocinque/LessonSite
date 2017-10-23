<?php 

$root = (strcmp($_SERVER['HTTP_HOST'], 'localhost')==0 ? ($_SERVER['DOCUMENT_ROOT']. '/03_bottasso_2017_07_07') : '') . '/';

	require_once $root . 'model/DB.php';


class SubjectController{


	function insert($subject){
		$conn = new DB();
		$sql = 'INSERT INTO subject(subject_name) VALUES(?)';
		$params = array($subject->getName());
		return $conn->execAssoc($sql, $params);
	}
	function selectAll(&$results){
		$conn = new DB();
		$sql = 'SELECT * FROM Subject';
		$params = array();
		$state = $conn->execClass($sql, $params, $results, "Subject");
		return $state;
	}
	function select($id, &$result){
		$conn = new DB();
		$sql = 'SELECT * FROM Subject WHERE id=?';
		$params = array($id);
		$state = $conn->execClass($sql, $params, $result, "Subject");
		return $state;
	}
	function update($subject){
		$conn = new DB();
		$sql = 'UPDATE Subject SET subject_name=? WHERE id=?';
		$params = array($subject->getName(), $subject->getDate(), $registation->getID());
		return $conn->execAssoc($sql, $params);
	}
	function delete($id){
		$conn = new DB();
		$sql = 'DELETE FROM Subject WHERE id=?';
		$params = array($id);
		return $conn->execAssoc($sql, $params);
	}
}