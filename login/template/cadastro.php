<?php include_once "../include/header.php" ?>
    <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Cadastro</title>
        </head>
        <body>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" name="nome" id="nome">
                    </div>
                    <div class="col-md-6">
                        <label for="usuario">Usuario</label>
                        <input type="text" class="form-control" name="usuario" id="usuario">
                    </div>
                    <div class="col-md-6">
                        <label for="senha">senha</label>
                        <input type="text" class="form-control" name="senha" id="senha">
                    </div>
                    <div class="col-md-6">
                        <label for="email">email</label>
                        <input type="text" class="form-control" name="email" id="email">
                    </div>
                    <div class="col-md-12 mt-1 text-end">
						<button class="btn btn-dark" id="btnCadastro">Cadastro</button>
					</div>
                </div>
            </div>
        </body>
    </html>
<?php include_once "../include/bottom.php" ?>
