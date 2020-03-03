<?php 
	//session start
	session_start();

	//for connect
	include('connect.php');

	session_destroy();
	header('location: index.php');
?>