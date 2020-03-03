<?php 
	// connect
	include ('connect.php');

	// get id
	$id = $_GET['id'];

	if (isset($_POST['update'])) {
		$name				= $_POST['name'];
		$phone				= $_POST['phone'];
		$email				= $_POST['email'];
		$address			= $_POST['address'];
		$facebook			= $_POST['facebook'];
		$destination		= 'upload/' . time(). '__' . $_FILES['image']['name'];
		$filename			= $_FILES['image']['tmp_name'];

		$image = move_uploaded_file($filename, $destination);


		////////////////////// for get id  //////////////////////
        $sql = "SELECT * FROM all_client WHERE id = '".$id."' ";
        $result = $conn->query($sql);
        $rows = mysqli_fetch_assoc($result);
        ////////////////////// for get id  //////////////////////
       

		if (!empty($filename)) {
			$sql = "UPDATE hostingprovider SET name = '".$name."', phone = '".$phone."', email = '".$email."', address = '".$address."', facebook = '".$facebook."', image = '".$destination."' WHERE id = '".$id."' " ;
			} else {
				$sql = "UPDATE hostingprovider SET name = '".$name."', phone = '".$phone."', email = '".$email."', address = '".$address."', facebook = '".$facebook."' WHERE id = '".$id."' ";
			}

			$result = $conn->query($sql);
			if (!$result) {
				echo "failed to updated";
			} else {
				header('location: edit-hosting-provider.php?id='.$rows['id']);
			}


		}

		
?>
