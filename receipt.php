<?php
    //for header
    include('header.php');
?>

<?php 
    $sql ="SELECT * FROM all_client ";
    $result = $conn->query($sql);
             
?>


<div class="main-content">
    <div class="row">
        <div class="col-md-6 ml-5">

            <?php include('add_client_all_client.php') ?>

            <form action="insert-income.php" method="POST" enctype="multipart/form-data">

                <!-- website -->
                <div class="form-group">
                    <label for="web"> website name </label>
                    <select name="web" id="web" required class="form-control">
                        <option value="#"> -- select one -- </option>
                        <?php while ($rows = mysqli_fetch_assoc($result)) { ?>
                            <option value="<?php echo $rows['website'] ?>"> 
                                <?php echo $rows['website'] ?> 
                            </option>
                        <?php } ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="source"> source </label> <br>
                    <select name="source" id="source" class="form-control">
                        <option value="website"> -- select one -- </option>
                        <option value="domain"> domain </option>
                        <option value="hosting"> hosting </option>
                        <option value="website"> website </option>
                        <option value="support"> support </option>
                    </select>
                </div>

                 <!-- payment figure  -->
                <div class="form-group">    
                    <label for="payment"> payment figure </label>    
                    <input type="number" name="payment" id="payment" class="form-control" required>
                </div>

                <!-- date figure  -->
                <div class="form-group">    
                    <label for="date"> date </label>    
                    <input type="date" name="pdate" id="date" class="form-control" required>
                </div>

                <input type="submit" value="submit" name="submit" class="btn btn-info">
                
            </form>

        </div>

        <?php include('service-all-client.php'); ?>

    </div>
</div>


<?php 
    include('footer.php');
?>