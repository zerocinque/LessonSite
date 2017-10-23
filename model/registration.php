<?php 

$root = (strcmp($_SERVER['HTTP_HOST'], 'localhost')==0 ? ($_SERVER['DOCUMENT_ROOT']. '/03_bottasso_2017_07_07') : '') . '/';

	require_once $root . 'model/DB.php';


class Registration{

	public $id;
	public $id_lesson;
	public $name;
	public $surname;

	function __construct(/*$id = null, $id_lesson = null, $name = null, $surname = null*/)
	{
		/*$this->id = $id;
		$this->id_lesson = $id_lesson;
		$this->name = $name;
		$this->surname = $surname;*/
	}

	function setID($id){
		$this->id = $id;
	}
	function getID(){
		return $this->id;
	}
	function setIdlesson($id_lesson){
		$this->id_lesson = $id_lesson;
	}
	function getIdlesson(){
		return $this->id_lesson;
	}
	function setName($name){
		$this->name = $name;
	}
	function getName(){
		return $this->name;
	}
	function setSurname($surname){
		$this->surname = $surname;
	}
	function getSurname(){
		return $this->surname;
	}



}