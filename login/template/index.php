
	<?php include_once "../include/header.php" ?>
		<main id="formLogin">
			<div class="container-fluid">
				<div>
					Dados de Login
				</div>
				<div class="row">
					<div class="col-md-6">
						<label for="email">Email</label>
						<input class="form-control" type="text" name="email" id="email" value="brunomateus2017@hotmail.com.br">
					</div>
					<div class="col-md-6">
						<label for="senha">Senha</label>
						<input class="form-control" type="password" name="senha" id="senha" value="123">
					</div>
					<div class="col-md-12 mt-1 text-end">
						<a href="cadastro.php" >Cadastro</a>
						<button class="btn btn-dark" id="btnLogin">Login</button>
					</div>
				</div>
			</div>
		</main>
	<?php include_once "../include/bottom.php" ?>

