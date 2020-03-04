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

		/*//////// for multiple checkbox data insert into mysql database ////////
		$sql = "SELECT * FROM services";
        $result = $conn->query($sql);
        $rows = mysqli_fetch_assoc($result);


		$services 		= $rows['service'];
		$blankservice 	= '';
			if ($services) {
				foreach ($services as $service) {
					$blankservice .= $service . ', ';
				}
			}
		$serviceValue = rtrim($blankservice, ',');
		//////// for multiple checkbox data insert into mysql database ////////*/

		$filename 		= $_FILES['photo']['tmp_name'];
		$destination 	= 'upload/' . uniqid() . '_' . $_FILES['photo']['name'];

		$imagesize 		= $_FILES['photo']['size'];
		$imagesizekb	= ($imagesize/1000);

		if ($imagesizekb <= 100) {

			$image = move_uploaded_file($filename, $destination);





			///////// for check mail exists or not/////////
			$sql = "SELECT * FROM all_client WHERE email = '".$email."'";
			$result = $conn->query($sql);
			$rows= mysqli_fetch_assoc($result);

			if ($rows['email'] == $email ) {
				echo $email ." email exists... try to another email";# code...

			} 
			///////// for check mail exists or not/////////

			else {
 				


if ($image) {
				$sql = "INSERT INTO all_client(website, hosting, hostingsize, name, phone, email, country, district, upazila, photo, service) VALUES('".$website."', '".$hosting."', '".$hostingsize."', '".$name."', '". $phone ."', '". $email ."', '". $country ."', '". $district ."', '". $upazila ."', '". $destination ."', '".$service."')";


			} else {
				$sql = "INSERT INTO all_client(website, hosting, hostingsize, name, phone, email, country, district, upazila, service) VALUES('".$website."', '".$hosting."', '".$hostingsize."', '".$name."', '". $phone ."', '". $email ."', '". $country ."', '". $district ."', '". $upazila ."', '".$service."')";
			}

			$result = $conn->query($sql);

			if (!$result) {
				echo "failed to insert data into all_client data table" . '<br>' . $conn->error;
			} else {
				header('location: add-client.php');
			}
		}
			
		}else {
			echo "image size exit. pls try to under 100 kb image size";
		}



			}

?>