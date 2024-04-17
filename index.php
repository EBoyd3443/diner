<?php
/* Eric Boyd
 * 11Apr2024
 * SDev 328
 */
// 328/diner/index.php
// This is our fat free controller

ini_set('display_errors', 1);
error_reporting(E_ALL);

// Require the autoloader
require_once("vendor/autoload.php");

// Instantiate the f3 base class
$f3 = Base::instance();

// Define a default route
$f3->route('GET /', function() {
    //echo '<h1>Hello Diners. Welcome to My Diner App!</h1>';

    //Render view page.
    $view = new Template();
    echo $view->render("views/home-page.html");
});

// Define the breakfast menu route
$f3->route('GET /menus/breakfast', function() {
    //echo '<h1>Hello Diners. Welcome to My Diner App!</h1>';

    //Render view page.
    $view = new Template();
    echo $view->render("views/breakfast-menu.html");
});

// Define the lunch menu route
$f3->route('GET /menus/lunch', function() {
    //echo '<h1>Hello Diners. Welcome to My Diner App!</h1>';

    //Render view page.
    $view = new Template();
    echo $view->render("views/lunch-menu.html");
});

// Define the dinner menu route
$f3->route('GET /menus/dinner', function() {
    //echo '<h1>Hello Diners. Welcome to My Diner App!</h1>';

    //Render view page.
    $view = new Template();
    echo $view->render("views/dinner-menu.html");
});

// Run fat free
$f3->run();