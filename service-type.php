<?php
    //for header
    include('header.php');
?>
            

<div class="main-content">
    <div class="row">
        <div class="col-md-6 ml-5">

            <?php include('add_service.php') ?>

            <form action="insert-service.php" method="POST" enctype="multipart/form-data">

                <div class="row">
                    <div class="col-md-6">

                        <!-- hosting provider name -->
                        <div class="form-group">
                            <label for="service"> service type </label>
                            <input type="text" name="service" id="service" class="form-control" autofocus required="">
                        </div>

                    </div>

                </div>

                <input type="submit" value="submit" name ="submit" class="btn btn-dark">

            </form>

        </div>

        

        <?php 
		    $sql ="SELECT count(id) as total FROM services ORDER BY id DESC ";
		    $result = $conn->query($sql);
		    $rows = mysqli_fetch_assoc($result);
		?>


		<div class="col-md-3">
		    <div class="card-header bg-success text-white">
		        <p> all services (<?php echo $rows['total'];?>)  </p>    
		    </div>

		    <div class="card-body bg-white">
		        <nav class="all-client">

		            <?php 
		                $sql ="SELECT * FROM services ORDER BY id DESC ";
		                $result = $conn->query($sql);
		            ?>

		            <?php while ($rows = mysqli_fetch_assoc($result)) { ?>
		                
		                <li> 
		                  <a href="edit-service.php?id=<?php echo $rows['id'];?>">
		                      <span class="row p-0 m-0">
		                          <span class="col-md-2 p-2 m-0 sl">
		                              <p> <?php echo $rows['id']; ?> </p>
		                          </span>
		                          
		                          <div class="col-md-8 client-name"> 
		                              <h2> <?php echo $rows['service']; ?> </h2>
		                          </div>
		                      </span>
		                  </a>
		              </li>
		                
		             <?php } ?>
		         
		        </nav>
		    </div>

		</div>







    </div>
</div>


<?php 
    include('footer.php');
?>