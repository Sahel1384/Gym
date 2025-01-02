<?php include 'connect.php'; ?>
<link rel="stylesheet" href="bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="icon/all.min.css" />
    <link rel="stylesheet" href="icon/fontawesome.min.css" />
    <link rel="stylesheet" href="style.css" />

    <!-- navbar start -->
   
    <!-- navbar end -->

    <?php
        if(isset($_POST['deletebtn'])){
            $did = $_POST['did'];
            $Uquery = "DELETE  from cust_info where C_ID = $did";
            $result = $pdo->query($Uquery);
        header('location: admin.php');
        }     
    ?>

<div id="main-content">
    <h2 class="fw-bolder text-center">Delete Record</h2>
    <form class="post-form" action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="did" />
        </div>
        <input class="submit" type="submit" name="deletebtn" value="Delete" />
    </form>
    
</div>
</div>
</body>
</html>
