<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>   

    <table border = "1" >
        <tr>
            <th>ID</th>
            <th>FIRSTNAME</th>
            <th>LASTNAME</th>
        </tr>

        <?php
        $users = array(
            [
                'id' => 1,
                'firstname' => 'aldrin jose',
                'lastname' => 'bacluhan',
            ],
            [
                'id' => 2,
                'firstname' => 'Vince',
                'lastname' => 'Arder',
            ],
            [
                'id' => 3,
                'firstname' => 'Gabe',
                'lastname' => 'Pacaldo',
            ],
            [
                'id' => 4,
                'firstname' => 'France',
                'lastname' => 'Pacquiao',
            ],
            [
                'id' => 5,
                'firstname' => 'Oscar',
                'lastname' => 'Doming',
            ],
        );

        foreach($users as $user){
            echo "<tr>";
            echo "<th>" . $user['id'] . "<br>";
            echo "<th>" . $user['firstname'] . "<br>";
            echo "<th>" . $user['lastname'] . "<br>";
        }
    

        ?>

    </table>


   
 

    
</body>
</html>