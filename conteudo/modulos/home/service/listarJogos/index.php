<?php
    include_once "../../../../../database/Conexao.php";
    try {
        $conn = Conexao::conectar();
        $sql = $conn->prepare("
            SELECT 
                g.id,
                g.titulo,
                g.categoria_id,
                c.nome AS categoria,
                g.url,
                g.img,
                g.status,
                g.sobre,
                g.instrucoes
            FROM
                games g
            INNER JOIN 
                categoria c
            ON 
                g.categoria_id = c.id
            WHERE 
                IF(:id != '', g.id = :id, 0=0) AND
                IF(:categoria_id != '', c.id = :categoria_id, 0=0) AND
                IF(:text != '', g.titulo LIKE :text, 0=0) AND
                 c.status = 'H'
        ");
        $sql->bindParam("id",$_POST['id']);
        $sql->bindParam("categoria_id",$_POST['categoria_id']);
        $sql->bindParam("text",$_POST['text']);
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