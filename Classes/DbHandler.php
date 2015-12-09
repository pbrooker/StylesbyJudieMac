<?php

/*
 * DbHandler.php
 * class to handle all database operations
 * this class will hae the crud methods
 * C - create
 * R - READ
 * U - update
 * D - delete
 */

/**
 * description of DbHandler
 * 
 * @author Jordan
 */
class DbHandler {

    //private connection variable
    private $conn;

    //class constructor
    function __construct() {
        require_once dirname(__file__) . '/DbConnect.php';

        //open new database
        try {
            $db = new DbConnect(); //instantiate the DbConnect class
            $this->conn = $db->connect();
            
        } catch (PDOException $ex) {
            $this::dbConnectError($ex->getCode());
        }
    }

// end of constructor 

    private static function dbConnectError($code) {
        switch ($code) {
            case 1045:
                echo 'A database error has occured! Please try again later';
                break;
            case 2002:
                echo 'A database server has occured! Please try again later';
                break;
            default:
                echo 'An error has occured! Please try again later';
                break;
        }
    }

//    //end of dbConnectError function
//    /*
//     * get a list of categories  
//     */
//    public function getPhotos($id) {
//        //build SQL query
//        $sql = "select photo_id, photo_description from photos";
//        //try to fetch the records
//        try {
//            $stmt = $this->conn->query($sql);
//            $pages = $stmt->fetchAll(PDO::FETCH_ASSOC);
//            $data = array('error' => false,
//                'items' => $pages);
//        } catch (PDOException $ex) {
//            $data = array('error' => true,
//                'message' => $ex->getMessage());
//        }
//
//        //return the data back to callng environment
//        return $data;
//    }

//    /**
//     * get a list of categories for creating menu system
//     */
//    public function getPopularList() {
//        //build SQL query
//        $sql = "select count(*), page_id, pages.title, 
//	   CONCAT(left(pages.description,30),'...') as description
//            from history join pages on pages.id = history.page_id
//            where type = 'page'
//            group by page_id
//            order by 1 desc
//            limit 6;";
//        //try to fetch the records
//        try {
//            $stmt = $this->conn->query($sql);
//            $categories = $stmt->fetchAll(PDO::FETCH_ASSOC);
//            $data = array('error' => false,
//                'items' => $categories);
//        } catch (PDOException $ex) {
//            $data = array('error' => true,
//                'message' => $ex->getMessage());
//        }
//        //return the data back to callng environment
//        return $data;
//    }

    /*
     * get a list of article (pages)
     * 
     */

//    public function getArticleList() {
//        //build the sql query
//        $sql = "select id, title, description from pages order by title";
//
//        //try to fetch all records
//        try {
//            $stmt = $this->conn->query($sql);
//            $articles = $stmt->fetchAll(PDO::FETCH_ASSOC);
//            $data = array(
//                'error' => false,
//                'items' => $articles
//            );
//        } catch (PDOException $ex) {
//            $data = array('error' => true,
//                'message' => $ex->getMessage());
//        }
//        //return the data array
//        return $data;
//    }
//
//    /*
//     * get a single article (page)
//     */

    public function getPhotos() {
        
        //try to fetch all records
        try {
            $stmt = $this->conn->prepare("select photo_id, photo_description
                                           from photos");
            
            $stmt->execute();
            $page = $stmt->fetchAll(PDO::FETCH_ASSOC);

            $data = array('error' => false,
                'items' => $page
            );
        } catch (PDOException $ex) {
            $data = array('error' => true,
                'message' => $ex->getMessage());
        }
        
        //return the data array
        return $data;
    }

//    /*
//     * get all articles for a particular category id
//     */
//
//    public function getArticlesbyCategory($id) {
//       
//        //try to fetch all records
//        try {
//            $stmt = $this->conn->prepare("select category, pages.id, title, description
//                                                from pages join categories
//                                                on category_id = categories.id
//                                                where category_id=:id
//                                                order by date_created desc");
//            $stmt->bindValue(':id', $id, PDO::PARAM_INT);
//            $stmt->execute();
//            $pages = $stmt->fetchAll(PDO::FETCH_ASSOC);
//
//            $data = array('error' => false,
//                          'items' => $pages
//            );
//        } catch (PDOException $ex) {
//            $data = array('error' => true,
//                'message' => $ex->getMessage());
//        }
//        //return the data array
//        return $data;
//    }

}

//end of class