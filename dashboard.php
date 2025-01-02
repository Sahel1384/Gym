<!-- <?php 
include ("session.php");
 ?> -->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Dashboard</title>
    <!-- bootstrap icons and bootstrap min css links -->
    <link
      href="assets/vendor/bootstrap/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="assets/vendor/bootstrap-icons/bootstrap-icons.css"
      rel="stylesheet"
    />
    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="signin.css">

    <!-- fontawesome link  -->
    <link rel="stylesheet" href="icon/all.min.css" />
    <link rel="stylesheet" href="icon/fontawesome.min.css" />
  </head>

  <body>
    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">
      <div class="d-flex align-items-center justify-content-between">
        <a href="index.html" class="logo d-flex align-items-center">
          <img src="assets/img/logo.png" alt="" />
          <span class="d-none d-lg-block">Dashboard</span>
        </a>
        <i class="bi bi-list toggle-sidebar-btn"></i>
      </div>
      <!-- End Logo -->

      <div class="search-bar">
        <form
          class="search-form d-flex align-items-center"
          method="POST"
          action="#"
        >
          <input
            type="text"
            name="query"
            placeholder="Search"
            title="Enter search keyword"
          />
          <button type="submit" title="Search">
            <i class="bi bi-search"></i>
          </button>
        </form>
      </div>
      <!-- End Search Bar -->

      <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">
          <li class="nav-item d-block d-lg-none">
            <a class="nav-link nav-icon search-bar-toggle" href="#">
              <i class="bi bi-search"></i>
            </a>
          </li>
          <!-- End Search Icon-->

          <li class="nav-item form-check form-switch">
            <a class="nav-link nav-icon" href="#" id="moonbtn">
              <input type="checkbox" class="form-check-input" />
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link nav-icon" href="#accept">
              <i class="bi bi-bell"></i>
              <span class="badge badge-number">
                <?php
            include('connect.php');

            $query = "SELECT COUNT(id) from client_sign_up";
            $result = $pdo->prepare($query);
            $result->execute();
            $count = $result->fetchColumn();
            echo '<span class="text-light text-center">'.$count.'</span>';
            echo '<span class="text-light fw-bolder"></span>';
             ?>
              </span>
            </a>
            <!-- End Notification Icon -->
          </li>
          <!-- End Notification Nav -->

          <li class="nav-item">
            <a class="nav-link nav-icon" href="#request">
              <i class="bi bi-chat-left-text"></i>
              <span class="badge badge-number">
              <?php
            include('connect.php');

            $query = "SELECT COUNT(id) from workout_request";
            $result = $pdo->prepare($query); $result->execute(); $count =
                $result->fetchColumn(); echo '<span
                  class="text-light text-center"
                  >'.$count.'</span
                >'; echo '<span class="text-light fw-bolder"></span>'; ?>
              </span> </a
            >
          </li>

          <!-- logout button -->
          <li class="nav-item">
            <a class="nav-link nav-icon" href="#">
              <a href="logout.php" title="Logout from Dashboard"
                ><button
                  type="button"
                  name="logout"
                  class="btn fs-4"
                  id="logout"
                >
                  <i class="fa fa-sign-out fs-3"></i>
                  <!-- <i class="bi bi-box-arrow-right"></i> -->
                </button>
              </a> </a
            ><!-- End logout Icon -->
          </li>
        </ul>
      </nav>
      <!-- End Icons Navigation -->
    </header>
    <!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">
      <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#dashboard">
            <i class="bi bi-grid"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <!-- End Dashboard  -->
        <li class="nav-item">
          <a class="nav-link collapsed" href="#tables">
            <i class="bi bi-menu-button-wide"></i><span>Tables</span>
          </a>
        </li>
        <!-- End Tables Nav -->

        <li class="nav-item">
          <a class="nav-link collapsed" href="#update">
            <i class="bi bi-pencil-square"></i><span>UPDATE</span>
          </a>
        </li>
        <!-- End update  -->

        <li class="nav-item">
          <a class="nav-link collapsed" href="#delete">
            <i class="bi bi-trash"></i><span>DELETE</span>
          </a>
        </li>
        <!-- end delete -->
        <li class="nav-item">
          <a class="nav-link collapsed" href="#alladmin">
            <i class="fa fa-users"></i><span>All Admins</span>
            <span class='badge badge-number bg-success fs-6 fw-bolder ms-auto'>
            <?php
            include('connect.php');

            $query = "SELECT COUNT(id) from dashboard_sign_up";
            $result = $pdo->prepare($query); $result->execute(); $count =
                $result->fetchColumn(); echo '<span
                  class="text-light text-center"
                  >'.$count.'</span
                >'; echo '<span class="text-light fw-bolder"></span>'; ?>
            </span>
          </a>
        </li>
        <!-- End  all admin-->


        <li class="nav-item">
          <a class="nav-link collapsed" href="#newadmin">
            <i class="fa fa-user"></i><span class=''>Add New Admin
              <span class='badge badge-number bg-danger ms-5'>New</span>
            </span>
          </a>
        </li>

        <!-- End Add new admin Nav -->

        <li class="nav-item">
          <a class="nav-link collapsed" href="#allmembers">
            <i class="bi bi-layout-text-window-reverse"></i
            ><span>All Members
              <span class="badge badge-number bg-primary ms-5 fs-6 ">
              <?php
            include('connect.php');

            $query = "SELECT COUNT(id) from client_confirmation";
            $result = $pdo->prepare($query); $result->execute(); $count =
                $result->fetchColumn(); echo '<span
                  class="text-light text-center"
                  >'.$count.'</span
                >'; echo '<span class="text-light fw-bolder"></span>'; ?>
              </span>
            </span>
          </a>
        </li>
        
      </ul>
    </aside>
    <!-- End Sidebar-->

    <main id="main" class="main">
      <!-- Page name -->
      <div class="pagetitle">
        <h1 id="dashboard">Dashboard</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item text-info">Dashboard</li>
          </ol>
        </nav>
      </div>
      <!-- End Page Title -->

      <section class="section dashboard">
        <div class="row gy-2">
          <!-- cols start -->
          <div class="col-lg-12">
            <div class="row gy-2 gx-2">
              <!-- all fees start-->
              <div class="col-md-3">
                <a href="#registration">
                <div
                  class="allfees d-flex flex-column justify-content-center align-items-center"
                >
                  <!-- <span class="bi bi-currency-dollar text-light fs-3"></span> -->
                  <?php
            include('connect.php');

            $query = "SELECT COUNT(C_ID) from cust_info";
            $result = $pdo->prepare($query); $result->execute(); $count =
                  $result->fetchColumn(); echo '<span
                    class="text-light fs-3 text-center"
                    >'.$count.'</span
                  >'; echo '<span class="text-light fw-bolder"
                    >Total Registration</span
                  >'; ?>
                </div>
              </a>
              </div>
              <!-- End all fees -->

              <!-- count Card -->
              <div class="col-md-3">
                <a href="#registration">
                  <div
                  class="count d-flex flex-column justify-content-center align-items-center"
                >
                  <!-- <span class="bi bi-currency-dollar text-light fs-3"></span> -->
                  <?php
            include('connect.php');

            $query = "SELECT sum(C_Fee) from cust_info";
            $result = $pdo->prepare($query); $result->execute(); $count =
                  $result->fetchColumn(); echo '<span
                    class="text-light fs-3 text-center"
                    >'.$count.'</span
                  >'; echo '<span class="text-light fw-bolder">Total Fees</span
                  >'; ?>
                </div>
                </a>
                
              </div>
              <!-- End count Card -->

              <!-- pink Card -->
              <div class="col-md-3">
                <a href="#allmembers">
                   <div
                  class="pink d-flex flex-column justify-content-center align-items-center"
                >
                <?php
            include('connect.php');

            $query = "SELECT count(id) from client_confirmation";
            $result = $pdo->prepare($query); $result->execute(); $count =
                  $result->fetchColumn(); echo '<span
                    class="text-dark fs-3 text-center"
                    >'.$count.'</span
                  >'; echo '<span class="text-dark fw-bolder">Total Members</span
                  >'; ?>
              </div>
                </a>
               
              </div>
              <!-- End pink Card -->

              <!-- tomato Card -->
              <div class="col-md-3">
                <a href="#alladmin">
                   <div
                  class="tomato d-flex flex-column justify-content-center align-items-center"
                >
                <?php
            include('connect.php');

            $query = "SELECT count(id) from dashboard_sign_up";
            $result = $pdo->prepare($query); $result->execute(); $count =
                  $result->fetchColumn(); echo '<span
                    class="text-dark fs-3 text-center"
                    >'.$count.'</span
                  >'; echo '<span class="text-dark fw-bolder">Total Admins</span
                  >'; ?>
                </div>
                </a>
               
              </div>
              <!-- End tomato Card -->

              <!--  -->
            </div>
          </div>
          <!-- cols end -->
        </div>
        <!-- hr line -->
        <hr />
        <!-- cols end -->

        <!-- tables row -->
        <div class="row gy-2 mt-2">
          <h1 class="mt-4 mb-4" id="tables">Tables</h1>
          <hr />

               <!-- table of  Accept-->
               
           <div class="col-12" id='accept'>
           <h3 class="text-center mt-3 mb-4">Table of Confirmation</h3>
            <!-- == All Accept Data Print in Tables == -->
            <?php
       include('connect.php');
       $query = "SELECT * from client_sign_up";
       $result = $pdo->query($query); if($result){ 
           echo "
           <div class='table-responsive'>
             ";
           echo "
           <table class='table table-bordered text-center'>
             "; echo "
             <tr>
               "; echo "
               <th>ID</th>
               "; echo "
               <th>Username</th>
               "; echo "
               <th>Password</th>
               "; echo "
               <th>Accept</th>
               <th>Delete</th>
               "; echo "
             </tr>
             "; while($value = $result->fetch()){ echo "
             <tr>
               "; echo '
               <td>'.$value['id'].'</td>
               '; echo '
               <td>'.$value['username'].'</td>
               '; echo '
               <td>'.$value['password'].'</td>
               '; echo '
               <td>
                 '. '<a href="client_confirmation.php?id='.$value['id'].'"
                   ><button type="button" class="btn btn-success">Accept</button> </a
                 >'.'
               </td>
               <td>
                 '. '<a href="client_confirmation_delete.php?id='.$value['id'].'"
                   ><button type="button" class="btn btn-success">Delete</button> </a
                 >'.'
               </td>
               
               '; echo "
             </tr>
             "; } echo "
           </table>
        
           ";
           echo "
           <table class='table table-bordered'>
             "; }

     ?>
          </div>
          <!-- end  of  table Accept -->
          <!-- table registration start -->
          <div class="col-12 table-responsive" id='registration'>
            <!-- == All registration Data Print in Tables == -->
            <?php
    include 'connect.php';

    $query = "SELECT * from cust_info";
    $result = $pdo->query($query); if($result){ ?>
            <h3 class="text-center mt-3 mb-1">Table of Regisration</h3>
            <table class="text-center table table-bordered rounded">
              <tr>
                <th>C_ID</th>
                <th>C_FName</th>
                <th>C_LName</th>
                <th>C_Email</th>
                <th>C_age</th>
                <th>C_Gender</th>
                <th>C_Address</th>
                <th>C_Phone</th>
                <th>C_Fees</th>
                <th>Edit</th>
                <th>Delete</th>
              </tr>
              <?php
          while($value = $result->fetch()){ ?>
              <tr>
                <th><?php echo $value['C_ID']?></th>
                <td><?php echo $value['C_F_Name']?></td>
                <td><?php echo $value['C_L_Name']?></td>
                <td><?php echo $value['C_Email']?></td>
                <td><?php echo $value['C_age']?></td>
                <td><?php echo $value['C_Gender']?></td>
                <td><?php echo $value['C_Add']?></td>
                <td><?php echo $value['C_Phone']?></td>
                <td><?php echo $value['C_Fee']?></td>
                <td>
                  <a href="edit.php?id=<?php echo $value['C_ID'];?>">
                    <button type="button" class="btn btn-primary">Edit</button>
                  </a>
                </td>
                <td>
                  <a href="delete.php?id=<?php echo $value['C_ID'];?>">
                    <button type="button" class="btn btn-danger">Delete</button>
                  </a>
                </td>
              </tr>
              <?php } ?>
            </table>
            <?php } ?>
          </div>
          <!-- end of table table-responsive -->

          <!-- table of Request start -->
          <div class="col-12 table-responsive" id='request'>
          <h3 class="text-center mt-5 mb-3">Table of All Requests</h3>
                <table class="table table-bordered text-center">
                    <tr>
                        <th>h1</th>
                        <th>h2</th>
                        <th>h3</th>
                        <th>h4</th>
                        <th>h5</th>
                        <th>h6</th>
                        <th>h7</th>
                        <th>h8</th>
                        <th>h9</th>
                        <th>h10</th>
                        <th>h11</th>
                        <th>h12</th>
                        <th>Insert Plan</th>
                        <th>Delete</th>
                    </tr>
    <?php
    include("connect.php");
        $select = "SELECT * FROM workout_request";
        $result = $pdo->query($select);

        while($value = $result->fetch()){
            echo '<tr>
                <td>'.$value['id'].'</td>
                <td>'.$value['question1'].'</td>
                <td>'.$value['question2'].'</td>
                <td>'.$value['question3'].'</td>
                <td>'.$value['question4'].'</td>
                <td>'.$value['question5'].'</td>
                <td>'.$value['question6'].'</td>
                <td>'.$value['question7'].'</td>
                <td>'.$value['question8'].'</td>
                <td>'.$value['question9'].'</td>
                <td>'.$value['question10'].'</td>
                <td>'.$value['Email'].'</td>
                <td><a href="workout_plan_insert.php"><button type="button" class="btn btn-warning">INSERT PLAN</button></a></td>
                <td>
                      <a href="workout_plan_insert_delete.php?id='.$value['id'].'">
                        <button type="button" class="btn btn-danger">Delete</button>
                      </a>
                    </td>
            </tr>';
        }
    
    ?>
    </table>
            </div>
          <!-- table of Request end -->

          <!-- Table of Workout_Send -->
          <div class="col-12 table-responsive" id='request'>
          <h3 class="text-center mt-5 mb-3">Table of Workout Send</h3>
                <table class="table table-bordered text-center">
                <tr>
                  <th>No</th> <th>Body_Move</th> 
                  <th>Sets</th>
                  <th>Set_Quantity</th> 
                  <th>Set_Duration</th> 
                  <th>Set_Break</th> 
                  <th>Day</th>
                  <th>Date</th>
                  <th>Sent</th>
                  <th>Delete</th>
                  <th>Update</th>
              </tr>
    <?php
    include("connect.php");
        $select = "SELECT * FROM workout_plan";
        $result = $pdo->query($select);

        while($value = $result->fetch()){
            echo "<tr>
                    <td>".$value['id']."</td>
                    <td>".$value['body_move']."</td>
                    <td>".$value['sit']."</td>
                    <td>".$value['set_quantity']."</td>
                    <td>".$value['set_duration']."</td>
                    <td>".$value['set_break']."</td>
                    <td>".$value['move_day']."</td>
                    <td>".$value['Date']."</td>
                    <td>Send</td>
                    <td>
                      <a href='workout_send_delete.php?id=".$value['id']."'>
                        <button type='button' class='btn btn-danger'>Delete</button>
                      </a>
                    </td>
                    <td>
                      <a href='workout_send_update.php?id=".$value['id']."'>
                        <button type='button' class='btn btn-warning'>Update</button>
                      </a>
                    </td>
                </tr>";
        }
    
    ?>
    </table>
            </div>
          <!-- End of Workout_send Table -->

          <!-- table of all Members -->
          <div class="col-12 table-responsive" id='allmembers'>
          <h3 class="text-center mt-5 mb-3">Table of All Members</h3>
                <table class="table table-bordered text-center">
                    <tr>
                        <th>id</th>
                        <th>username</th>
                        <th>password</th>
                        <th>Delete</th>
                        
                    </tr>
    <?php
    include("connect.php");
        $select = "SELECT * FROM client_confirmation";
        $result = $pdo->query($select);

        while($value = $result->fetch()){
            echo '<tr>
                <td>'.$value['id'].'</td>
                <td>'.$value['username'].'</td>
                <td>'.$value['passsword'].'</td>
                <td>
                <a href="delete_all_member.php?id='.$value['id'].'">
                  <button type="button" class="btn btn-danger">Delete</button>
                </a>
              </td>
            </tr>';
        }
    
    ?>
    </table>
            </div>
          <!-- end of table all Members -->

          <!-- table of all admin -->
          <div class="col-12 table-responsive" id='alladmin'>
          <h3 class="text-center mt-5 mb-3">Table of All Admins</h3>
                <table class="table table-bordered text-center">
                    <tr>
                        <th>id</th>
                        <th>Email</th>
                        <th>password</th>
                        <th>Delete</th>
                        
                    </tr>
    <?php
    include("connect.php");
        $select = "SELECT * FROM dashboard_sign_up";
        $result = $pdo->query($select);

        while($value = $result->fetch()){
            echo '<tr>
                <td>'.$value['id'].'</td>
                <td>'.$value['email'].'</td>
                <td>'.$value['password'].'</td>
                <td>
                <a href="delete_admin.php?id='.$value['id'].'">
                  <button type="button" class="btn btn-danger">Delete</button>
                </a>
              </td>
            </tr>';
        }
    
    ?>
    </table>
            </div>
          <!-- end table of all admin -->

          <!-- Edit with search ID code start -->
          <div class="col-12">
            <div id="main-content">
              <h1 class="text-center fw-bolder" id="update">Edit Record</h1>
              <form
                class="post-form mb-2"
                action="<?php $_SERVER['PHP_SELF'];?>"
                method="post"
              >
                <div class="form-group">
                  <label>Enter Your ID :</label>
                  <input type="text" name="cid" placeholder="Enter Your ID"/>
                </div>
                <input
                  class="submit"
                  type="submit"
                  name="showbtn"
                  value="Show"
                />
              </form>

              <?php
    if(isset($_POST['showbtn'])){
    $cid = $_POST['cid'];
    $Uquery = "SELECT * from cust_info where C_ID = $cid";
    $result = $pdo->query($Uquery); if($result){ while($value =
              $result->fetch()){ ?>

              <form class="post-form" action="updatedata.php" method="post">
                <div class="form-group">
                  <label>C_F_Name</label>
                  <input
                    type="hidden"
                    name="cid"
                    value="<?php echo $value['C_ID'];?>"
                  />
                  <input
                    type="text"
                    name="fname"
                    value="<?php echo $value['C_F_Name'];?>"
                  />
                </div>
                <div class="form-group">
                  <label>C_L_Name</label>
                  <input
                    type="text"
                    name="lname"
                    value="<?php echo $value['C_L_Name'];?>"
                  />
                </div>

                <div class="form-group">
                  <label>C_Email</label>
                  <input
                    type="text"
                    name="email"
                    value="<?php echo $value['C_Email'];?>"
                  />
                </div>
                <div class="form-group">
                  <label>C_age</label>
                  <input
                    type="text"
                    name="age"
                    value="<?php echo $value['C_age'];?>"
                  />
                </div>
                <div class="form-group">
                  <label>C_Add</label>
                  <input
                    type="text"
                    name="add"
                    value="<?php echo $value['C_Add'];?>"
                  />
                </div>
                <div class="form-group">
                  <label>C_Gender</label>
                  <input
                    type="text"
                    name="gender"
                    value="<?php echo $value['C_Gender'];?>"
                  />
                </div>
                <div class="form-group">
                  <label>C_Phone</label>
                  <input
                    type="text"
                    name="phone"
                    value="<?php echo $value['C_Phone'];?>"
                  />
                </div>

                <div class="form-group">
                  <label>C_Fees</label>
                  <input
                    type="text"
                    name="fees"
                    value="<?php echo $value['C_Fee'];?>"
                  />
                </div>
                <input
                  class="btn btn-primary submit"
                  type="submit"
                  value="Update"
                />
              </form>
              <?php
        }
    }
}
    ?>
            </div>
          </div>
          <!--end of Edit with search ID code  -->
          <hr />
          <!-- Delete width search ID code start -->
          <div class="col-12">
            <?php
        if(isset($_POST['deletebtn'])){
            $did = $_POST['did'];
            $Uquery = "DELETE  from cust_info where C_ID = $did";
            $result = $pdo->query($Uquery); header('location:dashboard.php'); }
            ?>

            <div id="main-content">
              <h2 class="fw-bolder text-center" id="delete">Delete Record</h2>
              <form
                class="post-form"
                action="<?php echo $_SERVER['PHP_SELF']?>"
                method="post"
              >
                <div class="form-group">
                  <label>Enter Your ID :</label>
                  <input type="text" name="did" placeholder="Enter Your ID"/>
                </div>
                <input
                  class="submit"
                  type="submit"
                  name="deletebtn"
                  value="Delete"
                />
              </form>
            </div>
          </div>
          <hr />
          <!-- Delete width search ID code end -->
          <div class="col-12" id='newadmin'>
            
    <div class="container p-4 text-center">
      <div class="row">
        <div class="col-12 col-sm-12">
          <div class="mx-auto w-50">
          <div class="form-container">
	<p class="title">Create New Admin Account</p>
	<form class="form" method="post">
		<div class="input-group">
			<label for="username">Username</label>
			<input type="text" name="username" id="username" placeholder="Enter Your Username" required>
		</div>
		<div class="input-group">
			<label for="password">Password</label>
			<input type="password" name="password" id="password" placeholder="Enter Your Password" required>
			<div class="forgot">
				<a rel="noopener noreferrer" href="#">Forgot Password ?</a>
			</div>
		</div>
		<input class="sign" type='submit' name="submit" value="Sign up"/>
	</form>
	<div class="social-message">
		<div class="line"></div>
		<p class="message">Login with social accounts</p>
		<div class="line"></div>
	</div>
	<div class="social-icons">
		<button aria-label="Log in with Google" class="icon">
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="w-5 h-5 fill-current">
				<path d="M16.318 13.714v5.484h9.078c-0.37 2.354-2.745 6.901-9.078 6.901-5.458 0-9.917-4.521-9.917-10.099s4.458-10.099 9.917-10.099c3.109 0 5.193 1.318 6.38 2.464l4.339-4.182c-2.786-2.599-6.396-4.182-10.719-4.182-8.844 0-16 7.151-16 16s7.156 16 16 16c9.234 0 15.365-6.49 15.365-15.635 0-1.052-0.115-1.854-0.255-2.651z"></path>
			</svg>
		</button>
		<button aria-label="Log in with Twitter" class="icon">
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="w-5 h-5 fill-current">
				<path d="M31.937 6.093c-1.177 0.516-2.437 0.871-3.765 1.032 1.355-0.813 2.391-2.099 2.885-3.631-1.271 0.74-2.677 1.276-4.172 1.579-1.192-1.276-2.896-2.079-4.787-2.079-3.625 0-6.563 2.937-6.563 6.557 0 0.521 0.063 1.021 0.172 1.495-5.453-0.255-10.287-2.875-13.52-6.833-0.568 0.964-0.891 2.084-0.891 3.303 0 2.281 1.161 4.281 2.916 5.457-1.073-0.031-2.083-0.328-2.968-0.817v0.079c0 3.181 2.26 5.833 5.26 6.437-0.547 0.145-1.131 0.229-1.724 0.229-0.421 0-0.823-0.041-1.224-0.115 0.844 2.604 3.26 4.5 6.14 4.557-2.239 1.755-5.077 2.801-8.135 2.801-0.521 0-1.041-0.025-1.563-0.088 2.917 1.86 6.36 2.948 10.079 2.948 12.067 0 18.661-9.995 18.661-18.651 0-0.276 0-0.557-0.021-0.839 1.287-0.917 2.401-2.079 3.281-3.396z"></path>
			</svg>
		</button>
		<button aria-label="Log in with GitHub" class="icon">
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="w-5 h-5 fill-current">
				<path d="M16 0.396c-8.839 0-16 7.167-16 16 0 7.073 4.584 13.068 10.937 15.183 0.803 0.151 1.093-0.344 1.093-0.772 0-0.38-0.009-1.385-0.015-2.719-4.453 0.964-5.391-2.151-5.391-2.151-0.729-1.844-1.781-2.339-1.781-2.339-1.448-0.989 0.115-0.968 0.115-0.968 1.604 0.109 2.448 1.645 2.448 1.645 1.427 2.448 3.744 1.74 4.661 1.328 0.14-1.031 0.557-1.74 1.011-2.135-3.552-0.401-7.287-1.776-7.287-7.907 0-1.751 0.62-3.177 1.645-4.297-0.177-0.401-0.719-2.031 0.141-4.235 0 0 1.339-0.427 4.4 1.641 1.281-0.355 2.641-0.532 4-0.541 1.36 0.009 2.719 0.187 4 0.541 3.043-2.068 4.381-1.641 4.381-1.641 0.859 2.204 0.317 3.833 0.161 4.235 1.015 1.12 1.635 2.547 1.635 4.297 0 6.145-3.74 7.5-7.296 7.891 0.556 0.479 1.077 1.464 1.077 2.959 0 2.14-0.020 3.864-0.020 4.385 0 0.416 0.28 0.916 1.104 0.755 6.4-2.093 10.979-8.093 10.979-15.156 0-8.833-7.161-16-16-16z"></path>
			</svg>
		</button>
	</div>
	<p class="signup">Don't have an account?
		<a rel="noopener noreferrer" href="Regisration.php" class="">Registration</a>
	</p>
</div>
          </div>
        </div>
      </div>
    </div>

    <?php
    include('connect.php');
    if(isset($_POST['submit'])){
      $uname = $_POST['username'];
      $upass = $_POST['password'];
      $select = "INSERT into dashboard_sign_up values(null, '$uname', '$upass')";
      $S_result = $pdo->query($select);
    }
     ?>
   
          </div>
        </div>
      </section>
      <!-- end of section -->
    </main>
    <!-- End #main -->


    

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
  </body>
</html>
