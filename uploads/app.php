<?php
    require "../vendor/autoload.php";
    $router = new \Bramus\Router\Router();

    $router->get("/camper", function(){
        // SELECT * FROM tb_camper;
        $conexion = new \App\connect();
        $res = $conexion->con->prepare("SELECT * FROM tb_camper");
        $res->execute();
        $res = ($res->fetchAll(PDO::FETCH_ASSOC));
        echo json_encode($res);
    });

    $router->post("/camper",function(){
        $_DATA = json_decode(file_get_contents("php://input"),true);
        $conexion = new \App\connect();
        $res=$conexion->con->prepare("INSERT INTO tb_camper (nombre,edad) VALUES (:NOMBRE, :EDAD)");
        $res->bindValue("NOMBRE",$_DATA["nombre"]);
        $res->bindValue("EDAD",$_DATA["edad"]);

        $res->execute();
        $res = $res->rowCount();
        echo json_encode($res);

    });
    $router->put("/camper", function(){
        $_DATA = json_decode(file_get_contents("php://input"), true);
        $conexion = new \App\connect();
        /**
         * * las MAYUSCULAS SON LOS VALORES 
         * * Los valores dentro de $_DATA deber tener el mismo nombre que en el json que se envie con el thunderClient
         */
        $res = $conexion->con->prepare("UPDATE tb_camper SET nombre = :NOMBRE,edad = :EDAD WHERE id=:CEDULA");
        $res->bindValue("CEDULA", $_DATA["id"]);
        $res->bindValue("NOMBRE", $_DATA["name"]);
        $res->bindValue("EDAD", $_DATA["age"]);
        
        $res->execute();
        $res = $res->rowCount();
        echo json_encode($res);
    });
    $router->delete("/camper",function (){
        $_DATA = json_decode(file_get_contents("php://input"),true);
        $conexion = new \App\connect();
        $res = $conexion->con->prepare("DELETE FROM tb_camper  WHERE id=:ID");
        $res->bindValue("ID",$_DATA["id"]);

        $res->execute();
        $res = $res->rowCount();
        echo json_encode($res);
    });

    $router->run();


?>