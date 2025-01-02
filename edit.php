<?php include 'connect.php'; ?>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="icon/all.min.css" />
    <link rel="stylesheet" href="icon/fontawesome.min.css" />
    <link rel="stylesheet" href="style.css" />
 
    <!-- navbar start -->
    
    <!-- navbar end -->

<div id="main-content">
    <h2 class="fw-bolder text-center">Update Record</h2>

    <?php
    if(isset($_GET['id'])){
    $cid = $_GET['id'];
    $Uquery = "SELECT * from cust_info where C_ID = $cid";
    $result = $pdo->query($Uquery);

    if($result){
        while($value = $result->fetch()){

    
    
    ?>

    <form action="updatedata.php" class="post-form"  method="post">
      <div class="form-group">
          <label>C_F_Name</label>
          <input type="hidden" name="cid" value="<?php echo $value['C_ID'];?>"/>
          <input type="text" name="fname" value="<?php echo $value['C_F_Name'];?>"/>
      </div>
      <div class="form-group">
          <label>C_L_Name</label>
          <input type="text" name="lname" value="<?php echo $value['C_L_Name'];?>"/>
      </div>
     
      <div class="form-group">
          <label>C_Email</label>
          <input type="text" name="email" value="<?php echo $value['C_Email'];?>"/>
      </div>
      <div class="form-group">
          <label>C_age</label>
          <input type="text" name="age" value="<?php echo $value['C_age'];?>"/>
      </div>
      <div class="form-group">
          <label>C_Add</label>
          <input type="text" name="add" value="<?php echo $value['C_Add'];?>"/>
      </div>
      <div class="form-group">
          <label>C_Gender</label>
          <input type="text" name="gender" value="<?php echo $value['C_Gender'];?>"/>
      </div>
      <div class="form-group">
          <label>C_Phone</label>
          <input type="text" name="phone" value="<?php echo $value['C_Phone'];?>"/>
      </div>


      
      <div class="form-group">
          <label>C_Fees</label>
          <input type="text" name="fees" value="<?php echo $value['C_Fee'];?>"/>
      </div>
      <input class="btn btn-primary submit" type="submit" value="Update"/>
    </form>
    <?php
        }
    }
  }
    ?>
</div>
</div>
</body>
</html>
