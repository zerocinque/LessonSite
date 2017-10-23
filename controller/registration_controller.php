<?php 

$root = (strcmp($_SERVER['HTTP_HOST'], 'localhost')==0 ? ($_SERVER['DOCUMENT_ROOT']. '/03_bottasso_2017_07_07') : '') . '/';

	require_once $root . 'model/DB.php';


class RegistrationController{


	function insert($registration){
		$conn = new DB();
		$sql = 'INSERT INTO registration(id_lesson, name, surname) VALUES(?,?,?)';
		$params = array($registration->getIdLesson(), $registration->getName(), $registration->getSurname());
		return $conn->execAssoc($sql, $params);
	}
	function selectAll(&$results){
		$conn = new DB();
		$sql = 'SELECT * FROM registration';
		$params = array();
		$state = $conn->execClass($sql, $params, $results, "Registration");
		return $state;
	}
	function select($id, &$result){
		$conn = new DB();
		$sql = 'SELECT * FROM registration WHERE id=?';
		$params = array($id);
		$state = $conn->execClass($sql, $params, $result, "Registration");
		return $state;
	}
		function selectIdSubject($id_lesson, &$results){
		$conn = new DB();
		$sql = 'SELECT * FROM registration WHERE id_lesson=?';
		$params = array($id_lesson);
		$state = $conn->execClass($sql, $params, $results, "Registration");
		return $state;
	}

	function update($registration){
		$conn = new DB();
		$sql = 'UPDATE registration SET id_lesson=?, name=?, surname=? WHERE id=?';
		$params = array($registration->getIdLesson(), $registration->getName(), $registration->getSurname(), $registation->getID());
		return $conn->execAssoc($sql, $params);
	}
	function delete($id){
		$conn = new DB();
		$sql = 'DELETE FROM registration WHERE id=?';
		$params = array($id);
		return $conn->execAssoc($sql, $params);
	}
}