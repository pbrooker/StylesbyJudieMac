<?php


/******************* Constants ****************************/
define('BASE_URI', 'c:/xampp/');
define('MYSQL', BASE_URI.'2016_DBconn/2016_judiemac_connect.php');

require MYSQL;

/* 
 * Constants
 */

//define('IMGS_DIR', 'c:/xampp/htdocs/StylesbyJudieMac/images');
//define('BASE_URL', 'http://localhost:8888/StylesbyJudieMac');
//define('API_URL', 'http://localhost:8888/StylesbyJudieMac_api/');
//
////start the session
//session_start();
//
////ob_start();  //output buffering turned on to prevent headers already sent errors
//
////Make sure the session is killed after inactivity
//if(isset($_SESSION['LAST_ACTIVITY']) && (time()-$_SESSION['LAST_ACTIVITY']>1800)){
//    //last request was more than 30 minutes ago
//    session_unset(); //unset session variable
//    session_destroy(); //destory session data in storage
//}
//
////Update LAST_ACTIVITY time stamp
//$_SESSION['LAST_ACTIVITY'] = time();

