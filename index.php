<?php

/*
 * Tina Ostrander
 * 5/9/2023
 * 328/week6/index.php
 * Controller for week6 project: Templating
 */

// Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Require the autoload file
require_once('vendor/autoload.php');

// Create an F3 (Fat-Free Framework) object
$f3 = Base::instance();

// Define a default route
$f3->route('GET /', function($f3) {

    // Add data to F3 "hive"
    $f3->set('title', 'Welcome to Week 6: Templating');
    $f3->set('color', 'green');
    $f3->set('food', 'pho');
    $f3->set('temp', 67);

    // Add a radius variable to your controller
    $f3->set('radius', 10);

    // Add an array of fruits to the controller
    $fruits = array('banana', 'apple', 'kiwi');
    $f3->set('fruits', $fruits);

    // Add an array of vegetables to the controller
    // Display them as a numbered list in the view page
    $veggies = array('kale', 'zucchini', 'eggplant');
    $f3->set('veggies', $veggies);

    // Define an associative array of cupcake flavors
    $cupcakes = array('choc-mocha'=>'Chocolate Mocha',
                      'straw-cheese'=>'Strawberry Cheesecake',
                      'blue-lemon'=>'Blueberry Lemon');
    $f3->set('cupcakes', $cupcakes);

    // Display a view page
    $view = new Template();
    echo $view->render('views/info.html');
});

//Add an .htaccess file to enable routing
$f3->route('GET /page2', function() {
    echo "Page 2 ";
});

// Run Fat-Free
$f3->run();