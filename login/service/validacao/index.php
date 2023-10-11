<?php
    include_once "../../../config/Conexao.php";
    $conn = Conexao::conectar();
    if (!empty($_POST) AND (empty($_POST['email']) OR empty($_POST['senha']))) {
        header("Location: index.php"); exit;
    }
    $sql = $conn->query("
        SELECT 
            `id`, 
            `nome`, 
            `nivel` 
        FROM 
            `usuarios` 
        WHERE 
            (`email` = '".$_POST['email'] ."') 
        AND 
            (`senha` = '". $_POST['senha'] ."') 
        AND 
            (`ativo` = 1) LIMIT 1;
    ");
    $row = $sql->fetch();
    if($row){
        if (!isset($_SESSION)) session_start();
        $_SESSION['UsuarioID'] = $row['id'];
        $_SESSION['UsuarioNome'] = $row['nome'];
        $_SESSION['UsuarioNivel'] = $row['nivel'];
        echo '{"success":true,"caminho":"../../conteudo/index.php"}';
        exit;
    }else{
        echo '{"success":false,"message":"E-mail ou senha inválida."}';
    }

  
