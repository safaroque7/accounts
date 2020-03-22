<?php
    //for header
    include('header.php');
?>

<?php 
    $id = $_GET['id'];

    $sql ="SELECT * FROM income WHERE id = '".$id."' ";
    $result = $conn->query($sql);
    $row = mysqli_fetch_assoc($result);
             
?>


<div class="main-content">
    <div class="row">
        <div class="col-md-6 ml-5">

            <?php include('add_new_receipt_all_receipt.php') ?>

            <form action="insert-income.php" method="POST" enctype="multipart/form-data">

                <!-- website -->
                <div class="form-group">
                    <label for="web"> website name </label>
                    <select name="web" id="web" required class="form-control">
                        <option value="#"> -- select one -- </option>
                        <option value="<?php echo $row['web'] ?>" selected> 
                                <?php if ($row['web'] == $row['web'] ) {echo $row['web']; } ?>
                        </option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="source"> Service type </label> <br>
                    <select name="source" id="source" class="form-control">
                        <option value="website"> -- select one -- </option>

                        <option value="<?php echo $row['source'] ?>" selected> 
                            <?php if ($row['source'] == $row['source'] ) {
                                echo $row['source'] ;
                            } ?>
                        </option>

                    </select>
                </div>

                 <!-- payment figure  -->
                <div class="form-group">    
                    <label for="payment"> Payment amount </label>    
                    <input type="number" name="payment" id="payment" class="form-control" value="<?php echo $row['payment']; ?>" required>
                </div>

                <!-- date figure  -->
                <div class="form-group">    
                    <label for="date"> Date </label>    
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