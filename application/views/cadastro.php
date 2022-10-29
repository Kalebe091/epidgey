<!DOCTYPE html>
<html lang="pt-BR">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/cadastro.css">
	<link rel="shortcut icon" href="<?php echo base_url() ?>/assets/img/pokeball.png" type="image/x-icon">
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,600,700&display=swap" rel="stylesheet" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	<title>Cadastro</title>
</head>

<body>
	<div class="container text-center">
  <div class="row align-items-start">

    <div class="col">
		<div id="cabeçalho fixed-top">
			<?php
			$this->load->view('topo');
			?>
		</div>
    </div>

  </div>
  

  <div class="row align-items-center">

    <div class="col">
	<div id="meio">
		<div class="container">
			<div class="form">
				<form action="#" method="POST">
					<div class="form-header">
						<div class="title">
							<h1><img src="<?php echo base_url() ?>\assets\img\pokepokedex.png">Cadastre-se</h1>
							
						</div>
					</div>

					<div class="input-group">
						<div class="input-box">
							<label for="firstname">Primeiro Nome</label>
							<input id="firstname" type="text" name="firstname" placeholder="Digite seu primeiro nome" required>
						</div>

						<div class="input-box">
							<label for="lastname">Nome de Usuario</label>
							<input id="lastname" type="text" name="usuario" placeholder="@fulano" required>
						</div>
						<div class="input-box">
							<label for="email">E-mail</label>
							<input id="email" type="email" name="email" placeholder="Digite seu e-mail" required>
						</div>

						<div class="input-box">
							<label for="number">Data de Nascimento</label>
							<input id="nascimento" type="date" name="nascimento" placeholder="01/12/2004" required>
						</div>

						<div class="input-box">
							<label for="password">Senha</label>
							<input id="password" type="password" name="password" placeholder="Digite sua senha" required>
						</div>


						<div class="input-box">
							<label for="confirmPassword">Confirme sua Senha</label>
							<input id="confirmPassword" type="password" name="confirmPassword" placeholder="Digite sua senha novamente" required>
						</div>

					</div>

					<div class="gender-inputs">
						<div class="gender-title">
							<h6>Gênero</h6>
						</div>

						<div class="gender-group">
							<div class="gender-input">
								<input id="female" type="radio" name="gender">
								<label for="female">Feminino</label>
							</div>

							<div class="gender-input">
								<input id="male" type="radio" name="gender">
								<label for="male">Masculino</label>
							</div>

							<div class="gender-input">
								<input id="others" type="radio" name="gender">
								<label for="others">Outros</label>
							</div>

							<div class="gender-input">
								<input id="none" type="radio" name="gender">
								<label for="none">Prefiro não dizer</label>
							</div>
						</div>
					</div>

					<div id="btnCadastro" class="continue-button">
						<button><a href="#">Continuar</a> </button>
					</div>
				</form>

			</div>
		</div>
	</div>
    </div>

  </div>


	

	<div class="row align-items-end">

		<div class="col fixed-bottom">
			<div class="rodape">
				<?php
				$this->load->view('rodape');
				?>
			</div>
		</div>

</body>

</html>
<script>
	$("#btnCadastro").click(function(event){
		var url = "<?= base_url("ebirdy/cadastrar") ?>";
		var email = $('#email').val();
		var senha = $('#password').val();

		alert("tudo certo")

		$.post(url,
		{
			email: email,
			senha : senha
		}, function(data){

	});
	});

</script>
