<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <title></title>
</head>
<body class="bg-secondary">
    <div class="container">
        <div class="rwo">
            <div class="col-12 table-responsive">
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
                        <th>h13</th>
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
            </tr>';
        }
    
    ?>
    </table>
            </div>
        </div>
    </div>
    
</body>
</html>