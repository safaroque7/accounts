<?php 
	// for connect
	include('connect.php');

	// get id
	$id = $_GET['id'];

	//----------------- delete query for hostingprovider ----------------- //
	$sql = "DELETE FROM hostingprovider WHERE id = '".$id."'";
	$result = $conn->query($sql);

	if (!$result) {
		echo "failed to delete item";
	} else {
		header('location: all-hosting-provider-page.php');
	}
	//----------------- delete query for hostingprovider ----------------- //


	//----------------- delete query for services ----------------- //
	$sql2 = "DELETE FROM services WHERE id = '".$id."'";
	$result2 = $conn->query($sql2);

	if (!$result2) {
		echo "failed to delete item";
	} else {
		header('location: all-services.php');
	}
	//----------------- delete query for services ----------------- //

	
?>




