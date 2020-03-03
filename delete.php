<?php 
	// for connect
	include('connect.php');

	// get id
	$id = $_GET['id'];

	// query for delete
	$sql = "DELETE FROM hostingprovider WHERE id = '".$id."'";
	$result = $conn->query($sql);

	if (!$result) {
		echo "failed to delete item";
	} else {
		header('location: all-hosting-provider-page.php');
	}
?>