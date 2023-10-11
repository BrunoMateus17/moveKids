<?php 
    include_once "../../../../../config/Conexao.php";
    try {
        $conn = Conexao::conectar();
        $sql = $conn->prepare("
            DELETE 
            FROM
                categoria
            WHERE
                id = :id
        ");
        $sql->bindParam("id",$_POST['id']);
        $result = $sql->execute();
        if($result){
            echo '{"success":true,"message":"Deletado com sucesso"}';
        }else{
            echo '{"success":false,"message":"Erro ao deletar esse usuario"}';
        }
    
    }catch (PDOException $e) {
        echo "Conexão falhou ! ". $e->getMessage();
    }