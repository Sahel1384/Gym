<?php include 'connect.php'; ?>
<link rel="stylesheet" href="bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="icon/all.min.css" />
    <link rel="stylesheet" href="icon/fontawesome.min.css" />
    <link rel="stylesheet" href="style.css" />

    <!-- navbar start -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="">Gym</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="me-auto mx-auto">
          <li class="">
              <a class="" aria-current="page" href="admin.php">Home</a>
            </li>
            <li class="">
              <a class="" aria-current="page" href="updatedataonsearch.php">Update</a>
            </li>
            <li class="">
              <a class="" aria-current="page" href="deleteonsearch.php">Delete</a>
            </li>
            
            <!-- <li class="dropdown">
              <a
                class="dropdown-toggle"
                href="#"
                id="navbarDropdown"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                More files..
              </a>
              <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Registration</a></li>
                <li><a class="dropdown-item" href="#">Sign in</a></li>
                <li><hr class="dropdown-divider" /></li>
                <li>
                  <a class="dropdown-item" href="workout.html">workout plan</a>
                </li>
              </ul>
            </li> -->
            
          </ul>
          <form class="d-flex">
            <input
              class="form-control me-2"
              type="search"
              placeholder="Search"
              aria-label="Search"
            />
            <button class="btn btn-outline-success" type="submit">
              Search
            </button>
          </form>
        </div>
      </div>
    </nav>
    <!-- navbar end -->



<div id="main-content">
    <h1 class="text-center fw-bolder">Edit Record</h1>
    <form class="post-form mb-2" action="<?php $_SERVER['PHP_SELF'];?>" method="post">
        <div class="form-group">
            <label>Enter Your ID :</label>
            <input type="text" name="cid" />
        </div>
        <input class="submit" type="submit" name="showbtn" value="Show" />
    </form>

    <?php
    if(isset($_POST['showbtn'])){
    $cid = $_POST['cid'];
    $Uquery = "SELECT * from cust_info where C_ID = $cid";
    $result = $pdo->query($Uquery);

    if($result){
        while($value = $result->fetch()){
    
    ?>

    <form class="post-form" action="updatedata.php" method="post">
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
          <label>Months</label>
          <select name="sclass">
              <option value="1">jan</option>
              <option value="2">Fab</option>
              <option value="3">Mai</option>
          </select>
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
