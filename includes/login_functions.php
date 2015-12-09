<?php
//this page defines two functions used by the login/logout process

/*This function defines and absolute URL and redirects the user there.
 * The function takes one argument: the page to be redirected to. The argument 
 * defaults to pleaselogin.php
 */

function redirect_user ($page = 'pleaselogin.php'){
    //define the URL
    $url = 'http://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']);
    
    //remove any trailing slashes:
    $url = rtrim($url, '/\\');
    
    //add the page
    $url .='/'.$page;
    
    //redirect the user:
    header("Location: $url");
    exit(); //quit the script
} //end of redirect_user() function

/* This function validate the form data (email address and password).
 * If both are present, the database is queried. The function requires
 * a database connection. The function returns an array of information including:
 *  - a TRUE/FALSE variable indicating success
 * - an array of either errors or the database result
 */
function check_login($dbc, $email = '', $User_Password){
    $errors = array(); //initialize error array
    //validate the email address
    if (empty($email)){
        $errors[] = 'Please enter an email address.';
    }else{
        
    }
}