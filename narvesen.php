<?php
function load_products($filename) {
    $json_data = file_get_contents($filename);
    return json_decode($json_data, true);
}
function display_products($products) {
    echo "Available Products:\n";
    foreach ($products as $key => $product) {
        echo ($key + 1) . ". {$product['name']} 
        -  {$product['price']} eur 
        - Available: {$product['available_amount']} units\n";
    }
}
function add_to_cart($products, &$cart) {
    display_products($products);
    while (true) {
        $choice = (int) readline("Enter the product number to add to cart (0 to stop): ");
        if ($choice == 0) {
            break;
        } elseif ($choice < 1 || $choice > count($products)) {
            echo "Invalid product number\n";
        } else {
            $product = $products[$choice - 1];
            $quantity = (int) readline("Enter the quantity: ");
            if ($quantity < 1) {
                echo "Quantity must be greater than 0\n";
            } elseif ($quantity > $product['available_amount']) {
                echo "Not enough quantity available for {$product['name']}. Available: {$product['available_amount']}\n";
            } else {
                $cart[] = array(
                    'name' => $product['name'],
                    'price' => $product['price'],
                    'quantity' => $quantity
                );
                echo "{$quantity} {$product['name']} added to cart.\n";
                $product['available_amount'] -= $quantity; // Deduct quantity from available amount
            }
        }
    }
}

function display_cart($cart) {
    $total_items = 0;
    $total_amount = 0;
    echo "Items in Cart:\n";
    foreach ($cart as $item) {
        $total_items += $item['quantity'];
        $total_amount += $item['price'] * $item['quantity'];
        echo "{$item['quantity']} {$item['name']} -  {$item['price']} eur each\n";
    }
    echo "Total Items: {$total_items}\n";
    echo "Total Amount: {$total_amount} eur\n";
}

$product_file = 'products.json';

$products = load_products($product_file);

$cart = [];

echo "Welcome to the Simple Store\n";
while (true) {
    echo "1. Display Products\n";
    echo "2. Add to Cart\n";
    echo "3. Display Cart\n";
    echo "4. Purchase Cart\n";
    echo "5. Exit\n";
    $choice = (int) readline("Enter your choice: ");
    switch ($choice) {
        case 1:
            display_products($products);
            break;
        case 2:
            add_to_cart($products, $cart);
            break;
        case 3:
            display_cart($cart);
            break;
        case 4:
            echo "Thank you for your purchase!\n";
            exit;
        case 5:
            echo "Goodbye!\n";
            exit;
        default:
            echo "Invalid choice\n";
    }
}

?>
