<?php 	
	//connect
	include('connect.php');	

	if (isset($_POST['submit'])) {
		$source		= $_POST['source'];
		$web		= $_POST['web'];
		$payment	= $_POST['payment'];
		$pdate		= $_POST['pdate'];

		$sql = "INSERT INTO income(web, source, payment, pdate) VALUES('".$web."', '".$source."', '".$payment."', '".$pdate."')";
		$result = $conn->query($sql);

		if (!$result) {
			echo "failed to insert database" . $conn->connect_error;
		} else {
			header('location: receipt.php');
		}
	}
?>