<?php
    //for header
    include('header.php');
?>
            

<div class="main-content">
    <div class="row">
    	<div class="offset-md-1 col-md-10 offset-md-1">
    		
    		<?php 
    			include('add_new_receipt_all_receipt.php');

		            $sql ="SELECT * FROM income";
		            $result = $conn->query($sql);

	        ?>

	        <table class="table bg-white">
				<thead>
					<th> Id </th>
					<th> date </th>
					<th> Website </th>
					<th> Source </th>
					<th> Payment </th>
					<th> Actions </th>
				</thead>

				<tbody>
					
			        <?php while ($rows = mysqli_fetch_assoc($result)) { ?>
						<tr>
							<td> <?php echo $rows['id']; ?> </td>
							<td> <?php echo $rows['pdate']; ?> </td>
							<td> <?php echo $rows['web']; ?> </td>
							<td> <?php echo $rows['source']; ?> </td>
							<td> <?php echo $rows['payment']; ?> </td>
							
							<td class="d-flex"> 
								<a href="client-profile.php?id=<?php echo $rows['id']?>" class="btn btn-success btn-sm mr-1"> profile </a>
								<a href="edit-receipt.php?id=<?php echo $rows['id']?>" class="btn btn-info btn-sm mr-1"> edit </a>
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