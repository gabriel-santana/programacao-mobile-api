<?php

require __DIR__ . "/vendor/autoload.php";

$app = new Leaf\App;


$app->db()->connect("db4free.net:3306", "progmobapiuser", "progmobapipass", "progmobapidb");

//rota de listagem de todas as ONGs

$app->get('/', function () use ($app) {

$limit = $app->request()->get("limit");
  $offset = $app->request()->get("offset");

  $ongs = $app->db()
    ->query("SELECT * FROM ong LIMIT ? OFFSET ?")
    ->bind($limit, $offset)
    ->all();

  $app->response()->json($ongs);
});


$app->get('/ong', function () use ($app) {

//rota de listagem de uma ong especifica


    $app->response()->json([
        "mensagem" => "Alô, LeBron!"
    ]);


});

      
$app->get('/search', function () use ($app) {

//rota de listagem da pesquisa pelo nome da ong


    $app->response()->json([
        "mensagem" => "Alô, LeBron!"
    ]);
});


$app->run();