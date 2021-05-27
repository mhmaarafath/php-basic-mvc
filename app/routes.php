<?php

    $router->get('', 'PagesController@home');
    $router->get('contact', 'PagesController@contact');
    $router->get('about', 'PagesController@about');
    $router->get('user', 'UserController@index');
    $router->post('user', 'UserController@store');
    // $router->get('array', 'controllers/arrayfunction.php');
    // $router->post('names', 'controllers/names.php');
