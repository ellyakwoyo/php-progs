<?php
//BASIC INVENTORY MANAGEMENT SYSTEM TO IMPLEMENT ARRAYS AND LOOPS IN PHP
// Associative Array to store product inventory
$inventory = [
    'SKU123' => ['name' => 'Product 1', 'price' => 10.99, 'quantity' => 50],
    'SKU456' => ['name' => 'Product 2', 'price' => 19.99, 'quantity' => 100],
    'SKU789' => ['name' => 'Product 3', 'price' => 7.99, 'quantity' => 75]
];

// Looping through an Associative Array using foreach
foreach ($inventory as $sku => $product) {
    echo "SKU: $sku, Name: {$product['name']}, Price: {$product['price']}, Quantity: {$product['quantity']}\n";
}

// Numeric Array to store order items
$orderItems = [
    ['sku' => 'SKU123', 'quantity' => 2],
    ['sku' => 'SKU789', 'quantity' => 3]
];

// Looping through a Numeric Array using for
for ($i = 0; $i < count($orderItems); $i++) {
    $orderItem = $orderItems[$i];
    $sku = $orderItem['sku'];
    $quantity = $orderItem['quantity'];
    echo "Order Item $i: SKU: $sku, Quantity: $quantity\n";
}

// Multidimensional Array to store sales data
$salesData = [
    ['date' => '2022-01-01', 'quantity' => 5, 'amount' => 54.95],
    ['date' => '2022-01-02', 'quantity' => 10, 'amount' => 99.90],
    ['date' => '2022-01-03', 'quantity' => 3, 'amount' => 23.97]
];

// Looping through a Multidimensional Array using foreach
foreach ($salesData as $sale) {
    $date = $sale['date'];
    $quantity = $sale['quantity'];
    $amount = $sale['amount'];
    echo "Date: $date, Quantity: $quantity, Amount: $amount\n";
}

// Looping using while with Numeric Array
$counter = 0;
while ($counter < count($orderItems)) {
    $orderItem = $orderItems[$counter];
    $sku = $orderItem['sku'];
    $quantity = $orderItem['quantity'];
    echo "Order Item $counter: SKU: $sku, Quantity: $quantity\n";
    $counter++;
}
?>
