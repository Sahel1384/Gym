<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Client Confirmation</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="icon/all.min.css" />
    <link rel="stylesheet" href="icon/fontawesome.min.css" />
  </head>
  <body class="bg-secondary">
    <div class="container">
      <div class="row">
        <div class="col-12 p-5 text-center d-flex justify-content-center align-content-center">
          <?php
include('connect.php');
        if(isset($_GET['id'])){
           glob($a_ID = $_GET['id']); 

            $select = "SELECT * FROM client_sign_up WHERE id = $a_ID";
            $sresult = $pdo->query($select); while($value = $sresult->fetch()){
          echo '
          <form method="post" class="form bg-dark p-5 rounded shadow-lg">
              <h3 class="text-muted m-4">Do You Want to Accept This Member ?</h3>
            <input type="text" value='.$value['username'].' class="form-control mt-3 "
            name="user"> <input type="text" value='.$value['password'].'
            class="form-control mt-3 " name="pass">
            <input
              type="submit"
              value="ACCEPT"
              class="btn btn-success mt-3 w-50 fs-6 fw-bolder"
              name="submit"
            />
          </form>
          ';
          if(isset($_POST['submit'])){
            $user = $_POST['user'];
            $pass = $_POST['pass'];

            $sselect = "SELECT * FROM client_confirmation WHERE username = '$user'";
            $ssresult = $pdo->query($sselect);
            $num = $ssresult->fetchColumn();

            if($num > 0){
                echo '<script>alert("'.$user.' : IS ALREADY EXIST")</script>';
            }
            else{
                $insert = "INSERT INTO client_confirmation VALUES($a_ID, '$user', '$pass')";
            $iresult = $pdo->query($insert);

            if($iresult){
                $dqr = "DELETE FROM client_sign_up WHERE id = $a_ID";
                $dresult = $pdo->query($dqr);
                header('location:dashboard.php');
            }
            }

            
        } }
          } ?>
        </div>
      </div>
    </div>
  </body>
</html>
