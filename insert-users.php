<?php 
	//for connect
	include('connect.php');

	//for isset
	if (isset($_POST['submit'])) 
		{
			//for store value
			$useremail 		= $_POST['useremail'];
			$password 		= $_POST['password'];
			$yourname 		= $_POST['yourname'];
			$imagesize 		= $_FILES['yourimage']['size'];
			$destination 	= 'images/'  . uniqid() .'__' . $_FILES['yourimage']['name'];
			$filename		= $_FILES['yourimage']['tmp_name'];

			$userimage = move_uploaded_file($filename, $destination);


			///////////////////// for query existing email  /////////////////////
			
			$sql = "SELECT * FROM users WHERE useremail = '".$useremail."' ";
			$result = $conn->query($sql);
			$rows = mysqli_fetch_assoc($result);

			///////////////////// for query existing email  /////////////////////


			if (empty($useremail ) OR empty($password)) {
				echo "user email and password field not allowed for empty";
			} else {
				if ($rows['useremail'] == $useremail ) {
					echo $useremail . ' is existing. try another email';
				} elseif (!empty($destination)) {
					$sql ="INSERT INTO users(useremail, password, yourname, photo) VALUES('".$useremail."', '".$password."', '".$yourname."', '".$destination."')";
				} else {
					$sql ="INSERT INTO users(useremail, password, yourname) VALUES('".$useremail."', '".$password."', '".$yourname."'')";
				}
			}

			$results = $conn->query($sql);

			if (!$results) {
				echo "failed to create user";
			} else {
				echo "succesfull to create user";
			}
		}	
?>


