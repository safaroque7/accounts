<?php 
	//session start
	session_start();

	//for connect
	include('connect.php');
	
	if (isset($_POST['login'])) {

			$_SESSION['useremail'] = $_POST['useremail'];
			$_SESSION['password'] = $_POST['password'];

			//query for select
			$sql = "SELECT * FROM users WHERE useremail = '".$_POST['useremail']."' AND password= '".$_POST['password']."' ";
			$result = $conn->query($sql);
			$rows = mysqli_fetch_assoc($result);
			$_SESSION['id'] = $rows['id'];

			if ($_SESSION['useremail'] === $rows['useremail'] AND $_SESSION['password'] === $rows['password']) {
				header('location: dashboard.php');
			} else {
				header('location: index.php');
			}
		}
 ?>