<?php
require 'vendor/autoload.php';

$app = new \Slim\Slim();

$app->get('/', function() use ( $app ) {
    echo "welcome to REST API";
});

$app->get('/tasks', function($name) use ( $app ) {
    //
    $tasks[]= arroy(
        array('id'=>1, 'description'=>'Learn REST', 'done'=> false),
        array('id'=>2, 'description'=>'Learn JavaScript', 'done'=>false)
        );
        echo json_encode($tasks);
});

$app->run();
?>

