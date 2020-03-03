<?php 
	// for connect
	include ('connect.php');

	// get id
	$id = $_GET['id'];

	if (isset($_POST['update'])) {

		// query for get id from database
		$sql2 = "SELECT * FROM services ";
		$result = $conn->query($sql2);
		$rows2 = mysqli_fetch_assoc($result);


		// stor date
		$service = $_POST['service'];

		// query for update
		$sql = "UPDATE services SET service = '".$service."' WHERE id = '".$id."' ";
		$result = $conn->query($sql);

		if (!$result) {
			echo "failed to update" . $conn->error;
		} else {
			header('location: edit-service.php?id='. $rows2['id']);
		}
	}
?>