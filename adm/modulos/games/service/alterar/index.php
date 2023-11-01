<?php 
    include_once "../../../../../database/Conexao.php";
    try{
        $conn = Conexao::conectar();
        if($_FILES['img']['name'] != ""){
            $ext = strtolower(substr($_FILES['img']['name'],-4));
            $nomeImg = md5($_FILES['img']['name'])."_".date('Ymd').$ext;
            $caminho = "../../../../../upload/".$nomeImg;
            if (move_uploaded_file($_FILES['img']['tmp_name'], $caminho)) {
                unlink("../../../../../upload/".'/'.$_POST['imgAntiga']);
            } else {
                echo '{"success":false,"message":"Falha ao fazer upload!"}';
            }
        }else{
            $nomeImg = $_POST['imgAntiga'];
        }
        $sql = $conn->prepare("
        UPDATE
            games
        SET 
            titulo = :titulo,
            categoria_id = :categoria_id,
            url = :url,
            img = :img,
            status = :status,
            sobre = :sobre,
            instrucoes  = :instrucoes,
            usuarioAlteracao = 'Bruno Mateus da Rocha',
            dataAlteracao =  NOW()
        WHERE 
            id = :id
        ");
        $sql->bindParam("titulo",$_POST['titulo']);
        $sql->bindParam("categoria_id",$_POST['categoria_id']);
        $sql->bindParam("url",$_POST['url']);
        $sql->bindParam("img",$nomeImg);
        $sql->bindParam("status",$_POST['status']);
        $sql->bindParam("sobre",$_POST['sobre']);
        $sql->bindParam("instrucoes",$_POST['instrucoes']);
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