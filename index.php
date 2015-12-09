<?php
include 'includes/header.php';





//SLIM FRAMEWORK (ROUTING)


//1. step 1: require the Slim Framework
require 'vendor/autoload.php';

//2. step 2: Instantiate the Slim Application
$app = new \Slim\Slim();


//3. step 3: Define the Slim Application routes

//NOte: Slim defaults to a folder called templates
//for all template rendering
//GET index route
$app->get('/',function() use ($app){
    $app->render('home.php');
});

$app->get('/index',function() use ($app){
    $app->render('home.php');
});


$app->get('/about',function() use ($app){
    $app->render('about.php');
});

$app->get('/services',function() use ($app){
    $app->render('services.php');
});

$app->get('/styles',function() use ($app){
    if (empty($_SESSION['user'])){
        $app->response->redirect('pleaselogin');
    }else{
    $app->render('styles.php');
    }
});

$app->get('/colours',function() use ($app){
    if (empty($_SESSION['user'])){
        $app->response->redirect('pleaselogin');
    }else{
    $app->render('colours.php');
    }
});


$app->get('/contact',function() use ($app){
    $app->render('contact.php');
});

$app->get('/sign_in',function() use ($app){
    $app->render('sign_in.php');
});

$app->get('/pleaselogin',function() use ($app){
    $app->render('pleaselogin.php');
});

$app->get('/sign_up',function() use ($app){
    $app->render('sign_up.php');
});


//Post contact route
//$app->post('/contact',function() use ($app){
//    var_dump($_POST);
//});



//4. step 4: Run the Slim Applicaton
$app->run();



include 'includes/footer.php';





