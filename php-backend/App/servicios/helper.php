<?php
class helper{
    public function authCheck( $hash, $getIdentity = false )
    {
        $jwt_auth = new jwtAuth();

        $auth = false;

        if ( $hash != null ) {
            if ( $getIdentity == false ) {
                $check_token = $jwt_auth->checkToken($hash);
                if ( $check_token == true )
                    $auth = true;
            } else {
                $check_token = $jwt_auth->checkToken($hash, true);
                if ( is_object($check_token) )
                    $auth = $check_token;
            }
        }

        return $auth;
    }
    public function checkCode($request)
    {
        $code = $request["code"];
        $data = (isset($request["data"]))? $request["data"] : null;
        $cache = (isset($request["cache"]))? $request["cache"] : null;
        $line = (isset($request["line"])) ? $request["line"] : null;
        if  ($code=='000')
        {
            $msg= (isset($request["msg"])) ? $request["msg"] : 'No se envio el mensaje por el parametro msg';
            $status = (isset($request["status"])) ? $request["status"] : 'No se mando el status por el parametro status';
        }
        switch ($code)
        {
            case '000':
                $data=Array(
                    'status'=>$status,
                    'code'=>$code,
                    'msg'=>$msg,
                    'data'=>$data,
                    'cache'=>$cache,
                    'line'=>$line
                );
                break;
            case '001':
                $data=Array(
                    'status'=>'success',
                    'code'=>$code,
                    'msg'=>'Accion realizada de forma exitosa.',
                    'data'=>$data,
                    'cache'=>$cache,
                    'line'=>$line
                );
                break;
            case '002':
                $data=Array(
                    'status'=>'error',
                    'code'=>$code,
                    'msg'=>'Lo sentimos, este dato no existe.',
                    'data'=>$data,
                    'cache'=>$cache,
                    'line'=>$line
                );
                break;
            case '003':
                $data=Array(
                    'status'=>'error',
                    'code'=>$code,
                    'msg'=>'No se encontraron resultados.',
                    'data'=>$data,
                    'cache'=>$cache,
                    'line'=>$line
                );
                break;
            case '004':
                $data=Array(
                    'status'=>'error',
                    'code'=>$code,
                    'msg'=>'No tiene los permisos suficientes para ingresar a este modulo.',
                    'data'=>$data,
                    'cache'=>$cache,
                    'line'=>$line
                );
                break;
            case '005':
                $data=Array(
                    'status'=>'warning',
                    'code'=>$code,
                    'msg'=>'Lo sentimos no te encuentras validado, Vuelve a ingresar.',
                    'data'=>$data,
                    'cache'=>$cache,
                    'line'=>$line
                );
                break;
            case '006':
                $data=Array(
                    'status'=>'warning',
                    'code'=>$code,
                    'msg'=>'Usuario y contraseña incorrectos.',
                    'data'=>$data,
                    'cache'=>$cache,
                    'line'=>$line
                );
                break;
            case '007':
                $data=Array(
                    'status'=>'success',
                    'code'=>$code,
                    'msg'=>'Registro actualizado de forma correcta.',
                    'data'=>$data,
                    'cache'=>$cache,
                    'line'=>$line
                );
                break;
            case '008':
                $data=Array(
                    'status'=>'success',
                    'code'=>$code,
                    'msg'=>'Registro eliminado de forma correcta.',
                    'data'=>$data,
                    'cache'=>$cache,
                    'line'=>$line
                );
                break;
            case '009':
                $data=Array(
                    'status'=>'error',
                    'code'=>$code,
                    'msg'=>'JSON no valido.',
                    'data'=>$data,
                    'cache'=>$cache,
                    'line'=>$line
                );
                break;
            case '010':
                $data=Array(
                    'status'=>'error',
                    'code'=>$code,
                    'msg'=>'Se requiere el token de autorizacion.',
                    'data'=>$data,
                    'cache'=>$cache,
                    'line'=>$line
                );
                break;
            case '011':
                $data=Array(
                    'status'=>'error',
                    'code'=>$code,
                    'msg'=>'Error de validacion, Token incorrecto.',
                    'data'=>$data,
                    'cache'=>$cache,
                    'line'=>$line
                );
                break;
            case '012':
                $data=Array(
                    'status'=>'error',
                    'code'=>$code,
                    'msg'=>'La imagen es requerida.',
                    'data'=>$data,
                    'cache'=>$cache,
                    'line'=>$line
                );
                break;
            case '013':
                $data=Array(
                    'status'=>'error',
                    'code'=>$code,
                    'msg'=>'Lo sentimos, vuelve a ingresar para terminar el proceso actual.',
                    'data'=>$data,
                    'cache'=>$cache,
                    'line'=>$line
                );
                break;
            case '014':
                $data=Array(
                    'status'=>'error',
                    'code'=>$code,
                    'msg'=>'Lo sentimos, el archivo que intenta subir debe ser de formato PNG,GIF,JPG.',
                    'data'=>$data,
                    'cache'=>$cache,
                    'line'=>$line
                );
                break;
            case '015':
                $data=Array(
                    'status'=>'error',
                    'code'=>$code,
                    'msg'=>'Lo sentimos no podemos modificar los datos, El registro fue eliminado',
                    'data'=>$data,
                    'cache'=>$cache,
                    'line'=>$line
                );
                break;
            case '016':
                $data=Array(
                    'status'=>'error',
                    'code'=>$code,
                    'msg'=>'Lo sentimos, el archivo que intenta subir debe ser de formato MP4,AVI,MPG.',
                    'data'=>$data,
                    'cache'=>$cache,
                    'line'=>$line
                );
                break;
            case '017':
                $data=Array(
                    'status'=>'error',
                    'code'=>$code,
                    'msg'=>'Lo sentimos, el archivo que intenta subir debe ser de formato PDF.',
                    'data'=>$data,
                    'cache'=>$cache,
                    'line'=>$line
                );
                break;
            case '018':
                $data=Array(
                    'status'=>'error',
                    'code'=>$code,
                    'msg'=>'Lo sentimos, el archivo que intenta subir debe ser de formato DOC, DOCX.',
                    'data'=>$data,
                    'cache'=>$cache,
                    'line'=>$line
                );
                break;
            case '019':
                $data=Array(
                    'status'=>'error',
                    'code'=>$code,
                    'msg'=>'Lo sentimos, el archivo que intenta subir debe ser de formato XLS, XLSX.',
                    'data'=>$data,
                    'cache'=>$cache,
                    'line'=>$line
                );
                break;
            case '020':
                $data=Array(
                    'status'=>'error',
                    'code'=>$code,
                    'msg'=>'Se agrego de forma correcta su comentario.',
                    'data'=>$data,
                    'cache'=>$cache,
                    'line'=>$line
                );
                break;
            case '021':
                $data=Array(
                    'status'=>'error',
                    'code'=>$code,
                    'msg'=>'La fecha del localStorage es requerida.',
                    'data'=>$data,
                    'cache'=>$cache,
                    'line'=>$line
                );
                break;
            case '022':
                $data=Array(
                    'status'=>'error',
                    'code'=>$code,
                    'msg'=>'Lo sentimos, Su cuenta no se encuentra activa.',
                    'data'=>$data,
                    'cache'=>$cache,
                    'line'=>$line
                );
                break;
            case '023':
                $data=Array(
                    'status'=>'error',
                    'code'=>$code,
                    'msg'=>'Lo sentimos, esta prioridad ya se encuentra asignada.',
                    'data'=>$data,
                    'cache'=>$cache,
                    'line'=>$line
                );
                break;
            default:
                $data=Array(
                    'status'=>'warning',
                    'code'=>$code,
                    'msg'=>'No se encontro relacion con el codigo de envio',
                    'data'=>$data,
                    'cache'=>$cache,
                    'line'=>$line
                );
        }

        return  json_encode($data);
    }
}