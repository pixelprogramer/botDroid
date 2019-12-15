<?php

$app->post('/login', function () use ($app) {
    $json = $app->request->post('json', null);
    $parametros = json_decode($json);
    $usuario = $parametros->usuario;
    $contrasena = $parametros->contrasena;
    $helper = new helper();
    $conexion = new conexPGSeguridad();
    $sql = "SELECT id, nombre, usuario, contrasena
	FROM usuario where usuario='$usuario' and contrasena = '$contrasena';";
    $r = $conexion->consultaComplejaNorAso($sql);
    if ($r['usuario'] == $usuario && $contrasena == $r['contrasena']) {
        $data = [
            'status' => 'exitoso',
            'code' => '00',
            'msg' => "Bienvenido",
            'data' => $r
        ];
    } else {
        $data = [
            'status' => 'error',
            'code' => '01',
            'msg' => "",
            'data' => $r
        ];
    }

    echo $helper->checkCode($data);
});

$app->post('/crearPost', function () use ($app) {
    $json = $app->request->post('json', null);
    $parametros = json_decode($json);
    $titulo = $parametros->titulo;
    $fecha_creacion = date('Y-m-d H:i');
    $contenido = $parametros->contenido;
    $id_usuario = $parametros->id_usuario;
    $helper = new helper();
    $conexion = new conexPGSeguridad();
    $sql = "INSERT INTO public.post(
                titulo, contenido, fecha_creacion, id_usuario)
                VALUES ('$titulo', '$contenido', '$fecha_creacion', '$id_usuario');";
    $conexion->consultaSimple($sql);
    $data = [
        'status' => 'exitoso',
        'code' => '00',
        'msg' => "Bienvenido",
    ];
    echo $helper->checkCode($data);
});


$app->post('/listPost', function () use ($app) {

    $helper = new helper();
    $conexion = new conexPGSeguridad();
    $sql = "select * from post po 
inner join usuario u on po.id_usuario = u.id order by po.id desc";
    $r = $conexion->consultaComplejaAso($sql);
    $data = [
        'status' => 'exitoso',
        'code' => '00',
        'msg' => "Bienvenido",
        'data'=>$r
    ];
    echo $helper->checkCode($data);
});