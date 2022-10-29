<!DOCTYPE html>
<html lang="pt-BR">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="<?php echo base_url() ?>/assets/img/pokeball.png" type="image/x-icon">
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,600,700&display=swap" rel="stylesheet" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/sobre.css">
	<title>Sobre</title>
</head>

<body>


	<div class="container text-center">
		<div class="row align-items-start">

			<div class="col">
				<div class="topo">
					<?php
					$this->load->view('topo');
					?>
				</div>
			</div>

		</div>
		<h1>Desenvolvido por:</h1>
		<!--<div class="row align-items-center">

			<div class="col">
				<div class="container text-center">
					<div class="row">
						<div class="col-6 col-sm-3">
							<img src="https://archives.bulbagarden.net/media/upload/thumb/c/c0/HeartGold_SoulSilver_Ethan.png/303px-HeartGold_SoulSilver_Ethan.png" width="220px">
						</div>
						<div class="col-6 col-sm-3">
							<img src="<?php echo base_url() ?>/assets/img/kalebe.png" width="300px">
							<li>Front-end</li>
							<li>Back-end</li>
							<li>Banco de Dados</li>
						</div>
						<div class="col-6 col-sm4">
							<img src="https://archives.bulbagarden.net/media/upload/thumb/a/a6/Lets_Go_Pikachu_Eevee_Brock.png/243px-Lets_Go_Pikachu_Eevee_Brock.png" width="180px">
						</div>
						<div class="col">ola</div>

						
						<div class="w-100"></div>
						<p></p>
						<p></p>
						<div class="col-6 col-sm-3">
							<img src="https://archives.bulbagarden.net/media/upload/thumb/6/66/Diamond_Pearl_Lucas.png/258px-Diamond_Pearl_Lucas.png" width="200px">
						</div>
						<div class="col-6 col-sm-3">
							<img src="<?php echo base_url() ?>/assets/img/felipe.png" width="300px">
							<li>Front-end</li>
							<li>Banco de Dados</li>
						</div>
						<div class="col-6 col-sm4">
							<img src="https://archives.bulbagarden.net/media/upload/thumb/b/b3/HeartGold_SoulSilver_Jasmine.png/210px-HeartGold_SoulSilver_Jasmine.png" width="170px">
						</div>
						
					</div>
					
			</div>
			!-->
		<div class="row align-items-center">
			<div class="col">
				<img src="https://archives.bulbagarden.net/media/upload/thumb/c/c0/HeartGold_SoulSilver_Ethan.png/303px-HeartGold_SoulSilver_Ethan.png" width="220px">
				<img src="<?php echo base_url() ?>/assets/img/kalebe.png" width="300px">
			</div>
			<div class="col">
				<img src="https://archives.bulbagarden.net/media/upload/thumb/a/a6/Lets_Go_Pikachu_Eevee_Brock.png/243px-Lets_Go_Pikachu_Eevee_Brock.png" width="180px">
				<img src="<?php echo base_url() ?>/assets/img/kevin.png" width="300px">
			</div>
			<div class="col">
				<img src="https://archives.bulbagarden.net/media/upload/thumb/6/66/Diamond_Pearl_Lucas.png/258px-Diamond_Pearl_Lucas.png" width="200px">
				<img src="<?php echo base_url() ?>/assets/img/felipe.png" width="200px">
			</div>
			<div class="col">
				<img src="https://archives.bulbagarden.net/media/upload/thumb/b/b3/HeartGold_SoulSilver_Jasmine.png/210px-HeartGold_SoulSilver_Jasmine.png" width="170px">
				<img src="<?php echo base_url() ?>/assets/img/layla.png" width="300px">
			</div>
			<div class="col-6 col-sm-3">
				<li>Front-end</li>
				<li>Back-end</li>
				<li>Banco de Dados</li>
			</div>
			<div class="col-6 col-sm-3">
				<li>Front-end</li>
				<li>Design das Páginas</li>
				<li>Banco de Dados</li>
			</div>
			<div class="col-6 col-sm-3">
				<li>Front-end</li>
				<li>Design das Páginas</li>

			</div>
			<div class="col-6 col-sm-3">
				<li>Front-end</li>

			</div>

			<!-- Force next columns to break to new line -->

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

	</div>
	</div>

</body>

</html>
