<?php 
	//for connect
	include('connect.php');

	//for get id
	$id = $_GET['id'];


		$sql ="SELECT * FROM all_client WHERE id = '$id'";                                
		$result = $conn->query($sql);
		$rows = mysqli_fetch_assoc($result);


	if (isset($_POST['update'])) {

		$website 		= $_POST['website'];
		$hosting 		= $_POST['hosting'];
		$hostingsize 	= $_POST['hostingsize'];
		$name 			= $_POST['name'];
		$phone 			= $_POST['phone'];	
		$email 			= $_POST['email'];	
		$country 		= $_POST['country'];
		$district 		= $_POST['district'];
		$upazila 		= $_POST['upazila'];

		$filename 		= $_FILES['photo']['tmp_name'];
		$destination 	= 'upload/' . uniqid() . '_' . $_FILES['photo']['name'];

		$imagesize 		= $_FILES['photo']['size'];
		$imagesizekb	= ($imagesize/1000);

		if ($imagesizekb <= 100) {
			move_uploaded_file($filename, $destination);

				if (!empty($filename)) {
					$sql = "UPDATE all_client SET website = '". $website ."', hosting = '".$hosting."', hostingsize = '".$hostingsize."', name = '$name', phone = '$phone', email = '$email', country = '$country', district = '$district', upazila = '$upazila', photo = '$destination' WHERE id = '$id' ";

				} else {
					$sql = "UPDATE all_client SET website = '". $website ."', hosting = '".$hosting."', hostingsize = '".$hostingsize."', name = '$name', phone = '$phone', email = '$email', country = '$country', district = '$district', upazila = '$upazila' WHERE id =  '$id' ";
				}

				$result = $conn->query($sql);

				if (!$result) {
					echo "failed to update";
				} else {
					header('location: edit-all-client.php?id=' . $rows['id']);

				}
		} else {
			echo "image size exit. pls try to under 100 kb image size";
		}


	}


?>