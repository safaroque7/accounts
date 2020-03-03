<li> 
    <a href="edit-all-client.php?id=<?php echo $rows['id'];?>">
        <span class="row p-0 m-0">
            <span class="col-md-2 p-2 m-0 sl">
                <p> <?php echo $rows['id']; ?> </p>
            </span>
            <div class="col-md-2 p-0 m-0 client-image"> 
                <?php 
                    $photo = $rows['photo']; 
                    if ($photo) { ?>
                        <img class="rounded-circle" src=" <?php echo $photo; ?> " alt="">
                    <?php } else { ?>
                        <i class="fas fa-user"></i>
                    <?php } ?>
            </div>
            <div class="col-md-8 client-name"> 
                <h2> <?php echo $rows['name']; ?> </h2>
                <p> <?php echo $rows['district']; ?> </p>
            </div>
        </span>
    </a>
</li>