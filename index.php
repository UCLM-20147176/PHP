<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="cs.css">
</head>
<body>
    <form>

    <h1>CALCULATOR</h1>
    <input type="text" name = "num1"><br />
        <select name="operator">
            <option>+</option>
            <option>-</option>
            <option>*</option>
            <option>/</option>
        </select> <br>    
    <input type="text" name = "num2"><br />
    <button>Submit</button>
    </form>

        <?php 
            $num1 = $_GET['num1'];
            $num2 = $_GET['num2'];
            $operator = $_GET['operator'];

            switch($operator){
                case '+':
                    $Total = $num1 +$num2;
                    break;
                case '-':
                    $Total = $num1 - $num2;
                    break;
                case '*':
                    $Total = $num1 * $num2;
                    break;
                case '/':
                    $Total = $num1 / $num2;
                    break;
            }
        ?>

        <h1><?php echo $Total ?></h1>
    </form>    
</body>




</html>