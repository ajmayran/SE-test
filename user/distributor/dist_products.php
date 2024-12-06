<?php
$currentPage = basename($_SERVER['PHP_SELF']); 
require_once '../../classes/product.class.php';
require_once '../../function/util.php';

session_start();

if (isset($_SESSION['distributor_id']) && isset($_SESSION['distributor_info'])) {
    // Retrieve distributor details from the session
    $distributorInfo = $_SESSION['distributor_info'];

    $distributorName = htmlspecialchars($distributorInfo['name']);
    $distributorAddress = htmlspecialchars($distributorInfo['address']);
} else {
    // If no session exists, redirect to the login page
    header("Location: ./dist_login.php");
    exit;
}

// Initialize variables to hold form input values and error messages.
// Create an instance of the Product class for database interaction.
$productObj = new Product();

// Check if the form was submitted using the POST method.
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $img = $product_name = $product_code = $product_desc = $category = $price = $tags = $stock = $min_qty = $max_qty = $distributor_id = '';
    $imgErr = $product_nameErr = $product_codeErr = $product_descErr =  $categoryErr = $priceErr = $tagsErr = $stockErr = $min_qtyErr = $max_qtyErr = '';

    // Directory where images will be saved
    $uploadDir = '../../resources/img/Products/';
    $allowedTypes = ['jpeg', 'jpg', 'png'];

    if (isset($_FILES['img']) && $_FILES['img']['error'] == 0) {
        $fileName = basename($_FILES['img']['name']);
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION);

        if (in_array(strtolower($fileType), $allowedTypes)) {
            // Generate a unique name for the file
            $uniqueName = uniqid() . "." . $fileType;
            $targetFilePath = $uploadDir . $uniqueName;

            // Upload file to server
            if (move_uploaded_file($_FILES['img']['tmp_name'], $targetFilePath)) {
                $img = $uniqueName; // Store the file path
            } else {
                $imgErr = 'Error uploading the image.';
            }
        } else {
            $imgErr = 'Invalid file type. Only JPEG, JPG, and PNG are allowed.';
        }
    } else {
        $imgErr = 'Image upload is required.';
    }

    $product_name = clean_input($_POST['product_name']);
    $product_code = clean_input($_POST['product_code']);
    $product_desc = clean_input($_POST['product_desc']);
    $category = clean_input($_POST['category']);
    $price = clean_input($_POST['price']);
    $tags = clean_input($_POST['tags']);
    $min_qty = clean_input($_POST['min_qty']);




    // Validate the 'code' field: check if it's empty or if the code already exists in the database.
    if (empty($product_code)) {
        $product_codeErr = 'Product Code is required';
    } else if ($productObj->codeExists($product_code)) {
        $product_codeErr = 'Product Code already exists';
    }

    // Validate the 'name' field: it must not be empty.
    if (empty($product_name)) {
        $product_nameErr = 'Name is required';
    }

    if (isset($_POST["product_description"])) {
        $product_description = filter_var($_POST["product_description"], FILTER_SANITIZE_STRING); //Sanitize!
        $productObj->product_desc = $product_desc;
    } else {
        // Handle the missing key appropriately (e.g., set a default value, display an error message).
        $productObj->product_desc = ''; // or some other default 
        // OR: echo "Error: product_description is missing"; //Show error to the user
        // OR:  die("Error: product_description is missing."); //Stop execution
    }

    // Validate the 'category' field: it must not be empty.
    if (empty($category)) {
        $categoryErr = 'Category is required';
    }

    // Validate the 'price' field: it must not be empty, must be a number, and greater than 0.
    if (empty($price)) {
        $priceErr = 'Price is required';
    } else if (!is_numeric($price)) {
        $priceErr = 'Price should be a number';
    } else if ($price < 1) {
        $priceErr = 'Price must be greater than 0';
    }

    // If there are no validation errors, proceed to add the product to the database.
    if (
        empty($imgErr) && empty($product_nameErr) && empty($product_codeErr) && empty($product_descErr) && empty($categoryErr) && empty($priceErr)
        && empty($tagsErr) && empty($stockErr) && empty($min_qtyErr) && empty($max_qtyErr)
    )
    {
        // Assign the sanitized inputs to the product object.
        $productObj->img = $img;
        $productObj->product_name = $product_name;
        $productObj->product_code = $product_code;
        $productObj->product_desc = $product_desc;
        $productObj->category = $category;
        $productObj->price = $price;
        $productObj->tags = $tags;
        $productObj->min_qty = $min_qty;
        $productObj->distributor_id = $_SESSION['distributor_id'];


        // Attempt to add the product to the database.
        if ($productObj->add()) {
            // If successful, redirect to the product listing page.
            header('Location: ./dist_dashboard.php');
        } else {
            // If an error occurs during insertion, display an error message.
            echo 'Something went wrong when adding the new product.';
        }
    }
    else {
        echo $imgErr;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Distributors Products</title>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="icon" href="../../resources/img/Pconnect Logo.png">
    <link rel="stylesheet" href="../../src/output.css">
    <script src="https://unpkg.com/iconify-icon/dist/iconify-icon.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        body {
            font-family: 'Lexend', sans-serif;
        }
        th {
            white-space: nowrap;
        }

        td {
            white-space: nowrap;
        }
    </style>
</head>

<body class="bg-gray-100">
<?php include_once '../../includes/dist_side/header.php'; ?>
    <div class="flex">
        <?php include_once '../../includes/dist_side/sidebar.php'; ?>

        <main class="w-3/4 p-8 overflow-y-auto" style="max-height:100vh;">
            <h1 class="p-3 text-2xl font-semibold bg-green-300 rounded-t-md">Products</h1>
            <div class="p-6 bg-white rounded-b-lg shadow-sm">
                <!-- Header Section -->

                <div class="flex items-center justify-between mb-4 space-x-4">
                    <!-- Search Bar -->
                    <div class="flex items-center w-full max-w-md">
                        <input type="text" placeholder="Search product" class="w-64 px-4 py-2 border border-gray-300 rounded-l-md focus:outline-none focus:ring-2 focus:ring-green-500" />
                        <button class="w-12 p-2 text-white bg-green-500 rounded-r-md hover:bg-green-600 focus:outline-none">
                            <iconify-icon icon="material-symbols:search" class="items-center p-1 text-xl align-middle"></iconify-icon>
                        </button>
                    </div>

                    <!-- Category Filter -->
                    <div class="flex items-center space-x-2">
                        <span class="text-gray-700">Category</span>
                        <div class="relative">
                            <select class="w-full px-3 py-2 border rounded-lg appearance-none focus:outline-none focus:ring-2 focus:ring-green-500">
                                <option>All</option>
                                <option>Frozen Goods</option>
                            </select>
                            <div class="absolute inset-y-0 right-0 flex items-center px-2 pointer-events-none">
                                <iconify-icon icon="mdi:arrow-down-drop" class="w-4 h-4 text-xl"></iconify-icon>
                            </div>
                        </div>
                    </div>
                    <button type="" onclick="openproductModal()" class="px-2 py-2 text-white bg-green-500 rounded-md hover:bg-green-600">Add Product</button>
                </div>

                <!-- Table Section -->
                <div class="overflow-x-auto bg-white">
                    <table class="min-w-full table-auto">
                        <thead>
                            <tr class="bg-gray-100">
                                <th class="px-4 py-2 text-sm font-medium text-left text-gray-700">Image</th>
                                <th class="px-4 py-2 text-sm font-medium text-left text-gray-700">Name</th>
                                <th class="px-4 py-2 text-sm font-medium text-left text-gray-700">Category</th>
                                <th class="px-4 py-2 text-sm font-medium text-left text-gray-700">Minimum Purchase Qty</th>
                                <th class="px-4 py-2 text-sm font-medium text-left text-gray-700">Maximum Purchase Qty</th>
                                <th class="px-4 py-2 text-sm font-medium text-left text-gray-700">Tags</th>
                                <th class="px-4 py-2 text-sm font-medium text-left text-gray-700">Price</th>
                                <th class="px-4 py-2 text-sm font-medium text-center text-gray-700">Date Added</th>
                                <th class="px-4 py-2 text-sm font-medium text-center text-gray-700">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Data Rows -->
                            <tr class="border-b border-gray-200 shadow-sm">
                                <td><img src="../../resources/img/Products/rtc-chicken-longanisa.png" class="w-12 h-12 my-1 ml-3 rounded-xl" alt=""></td>
                                <td class="px-4 py-2 text-[12px] font-light text-left">Ready to Cook Chicken Longanisa</td>
                                <td class="px-4 py-2 text-[12px] font-light text-left">Frozen Goods</td>
                                <td class="px-4 py-2 text-[12px] font-light text-center">10</td>
                                <td class="px-4 py-2 text-[12px] font-light text-center">20</td>
                                <td class="px-4 py-2 text-[12px] font-light text-left">Food, Meat</td>
                                <td class="px-4 py-2 text-[12px] font-light text-left">250.00</td>
                                <td class="px-4 py-2 text-[12px] font-light text-center">2024-11-20</td>
                                <td class="px-4 py-2 text-[12px] font-light text-left">
                                    <button onclick="openEditModal('Product001')" class="px-4 py-2 text-white bg-gray-500 rounded-md hover:bg-gray-400">Edit</button>
                                    <button class="px-2 py-2 text-white bg-red-600 rounded-md hover:bg-red-500">Delete</button>
                                </td>
                            </tr>
                            <tr class="border-b border-gray-200 shadow-sm">
                                <td><img src="../../resources/img/Products/rtc-chicken-bbq.png" class="w-12 h-12 my-1 ml-3 rounded-xl" alt=""></td>
                                <td class="px-4 py-2 text-[12px] font-light text-left">Ready to Cook Chicken BBQ</td>
                                <td class="px-4 py-2 text-[12px] font-light text-left">Frozen Goods</td>
                                <td class="px-4 py-2 text-[12px] font-light text-center">10</td>
                                <td class="px-4 py-2 text-[12px] font-light text-center">20</td>
                                <td class="px-4 py-2 text-[12px] font-light text-left">Food, Meat</td>
                                <td class="px-4 py-2 text-[12px] font-light text-left">250.00</td>
                                <td class="px-4 py-2 text-[12px] font-light text-center">2024-11-20</td>
                                <td class="px-4 py-2 text-[12px] font-light text-left">
                                    <button class="px-4 py-2 text-white bg-gray-500 rounded-md hover:bg-gray-400">Edit</button>
                                    <button class="px-2 py-2 text-white bg-red-600 rounded-md hover:bg-red-500">Delete</button>
                                </td>
                            </tr>
                            <tr class="border-b border-gray-200 shadow-sm">
                                <td><img src="../../resources/img/Products/rtc-chicken-siomai.png" class="w-10 h-10 my-1 ml-4 rounded-md" alt=""></td>
                                <td class="px-4 py-2 text-[12px] font-light text-left">Ready to Cook Chicken Siomai</td>
                                <td class="px-4 py-2 text-[12px] font-light text-left">Frozen Goods</td>
                                <td class="px-4 py-2 text-[12px] font-light text-center">10</td>
                                <td class="px-4 py-2 text-[12px] font-light text-center">20</td>
                                <td class="px-4 py-2 text-[12px] font-light text-left">Food, Meat</td>
                                <td class="px-4 py-2 text-[12px] font-light text-left">250.00</td>
                                <td class="px-4 py-2 text-[12px] font-light text-center">2024-11-20</td>
                                <td class="px-4 py-2 text-[12px] font-light text-left">
                                    <button class="px-4 py-2 text-white bg-gray-500 rounded-md hover:bg-gray-400">Edit</button>
                                    <button class="px-2 py-2 text-white bg-red-600 rounded-md hover:bg-red-500">Delete</button>
                                </td>
                            </tr>
                            <tr class="border-b border-gray-200 shadow-sm">
                                <td><img src="../../resources/img/Products/rtc-chicken-longanisa.png" class="w-12 h-12 my-1 ml-3 rounded-xl" alt=""></td>
                                <td class="px-4 py-2 text-[12px] font-light text-left">Ready to Cook Chicken Longanisa</td>
                                <td class="px-4 py-2 text-[12px] font-light text-left">Frozen Goods</td>
                                <td class="px-4 py-2 text-[12px] font-light text-center">10</td>
                                <td class="px-4 py-2 text-[12px] font-light text-center">20</td>
                                <td class="px-4 py-2 text-[12px] font-light text-left">Food, Meat</td>
                                <td class="px-4 py-2 text-[12px] font-light text-left">250.00</td>
                                <td class="px-4 py-2 text-[12px] font-light text-center">2024-11-20</td>
                                <td class="px-4 py-2 text-[12px] font-light text-left">
                                    <button class="px-4 py-2 text-white bg-gray-500 rounded-md hover:bg-gray-400">Edit</button>
                                    <button class="px-2 py-2 text-white bg-red-600 rounded-md hover:bg-red-500">Delete</button>
                                </td>
                            </tr>
                            <tr class="border-b border-gray-200 shadow-sm">
                                <td><img src="../../resources/img/Products/rtc-oriental-wings.png" class="w-12 h-12 my-1 ml-3 rounded-xl" alt=""></td>
                                <td class="px-4 py-2 text-[12px] font-light text-left">Ready to Cook Oriental Wings</td>
                                <td class="px-4 py-2 text-[12px] font-light text-left">Frozen Goods</td>
                                <td class="px-4 py-2 text-[12px] font-light text-center">10</td>
                                <td class="px-4 py-2 text-[12px] font-light text-center">20</td>
                                <td class="px-4 py-2 text-[12px] font-light text-left">Food, Meat</td>
                                <td class="px-4 py-2 text-[12px] font-light text-left">250.00</td>
                                <td class="px-4 py-2 text-[12px] font-light text-center">2024-11-20</td>
                                <td class="px-4 py-2 text-[12px] font-light text-left">
                                    <button class="px-4 py-2 text-white bg-gray-500 rounded-md hover:bg-gray-400">Edit</button>
                                    <button class="px-2 py-2 text-white bg-red-600 rounded-md hover:bg-red-500">Delete</button>
                                </td>
                            </tr>
                            <tr class="border-b border-gray-200 shadow-sm">
                                <td><img src="../../resources/img/Products/rtc-pepper-steak.png" class="w-10 h-10 my-1 ml-4 rounded-md" alt=""></td>
                                <td class="px-4 py-2 text-[12px] font-light text-left">Ready to Cook Pepper Steak</td>
                                <td class="px-4 py-2 text-[12px] font-light text-left">Frozen Goods</td>
                                <td class="px-4 py-2 text-[12px] font-light text-center">10</td>
                                <td class="px-4 py-2 text-[12px] font-light text-center">20</td>
                                <td class="px-4 py-2 text-[12px] font-light text-left">Food, Meat</td>
                                <td class="px-4 py-2 text-[12px] font-light text-left">250.00</td>
                                <td class="px-4 py-2 text-[12px] font-light text-center">2024-11-20</td>
                                <td class="px-4 py-2 text-[12px] font-light text-left">
                                    <button class="px-4 py-2 text-white bg-gray-500 rounded-md hover:bg-gray-400">Edit</button>
                                    <button class="px-2 py-2 text-white bg-red-600 rounded-md hover:bg-red-500">Delete</button>
                                </td>
                            </tr>
                            <tr class="border-b border-gray-200 shadow-sm">
                                <td><img src="../../resources/img/Products/Chicken-lumpia-shanghai-mix.png" class="w-10 h-10 my-1 ml-4 rounded-md" alt=""></td>
                                <td class="px-4 py-2 text-[12px] font-light text-left">Ready to Cook Chicken Lumpia Shanghai Mix</td>
                                <td class="px-4 py-2 text-[12px] font-light text-left">Frozen Goods</td>
                                <td class="px-4 py-2 text-[12px] font-light text-center">10</td>
                                <td class="px-4 py-2 text-[12px] font-light text-center">20</td>
                                <td class="px-4 py-2 text-[12px] font-light text-left">Food, Meat</td>
                                <td class="px-4 py-2 text-[12px] font-light text-left">250.00</td>
                                <td class="px-4 py-2 text-[12px] font-light text-center">2024-11-20</td>
                                <td class="px-4 py-2 text-[12px] font-light text-left">
                                    <button class="px-4 py-2 text-white bg-gray-500 rounded-md hover:bg-gray-400">Edit</button>
                                    <button class="px-2 py-2 text-white bg-red-600 rounded-md hover:bg-red-500">Delete</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>
    <?php include_once '../../includes/retailer_footer.php'; ?>

    <form action="#" method="POST" enctype="multipart/form-data">
        <div id="productModal" class="fixed inset-0 z-50 flex items-center justify-center hidden bg-gray-800 bg-opacity-50">
            <div class="relative w-full max-w-3xl max-h-screen p-8 overflow-y-auto bg-white rounded-lg">
                <button onclick="closeproductModal()" class="absolute text-blue-600 top-4 right-4 hover:underline">
                    Close
                </button>
                <div class="relative flex items-center justify-center w-1/4 h-40 mx-auto mb-6 ml-4 border-2 border-gray-400 border-dashed">
                    <input type="file" name="img" class="absolute inset-0 opacity-0 cursor-pointer" accept=".jpeg, .jpg, .png">
                    <span class="text-gray-500">+ Add Photo</span>
                </div>
                <div class="flex">
                    <div class="w-1/2 pr-4">
                        <div class="mb-4">
                            <label class="block mb-2 text-gray-700">Product Name</label>
                            <input type="text" placeholder="Enter Name of your Product Name" name="product_name" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
                        </div>
                        <div class="mb-4">
                            <label class="block mb-2 text-gray-700">Product Code</label>
                            <input type="text" placeholder="Enter Name of your Product Code" name="product_code" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
                        </div>
                        <div class="mb-4">
                            <label class="block mb-2 text-gray-700">Product Description</label>
                            <textarea placeholder="Enter Description" name="product_desc" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500"></textarea>
                        </div>
                        <div class="mb-4">
                            <label class="block mb-2 text-gray-700">Category</label>
                            <input type="text" placeholder="Enter Category" name="category" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
                        </div>
                        <div class="mb-4">
                            <label class="block mb-2 text-gray-700">Price</label>
                            <input type="number" placeholder="Set Price" name="price" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:green-blue-500">
                        </div>
                    </div>
                    <div class="w-1/2 pl-4">
                        <div class="mb-4">
                            <label class="block mb-2 text-gray-700">Tags</label>
                            <input type="text" placeholder="Set a Keyword for this product" name="tags" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
                        </div>
                        <div class="mb-4">
                            <label class="block mb-2 text-gray-700">Minimum Purchase Quantity</label>
                            <input type="number" placeholder="Set minimum qty." name="min_qty" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
                        </div>
                    </div>
                </div>
                <hr class="my-6">
                <div class="flex justify-end mt-6">
                    <button onclick="closeproductModal()" class="px-6 py-2 mr-4 text-gray-700 bg-white border rounded-lg hover:bg-gray-100">Cancel</button>
                    <button class="px-6 py-2 text-white bg-green-500 border rounded-lg hover:bg-green-600">Save and Publish</button>
                </div>
            </div>
        </div>
    </form>
    </div>
    </div>
    <script>
        function openproductModal() {
            document.getElementById('productModal').classList.remove('hidden');
        }

        function closeproductModal() {
            document.getElementById('productModal').classList.add('hidden');
        }

        //Notif and account 
        document.getElementById('notificationButton').addEventListener('click', function() {
            const dropdown = document.getElementById('notificationDropdown');
            dropdown.classList.toggle('hidden');
        });

        document.getElementById('accountButton').addEventListener('click', function() {
            const popper = document.getElementById('accountPopper');
            popper.classList.toggle('hidden');
        });


        window.addEventListener('click', function(event) {
            const dropdown = document.getElementById('notificationDropdown');
            const popper = document.getElementById('accountPopper');

            if (!event.target.closest('#notificationButton')) {
                dropdown.classList.add('hidden');
            }
            if (!event.target.closest('#accountButton')) {
                popper.classList.add('hidden');
            }
        });
    </script>
</body>

</html>