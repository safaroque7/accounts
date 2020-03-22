<?php
    //for header
    include('header.php');
?>
            
<?php 
    $id = $_GET['id'];

    $sql = "SELECT * FROM all_client WHERE id = '".$id."'";
    $result = $conn->query($sql);
    $row = mysqli_fetch_assoc($result);
?>
        
<div class="main-content">
	<div class="row">
     <div class="col-md-6">
         <a href="allReceipt.php" class="btn btn-primary form-group"> Back </a>
     </div>   

     <div class="col-md-3 p-r-0 text-right">
         <a href="client-profile.php?id=<?php echo $row['id']-1;?>" class="btn btn-primary form-group"> <i class="fa fa-arrow-left"></i> </a>
         <a href="client-profile.php?id=<?php echo $row['id']+1; ?>" class="btn btn-primary form-group"> <i class="fa fa-arrow-right"></i> </a>
     </div>
    </div>

    <div class="row">

    	<div class="col-md-3">
    		<img src="<?php echo $row['photo']?>" alt="">
    		<h3> <?php echo $row['name']?> </h3>
    		<h3> <?php echo $row['phone']?> </h3>
    		<h3> <?php echo $row['email']?> </h3>
    		<h3> <?php echo $row['upazila']?> </h3>
    		<h3> <?php echo $row['district']?> </h3>
    		<h3> <?php echo $row['country']?> </h3>
    		<h3> <?php echo $row['website']?> </h3>
    		<h3> <?php echo $row['hosting']?> </h3>
    		<h3> <?php echo $row['hostingsize']?>GB </h3>
   
    	</div>
    	<div class="col-md-6 bg-light">
    		<table class="table">
    			<thead>
    				<th> SL </th>
    				<th> Date </th>
    				<th> payment method </th>
    				<th> Service type </th>
    				<th> Amount </th>
    			</thead>
    			<tbody>
    				<?php 
    					$sql = "SELECT * FROM income WHERE web = '".$row['website']."' ORDER BY id DESC ";
    					$results = $conn->query($sql);
                        $total = '';
    				?>
    				<?php while($rows = mysqli_fetch_assoc($results) ) { ?>
	    				<tr>
	    					<td> <?php echo $rows['id'] ?> </td>
	    					<td> <?php echo $rows['pdate'] ?> </td>
	    					<td> bkash </td>
	    					<td> <?php echo $rows['source'] ?> </td>
	    					<td class="text-right"> <?php echo $rows['payment'] ?> </td>
                            
                            <?php 
                                $total +=$rows['payment'];
                            ?>

	    				</tr>
					<?php } ?>	    				
					<tr class="bg-dark text-white"> 
						<td></td>
                        <td></td>
                        <td></td>
                        <td></td>

                        <td class="float-right"> total : <span class="text-right"> <?php echo $total; ?> </span> </td>
					</tr>
    			</tbody>
    		</table>
    	</div>
    	<div class="col-md-3"></div>
    </div>
</div>


<?php 
    include('footer.php');
?>