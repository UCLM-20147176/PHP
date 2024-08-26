<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method = "post">
        Starting Number
        <input type="text" name = "start"> <br /> <br />

        Ending Number
        <input type="text" name = "end"> <br /> <br />

        <button>Display</button> <br /> <br /><br /> <br />

        <?php
            
           $start = $_POST["start"];
           $end = $_POST["end"];
           

        echo "Starting Number: $start<br><br>";
        echo "Ending Number:  $end<br><br>";

        echo "Odd Numbers:  ";
            if($start <  $end){
            for ($i = $start; $i <= $end ; $i++){
                if( $i % 2 != 0){
                    echo " $i";
                }
        } 
            } elseif ($start >  $end){
                for($i = $start; $i > $end; $i--){
                    if( $i % 2 != 0){
                        echo " $i";
                    }
                }
            }
    
        echo "<br><br> Even Numbers: ";
            if($start <  $end){
            for ($i = $start; $i <= $end ; $i++){
                if( $i % 2 == 0){
                    echo " $i";
                }
        }
            } elseif ($start >  $end) {
                for($i = $start; $i > $end; $i--){
                    if( $i % 2 == 0){
                        echo " $i"; 
                        
                    }
                }
            }

        echo "<br><br>Divisible by 3 Numbers: <br><br>";
        echo "Divisible by 4 Numbers: <br><br>";
        echo "List of Prime Numbers: <br><br>";


        ?>



    </form>
</body>
</html>
