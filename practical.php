<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

        <?php 
            $storage = array(
                [
                    'Product' => 1,
                    'Name' => 'Laptop',
                    'Category' => 'Electronics',
                    'Stock' => 12,
                ],
                [
                    'Product' => 2,
                    'Name' => 'Shampoo',
                    'Category' => 'Cosmetics',
                    'Stock' => 50,
                ],
                [
                    'Product' => 3,
                    'Name' => 'Notebook',
                    'Category' => 'Stationary',
                    'Stock' => 30,
                ],

            );


            echo "Initial Inventory :" . "<br>" ;
            foreach($storage as $store){
                echo $store['Name'];
                echo "(Category: " . $store['Category'] . ")";
                echo " -  Stock : " . $store['Stock'] . "<br>";              
            };

            $new = array(
                [
                    'Product' => 4,
                    'Name' => 'Pen',
                    'Category' => 'Stationary',
                    'Stock' => 100,
                ],
            );
            
            $storage[] = $new;

            echo "<br>Adding new product: "; 
            foreach($new as $news){
                echo $news['Name'];
                echo "(Category: " . $news['Category'] . ")";
                echo " -  Stock : " . $news['Stock'] . "<br>";
            };

            if($storage['Name'] == 'Laptop'){
                $storage[0]['Stock'] = 20;
                echo "U"
            };
            
        ?>


</body>
</html>