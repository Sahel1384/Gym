<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="icon/all.min.css" />
    <link rel="stylesheet" href="icon/fontawesome.min.css" />
    <title>Document</title>
</head>
<body>
<body class="bg-secondary">
    <div class="container">
      <div class="row">
        <div class="col-12 p-5 text-center d-flex justify-content-center align-content-center">
          <?php
include('connect.php');
        if(isset($_GET['id'])){
           glob($a_ID = $_GET['id']); 

            $select = "SELECT * FROM workout_plan WHERE id = $a_ID";
            $sresult = $pdo->query($select); while($value = $sresult->fetch()){
          echo '
          <form method="post" class="form bg-dark p-5 rounded shadow-lg">
              <h3 class="text-white m-4">Do You Want to Accept This Member ?</h3>
              <input type="text" value='.$value['id'].' name="k" class="form-control mt-3 "
              name="user">
            <input type="text" value='.$value['body_move'].' name="k1" class="form-control mt-3 "
            name="user">
            <input type="text" value='.$value['sit'].' name="k2" class="form-control mt-3 "
            name="user">
            <input type="text" value='.$value['set_quantity'].' name="k3" class="form-control mt-3 "
            name="user">
            <input type="text" value='.$value['set_duration'].' name="k4" class="form-control mt-3 "
            name="user">
            <input type="text" value='.$value['set_break'].' name="k5" class="form-control mt-3 "
            name="user">
            <input type="text" value='.$value['move_day'].' name="k6" class="form-control mt-3 "
            name="user">
            <input type="text" value='.$value['sent'].' name="k8" class="form-control mt-3 "
            name="user">
            <input type="text" value='.$value['Date'].' name="k7" class="form-control mt-3 "
            name="user">
            <input
              type="submit"
              value="ACCEPT"
              class="btn btn-success mt-3 w-50 fs-6 fw-bolder"
              name="submit"
            />
          </form>
          ';
          if(isset($_POST['submit'])){

            $k = $_POST['k'];
            $k1 = $_POST['k1'];
            $k2 = $_POST['k2'];
            $k3 = $_POST['k3'];
            $k4 = $_POST['k4'];
            $k5 = $_POST['k5'];
            $k6 = $_POST['k6'];
            $k8 = $_POST['k8'];
            $k7 = $_POST['k7'];
          

          $insert = "UPDATE workout_plan Set id = '$k' body_move = '$k1', sit = '$k2', set_quantity = '$k3', set_duration = '$k4', set_break = '$k5', move_day = '$k6', sent = '$k8', Date = '$k7'";
          $r = $pdo->query($insert);
            if($r){
                header('location:dashboard.php');
            }
            }}}
            ?>
            </div>
            </div>
            </div>
</body>
</html>