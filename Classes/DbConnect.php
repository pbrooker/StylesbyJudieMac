<?php

/*
 * DbConnect.php
 * Datebase connection class
 * 
 */

/**
 * Description of DbConnect
 *
 * @author Jordan
 */


class DbConnect {
    //create private variables
    private $conn;
    function __construct() {
        //empty constructor
    }
    
  /**
  *Establish databse connection 
  *@return datebase connection handler
 */
    function connect(){
        include_once dirname($_SERVER['DOCUMENT_ROOT']).'/2016_DBconn/2016_judiemac_connect.php';
        //c:/xampp/2016_dbconn/salon_connection.php'
        
        //make the connecion 
        $this->conn = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASSWORD);
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //throw exception
        
        //return the connection resource
        return $this->conn;
    }
}
