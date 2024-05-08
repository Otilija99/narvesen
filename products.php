<?php
$product = [
    ["name" => "Apples (1kg)", "price" => 2.99, "available_amount" => 100],
    ["name" => "Bananas (1kg)", "price" => 1.99, "available_amount" => 50],
    ["name" => "Oranges (1kg)", "price" => 3.49, "available_amount" => 200],
    ["name" => "Carrots (1kg)", "price" => 1.79, "available_amount" => 75],
    ["name" => "Potatoes (1kg)", "price" => 1.49, "available_amount" => 150],
    ["name" => "Tomatoes (1kg)", "price" => 2.99, "available_amount" => 100],
    ["name" => "Lettuce (1kg)", "price" => 2.49, "available_amount" => 80],
    ["name" => "Cucumbers (1kg)", "price" => 2.29, "available_amount" => 120],
    ["name" => "Onions (1kg)", "price" => 1.99, "available_amount" => 90],
    ["name" => "Peppers (1kg)", "price" => 3.79, "available_amount" => 180],
    ["name" => "Broccoli (1kg)", "price" => 2.99, "available_amount" => 110],
    ["name" => "Cauliflower (1kg)", "price" => 2.49, "available_amount" => 40],
    ["name" => "Spinach (1kg)", "price" => 4.99, "available_amount" => 160],
    ["name" => "Kale (1kg)", "price" => 3.49, "available_amount" => 70],
    ["name" => "Zucchini (1kg)", "price" => 2.99, "available_amount" => 85],
    ["name" => "Pumpkin (1kg)", "price" => 1.99, "available_amount" => 60],
    ["name" => "Garlic (1kg)", "price" => 5.99, "available_amount" => 130],
    ["name" => "Ginger (1kg)", "price" => 7.99, "available_amount" => 95],
    ["name" => "Celery (1kg)", "price" => 2.49, "available_amount" => 220],
    ["name" => "Avocado (1 piece)", "price" => 2.99, "available_amount" => 75],
    ["name" => "Cabbage (1kg)", "price" => 1.99, "available_amount" => 140],
    ["name" => "Lemons (1kg)", "price" => 3.49, "available_amount" => 50],
    ["name" => "Limes (1kg)", "price" => 2.49, "available_amount" => 105],
    ["name" => "Mushrooms (1kg)", "price" => 6.99, "available_amount" => 125],
    ["name" => "Eggplant (1kg)", "price" => 3.99, "available_amount" => 90],
    ["name" => "Green Beans (1kg)", "price" => 4.49, "available_amount" => 170],
    ["name" => "Asparagus (1kg)", "price" => 5.99, "available_amount" => 100],
    ["name" => "Parsley (100g)", "price" => 1.49, "available_amount" => 55],
    ["name" => "Coriander (100g)", "price" => 1.99, "available_amount" => 150]
];

// Convert data to JSON format
$json_data = json_encode($product, JSON_PRETTY_PRINT);

// Specify the file path
$file_path = 'products.json';

// Write JSON data to the file
file_put_contents($file_path, $json_data);