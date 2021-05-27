<?php
// require 'views/contact.view.php';
$tasks = App::get('database')->all('todos');

$arr_func = array_filter($tasks, function($task){
    return $task->completed;
});

$arr_func = array_map(function($task){
    return $task->description;
        
}, $tasks);


$arr_func = array_column($tasks, 'description');

echo "<pre>";
die(var_dump($arr_func));
echo "</pre>";
