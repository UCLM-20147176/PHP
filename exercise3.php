<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 3</title>
</head>

<body>
    <!--
    Create a program that convert the temperature from Fahrenheit to Celcius with remark. Use the table below for the temperature remark.

    -----------------------------------------
    |    Temperature    |       Remark      |
    -----------------------------------------
    |  0 and below      |  Freezing point   |
    -----------------------------------------
    |  100 and above    |  Boiling point    |
    -----------------------------------------
    |  1 to 25          |  Cold             |
    -----------------------------------------
    |  26 to 40         |  Warm             |
    -----------------------------------------
    |  41 to 99         |  Hot              |
    -----------------------------------------

    Fahrenheit to Celcius formula: °C = (°F - 32) × 5/9

    Sample Case #1:
    Fahrenheit: 80

    Celcius: 26.67
    Remarks: Warm

    Sample Case #2:
    Fahrenheit: 200

    Celcius: 93.33
    Remarks: Hot
    -->

    <h1>Exercise 3</h1>
    <form action="">
        Fahrenheit: <input type="text" name = "cel"> <button>Convert</button>
    </form><br /><br />
    <?php
    // Do your code here
        $cel = $_GET["cel"];
        $convert = round(($cel - 32) * 5 / 9 , 2);
        $remarks = 0;

        if ( $convert <= 0){
            $remarks = "Freezing point";
        } elseif ($convert >= 100 ){
            $remarks = "Boiling point";
        } elseif ($convert >= 1 && $convert <= 25 ){
            $remarks = "cold";
        } elseif ($convert >= 26 && $convert <= 40 ){
            $remarks = "warm";
        } elseif ($convert >= 41 && $convert <= 99 ){
            $remarks = "hot";
        } 
        

    // OUTPUT
    echo "Celcius: $convert<br />";
    echo "Remarks: $remarks";
    ?>
</body>

</html>
