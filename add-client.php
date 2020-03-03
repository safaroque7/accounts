<?php
    //for header
    include('header.php');
?>
            

<div class="main-content">
    <div class="row">
        <div class="col-md-6 ml-5">

            <?php include('add_client_all_client.php') ?>

            <form action="insert-client.php" method="POST" enctype="multipart/form-data">

                <div class="row">
                    <div class="col-md-6">
                        <!-- website -->
                        <div class="form-group">
                            <label for="website"> website </label>
                            <input type="text" name="website" id="website" class="form-control" required="">
                        </div>
                    </div>

                    <div class="col-md-3">
                        
                        <?php 
                            $sql = "SELECT * FROM hostingprovider";
                            $result = $conn->query($sql);   
                            
                        ?>


                        <div class="form-group">
                            <label for="hosting"> hosting </label>
                            <select name="hosting" id="hosting" class="form-control">
                                <option value="#"> -- select one -- </option>
                                
                                <?php 
                                    if ($rows = mysqli_fetch_assoc($result)) { ?>
                                        <option value="<?php echo $rows['name'];?>"> <?php echo $rows['name']; ?> </option>
                                    <?php } ?>
                            </select>

                        </div>
                    </div>

                    <div class="col-md-3">
                        <?php 
                            $sql = "SELECT * FROM hostingsize";
                            $result = $conn->query($sql);
                        ?>                        
                        <div class="form-group">
                            <label for="hosting"> hosting Size </label>
                            <select name="hostingsize" id="hosting" class="form-control">
                                <option value="#"> -- select GB -- </option>

                                    <?php while($rows = mysqli_fetch_assoc($result)) { ?>
                                        <option value="<?php echo $rows['hostingsizelimit'];?>"> 
                                            <?php echo $rows['hostingsizelimit'];?> GB 
                                        </option>
                                    <?php } ?> 

                                
                            </select>

                        </div>
                    </div>

                </div>

                <!-- name -->
                <div class="form-group">
                    <label for="name"> name </label>
                    <input type="text" name="name" id="name" class="form-control">
                </div>
                
                <!-- phone number -->
                <div class="form-group">
                    <label for="phonenumber"> phone number </label>
                    <input type="text" name="phone" id="phone" class="form-control">
                </div>

                 <!-- phone number -->
                <div class="form-group">
                    <label for="email"> email </label>
                    <input type="email" name="email" id="email" class="form-control">
                </div>

                 <!-- phone number -->
                <div class="form-group">
                    <label for="country"> country </label>
                    <input type="text" name="country" id="country" class="form-control">
                </div>

                 <!-- phone number -->
                <div class="form-group">
                    <label for="district"> district </label>
                    <input type="text" name="district" id="district" class="form-control">
                </div>

                 <!-- phone number -->
                <div class="form-group">
                    <label for="upazila"> upazila </label>
                    <input type="text" name="upazila" id="upazila" class="form-control">
                </div>

                <div class="form-group">
                    <label for="client-photo"> client photo </label>
                    <input type="file" name="photo" id="client-photo" class="form-control">
                </div>

                <input type="submit" value="submit" name ="submit" class="btn btn-primary">

            </form>

        </div>

        <?php include('service-all-client.php'); ?>

    </div>
</div>


<?php 
    include('footer.php');
?>