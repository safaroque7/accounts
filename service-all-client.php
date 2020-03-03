<?php 
    $sql ="SELECT count(id) as total FROM all_client ORDER BY id DESC ";
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
                $sql ="SELECT * FROM all_client ORDER BY id DESC ";
                $result = $conn->query($sql);
            ?>

            <?php while ($rows = mysqli_fetch_assoc($result)) { 
                
                include('client-list.php');
                
             } ?>
         
        </nav>
    </div>

</div>