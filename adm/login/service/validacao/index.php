<?php
    ini_set('display_errors','Off');
    include_once "../../../../database/Conexao.php";
    try{
        $conn = Conexao::conectar();
        // if (!empty($_POST) AND (empty($_POST['email']) OR empty($_POST['senha']))) {
        //     header("Location: index.php"); exit;
        // }
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
            // header("Location: ../../../modulos/index.php");
            echo '{"success":true,"caminho":"../../modulos/index.php"}';
            exit;
        }else{
            echo '{"success":false,"message":"E-mail ou senha inválida."}';
        }
    }catch(PDOException $e){
        echo "Conexão falhou ! ". $e->getMessage();
    }
    
