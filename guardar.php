<?php

    require_once "conexion.php";

    if(empty($_POST['nombre'])){
        echo json_encode(array(
            'status' => 'empty',
            'message' => '¡Complete los datos!'
        ));
    }else{

        $nombre = $_POST['nombre'];
        $telefono = $_POST['telefono'];
        $email = $_POST['email'];
        $check1 = $_POST['check1'];
   
        $consulta = $pdo->prepare("INSERT INTO usuarios(nombre,telefono,email,noticias) VALUES (:nombre,:telefono,:email,:check1)");
    
        $consulta->bindParam(':nombre',$nombre);
        $consulta->bindParam(':telefono',$telefono);
        $consulta->bindParam(':email',$email);
        $consulta->bindParam(':check1',$check1);
        $consulta->execute();

        $last_id= $pdo->lastInsertId();
        
    

        $servicio="https://www.dataaccess.com/webservicesserver/numberconversion.wso?WSDL"; //url del servicio
        $parametros=array(); //parametros de la llamada
        $parametros['dNum']=$last_id;
        $client = new SoapClient($servicio, $parametros);
        $result = $client->NumberToDollars($parametros);//llamamos al métdo que nos interesa con los parámetros
        //convert into json
        $json  = json_encode($result);
        //convert into associative array
        $xmlArr = json_decode($json, true);
        $variable=$xmlArr['NumberToDollarsResult'];

        echo json_encode(array(
            'status' => 'success',
            'message' => $variable
           
        ));
    }
?>