<?php

require __DIR__ . "/vendor/autoload.php";

$app = new Leaf\App;


$app->db()->connect("db4free.net:3306", "progmobapiuser", "progmobapipass", "progmobapidb");

//rota de listagem de todas as ONGs

$app->get('/ongs', function () use ($app) {

$limit = $app->request()->get("limit");
  $offset = $app->request()->get("offset");

  $ongs = $app->db()
    ->query("SELECT * FROM ong LIMIT ? OFFSET ?")
    ->bind($limit, $offset)
    ->all();

  $app->response()->json($ongs);
});


$app->get('/ongs/{id}', function ($id) use ($app) {

//rota de listagem de uma ong especifica

  $ong = $app->db()
    ->query("SELECT * FROM ong WHERE id = ?")
    ->bind($id)
    ->first();
    
  $contato = $app->db()
    ->query("SELECT * FROM contato WHERE id_ong = ?")
    ->bind($id)
    ->first();

  $app->response()->json([$ong, $contato]);
  });


      
$app->get('/ongs/search', function () use ($app) {

//rota de listagem da pesquisa pelo nome da ong


    $app->response()->json([
        "mensagem" => "Alô, LeBron!"
    ]);
});


$app->run();