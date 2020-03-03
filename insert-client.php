<?php 
	//for database connection
	include('connect.php');

	if (isset($_POST['submit'])) {
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

			$image = move_uploaded_file($filename, $destination);

			if ($image) {
				$sql = "INSERT INTO all_client(website, hosting, hostingsize, name, phone, email, country, district, upazila, photo) VALUES('".$website."', '".$hosting."', '".$hostingsize."', '".$name."', '". $phone ."', '". $email ."', '". $country ."', '". $district ."', '". $upazila ."', '". $destination ."')";
			} else {
				$sql = "INSERT INTO all_client(website, hosting, hostingsize, name, phone, email, country, district, upazila) VALUES('".$website."', '".$hosting."', '".$hostingsize."', '".$name."', '". $phone ."', '". $email ."', '". $country ."', '". $district ."', '". $upazila ."')";
			}

			$result = $conn->query($sql);

			if (!$result) {
				echo "failed to insert data into all_client data table" . '<br>' . $conn->error;
			} else {
				header('location: add-client.php');
			}
			
		}else {
			echo "image size exit. pls try to under 100 kb image size";
		}
	
	}
?>