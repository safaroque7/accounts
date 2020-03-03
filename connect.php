<?php 
	
	$server 	= 'localhost';
	$username 	= 'root';
	$password 	= '';
	$database 	= 'client';

	$conn = new mysqli($server, $username, $password, $database);

	if (!$conn) {
		echo "failed to connect with database" . $conn->connect_error;
	} else {
		//echo "successfully to connect with database";
	}
/*

	//create database
	$sql = "CREATE DATABASE client";
	$result = $conn->query($sql);

	if (!$result) {
		echo "failed create database".$conn->connect_error;
	} else {
		echo "successfully create database";
	}*/


	// //create all_client table
	// $sql = "CREATE TABLE all_client(
	// 	id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	// 	name VARCHAR (50) NOT NULL,
	// 	phone int(20) NOT NULl,
	// 	email VARCHAR(100) NOT NULL,
	// 	country VARCHAR(100) NOT NULL,
	// 	distrct VARCHAR(100) NOT NULL,
	// 	upazila VARCHAR(10) NOT NULL,
	// 	photo VARCHAR(255) NOT NULL
	// )";

	// $result = $conn->query($sql);

	// if (!$result) {
	// 	echo "failed to create data table" . $conn->connect_error;
	// } else {
	// 	echo "successfully to create data table";
	// }

	
	// //create all_client table
	// $sql = "CREATE TABLE all_client(
	// 	id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	// 	name VARCHAR (50) NOT NULL,
	// 	phone int(20) NOT NULl,
	// 	email VARCHAR(100) NOT NULL,
	// 	country VARCHAR(100) NOT NULL,
	// 	distrct VARCHAR(100) NOT NULL,
	// 	upazila VARCHAR(10) NOT NULL,
	// 	photo VARCHAR(255) NOT NULL
	// )";

	// $result = $conn->query($sql);

	// if (!$result) {
	// 	echo "failed to create data table" . $conn->connect_error;
	// } else {
	// 	echo "successfully to create data table";
	/*}*/

/*	
	//create income table
	$sql = "CREATE TABLE income(
		id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
		web VARCHAR (50) NOT NULL,
		payment VARCHAR (11) NOT NULL,
		date VARCHAR (110) NOT NULL
	)";

	$result = $conn->query($sql);

	if (!$result) {
		echo "failed to create data table" . $conn->connect_error;
	} else {
		echo "successfully to create data table";
	}*/

	
	//create users table
/*	$sql = "CREATE TABLE users(
		id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
		username VARCHAR (50) NOT NULL,
		password VARCHAR (100) NOT NULL
	)";

	$result = $conn->query($sql);

	if (!$result) {
		echo "failed to create data table" . $conn->connect_error;
	} else {
		echo "successfully to create data table";
	}*/

	
/*	//create hosting provider table
	$sql = "CREATE TABLE hostingprovider(
		id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
		hostingprovider VARCHAR (100) NOT NULL,
		phone VARCHAR (100) NOT NULL,
		email VARCHAR (100) NOT NULL,
		address VARCHAR (100) NOT NULL,
		facebook VARCHAR (100) NOT NULL,
		image text NOT NULL
	)";

	$result = $conn->query($sql);

	if (!$result) {
		echo "failed to create data table" . $conn->connect_error;
	} else {
		echo "successfully to create data table";
	}*/

	
/*	//create hosting provider table
	$sql = "CREATE TABLE hostingsize(
		id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
		hostingsizelimit VARCHAR (10) NOT NULL
	)";

	$result = $conn->query($sql);

	if (!$result) {
		echo "failed to create data table" . $conn->connect_error;
	} else {
		echo "successfully to create data table";
	}*/

?>