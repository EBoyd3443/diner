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

// Define the order1 route
$f3->route('GET|POST /order1', function($f3) {
    //echo '<h1>Hello Diners. Welcome to My Diner App!</h1>';

    //If the method has been posted
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $food = $_POST['food'];
        $meal = $_POST['meal'];

        //if data valid
        if(!empty($food) && !empty($meal))//very simple validation for example
        {
            //add data to session array
            $f3->set('SESSION.food', $food);
            $f3->set('SESSION.meal', $meal);
            //send the user to the next form
            $f3->reroute('order2');
        }
        else
        {
            echo "<p>Validation failed</p>"; //Temporary! Don't mix code types.
        }
    }


    //Render view page.
    $view = new Template();
    echo $view->render("views/order1.html");
});

// Define the order2 route
$f3->route('GET|POST /order2', function($f3) {
    //echo '<h1>Hello Diners. Welcome to My Diner App!</h1>';

    var_dump( $f3->get('SESSION'));

    //Render view page.
    $view = new Template();
    echo $view->render("views/order2.html");
});

// Run fat free
$f3->run();