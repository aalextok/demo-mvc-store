<?php
require __DIR__ . '/vendor/autoload.php';

use App\Lib\Router;
use App\Lib\Request;
use App\Lib\Response;

// Change it depending on uri of the app:
const APP_URI = '/noframework';

\App\Models\Model::makeDBConnection();

Router::get('/', function () {
    (new \App\Controllers\ProductController())->actionIndex();
});

Router::get('/product', function () {
    (new \App\Controllers\ProductController())->actionShowEditForm();
});

Router::post('/product', function ($request) {
    (new \App\Controllers\ProductController())->actionSaveProduct($request);
});

Router::get('/post/([0-9]*)', function (Request $req, Response $res) {
    $res->toJSON([
        'post' =>  ['id' => $req->params[0]],
        'status' => 'ok'
    ]);
});