<?php 
	//for connect
	include('connect.php');

	if (isset($_POST['submit'])) {
		
		$name				= $_POST['name'];
		$phone				= $_POST['phone'];
		$email				= $_POST['email'];
		$address			= $_POST['address'];
		$facebook			= $_POST['facebook'];
		$destination		= 'upload/' . time(). '__' . $_FILES['image']['name'];
		$filename			= $_FILES['image']['tmp_name'];
		$size				= $_FILES['image']['size'];

		$imgsize			= ($size/1000);

		if ($imgsize <= 50) {
			$image = move_uploaded_file($filename, $destination);

				if (!empty($destination)) {
						
					//insert query
					$sql ="INSERT INTO hostingprovider(name, phone, email, address, facebook, image) VALUES('". $name ."', '". $phone ."', '". $email."', '".$address ."', '". $facebook ."', '".$destination ."' ) ";
					} else {
						$sql ="INSERT INTO hostingprovider(name, phone, email, address, facebook) VALUES('". $name ."', '". $phone ."', '". $email."', '".$address ."', '". $facebook ."') ";
					}

					$result = $conn->query($sql);

					if (!$result) {
						echo "failed to inserted" . $conn->error;
					} else {
						header('location: add-hosting-provider.php');
					}
		} else {
			echo "image size over 50kb. try again with image size less than 50kb";
		}

		

	}

	
?>