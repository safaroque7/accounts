<?php
    //for header
    include('header.php');
?>


<div class="main-content">
    <div class="row">
        <div class="col-md-6 ml-5">

            <form action="insert-users.php" method="POST" enctype="multipart/form-data">
               
               <!-- user email -->
               <div class="form-group">
               		<label for="useremail"> user email </label>
               		<input type="email" name="useremail" id="useremail" class="form-control" required>
               </div>
              
               <!-- password                -->
               <div class="form-group">
               		<label for="password"> password </label>
               		<input type="password" name="password" id="password" class="form-control" required>
               </div>

              <!-- your name -->
               <div class="form-group">
                 <label for="yourname"> your name </label>
                 <input type="text" name="yourname" id="yourname" class="form-control">
               </div>

               <!-- image -->
               <div class="form-group">
                 <label for="yourimage"> your image </label>
                 <input type="file" name="yourimage" id="yourimage" class="form-control">
               </div>

               <input type="submit" value="create user" name="submit" class="btn btn-success">
                
            </form>

        </div>

    </div>
</div>


<?php 
    include('footer.php');
?>