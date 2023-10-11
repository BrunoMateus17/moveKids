<?php
    include_once "../../../../../config/Conexao.php";
    try {
        $conn = Conexao::conectar();
        $sql = $conn->prepare("
            SELECT 
                id,
                nome,
                status,
                descricao
            FROM
                categoria
            WHERE 
                IF(:id != '', id = :id, 0=0)
        ");
        $sql->bindParam("id",$_POST['id']);
        $sql->execute();
        $data = $sql->fetchAll(PDO::FETCH_ASSOC); 
        if($data){
            echo '{"success":true,"message":"","elements":'.json_encode($data).'}';
        }else{
            echo '{"success":false,"message":"Não foi possivel listar os usuarios"}';
        }
    }catch (PDOException $e) {
        echo "Conexão falhou ! ". $e->getMessage();
    }