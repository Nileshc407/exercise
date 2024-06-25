<?php
#set path 

cd xampp/htdocs/exercise/prog/

#set port 

C:\xampp\htdocs\exercise\prog>php -S localhost:9001

# razor pay 
https://www.youtube.com/watch?v=XsmKql27FKo



require 'vendor/autoload.php';

$app = new \Slim\App();

$app->get('/', function ($request, $response, $args) {
    $response->getBody()->write("Hello, Slim!");
    return $response;
});

$app->run();

?>