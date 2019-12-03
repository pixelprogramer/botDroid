<?php
$app->get('/pruebaJenkins', function () use ($app) {

    $helper = new helper();
    $data = [
        'status'=>'exitoso',
        'code' => '000',
        'msg' => 'Esto es una prueba de la semana 7 y 8'
    ];
    echo $helper->checkCode($data);
});


