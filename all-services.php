<?php
    //for header
    include('header.php');
?>
            

<div class="main-content">
    <div class="row">
    	<div class="offset-md-1 col-md-10 offset-md-1">
    		
    		<?php include('add_service.php'); ?>
			
			<table class="table bg-white">

				<thead>
					<th> Id </th>
					<th> name </th>
					<th> Actions </th>
				</thead>

				<tbody>
					<?php 
			            $sql ="SELECT * FROM services ORDER BY id DESC ";
			            $result = $conn->query($sql);
			        ?>

			        <?php while ($rows = mysqli_fetch_assoc($result)) { ?>
						<tr>
							<td> <?php echo $rows['id']; ?> </td>
							<td> <?php echo $rows['service']; ?> </td>

							<td> 
								<a href="edit-service.php?id=<?php echo $rows['id']?>" class="btn btn-info btn-sm"> edit </a>
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