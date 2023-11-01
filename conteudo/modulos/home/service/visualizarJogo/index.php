<?php
    include_once "../../../../../database/Conexao.php";
    try {
        $conn = Conexao::conectar();
        $sql = $conn->prepare("
            SELECT 
                g.titulo,
                g.url,
                g.img,
                g.status,
                g.sobre,
                g.instrucoes
            FROM
                games g
            WHERE 
                IF(:id != '', g.id = :id, 0=0)
        ");
        $sql->bindParam("id",$_POST['id']);
        $sql->execute();
        $data = $sql->fetchAll(PDO::FETCH_ASSOC); 
        if($data){
            echo '{"success":true,"message":"","elements":'.json_encode($data).'}';
        }else{
            echo '{"success":false,"message":"Não foi possivel listar os games"}';
        }
    }catch (PDOException $e) {
        echo "Conexão falhou ! ". $e->getMessage();
    }