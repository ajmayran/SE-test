<?php
require_once __DIR__ . '/../database/connect.php';

class Account{
    public $id = '';
    public $first_name = '';
    public $middle_name = '';
    public $last_name = '';
    public $email = '';
    public $password = '';
    protected $db;

    function __construct(){
        $this->db = new Database();
    }


        //retailer
    function add(){
        $sql = "INSERT INTO retailer (first_name, middle_name, last_name, email, password) VALUES (:first_name, :middle_name, :last_name, :email, :password);";
        $query = $this->db->connect()->prepare($sql);

        $query->bindParam(':first_name', $this->first_name);
        $query->bindParam(':middle_name', $this->middle_name);
        $query->bindParam(':last_name', $this->last_name);
        $query->bindParam(':email', $this->email);
        $query->bindParam(':password', $this->password);    

        return $query->execute();
    }

    function password_validation($password, $first_name, $last_name) {
        if(strlen($password) < 8) {
            return false;
        }
        if(strtolower($password) == strtolower($first_name) || strtolower($password) == strtolower($last_name)) {
            return false;
        }
        if(!preg_match("#[0-9]+#", $password)) {
            return false;
        }
        if(!preg_match("#[A-Z]+#", $password)) {
            return false;
        }

        $pattern = '/[\'\/~`\!@#\$%\^&\*\(\)_\-\+=\{\}\[\]\|;:"\<\>,\.\?\\\]/';
        if(!preg_match("#[a-z]+#", $password)) {
            return false;
        }if(!preg_match($pattern,$password)){
            return false;
        }
        return true;
    }

    function emailExists($email) {
        $sql = "SELECT COUNT(*) FROM retailer WHERE email = :email";
        $query = $this->db->connect()->prepare($sql);
        $query->bindParam(':email', $email);
        $count = $query->execute() ? $query->fetchColumn() : 0;
    
        return $count > 0;
    }


    function login($email, $password){
        $sql = "SELECT * FROM retailer WHERE email = :email LIMIT 1;";
        $query = $this->db->connect()->prepare($sql);

        $query->bindParam('email', $email);

        if($query->execute()){
            $data = $query->fetch();
            if($data && ($password == $data['password'])){
                $_SESSION['retailer_id'] = $data['id']; // Store retailer ID
                $_SESSION['retailer_fname'] = $data['first_name']; 
                $_SESSION['retailer_lname'] = $data['last_name'];
                $_SESSION['retailer_email'] = $data['email'];
                $_SESSION['retailer_address'] = $data['address'];
                $_SESSION['retailer_contact'] = $data['contact'];
                return true;
            }
        }

        return false;
    }

    function fetch($email){
        $sql = "SELECT * FROM retailer WHERE email = :email LIMIT 1;";
        $query = $this->db->connect()->prepare($sql);

        $query->bindParam('email', $email);
        $data = null;
        if($query->execute()){
            $data = $query->fetch();
        }

        return $data;
    }


    function loginDistributor($email, $password) {
        $sql = "SELECT * FROM distributor WHERE email = :email LIMIT 1;";
        $query = $this->db->connect()->prepare($sql);
    
        $query->bindParam('email', $email);
    
        if ($query->execute()) {
            $data = $query->fetch();
            if ($data && ($password == $data['password'])) { // Replace this with password_verify() for security
                $_SESSION['distributor_id'] = $data['id']; // Store distributor ID in session
                
                // Fetch distributor additional information
                $distributorInfo = $this->getDistributorInformation($data['id']);
                
                if ($distributorInfo) {
                    $_SESSION['distributor_info'] = $distributorInfo; // Store additional info in session
                }
    
                return true;
            }
        }
    
        return false;
    }
    

    function getDistributorInformation($distributor_id) {
        $sql = "SELECT * FROM distributor_information WHERE distributor_id = :distributor_id LIMIT 1;";
        $query = $this->db->connect()->prepare($sql);
    
        $query->bindParam('distributor_id', $distributor_id);
        
        if ($query->execute()) {
            return $query->fetch(PDO::FETCH_ASSOC); // Fetch as associative array
        }
    
        return null; // Return null if no data found
    }
    
}