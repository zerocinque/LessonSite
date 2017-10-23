<?php 

$root = (strcmp($_SERVER['HTTP_HOST'], 'localhost')==0 ? ($_SERVER['DOCUMENT_ROOT']. '/03_bottasso_2017_07_07') : '') . '/';

	require_once $root . 'model/DB.php';


class Lesson{

	public $id;
	public $id_subject;
	public $date_lesson;

	function __construct(/*$id = null, $id_subject = null, $date_lesson = null*/)
	{
		/*$this->id = $id;
		$this->id_subject = $id_subject;
		$this->date_lesson = $date_lesson;*/
	}

	function setID($id){
		$this->id = $id;
	}
	function getID(){
		return $this->id;
	}
	function setIdSubject($id_subject){
		$this->id_subject = $id_subject;
	}
	function getIdSubject(){
		return $this->id_subject;
	}
	function setDate($date_lesson){
		$this->date_lesson = $date_lesson;
	}
	function getDate(){
		return $this->date_lesson;
	}

}