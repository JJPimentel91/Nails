<?php

require_once("controller/dbcontroller.php");



Class productController {
 
	 
	public function getProducts(){

		$db_handle = new DBController();
		$conn = $db_handle->connectDB();

		$results = $db_handle->runQuery($conn,"SELECT * FROM tblproduct ORDER BY id ASC");
		return $results;
	}

	public function getBags(){

		$db_handle = new DBController();
		$conn = $db_handle->connectDB();

		$results = $db_handle->runQuery($conn,"SELECT * FROM tblproduct WHERE tipo='bolsa'");
		return $results;
	}

}