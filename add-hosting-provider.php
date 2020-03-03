<?php
    //for header
    include('header.php');
?>
            

<div class="main-content">
    <div class="row">
        <div class="col-md-6 ml-5">

            <?php include('add_hosting_provider.php') ?>

            <form action="insert-hosting-provider.php" method="POST" enctype="multipart/form-data">

                <div class="row">
                    <div class="col-md-6">

                        <!-- hosting provider name -->
                        <div class="form-group">
                            <label for="name"> name </label>
                            <input type="text" name="name" id="name" class="form-control" required="">
                        </div>

                        <!-- phone -->
                        <div class="form-group">
                            <label for="phone"> phone </label>
                            <input type="text" name="phone" id="phone" class="form-control" required="">
                        </div>

                        <!-- email -->
                        <div class="form-group">
                            <label for="email"> email </label>
                            <input type="email" name="email" id="email" class="form-control" required="">
                        </div>

                        <!-- address -->
                        <div class="form-group">
                            <label for="address"> address </label>
                            <input type="text" name="address" id="address" class="form-control" required="">
                        </div>

                        <!-- facebook -->
                        <div class="form-group">
                            <label for="facebook"> facebook </label>
                            <input type="text" name="facebook" id="facebook" class="form-control" required="">
                        </div>

                        <!-- image -->
                        <div class="form-group">
                            <label for="image"> image [size upto 50 kb] </label>
                            <input type="file" name="image" id="image" class="form-control">
                        </div>

                    </div>

                </div>

                <input type="submit" value="submit" name ="submit" class="btn btn-dark">

            </form>

        </div>

        <?php include('all-hosting-provider.php'); ?>

    </div>
</div>


<?php 
    include('footer.php');
?>