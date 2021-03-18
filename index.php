<?php

use Core\Autoloader;
use Core\Router;

// Print all error
error_reporting(E_ALL);
ini_set('display_errors', 1);


// Load and initialize autoloader
require_once 'core/Autoloader.php';
Autoloader::register();


$router = new Router($_GET['url']);

/**i
 * FRONT ROUTING
 */

//GET METHOD
$router->addGetRoute('/', 'Home#getPosts');

//PAGE CUSTOM
$router->addGetRoute('/contact', 'Page#goToContact');
$router->addGetRoute('/references', 'Page#goToReferences');
$router->addGetRoute('/cookies', 'Page#goToCookies');
$router->addGetRoute('/legales', 'Page#goToLegales');
$router->addGetRoute('/parcours', 'Page#goToParcours');
$router->addGetRoute('/politique-confidentialite', 'Page#goToConfidentialite');
$router->addGetRoute('/blog', 'Page#goToBlog');
$router->addGetRoute('/blog/:id', 'Page#goToSinglePost');

/**
 * LOGIN AND LOGOUT ROUTES
 */
$router->addGetRoute('/redaction', 'User#loginPage');
$router->addGetRoute('/logout', 'User#logout');
$router->addPostRoute('/redaction', 'User#validateLogin');

// FORMULAIRE
$router->addPostRoute('/email/:page', 'Page#sendEmail');

/**
 * BACK ROUTING
 */
session_start();
if(isset($_SESSION['login'])){
    //GET METHOD
    $router->addGetRoute('/admin', 'Admin#home');

    $router->addGetRoute('/admin/posts/newPost', 'Admin#newPost');
    $router->addGetRoute('/admin/posts', 'Admin#getPosts');
    $router->addGetRoute('/admin/posts/:id', 'Admin#getPost');

    //POST METHOD
    $router->addPostRoute('/admin/posts/createPost', 'Admin#createPost');
    $router->addPostRoute('/admin/posts/:id/editPost', 'Admin#editPost');
    $router->addPostRoute('/admin/posts/:id/removePost', 'Admin#removePost');

    $router->addGetRoute('/admin/users', 'Admin#getUsers');
    $router->addPostRoute('/admin/users/createUser', 'Admin#createUser');
    $router->addPostRoute('/admin/users/:id', 'Admin#removeUser');
}

$router->addGetRoute('/error/:errorMsg', function($errorMsg){
    require 'views/front/error.php';
});

//Start the routing
try {
    $router->run();
} catch (Exception $e){
    if($e->getMessage() == "e404"){
        header('Location: /error/'.$e->getMessage());
    }
}