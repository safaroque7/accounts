<?php
    //for header
    include('header.php');

    $id = $_GET['id'];

    $sql ="SELECT * FROM all_client WHERE id = '$id' ";
    $result = $conn->query($sql);
    $rows = mysqli_fetch_assoc($result);
?>
            

<div class="main-content">
    <div class="row">
        <div class="col-md-6 ml-5">

            <form action="update-all-client.php?id=<?php echo $rows['id'];?>" method="POST" enctype="multipart/form-data">

                <div class="row">
                    <div class="col-md-9">  <?php include('add_client_all_client.php') ?> </div>
                    <div class="col-md-3"> 
                        <?php include('update-button.php') ?>
                    </div>
                </div>
                

                <div class="row">
                    <div class="col-md-6">
                        <!-- website -->
                        <div class="form-group">
                            <label for="website"> website </label>
                            <input type="text" name="website" id="website" class="form-control" value="<?php echo $rows['website']; ?>" required>

                       </div>
                    </div>

                    <div class="col-md-3">
 
                        <div class="form-group">
                            <label for="hosting"> hosting </label>
                            <select name="hosting" id="hosting" class="form-control" value="<?php echo $rows['hosting']; ?>">

                                <option value="#"> -- select one for hosting -- </option>

                                <option value="linkon" <?php if ($rows['hosting'] == 'linkon'){echo 'selected';}?> > linkon </option>

                                <option value="adil" <?php if ($rows['hosting'] == 'adil'){echo 'selected';}?>> adil </option>

                            </select>

                        </div>
                      
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="hosting" value="<?php $rows['hostingsize'];?>"> hosting Size </label>
                            <select name="hostingsize" id="hosting" class="form-control">
                                <option value="#"> -- select GB -- </option>

                                    <option value="1" <?php if($rows['hostingsize'] == '1'){echo 'selected';}?> > 1 GB </option>
                                    <option value="2" <?php if($rows['hostingsize'] == '2'){echo 'selected';}?> > 2 GB </option>
                                    <option value="3" <?php if($rows['hostingsize'] == '3'){echo 'selected';}?> > 3 GB </option>
                                    <option value="4" <?php if($rows['hostingsize'] == '4'){echo 'selected';}?> > 4 GB </option>
                                    <option value="5" <?php if($rows['hostingsize'] == '5'){echo 'selected';}?> > 5 GB </option>
                                    <option value="6" <?php if($rows['hostingsize'] == '6'){echo 'selected';}?> > 6 GB </option>
                                    <option value="7" <?php if($rows['hostingsize'] == '7'){echo 'selected';}?> > 7 GB </option>
                                    <option value="8" <?php if($rows['hostingsize'] == '8'){echo 'selected';}?> > 8 GB </option>
                                    <option value="9" <?php if($rows['hostingsize'] == '9'){echo 'selected';}?> > 9 GB </option>
                                    <option value="10" <?php if($rows['hostingsize'] == '10'){echo 'selected';}?> > 10 GB </option>
                                    <option value="11" <?php if($rows['hostingsize'] == '11'){echo 'selected';}?> > 11 GB </option>
                                    <option value="12" <?php if($rows['hostingsize'] == '12'){echo 'selected';}?> > 12 GB </option>
                                    <option value="13" <?php if($rows['hostingsize'] == '13'){echo 'selected';}?> > 13 GB </option>
                                    <option value="14" <?php if($rows['hostingsize'] == '14'){echo 'selected';}?> > 14 GB </option>
                                    <option value="15" <?php if($rows['hostingsize'] == '15'){echo 'selected';}?> > 15 GB </option>
                                    <option value="16" <?php if($rows['hostingsize'] == '16'){echo 'selected';}?> > 16 GB </option>
                                    <option value="17" <?php if($rows['hostingsize'] == '17'){echo 'selected';}?> > 17 GB </option>
                                    <option value="18" <?php if($rows['hostingsize'] == '18'){echo 'selected';}?> > 18 GB </option>
                                    <option value="19" <?php if($rows['hostingsize'] == '19'){echo 'selected';}?> > 19 GB </option>
                                    <option value="20" <?php if($rows['hostingsize'] == '20'){echo 'selected';}?> > 20 GB </option>
     
                            </select>

                        </div>
                    </div>

                </div>

                
                <!-- name -->
                <div class="form-group">
                    <label for="name"> name </label>
                    <input type="text" name="name" id="name" value="<?php echo $rows['name']; ?>" class="form-control">
                </div>

                <!-- phone number -->
                <div class="form-group">
                    <label for="phonenumber"> phone number </label>
                    <input type="text" name="phone" id="phone" value="<?php echo $rows['phone']; ?>" class="form-control">
                </div>

                 <!-- phone number -->
                <div class="form-group">
                    <label for="email"> email </label>
                    <input type="email" name="email" id="email" value="<?php echo $rows['email']; ?>"  class="form-control">
                </div>

                 <!-- phone number -->
                <div class="form-group">
                    <label for="country"> country </label>
                    <input type="text" name="country" id="country" value="<?php echo $rows['country']; ?>" class="form-control">
                </div>

                 <!-- phone number -->
                <div class="form-group">
                    <label for="district"> district </label>
                    <input type="text" name="district" id="district" value="<?php echo $rows['district']; ?>" class="form-control">
                </div>

                 <!-- phone number -->
                <div class="form-group">
                    <label for="upazila"> upazila </label>
                    <input type="text" name="upazila" id="upazila" value="<?php echo $rows['upazila']; ?>" class="form-control">
                </div>

                <div class="form-group">
                    <label for="client-photo"> client photo </label> <br>

                    <img src="<?php echo $rows['photo']; ?>" alt="" id="edit_photo">

                    <input type="file" name="photo" id="client-photo" class="form-control">


                </div>

                <?php include('update-button.php') ?>
                <input type="submit" value="update" name ="update" class="btn btn-warning">


            </form>

        
        </div>


        <?php include('service-all-client.php'); ?>


    </div>
</div>


<?php 
    include('footer.php');
?>