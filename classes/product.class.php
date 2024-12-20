<?php

require_once __DIR__ . '/../database/connect.php';

class Product {
    // These properties represent the columns in the 'product' table.
    public $id = '';
    public $img = '';
    public $product_name = '';         // The name of the product.
    public $product_code = '';    
    public $product_desc = '';
    public $category = '';
    public $price = '';
    public $tags = '';
    public $min_qty = '';
    public $distributor_id = '';

    protected $db; // This will hold an instance of the Database class for database operations.

    // The constructor method initializes the Product class by creating a new Database object.
    function __construct() {
        $this->db = new Database(); // Instantiate the Database class.
    }

    // The add() method is used to add a new product to the database.
    function add() {
        // SQL query to insert a new product into the 'product' table.
        $sql = "INSERT INTO product (img, product_name, product_code, product_desc, category, price, tags, min_qty, distributor_id) VALUES (:img, :product_name, :product_code, :product_desc, :category, :price, :tags, :min_qty, :distributor_id)";

        // Prepare the SQL statement for execution.
        $query = $this->db->connect()->prepare($sql);

        // Bind the product properties to the named placeholders in the SQL statement.
        $query->bindParam(':img', $this->img);
        $query->bindParam(':product_name', $this->product_name);
        $query->bindParam(':product_code', $this->product_code);
        $query->bindParam(':product_desc', $this->product_desc);
        $query->bindParam(':category', $this->category); 
        $query->bindParam(':price', $this->price);
        $query->bindParam(':tags', $this->tags);
        $query->bindParam(':min_qty', $this->min_qty);
        $query->bindParam(':distributor_id', $this->distributor_id);
        
        // Execute the query. If successful, return true; otherwise, return false.
        return $query->execute();
    }

    // The edit() method is used to update an existing product in the database.
    function edit() {
        // SQL query to update an existing product in the 'product' table.
        $sql = "UPDATE product SET code = :code, name = :name, category_id = :category_id, price = :price WHERE id = :id;";

        // Prepare the SQL statement for execution.
        $query = $this->db->connect()->prepare($sql);

        // Bind the product properties and ID to the SQL statement.
        $query->bindParam(':price', $this->price);
        $query->bindParam(':id', $this->id);

        // Execute the query. If successful, return true; otherwise, return false.
        return $query->execute();
    }

    // The fetchRecord() method retrieves a single product record from the database based on its ID.
    function fetchRecord($recordID) {
        // SQL query to select a single product based on its ID.
        $sql = "SELECT * FROM product WHERE id = :recordID;";

        // Prepare the SQL statement for execution.
        $query = $this->db->connect()->prepare($sql);

        // Bind the recordID parameter to the SQL query.
        $query->bindParam(':recordID', $recordID);

        $data = null; // Initialize a variable to hold the fetched data.

        // Execute the query. If successful, fetch the result.
        if ($query->execute()) {
            $data = $query->fetch(); // Fetch the single row from the result set.
        }

        return $data; // Return the fetched data.
    }

    // The delete() method removes a product from the database based on its ID.
    function delete($recordID) {
        // SQL query to delete a product by its ID.
        $sql = "DELETE FROM product WHERE id = :recordID;";

        // Prepare the SQL statement for execution.
        $query = $this->db->connect()->prepare($sql);

        // Bind the recordID parameter to the SQL query.
        $query->bindParam(':recordID', $recordID);
        
        // Execute the query. If successful, return true; otherwise, return false.
        return $query->execute();
    }

    // The codeExists() method checks if a product code already exists in the database.
    // It can exclude a specific product ID when performing the check (useful during updates).
    function codeExists($product_code, $excludeID = null) {
        // SQL query to check if the product code exists.
        $sql = "SELECT COUNT(*) FROM product WHERE product_code = :product_code";

        // If $excludeID is provided, modify the SQL query to exclude the record with this ID.
        if ($excludeID) {
            $sql .= " AND id != :excludeID";
        }

        // Prepare the SQL statement.
        $query = $this->db->connect()->prepare($sql);

        // Bind the parameters.
        $query->bindParam(':product_code', $product_code);

        if ($excludeID) {
            $query->bindParam(':excludeID', $excludeID);
        }

        // Execute the query.
        $query->execute();

        // Fetch the count. If it's greater than 0, the code already exists.
        $count = $query->fetchColumn();

        return $count > 0;
    }

    public function fetchCategory() {
        // Define the SQL query to select all columns from the 'category' table,
        // ordering the results by the 'name' column in ascending order.
        $sql = "SELECT * FROM category ORDER BY name ASC;";
    
        // Prepare the SQL statement for execution using a database connection.
        $query = $this->db->connect()->prepare($sql);
    
        // Initialize a variable to hold the fetched data. This will store the results of the query.
        $data = null;
    
        // Execute the prepared SQL query.
        // If the execution is successful, fetch all the results from the query's result set.
        // Use fetchAll() to retrieve all rows as an array of associative arrays.
        if ($query->execute()) {
            $data = $query->fetchAll(PDO::FETCH_ASSOC); // Fetch all rows as an associative array.
        }
    
        // Return the fetched data. This will be an array of categories, where each category
        // is represented as an associative array with column names as keys.
        return $data;
    }

    public function fetchAllProducts() {
        // SQL query to select all products along with distributor information from distributor_information table
        $sql = "
            SELECT p.*, di_info.name AS distributor_name, s.quantity AS quantity
            FROM product p
            LEFT JOIN distributor di ON p.distributor_id = di.id
            LEFT JOIN distributor_information di_info ON di.id = di_info.distributor_id
            LEFT JOIN stock s ON p.id = s.product_id
            ORDER BY p.product_name ASC;
        ";
    
        // Prepare the SQL statement for execution
        $query = $this->db->connect()->prepare($sql);
    
        $data = null; // Initialize a variable to hold the fetched data
    
        // Execute the query. If successful, fetch all results
        if ($query->execute()) {
            $data = $query->fetchAll(PDO::FETCH_ASSOC); // Fetch all rows as an associative array
        }
    
        // Modify the img field to include the full path
        if ($data) {
            foreach ($data as &$product) {
                // Check if there's a valid image, otherwise use a default image
                if (empty($product['img'])) {
                    $product['img'] = 'default.png';
                }
            }
        }
    
        return $data; // Return the fetched data
    }
    
    
    


    public function fetchDistributors() {
        // SQL query to select all distributors along with their information
        $sql = "
            SELECT d.*, di.name AS distributor_name, di.contact AS distributor_contact, di.address AS distributor_address
            FROM distributor d
            LEFT JOIN distributor_information di ON d.id = di.distributor_id
            ORDER BY di.name ASC;
        ";
    
        // Prepare the SQL statement for execution
        $query = $this->db->connect()->prepare($sql);
    
        $data = null; // Initialize a variable to hold the fetched data
    
        // Execute the query. If successful, fetch all results
        if ($query->execute()) {
            $data = $query->fetchAll(PDO::FETCH_ASSOC); // Fetch all rows as an associative array
        }
    
        return $data; // Return the fetched data
    }


}
