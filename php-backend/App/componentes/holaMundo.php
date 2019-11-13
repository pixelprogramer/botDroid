<?php
$app->get('/holaMundo', function () use ($app) {

    $helper = new helper();
    $data = [
        'status'=>'exitoso',
        'code' => '000',
        'msg' => 'Hola mundo'
    ];
    echo $helper->checkCode($data);
});

$app->get('/holaMundoNelson', function () use ($app) {

    $helper = new helper();
    $data = [
        'status'=>'exitoso',
        'code' => '000',
        'msg' => 'Hola mundo, soy nelson'
    ];
    echo $helper->checkCode($data);
});

$app->get('/holaMundoNikolaLuxember', function () use ($app) {

    $helper = new helper();
    $data = [
        'status'=>'exitoso',
        'code' => '000',
        'msg' => 'Hola mundo, soy Nikola Luxember, el chico de las poesias'
    ];
    echo $helper->checkCode($data);
});