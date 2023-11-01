<?php
    include_once "../../../database/Conexao.php";
    $conn = Conexao::conectar();
    if (!empty($_POST) AND (empty($_POST['nome']) 
        OR empty($_POST['senha'])  
        OR empty($_POST['email']))
    ) {
        echo '{"success":false,"message":"falta campos"}';
    }
    $sql = $conn->query('
        SELECT  
            usuario
        FROM 
            email
        WHERE
            usuario =  "'.addslashes($_POST['email']).'"

    ');
    $result = $sql->fetch();
    if($result){
        echo '{"success":false,"message":"Usuario ja cadastrado no sistema"}';
        exit;
    }
    $sql = $conn->query('
        INSERT INTO 
            usuarios (nome,usuario,senha,email,cadastro)
        VALUES (
            "'.addslashes($_POST['nome']).'",
            "'.addslashes($_POST['senha']).'",
            "'.addslashes($_POST['email']).'",
            NOW()
        );     
    ');
    $insertId = $conn->lastInsertId();
    if($insertId){
        echo '{"success":true,"message":"Cadastro efetuado com sucesso"}';
    }else{
        echo '{"success":false,"message":"Erro ao cadastrar o usuario"}';
    }
