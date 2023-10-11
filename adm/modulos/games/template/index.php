<!DOCTYPE html>
<html lang="en">
<head>
	<title>Usuario</title>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.31/dist/sweetalert2.min.css" rel="stylesheet">
	<link rel="stylesheet" href="../View/resources/style/global.css">
</head>
<body>
	<div class="container-fluid my-3">
        <div id="formCadastro">
            <div class="row bodyForm header">
                <div class="col-md-12 text-center p-3 headerCadastro">
                    <div class="text-white fw-bold">
                        <h4 class="fw-bold"><span class="newName">CADASTRO DE USUÁRIO</span></h4>
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="name">Nome completo:</label>
                    <input type="text" class="form-control " id="nome" name="nome" placeholder="Digite seu nome">
                </div>
                <div class="col-md-4">
                    <label for="dtaNasc">Data de nascimento:</label>
                    <input type="date" class="form-control" id="dtaNasc" name="dtaNasc">
                </div>
                <div class="col-md-4">
                    <label for="cpf">CPF:</label>
                    <input type="text" name="cpf" class="form-control" id="cpf" placeholder="Digite o CPF" maxlength="11">
                    <small id="cpfHelp" class="text-white">Digite apenas os números do CPF.</small>
                </div>
                <div class="col-md-4">
                    <label for="numTel">Número de Celular:</label>
                    <input type="tel" class="form-control" id="numTel" name="numTel" placeholder="Digite o número do celular">
                </div>
                <div class="col-md-4">
                    <label for="sexo">Sexo:</label>
                    <select class="form-control" id="sexo" name="sexo">
                        <option value="M">Masculino</option>
                        <option value="F">Feminino</option>
                        <option value="O">Outros</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="paisNasc">País:</label>
                    <select class="form-control" id="paisNasc" name="paisNasc">
                        <option hidden value="">Selecione...</option>
                    </select>
                </div>
                <div class="col-md-7 mt-2">
                    <label for="tipo">Tipo:</label>
                    <select type="text" class="form-control" id="tipo" name="tipo">
                        <option hidden value="">Selecione...</option>
                        <option value="S">Supervisor</option>
                        <option value="U">Usuario</option>
                    </select>
                </div>
                <div class="col-md-6 mt-5">
                    <label for="email">E-mail:</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="Digite seu endereço de e-mail">
                </div>
                <div class="col-md-6  mt-5">
                    <label for="confirmaEmail">Confirme o E-mail:</label>
                    <input type="email" class="form-control" id="confirmaEmail" placeholder="Digite novamente o seu endereço de e-mail">
                </div>
                <div class="col-md-6 mt-3">
                    <label for="senha">Senha:</label>
                    <input name="senha" type="password" class="form-control" id="senha" placeholder="Digite sua senha">
                </div>
                <div class="col-md-6 mt-3">
                    <label for="confirmaSenha">Confirme sua senha:</label>
                    <input type="password" class="form-control" id="confirmaSenha" placeholder="Digite novamente sua senha">
                </div>               
                 <div class="text-end py-2">
                    <button id="cadastrar" class="btn btn-success active btn-custom">Cadastrar-se</button>
                    <button id="voltar" class="btn btnVoltar active btn-custom d-none">Voltar</button>
                    <button id="alterar" class="btn btn-success active btn-custom d-none">Alterar</button>
                </div>
            </div>
		</div>
	</div>
</body>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.31/dist/sweetalert2.all.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>    <script src="resources/js/usuario_functions.js"></script>
</html>