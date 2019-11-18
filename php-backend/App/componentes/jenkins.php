<?php
$app->get('/pruebaJenkins', function () use ($app) {

    $helper = new helper();
    $data = [
        'status'=>'exitoso',
        'code' => '000',
        'msg' => 'Esto es una prueba de Jenkins  --- pruyeba 1 '
    ];
    echo $helper->checkCode($data);
});


