<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="icon/all.min.css">
    <link rel="stylesheet" href="icon/fontawesome.min.css">
</head>
<body class="bg-secondary">
<table class="table table-bordered">
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
    </tr>
<?php
include("connect.php");
$query = "SELECT * FROM workout_plan";
$result = $pdo->query($query);

while($value = $result->fetch()){
    echo "
    <tr>
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
    </tr>
";
}

?>
</table>
</body>
</html>