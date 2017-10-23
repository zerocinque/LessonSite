<?php 

$root = (strcmp($_SERVER['HTTP_HOST'], 'localhost')==0 ? ($_SERVER['DOCUMENT_ROOT']. '/03_bottasso_2017_07_07') : '') . '/';

	require_once $root . 'model/DB.php';


class Subject{

	public $id;
	public $subject_name;
	

	function __construct(/*$id, $subject_name*/)
	{
		/*$this->id = $id;
		$this->subject_name = $subject_name;*/
	}

	function setID($id){
		$this->id = $id;
	}
	function getID(){
		return $this->id;
	}
	function setSubject_Name($subject_name){
		$this->subject_name = $subject_name;
	}
	function getSubject_Name(){
		return $this->subject_name;
	}

}