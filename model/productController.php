<?php

require_once("controller/dbcontroller.php");



Class productController {
 
	 
	public function getProducts(){

		$db_handle = new DBController();
		$conn = $db_handle->connectDB();

		$results = $db_handle->runQuery($conn,"SELECT * FROM tblproduct ORDER BY id ASC");
		return $results;
	}

	public function getPink(){

		$db_handle = new DBController();
		$conn = $db_handle->connectDB();

		$results = $db_handle->runQuery($conn,"SELECT * FROM tblproduct WHERE tipo='rosa'");
		return $results;
	}

	public function getBlue(){

		$db_handle = new DBController();
		$conn = $db_handle->connectDB();

		$results = $db_handle->runQuery($conn,"SELECT * FROM tblproduct WHERE tipo='azul'");
		return $results;
	}

	public function getGreen(){

		$db_handle = new DBController();
		$conn = $db_handle->connectDB();

		$results = $db_handle->runQuery($conn,"SELECT * FROM tblproduct WHERE tipo='verde'");
		return $results;
	}

}