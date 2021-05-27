<?php

function dd($data){
    echo "<pre>";
    die(var_dump($data));
    echo "</pre>";
}

function view($view, $data = []){
    extract($data);
    return require "app/views/{$view}.view.php";
}

function redirect($location){
    return header("Location: /{$location}");
}