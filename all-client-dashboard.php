<?php
    //for header
    include('header.php');
?>
            

<div class="main-content">
    <div class="row">
    	<div class="offset-md-1 col-md-10 offset-md-1">
    		
    		<?php include('add_client_all_client.php') ?>

			<table class="table bg-white">
				<thead>
					<th> Id </th>
					<th> Website </th>
					<th> Hosting </th>
					<th> Name </th>
					<th> Phone </th>
					<th> Email </th>
					<th> Address </th>
					<th> Services </th>
					<th> Actions </th>
				</thead>

				<tbody>
					<?php 
			            $sql ="SELECT * FROM all_client ORDER BY id DESC ";
			            $result = $conn->query($sql);
			        ?>

			        <?php while ($rows = mysqli_fetch_assoc($result)) { ?>
						<tr>
							<td> <?php echo $rows['id']; ?> </td>
							<td> <?php echo $rows['website']; ?> </td>
							<td> <?php echo $rows['hosting']; ?> </td>
							<td> <?php echo $rows['name']; ?> </td>
							<td> <?php echo $rows['phone']; ?> </td>
							<td> <?php echo $rows['email']; ?> </td>
							<td> <?php echo $rows['upazila'] .', ';  echo $rows['district'] .', ';   echo $rows['country']; ?> </td>
							<td> 
								<?php
									$services = $rows['service'];
								?> 
							</td>
							<td> 
								<a href="edit-all-client.php?id=<?php echo $rows['id']?>" class="btn btn-info btn-sm"> edit </a>
								<a href="delete.php?id=<?php echo $rows['id'];?>" onclick = "return confirm('are you sure want to delete this item?')" class="btn btn-danger btn-sm"> delete </a>

							</td>
						</tr>
					<?php } ?>
				</tbody>

			</table>
		</div>
    </div>
</div>


<?php 
    include('footer.php');
?>