<?php
// Initial Inventory in a multidimensional array
$inventory = [
    ["name" => "Laptop", "category" => "Electronics", "stock" => 12],
    ["name" => "Shampoo", "category" => "Cosmetics", "stock" => 50],
    ["name" => "Notebook", "category" => "Stationery", "stock" => 30]
];

// Function to display the inventory
function displayInventory($inventory) {
    echo "Inventory:\n";
    foreach ($inventory as $product) {
        echo "{$product['name']} (Category: {$product['category']}) - Stock: {$product['stock']}\n";
    }
    echo "\n";
}

// Display initial inventory
echo "Initial Inventory:\n";
displayInventory($inventory);

// Add new product to the inventory
$newProduct = ["name" => ucfirst("pen"), "category" => "Stationery", "stock" => 100];
$inventory[] = $newProduct;
echo "Adding new product: {$newProduct['name']} (Category: {$newProduct['category']}) - Stock: {$newProduct['stock']}\n";

// Update stock quantity for an existing product (Laptop)
$productFound = false;
foreach ($inventory as &$product) {
    if (strtolower($product['name']) == "laptop") {
        $product['stock'] = 20;
        $productFound = true;
        echo "Updating stock for Laptop...\n";
        break;
    }
}
if (!$productFound) {
    echo "Error: Product 'Laptop' not found.\n";
}

// Display updated inventory
echo "Updated Inventory:\n";
displayInventory($inventory);
?
