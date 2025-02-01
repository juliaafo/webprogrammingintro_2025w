<?php
class Database{
    private $connection;
    function __construct(){
        $this->connect_db();
    }
    public function connect_db(){
        $this->connection = mysqli_connect('localhost', 'root', 'mysql', 'assignment1');
        if(mysqli_connect_error()){
            die("Database connection failed" . mysqli_connect_error());
        }
    }
    public function create($firstName, $lastName, $year, $email, $average){
        $sql = "INSERT INTO students (firstName, lastName, year, email, average) VALUES ('$firstName', '$lastName', '$year', '$email', '$average')";
        $res = mysqli_query($this->connection, $sql);
        return $res ? true : false;
    }
    public function sanitize($var){
        return mysqli_real_escape_string($this->connection, $var);
    }
}
$database = new Database();
?>