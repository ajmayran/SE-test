<?php

require_once '../database/connect.php';

class Account{
    public $id = '';
    public $first_name = '';
    public $middle_name = '';
    public $last_name = '';
    public $email = '';
    public $permit = '';
    public $password = '';
    protected $db;

    function __construct(){
        $this->db = new Database();
    }

    function add(){
        $sql = "INSERT INTO user (first_name, middle_name, last_name, email, permit, password) VALUES (:first_name, :middle_name, :last_name, :email, :permit, :password);";
        $query = $this->db->connect()->prepare($sql);

        $query->bindParam(':first_name', $this->first_name);
        $query->bindParam(':middle_name', $this->middle_name);
        $query->bindParam(':last_name', $this->last_name);
        $query->bindParam(':email', $this->email);
        $query->bindParam(':permit', $this->permit);
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
        $sql = "SELECT COUNT(*) FROM user WHERE email = :email";
        $query = $this->db->connect()->prepare($sql);
        $query->bindParam(':email', $email);
        $count = $query->execute() ? $query->fetchColumn() : 0;
    
        return $count > 0;
    }

    function login($email, $password){
        $sql = "SELECT * FROM user WHERE email = :email LIMIT 1;";
        $query = $this->db->connect()->prepare($sql);

        $query->bindParam('email', $email);

        if($query->execute()){
            $data = $query->fetch();
            if($data && ($password == $data['password'])){
                return true;
            }
        }

        return false;
    }

    function fetch($email){
        $sql = "SELECT * FROM user WHERE email = :email LIMIT 1;";
        $query = $this->db->connect()->prepare($sql);

        $query->bindParam('email', $email);
        $data = null;
        if($query->execute()){
            $data = $query->fetch();
        }

        return $data;
    }
}