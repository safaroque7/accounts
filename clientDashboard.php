<table class="table bg-white">
	<thead>
		<th> Id </th>
		<th> Website </th>
		<th> Hosting </th>
		<th> Name </th>
		<th> Phone </th>
		<th> Email </th>
		<th> Address </th>
		<th> Actions </th>
	</thead>

	<tbody>
		
        <?php while ($rows = mysqli_fetch_assoc($result)) { ?>
			<tr>
				<td> <?php echo $rows['id']; ?> </td>
				<td> <?php echo $rows['website']; ?> </td>
				<td> <?php echo $rows['hosting']; ?> </td>
				<td> <?php echo $rows['name']; ?> </td>
				<td> <?php echo $rows['phone']; ?> </td>
				<td> <?php echo $rows['email']; ?> </td>
				<td> <?php echo $rows['upazila'] .', ';  echo $rows['district'] .', ';   echo $rows['country']; ?> </td>
				
				<td class="d-flex"> 
					<a href="client-profile.php?id=<?php echo $rows['id']?>" class="btn btn-success btn-sm mr-1"> profile </a>
					<a href="edit-all-client.php?id=<?php echo $rows['id']?>" class="btn btn-info btn-sm mr-1"> edit </a>
					<a href="delete.php?id=<?php echo $rows['id'];?>" onclick = "return confirm('are you sure want to delete this item?')" class="btn btn-danger btn-sm"> delete </a>

				</td>
			</tr>
		<?php } ?>
	</tbody>

</table>