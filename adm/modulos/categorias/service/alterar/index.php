<?php 
    include_once "../../../../../config/Conexao.php";
    try{
        $conn = Conexao::conectar();
        $sql = $conn->prepare("
        UPDATE
            categoria
        SET 
            nome = :nome,
            status = :status,
            descricao = :descricao
        WHERE 
            id = :id
        ");
        $sql->bindParam("nome",$_POST['nome']);
        $sql->bindParam("status",$_POST['status']);
        $sql->bindParam("descricao",$_POST['descricao']);
        $sql->bindParam("id",$_POST['id']);
        $result = $sql->execute();
        if($result){
            echo '{"success":true,"message":"Alterado com sucesso"}';
        }else{
            echo '{"success":false,"message":"Erro na Alteração"}';
        }
    }catch(PDOException $e){
        echo "Conexão falhou ! ". $e->getMessage();
    }