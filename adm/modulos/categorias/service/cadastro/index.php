<?php 
    include_once "../../../../../database/Conexao.php";
    try{
        $conn = Conexao::conectar();
        $sql = $conn->prepare("
            INSERT INTO
                categoria 
                (
                    nome,
                    status,
                    descricao,
                    usuarioCriacao,
                    dataCadastro
                )
                VALUES
                (
                    :nome,
                    :status,
                    :descricao,
                    'Bruno Mateus da rocha',
                     NOW()

                );
            ';
        ");
        $date = "NOW()";
        $name = "bruno";
        $sql->bindParam("nome",$_POST['nome']);
        $sql->bindParam("status",$_POST['status']);
        $sql->bindParam("descricao",$_POST['descricao']);
        // $sql->bindParam("usuario",$name);
        // $sql->bindParam("data",$date);
        $result = $sql->execute();
        if($result){
            echo '{"success":true,"message":"Cadastrado com sucesso"}';
        }else{
            echo '{"success":false,"message":"Erro no cadastro"}';
        }
    }catch(PDOException $e){
        echo "Conexão falhou ! ". $e->getMessage();
    }

 