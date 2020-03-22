<?php
    //for header
    include('header.php');
?>
            

<div class="main-content">
    <div class="row">
    	<div class="offset-md-1 col-md-10 offset-md-1">
    		
    		<?php 
    			include('add_client_all_client.php');
	            $sql ="SELECT * FROM all_client ORDER BY id DESC ";
	            $result = $conn->query($sql);

	            include('clientDashboard.php');
	        ?>

		</div>
    </div>
</div>


<?php 
    include('footer.php');
?>