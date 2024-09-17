<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method = "post">

        <h1>Library</h1>
        <input type="text" name = "title" placeholder = "title"><br>
        <input type="text" name = "price" placeholder = "price"><br>
        <input type="text" name = "quantity" placeholder = "quantity"><br>
        <button name = "button" name = "submit"> Submit </button>

        <?php

        $books = [
            [
                "title" => "the hobbit",
                "price" => 12.50,
                "quantity" => 10,
            ],

            [
                "title" => "harry potter",
                "price" => 15.00,
                "quantity" => 5,
            ],

            [
                "title" => "game of thrones",
                "price" => 20.00,
                "quantity" => 3,
            ],

        ];

        if(isset($_POST['submit'])){
            $newbook = [
                    "title" => $_POST['title'],
                    "price" => $_POST['price'],
                    "quantity" => $_POST['quantity'],
            ];

            $books[] = $newbook;
        };

        echo "<br><br>Book List" . "<br>";
        foreach($books as $book){
            echo ucwords($book['title']);
            echo " - Price: $" . $book['price'];
            echo ", Quantity: " . $book['quantity'];

            $total = $book['price'] * $book['quantity'];

            echo ". Total: $" . $total . "<br>";
        };

        
        print_r($books)
        ?>



    </form>    

</body>
</html>
