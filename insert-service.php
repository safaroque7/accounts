<?php 
	// for connect
	include('connect.php');

	if (isset($_POST['submit'])) {
		$service = $_POST['service'];

		///////// query for select  /////////
		$sql2="SELECT * FROM services WHERE service = '".$service."'"; 
		$result2 = $conn->query($sql2);
		$rows2 = mysqli_fetch_assoc($result2);
		///////// query for select  /////////

		if ($rows2['service'] == $service) {
			echo $rows2['service'] . " service exists";
		} else {
			// sql for insert 
			$sql = "INSERT INTO services(service) VALUES('".$service."')";
			$results = $conn->query($sql);

			if (!$results) {
				echo "failed to inserted";
			} else {
				header('location: service-type.php');
			}
		}


		
	}
?>