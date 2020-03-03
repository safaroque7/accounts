<?php
    //for header
    include('header.php');

    //get id	
    $id = $_GET['id'];
?>
            

<div class="main-content">
    <div class="row">
        <div class="col-md-6 ml-5">

            <?php 
            	//add add_hosting_provider
            	include('add_hosting_provider.php'); 

            	//query for select
            	$sql = "SELECT * FROM hostingprovider WHERE id = '".$id."' ";
            	$result = $conn->query($sql);	
            	$rows = mysqli_fetch_assoc($result);
            ?>


	            <form action="update-hosting-provider.php?id=<?php echo $rows['id'];?>" method="POST" enctype="multipart/form-data"> 

		                <div class="row">
		                    <div class="col-md-6">

		                        <!-- hosting provider name -->
		                        <div class="form-group">
		                            <label for="name"> name </label>
		                            <input type="text" name="name" id="name" value="<?php echo $rows['name'];?>" class="form-control" required="">
		                        </div>

		                        <!-- phone -->
		                        <div class="form-group">
		                            <label for="phone"> phone </label>
		                            <input type="text" name="phone" id="phone" value="<?php echo $rows['phone'];?>" class="form-control" required="">
		                        </div>

		                        <!-- email -->
		                        <div class="form-group">
		                            <label for="email"> email </label>
		                            <input type="email" name="email" id="email" value="<?php echo $rows['email'];?>" class="form-control" required="">
		                        </div>

		                        <!-- address -->
		                        <div class="form-group">
		                            <label for="address"> address </label>
		                            <input type="text" name="address" id="address" value="<?php echo $rows['address'];?>" class="form-control" required="">
		                        </div>

		                        <!-- facebook -->
		                        <div class="form-group">
		                            <label for="facebook"> facebook </label>
		                            <input type="text" name="facebook" id="facebook" value="<?php echo $rows['facebook'];?>" class="form-control" required="">
		                        </div>
		                

		                        <!-- image -->
		                        <div class="form-group">
		                			<img id="edit_photo" class="mb-1" src="<?php echo $rows['image'];?>" alt=""> <br>

		                            <label for="image"> image [size upto 50 kb] </label>
		                            <input type="file" name="image" id="image" class="form-control">
		                        </div>

		                    </div>

		                </div>

		                <input type="submit" value="update" name ="update" class="btn btn-dark">
	            </form>

        </div>

        

        <?php include('all-hosting-provider.php'); ?>

    </div>
</div>


<?php 
    include('footer.php');
?>