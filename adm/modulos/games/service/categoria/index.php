<?php
    include_once "../../../../../database/Conexao.php";
    try {
        $conn = Conexao::conectar();
        $sql = $conn->prepare("
            SELECT 
                id,
                nome
            FROM
                categoria
        ");
        $sql->execute();
        $data = $sql->fetchAll(PDO::FETCH_ASSOC); 
        if($data){
            echo '{"success":true,"message":"","elements":'.json_encode($data).'}';
        }else{
            echo '{"success":false,"message":"Não foi possivel listar as categorias"}';
        }
    }catch (PDOException $e) {
        echo "Conexão falhou ! ". $e->getMessage();
    }