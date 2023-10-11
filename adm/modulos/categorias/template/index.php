<!DOCTYPE html>
<html lang="en">
<head>
	<title>Usuario</title>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.31/dist/sweetalert2.min.css" rel="stylesheet">
	<link rel="stylesheet" href="../../geral/css/geral.css">
</head>
<body>
	<div class="container-fluid my-3">
        <div class="row bodyForm header">
            <div class="col-md-12 text-center p-3 headerCadastro">
                <div class="text-white fw-bold">
                    <h4 class="fw-bold r"><span class="newName">CATEGORIAS</span></h4>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-borderless">
                    <thead>
                        <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Descrição</th>
                        <th scope="col">Status</th>
                        <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="text-center">
                            <td colspan="4" class="">Não existe registros...</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-12 p-3 footerCadastro">
                <div class="text-center text-white">
                     <a href="#" class="btn-modal">Faça o cadastro</a>
                </div>
            </div>
        </div>
      
	</div>
    <div class="modal" id="modalAcoes" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fw-bold newName">CATEGORIA</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="container-fluid">
                            <div class="row">
                                <input type="text" class="form-control d-none" id="id" name="id">
                                <div class="col-md-6">
                                    <label for="nome">Nome</label>
                                    <input type="text" class="form-control" id="nome" name="nome">
                                </div>
                                <div class="col-md-6">
                                    <label for="status">Status</label>
                                    <select type="text" class="form-control" id="status" name="status">
                                        <option selected value="H">Habilitado</option>
                                        <option value="D">Desabilitado</option>
                                    </select>
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label for="descricao">Descrição</label>
                                    <textarea class="form-control" name="descricao" id="descricao" cols="30" rows="10"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="btnCadastro">Cadastrar</button>
                    <button type="button" class="btn btn-primary d-none" id="btnAlterar">Alterar</button>
                </div>
            </div>
        </div>
    </div>
</body>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.31/dist/sweetalert2.all.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>    <script src="resources/js/usuario_functions.js"></script>
    <script src="../js/categoria_function.js"></script>
</html>