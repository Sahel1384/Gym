<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SignUpSelection</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="icon/all.min.css" />
    <link rel="stylesheet" href="icon/fontawesome.min.css" />
    <style></style>
  </head>
  <body class="bg-secondary">
    <?php
    include('connect.php');
$query = "SELECT * from client_sign_up";
$result = $pdo->query($query); if($result){ 
    echo "
    <div class='table-responsive container row m-2 col-12'>
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
        "; echo "
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
      "; } ?>
  </body>
</html>
