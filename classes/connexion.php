<?php
class Connexion{
    private $host = "localhost";
    private $user = "root";
    private $pwd = "";
    private $dbname = "youcrafting";
    public $conn;
    protected function connectdb(){
        $this->conn = null;
        try{
        $this->conn = new PDO("mysql:host=".$this->host.";dbname=".$this->dbname, $this->user, $this->pwd);
        
        // echo "success";
        }catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }
        return $this->conn;
    }
}

// $con = new Connexion();
// $con->connectdb();