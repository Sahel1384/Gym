<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Confirmation</title>
</head>
<body>
   
    <?php
include('connect.php');
        if(isset($_GET['id'])){
           glob($a_ID = $_GET['id']);

            $select = "SELECT * FROM client_sign_up WHERE id = $a_ID";
            $sresult = $pdo->query($select);
            while($value = $sresult->fetch()){
                echo '
                    <form method="post">
                        <input type="text" value='.$value['username'].' name="user">
                        <input type="text" value='.$value['password'].' name="pass">
                        <input type="submit" value="Accept" name="send">
                    </form>
                ';
            }
        }

        if(isset($_POST['send'])){
            $user = $_POST['user'];
            $pass = $_POST['pass'];

            $sselect = "SELECT * FROM client_confirmation WHERE username = '$user'";
            $ssresult = $pdo->query($sselect);
            $num = $ssresult->fetchColumn();

            if($num > 0){
                echo "Exist";
            }
            else{
                $insert = "INSERT INTO client_confirmation VALUES($a_ID, '$user', '$pass')";
            $iresult = $pdo->query($insert);

            if($iresult){
                $dqr = "DELETE FROM client_sign_up WHERE id = $a_ID";
                $dresult = $pdo->query($dqr);
                header('location:dashboard2.php');
            }
            }

            
        }
        
    
    ?>
   
</body>
</html>