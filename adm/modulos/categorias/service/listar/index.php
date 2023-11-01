<?php
    include_once "../../../../../database/Conexao.php";

    try {
        $conn = Conexao::conectar();
        $sql = $conn->prepare("
            SELECT 
                id,
                nome,
                status,
                descricao,
                (SELECT COUNT(*) FROM games g WHERE g.categoria_id = c.id ) as total
            FROM
                categoria c
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
        echo '{"success":false,"message": '.$e->getMessage().'}';
    }