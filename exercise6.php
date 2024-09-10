<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        
        $storage = array (
            [
                'Product' => 1,
                'Name' => 'Laptop',
                'Category' => 'Electronics',
                'Stock' => '12',
            ],
            [
                'Product' => 2,
                'Name' => 'Shampoo',
                'Category' => 'Cosmetics',
                'Stock' => '50',
            ],
            [
                'Product' => 3,
                'Name' => 'Notebook',
                'Category' => 'Stationary',
                'Stock' => '30',
            ],
        );


        foreach ($storage as $store) {
            echo "  " . $store['Name'] . " (Category: " . $store['Category'] . ") - Stock: " . $store['Stock'] . "<br>";
        }
        

        // Adding a new [product]
        $newProduct = [
            'Product' => 4,
            'Name' => 'Pen',
            'Category' => 'Stationery',
            'Stock' => '100',
        ];

        $storage[] = $newProduct;

        $found = false;
        foreach ($storage as $key => $store) {
            if (ucwords($store['Product']) === 'Laptop') {
                $storage[$key]['Stock'] = '20';
                $found = true;
                break;
            }
        }
        if (!$found) {
            echo "Error: Laptop not found.<br>";
        }

        echo "<br>Updated Inventory:<br>";
        foreach ($storage as $store) {
            echo "  " . ucwords($store['Name']) . " (Category: " . ucwords($store['Category']) . ") - Stock: " . $store['Stock'] . "<br>";
        }

    ?>

        

</body>
</html>
