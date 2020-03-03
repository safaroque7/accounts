<?php
    //for header
    include('header.php');
?>

<div class="main-content">
    <div class="row ml-5">
        <div class="col-md-6">
            <div class="overview-wrap">
                <?php 
                    $sql = "SELECT count(id) AS total FROM all_client WHERE hosting = 'linkon'";
                    $result = $conn->query($sql);
                    $rows = mysqli_fetch_assoc($result);
                    $values = $rows['total'];
                ?>

                <h2 class="title-1"> linkon hosting's client email id (<?php echo $values; ?>) </h2>
                <?php include('linkon-adil.php'); ?>
                
            </div>

             <textarea name="" id="allemailid" cols="100%" rows="10" class="m-t-25">
                            
                <?php 
                    $sql ="SELECT * FROM all_client WHERE hosting = 'linkon'";                                
                    $result = $conn->query($sql);

                    while ($rows = mysqli_fetch_assoc($result)) {
                        echo $rows['email'] . '   '; 
                    }
                ?>
                
            </textarea>
         </div>


        <div class="col-md-3">
            <div class="card-header bg-success text-white">
                <?php 
                    $sql ="SELECT count(id) AS total FROM all_client WHERE hosting = 'linkon'";                                
                    $result = $conn->query($sql);
                    $rows = mysqli_fetch_assoc($result);  
                    $values = $rows['total'];
                ?>

                <p> all client (<?php echo $values;?>)  </p>
            </div>

            <div class="card-body bg-white">
                <nav class="all-client">

                    <?php 
                        $sql ="SELECT * FROM all_client WHERE hosting = 'linkon' ORDER BY id DESC ";
                        $result = $conn->query($sql);
                    ?>

                    <?php while ($rows = mysqli_fetch_assoc($result)) { 
                        
                        include('client-list.php');
                        
                     } ?>
                 
                </nav>
            </div>

        </div>
    </div>
</div>


<?php 
    include('footer.php');
?>