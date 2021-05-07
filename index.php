<?php

require __DIR__ . "/vendor/autoload.php";

$app = new Leaf\App;


$app->db()->connect("db4free.net:3306", "progmobapiuser", "progmobapipass", "progmobapidb");


$app->get('/', function () use ($app) {

//rota de listagem de todas as ONGs


    $app->response()->json([
    "mensagem" => "Alô, LeBron!"
    ]);
});


$app->get('/ong', function () use ($app) {

//rota de listagem de uma ong especifica


    $app->response()->json([
        "mensagem" => "Alô, LeBron!"
    ]);

    $app->response()->

});

      
$app->get('/search', function () use ($app) {

//rota de listagem da pesquisa pelo nome da ong


    $app->response()->json([
        "mensagem" => "Alô, LeBron!"
    ]);
});