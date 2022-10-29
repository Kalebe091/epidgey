<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Entrar no E-Birdy</title>
	<link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/login.css">
	<link rel="shortcut icon" href="<?php echo base_url() ?>/assets/img/pokeball.png" type="image/x-icon">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>

	<div class="container text-center">
		<div class="row align-items-start">

			<div class="col">
				<div class="topo fixed-top">
					<?php
					$this->load->view('topo');
					?>
				</div>
			</div>

		</div>
		<div class="row align-items-center">
			
				<div class="col">
					<main>
						<div class="logo">
							<img src="https://pngimg.com/uploads/pokeball/pokeball_PNG19.png" alt="Logo do Twitter">
						</div>

						<h1>Entrar no E-Pidgey</h1>

							<form class="formulario">
								<div class="inputs">
									<label class="usuario" for="usuario">Celular, e-mail ou nome de usuário</label><br>
									<input type="text" id="usuario">
								</div>
								<div class="inputs">
									<label class="senha" for="senha">Senha</label><br>
									<input type="password" id="senha">
								</div>
								<br>
								<button class="button" type="submit"><a class="entrada" href="feed">Entrar</a></button>
							</form>
							<div class="links container">
								<a target="_blank">Esqueceu a senha?</a>
								<span class="ponto"></span>
								<a href="cadastro" target="_blank">Inscrever-se no E-Birdy</a>
								<span class="ponto"></span>

							</div>
						
					</main>
				</div>
			
		</div>
		<div class="row align-items-end">

			<div class="col">
				<div class="rodape fixed-bottom">
					<?php
					$this->load->view('rodape');
					?>
				</div>
			</div>

		</div>
	</div>

</body>

</html>
