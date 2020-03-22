<?php
    //for header
    include('header.php');
?>
            

<div class="main-content">
    <div class="row">
    	<div class="offset-md-1 col-md-10 offset-md-1">
    		
    		<?php 
    			include('add_client_all_client.php');

    			if (isset($_POST['search'])) {

    				$search = $_POST['searchinput'];

		            $sql ="SELECT * FROM all_client where 
		            website LIKE '%$search%' OR 
		            hosting LIKE '%$search%' OR
		            hostingsize LIKE '%$search%' OR
		            name LIKE '%$search%' OR
		            phone LIKE '%$search%' OR
		            email LIKE '%$search%' OR
		            country LIKE '%$search%' OR
		            district LIKE '%$search%' OR
		            upazila LIKE '%$search%' OR
		            upazila LIKE '%$search%' OR
		            service LIKE '%$search%'
		            ";
		            $result = $conn->query($sql);

	        ?>

	        <h4 class="form-group"> you search by this keword <span class="bgRedTextWhite"> <?php echo $search?> </span> and got these results </h4>

	        <?php } 

	        include('clientDashboard.php');

	        ?>

		</div>
    </div>
</div>


<?php 
    include('footer.php');
?>