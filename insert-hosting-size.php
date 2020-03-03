<?php 
	// connect
	include('connect.php');

		if (isset($_POST['submit'])) {
			
			$hostingsizelimit = $_POST['hostingsizelimit'];

			$sql2 = "SELECT * FROM hostingsize WHERE hostingsizelimit='".$hostingsizelimit."'";
			$result2 = $conn->query($sql2);
			$rows2 = mysqli_fetch_assoc($result2);

			if ($rows2['hostingsizelimit'] == $hostingsizelimit) {
				echo $hostingsizelimit . "GB hosting plan exit";
			} else {
			
				$sql = "INSERT INTO hostingsize(hostingsizelimit) VALUES('".$hostingsizelimit."')";
				$result = $conn->query($sql);

				if (!$result) {
					echo "failed to inserted";
				} else {
					header('location: hosting-size.php');
				}
			}
		}

?>