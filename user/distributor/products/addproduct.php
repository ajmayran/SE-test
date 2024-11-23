<?php

require_once '../../classes/product.class.php';

function clean_input($input){
    // trim() removes any whitespace or predefined characters from both sides of a string.
    $input = trim($input);
    
    // stripslashes() removes any backslashes from the input.
    $input = stripslashes($input);
    
    // htmlspecialchars() converts special characters to HTML entities to prevent XSS attacks.
    $input = htmlspecialchars($input);
    
    // Return the sanitized input.
    return $input;
}

// Initialize variables to hold form input values and error messages.
$img = $product_name = $category = $price = $tags = $stock = $min_qty = $max_qty = '';
$imgErr = $product_nameErr = $categoryErr = $priceErr = $tagsErr = $stockErr = $min_qtyErr = $max_qtyErr = '';

// Create an instance of the Product class for database interaction.
$productObj = new Product();

// Check if the form was submitted using the POST method.
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    
    // Clean and assign the input values to variables using the clean_input function to prevent XSS or other malicious input.
    $img = clean_input($_POST['img']);
    $product_name = clean_input($_POST['product_name']);
    $product_code = clean_input($_POST['product_code']);
    $category = clean_input($_POST['category']);
    $price = clean_input($_POST['price']);
    $tags = clean_input($_POST['tags']);
    $stock = clean_input($_POST['stock']);
    $min_qty = clean_input($_POST['min_qty']);
    $max_qty = clean_input($_POST['max_qty']);



    // Validate the 'code' field: check if it's empty or if the code already exists in the database.
    if(empty($code)){
        $codeErr = 'Product Code is required';
    } else if ($productObj->codeExists($code)){
        $codeErr = 'Product Code already exists';
    }

    // Validate the 'name' field: it must not be empty.
    if(empty($name)){
        $nameErr = 'Name is required';
    }

    // Validate the 'category' field: it must not be empty.
    if(empty($category)){
        $categoryErr = 'Category is required';
    }

    // Validate the 'price' field: it must not be empty, must be a number, and greater than 0.
    if(empty($price)){
        $priceErr = 'Price is required';
    } else if (!is_numeric($price)){
        $priceErr = 'Price should be a number';
    } else if ($price < 1){
        $priceErr = 'Price must be greater than 0';
    }

    // If there are no validation errors, proceed to add the product to the database.
    if(empty($codeErr) && empty($nameErr) && empty($categoryErr) && empty($priceErr)){
        // Assign the sanitized inputs to the product object.
        $productObj->price = $price;

        // Attempt to add the product to the database.
        if($productObj->add()){
            // If successful, redirect to the product listing page.
            header('Location: #');
        } else {
            // If an error occurs during insertion, display an error message.
            echo 'Something went wrong when adding the new product.';
        }
    }
}
?>

