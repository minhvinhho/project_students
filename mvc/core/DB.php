<?php

class DB
{
//mysqli
    //    protected $con;
//    protected $servename = "localhost";
//    protected $usernam = "root";
//    protected $password = "";
//    protected $dbname = "diary";
//PDO
    protected $link;
    protected $dbhost = "localhost";
    protected $dbusername = "root";
    protected $dbpassword = "";
    protected $dbname = "students";


    function __construct()
    {
        try {
        $this->link = new PDO("mysql:host=$this->dbhost;dbname=$this->dbname", $this->dbusername, $this->dbpassword);
    } catch (Exception $e) {
        die('Error db(connect) '.$e->getMessage());
    }
//        $this->con=mysqli_connect($this->servename,$this->usernam,$this->password);
//        mysqli_select_db($this->con,$this->dbname);
//        mysqli_query($this->con,"SET NAMES 'utf8'");
//        try {
//            $dsn = "mysql:host=" . $this->dbHost . ";dbname=" . $this->dbName;
//            $link = new PDO($dsn, $this->dbUser, $this->dbPassword);
//
//        } catch(PDOException $e) {
//            echo "DB Connection Failed: " . $e->getMessage();
//        }
    }
}

?>