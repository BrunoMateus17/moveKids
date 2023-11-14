<!DOCTYPE html>
<html lang="en">
<head>
	<title></title>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.31/dist/sweetalert2.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="../../geral/css/geral.css">
</head>
<body>

	<div class="container my-3">
        <div class="row">
            <div class="card px-0">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="fw-bold m-0"><span class="name">GAMES</span></h4>
                    <button href="#" class="btn btn-modal text-dark border-1">Registrar</button>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-borderless">
                            <thead>
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col">Titulo</th>
                                    <th scope="col">Categoria</th>
                                    <th scope="col">Sobre</th>
                                    <th scope="col">Status</th>
                                    <th scope="col" class="text-center">Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="text-center">
                                    <td colspan="4" class="">Não existe registros...</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
	</div>
    <div class="modal" id="modalAcoes" tabindex="-1">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fw-bold">CADASTRO</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="form">
                        <div class="container-fluid">
                            <div class="row">
                                <input type="text" class="form-control d-none" id="id" name="id">
                                <div class="col-md-6">
                                    <label for="titulo">Titulo</label>
                                    <input type="text" class="form-control" id="titulo" name="titulo">
                                </div>
                                <div class="col-md-6">
                                    <label for="categoria_id">Categoria</label>
                                    <select type="text" class="form-control" id="categoria_id" name="categoria_id">          
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <label for="url">Url</label>
                                    <input type="text" class="form-control" id="url" name="url">
                                </div>
                                <div class="col-md-12">
                                    <label for="img">Imagem</label>
                                    <input type="file" class="form-control" id="img" name="img">
                                    <span class="valueImg"></span>
                                </div>
                                <div class="col-md-6">
                                    <label for="status">Status</label>
                                    <select type="text" class="form-control" id="status" name="status">
                                        <option hidden value="">Selecione</option>
                                        <option value="H">Habilitado</option>
                                        <option value="D">Desabilitado</option>
                                    </select>
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label for="sobre">Sobre o jogo</label>
                                    <textarea class="form-control" name="sobre" id="sobre" cols="30" rows="10"></textarea>
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label for="instrucoes">Instruções</label>
                                    <textarea class="form-control" name="instrucoes" id="instrucoes" cols="30" rows="10"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="modal-footer">
                    <button type="button" class="btn btn-cadastro" id="btnCadastro">Cadastrar</button>
                    <button type="button" class="btn btn-alteracao d-none" id="btnAlterar">Alterar</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal" id="modalUrl" tabindex="-1">
        <div class="modal-dialog modal-xl">
            <div class="modal-content modal-tamanho">
                <div class="modal-header">
                    <h5 class="modal-title fw-bold">Visualizar URl</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <iframe class="iframe" src="" frameborder="0"></iframe>
                </div>
               
            </div>
        </div>
    </div>
</body>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.31/dist/sweetalert2.all.min.js"></script>
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script src="../../geral/js/main.js"></script>
    <script src="../js/games_function.js"></script>
</html>