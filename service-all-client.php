<div class="col-md-2">

    

    <div class="service-cateogry form-group">
        <div class="card-header bg-primary text-white">
            <p> service category </p>
        </div>
        <div class="card-body bg-white">

            <!-- domain -->
            <div class="form-group">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="domain" id="gridCheck">
                  <label class="form-check-label" for="gridCheck"> domain </label>
                </div>
          </div>
            
            <!-- hosting -->
            <div class="form-group">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="hosting" id="gridCheck">
                  <label class="form-check-label" for="gridCheck"> hosting </label>
                </div>
          </div>
            
            <!-- website -->
            <div class="form-group">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="website" id="gridCheck">
                  <label class="form-check-label" for="gridCheck"> website </label>
                </div>
          </div>
            
            <!-- website support -->
            <div class="form-group">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="website support" id="gridCheck">
                  <label class="form-check-label" for="gridCheck"> website support </label>
                </div>
          </div>
            
            <!-- graphic -->
            <div class="form-group">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="graphic" id="gridCheck">
                  <label class="form-check-label" for="gridCheck"> graphic </label>
                </div>
          </div>

        </div>
    </div>


    <div class="website-category">
        <div class="card-header bg-primary text-white">
            <p> website category </p>
        </div>
        <div class="card-body bg-white">

            <!-- online news portal -->
            <div class="form-group">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="webstite-category" id="gridRadios1" value="online news portal">
                  <label class="form-check-label" for="gridRadios1"> online news portal </label>
                </div>
            </div>

            <!-- official website -->
            <div class="form-group">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="webstite-category" id="gridRadios1" value="official website">
                  <label class="form-check-label" for="gridRadios1"> official website </label>
                </div>
            </div>                    

            <!-- personal website -->
            <div class="form-group">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="webstite-category" id="gridRadios1" value="personal website">
                  <label class="form-check-label" for="gridRadios1"> personal website </label>
                </div>
            </div>                    

            <!-- personal website -->
            <div class="form-group">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="webstite-category" id="gridRadios1" value="school college website">
                  <label class="form-check-label" for="gridRadios1"> school college website </label>
                </div>
            </div>    
        </div>
    </div>
</div>


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