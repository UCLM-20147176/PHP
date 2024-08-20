<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 2</title>
</head>

<body>
    <!-- 
    Sample Case #1
    Num 1: 1
    Num 2: 2
    Num 3: 3
    Num 4: 4

    Lowest Number: 1 - Num 1
    Highest Number: 4 - Num 4

    Sample Case #2
    Num 1: 1
    Num 2: 2
    Num 3: 3
    Num 4: 4

    Lowest Number: 1 - Num 1
    Highest Number: 4 - Num 4
    -->

    <h1>Exercise 2</h1>
    <form action="">
        Num 1 <input type="text" name = "num1"><br /><br />
        Num 2 <input type="text" name = "num2"><br /><br />
        Num 3 <input type="text" name = "num3"><br /><br />
        Num 4 <input type="text" name = "num4"><br /><br />
        <button>Display</button>
    </form><br /><br />
    <?php
    // Do your code here
    $num1 = $_GET["num1"];
    $num2 = $_GET["num2"];
    $num3 = $_GET["num3"];
    $num4 = $_GET["num4"];
    $highnum = 0;
    $lownum = 0;
    $hplace = 0;
    $lplace = 0;
    

    if ($num1 > $num2 && $num1 > $num3 && $num1 > $num4){
        $highnum = $num1;
        $hplace = "Num 1";
    } elseif ($num2 > $num1 && $num2 > $num3 && $num2 > $num4){
        $highnum = $num2;
        $hplace = "Num 2";
    } elseif ($num3 > $num1 && $num3 > $num2 && $num3 > $num4){
        $highnum = $num3;
        $hplace = "Num 3";
    } elseif ($num4 > $num1 && $num4 > $num3 && $num4 > $num3){
        $highnum = $num4;
        $hplace = "Num 4";
    }

    if ($num1 < $num2 && $num1 < $num3 && $num1 < $num4){
        $lownum = $num1;
        $lplace = "Num 1";
    } elseif ($num2 < $num1 && $num2 < $num3 && $num2 > $num4){
        $lownum = $num2;
        $lplace = "Num 2";
    } elseif ($num3 < $num1 && $num3 < $num2 && $num3 < $num4){
        $lownum = $num3;
        $lplace = "Num 3";
    } elseif ($num4 < $num1 && $num4 < $num3 && $num4 < $num3){
        $lownum = $num4;
        $lplace = "Num 4";
    }

   
    // OUTPUT
    echo "Lowest Number: $lownum - $lplace <br />";
    echo "Highest Number: $highnum - $hplace";
    ?>
</body>

</html>
