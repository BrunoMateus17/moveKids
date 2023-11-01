<?php 
    include_once "../../../../../database/Conexao.php";
    try{
        $conn = Conexao::conectar();
        $ext = strtolower(substr($_FILES['img']['name'],-4));
        $nomeImg = md5($_FILES['img']['name'])."_".date('Ymd').$ext;
        $caminho = "../../../../../upload/".$nomeImg;
        if(isset($_FILES['img'])){
            if (move_uploaded_file($_FILES['img']['tmp_name'], $caminho)) {
            } else {
                echo '{"success":false,"message":"Falha ao fazer upload!"}';
            }
        }else{
            echo '{"success":false,"message":"Não existe imagem"}';
        }
        $sql = $conn->prepare("
            INSERT INTO
                games 
                (
                    titulo,
                    categoria_id,
                    url,
                    img,
                    status,
                    sobre,
                    instrucoes,
                    usuarioCriacao,
                    dataCadastro
                )
                VALUES
                (
                    :titulo,
                    :categoria_id,
                    :url,
                    :img,
                    :status,
                    :sobre,
                    :instrucoes,
                    'Bruno Mateus da rocha',
                     NOW()
                );
            ';
        ");
        $date = "NOW()";
        $name = "bruno";
        $sql->bindParam("titulo",$_POST['titulo']);
        $sql->bindParam("categoria_id",$_POST['categoria_id']);
        $sql->bindParam("url",$_POST['url']);
        $sql->bindParam("img",$nomeImg);
        $sql->bindParam("status",$_POST['status']);
        $sql->bindParam("sobre",$_POST['sobre']);
        $sql->bindParam("instrucoes",$_POST['instrucoes']);
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

 