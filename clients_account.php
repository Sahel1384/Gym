
<?php
include('clients_account_session.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>clients_account</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="icon/all.min.css" />
    <link rel="stylesheet" href="icon/fontawesome.min.css" />
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <div class="container">
        <div class="row mt-5">
            
            <div class="col-12 text-center table-responsive">
                <h2>Your Information</h2>
              <table class='table table-bordered text-center'>
                <?php
                    include('connect.php');
                    if(isset($_GET['username'])){
                        $email = $_GET['username'];
                        $select = "SELECT * from client_confirmation where username = '$email' ";
                        $result = $pdo->query($select);
                   
                    
                ?>
                    <tr class='bg-dark text-light'>
                        <th>Your ID </th>
                        <th>Your Email Address </th>
                        <th>Your Password </th>
                    </tr>

                    <?php
                        while($value = $result->fetch()){
                            echo "<tr>";
                            echo "<td>".$value['id']."</td>";
                            echo "<td>".$value['username']."</td>";
                            echo "<td>".$value['passsword']."</td>";
                            echo "</tr>";
                        }
                    ?>
                        <?php
                         }
                        ?>
                </table>  
            </div>
            <div class="col-12 text-center table-responsive">
                <h2>Your Registration</h2>
              <table class='table table-bordered text-center'>
                <?php
                    include('connect.php');
                    if(isset($_GET['username'])){
                        $email = $_GET['username'];
                        $cust_select = "SELECT * from cust_info where C_Email = '$email' ";
                        $cust_result = $pdo->query($cust_select);
                   
                    
                ?>
                    <tr class='bg-dark text-light'>
                        <th>Your ID </th>
                        <th>Your First Name</th>
                        <th>Your Last Nmae</th>
                        <th>Your Email Address </th>
                        <th>Your age </th>
                        <th>Your Gender </th>
                        <th>Your Address </th>
                        <th>Your Phone_No </th>
                        <th>Your Fee </th>
                    </tr>

                    <?php
                        while($cust_value = $cust_result->fetch()){
                            echo "<tr>";
                            echo "<td>null</td>";
                            echo "<td>".$cust_value['C_F_Name']."</td>";
                            echo "<td>".$cust_value['C_L_Name']."</td>";
                            echo "<td>".$cust_value['C_Email']."</td>";
                            echo "<td>".$cust_value['C_age']."</td>";
                            echo "<td>".$cust_value['C_Gender']."</td>";
                            echo "<td>".$cust_value['C_Add']."</td>";
                            echo "<td>".$cust_value['C_Phone']."</td>";
                            echo "<td>".$cust_value['C_Fee']."</td>";
                           
                            echo "</tr>";
                        }
                    ?>
                        <?php
                         }
                        ?>

                        
                </table>  
            </div>
        </div>
    </div>

   <div class="container">
    <div class="row">
        <div class="col-5"></div>
        <div class="col-4 mx-auto">
            <a href="clients_account_logout.php">
                <button type="button" class='btn btn-danger'>Logout</button>
            </a>
        </div>
        <div class="col-2"></div>
    </div>
   </div>
</body>
</html>