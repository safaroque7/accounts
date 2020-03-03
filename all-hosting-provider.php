<?php 
    $sql ="SELECT count(id) as total FROM hostingprovider ORDER BY id DESC ";
    $result = $conn->query($sql);
    $rows = mysqli_fetch_assoc($result);
?>


<div class="col-md-3">
    <div class="card-header bg-success text-white">
        <p> all client <?php echo $rows['total'];?>  </p>    
    </div>

    <div class="card-body bg-white">
        <nav class="all-client">

            <?php 
                $sql ="SELECT * FROM hostingprovider ORDER BY id DESC ";
                $result = $conn->query($sql);
            ?>

            <?php while ($rows = mysqli_fetch_assoc($result)) { ?>
                
                <li> 
                  <a href="edit-hosting-provider.php?id=<?php echo $rows['id'];?>">
                      <span class="row p-0 m-0">
                          <span class="col-md-2 p-2 m-0 sl">
                              <p> <?php echo $rows['id']; ?> </p>
                          </span>
                          <div class="col-md-2 p-0 m-0 client-image"> 
                              <?php 
                                  $photo = $rows['image']; 
                                  if ($photo) { ?>
                                      <img class="rounded-circle" src=" <?php echo $photo; ?> " alt="">
                                  <?php } else { ?>
                                      <i class="fas fa-user"></i>
                                  <?php } ?>
                          </div>
                          <div class="col-md-8 client-name"> 
                              <h2> <?php echo $rows['name']; ?> </h2>
                              <p> <?php echo $rows['address']; ?> </p>
                          </div>
                      </span>
                  </a>
              </li>
                
             <?php } ?>
         
        </nav>
    </div>

</div>