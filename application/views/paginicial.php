<!DOCTYPE html>
<html lang="pt-BR">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,600,700&display=swap" rel="stylesheet" />
	<link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/paginicial.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	<title>ebirdy</title>
	<link rel="shortcut icon" href="<?php echo base_url()?>/assets/img/pokeball.png" type="image/x-icon">


</head>


<body>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
	<!-- main pain -->
	<div class="topo">
		<?php
		$this->load->view('topo');
		?>
	</div>
	<section class="main-page">
		<div class="right">
			<div class="middle-content">
				<img src="https://pngimg.com/uploads/pokeball/pokeball_PNG19.png" alt="logo">
				<h1>Aventure-se com a gente e se diverta na sua nova jornada!</h1>
				<button class="sign-up"><a href="cadastro" class="cadastrar">Cadastre-se</a></button>
				<button class="log-in"><a href="login" class="entrar">Entrar</a></button>
			</div>
		</div>
	</section>
	<div class="rodape">
		<?php
		$this->load->view('rodape');
		?>
	</div>
	<!-- end of main pain -->
</body>

</html>
