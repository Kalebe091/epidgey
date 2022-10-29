<!doctype html>
<html lang="pt-BR">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, max-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
	<meta name="generator" content="Hugo 0.104.2">
	<title>Feed</title>
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,600,700&display=swap" rel="stylesheet" />
	<link href="<?php echo base_url() ?>/assets/css/feed.css" rel="stylesheet">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	<link rel="shortcut icon" href="<?php echo base_url() ?>/assets/img/pokeball.png" type="image/x-icon">
</head>

<body>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
	<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
		<symbol id="bootstrap" viewBox="0 0 118 94">
			<title>Bootstrap</title>
			<path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z"></path>
		</symbol>
		<symbol id="home" viewBox="0 0 16 16">
			<path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z" />
		</symbol>
		<symbol id="speedometer2" viewBox="0 0 16 16">
			<path d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z" />
			<path fill-rule="evenodd" d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z" />
		</symbol>
		<symbol id="table" viewBox="0 0 16 16">
			<path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm15 2h-4v3h4V4zm0 4h-4v3h4V8zm0 4h-4v3h3a1 1 0 0 0 1-1v-2zm-5 3v-3H6v3h4zm-5 0v-3H1v2a1 1 0 0 0 1 1h3zm-4-4h4V8H1v3zm0-4h4V4H1v3zm5-3v3h4V4H6zm4 4H6v3h4V8z" />
		</symbol>
		<symbol id="people-circle" viewBox="0 0 16 16">
			<path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
			<path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
		</symbol>
		<symbol id="grid" viewBox="0 0 16 16">
			<path d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zM2.5 2a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zM1 10.5A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z" />
		</symbol>
		<symbol id="collection" viewBox="0 0 16 16">
			<path d="M2.5 3.5a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1h-11zm2-2a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1h-7zM0 13a1.5 1.5 0 0 0 1.5 1.5h13A1.5 1.5 0 0 0 16 13V6a1.5 1.5 0 0 0-1.5-1.5h-13A1.5 1.5 0 0 0 0 6v7zm1.5.5A.5.5 0 0 1 1 13V6a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-13z" />
		</symbol>
		<symbol id="calendar3" viewBox="0 0 16 16">
			<path d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z" />
			<path d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
		</symbol>
		<symbol id="chat-quote-fill" viewBox="0 0 16 16">
			<path d="M16 8c0 3.866-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7zM7.194 6.766a1.688 1.688 0 0 0-.227-.272 1.467 1.467 0 0 0-.469-.324l-.008-.004A1.785 1.785 0 0 0 5.734 6C4.776 6 4 6.746 4 7.667c0 .92.776 1.666 1.734 1.666.343 0 .662-.095.931-.26-.137.389-.39.804-.81 1.22a.405.405 0 0 0 .011.59c.173.16.447.155.614-.01 1.334-1.329 1.37-2.758.941-3.706a2.461 2.461 0 0 0-.227-.4zM11 9.073c-.136.389-.39.804-.81 1.22a.405.405 0 0 0 .012.59c.172.16.446.155.613-.01 1.334-1.329 1.37-2.758.942-3.706a2.466 2.466 0 0 0-.228-.4 1.686 1.686 0 0 0-.227-.273 1.466 1.466 0 0 0-.469-.324l-.008-.004A1.785 1.785 0 0 0 10.07 6c-.957 0-1.734.746-1.734 1.667 0 .92.777 1.666 1.734 1.666.343 0 .662-.095.931-.26z" />
		</symbol>
		<symbol id="cpu-fill" viewBox="0 0 16 16">
			<path d="M6.5 6a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z" />
			<path d="M5.5.5a.5.5 0 0 0-1 0V2A2.5 2.5 0 0 0 2 4.5H.5a.5.5 0 0 0 0 1H2v1H.5a.5.5 0 0 0 0 1H2v1H.5a.5.5 0 0 0 0 1H2v1H.5a.5.5 0 0 0 0 1H2A2.5 2.5 0 0 0 4.5 14v1.5a.5.5 0 0 0 1 0V14h1v1.5a.5.5 0 0 0 1 0V14h1v1.5a.5.5 0 0 0 1 0V14h1v1.5a.5.5 0 0 0 1 0V14a2.5 2.5 0 0 0 2.5-2.5h1.5a.5.5 0 0 0 0-1H14v-1h1.5a.5.5 0 0 0 0-1H14v-1h1.5a.5.5 0 0 0 0-1H14v-1h1.5a.5.5 0 0 0 0-1H14A2.5 2.5 0 0 0 11.5 2V.5a.5.5 0 0 0-1 0V2h-1V.5a.5.5 0 0 0-1 0V2h-1V.5a.5.5 0 0 0-1 0V2h-1V.5zm1 4.5h3A1.5 1.5 0 0 1 11 6.5v3A1.5 1.5 0 0 1 9.5 11h-3A1.5 1.5 0 0 1 5 9.5v-3A1.5 1.5 0 0 1 6.5 5z" />
		</symbol>
		<symbol id="gear-fill" viewBox="0 0 16 16">
			<path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z" />
		</symbol>
		<symbol id="speedometer" viewBox="0 0 16 16">
			<path d="M8 2a.5.5 0 0 1 .5.5V4a.5.5 0 0 1-1 0V2.5A.5.5 0 0 1 8 2zM3.732 3.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 8a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 8zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 7.31A.91.91 0 1 0 8.85 8.569l3.434-4.297a.389.389 0 0 0-.029-.518z" />
			<path fill-rule="evenodd" d="M6.664 15.889A8 8 0 1 1 9.336.11a8 8 0 0 1-2.672 15.78zm-4.665-4.283A11.945 11.945 0 0 1 8 10c2.186 0 4.236.585 6.001 1.606a7 7 0 1 0-12.002 0z" />
		</symbol>
		<symbol id="toggles2" viewBox="0 0 16 16">
			<path d="M9.465 10H12a2 2 0 1 1 0 4H9.465c.34-.588.535-1.271.535-2 0-.729-.195-1.412-.535-2z" />
			<path d="M6 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 1a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm.535-10a3.975 3.975 0 0 1-.409-1H4a1 1 0 0 1 0-2h2.126c.091-.355.23-.69.41-1H4a2 2 0 1 0 0 4h2.535z" />
			<path d="M14 4a4 4 0 1 1-8 0 4 4 0 0 1 8 0z" />
		</symbol>
		<symbol id="tools" viewBox="0 0 16 16">
			<path d="M1 0L0 1l2.2 3.081a1 1 0 0 0 .815.419h.07a1 1 0 0 1 .708.293l2.675 2.675-2.617 2.654A3.003 3.003 0 0 0 0 13a3 3 0 1 0 5.878-.851l2.654-2.617.968.968-.305.914a1 1 0 0 0 .242 1.023l3.356 3.356a1 1 0 0 0 1.414 0l1.586-1.586a1 1 0 0 0 0-1.414l-3.356-3.356a1 1 0 0 0-1.023-.242L10.5 9.5l-.96-.96 2.68-2.643A3.005 3.005 0 0 0 16 3c0-.269-.035-.53-.102-.777l-2.14 2.141L12 4l-.364-1.757L13.777.102a3 3 0 0 0-3.675 3.68L7.462 6.46 4.793 3.793a1 1 0 0 1-.293-.707v-.071a1 1 0 0 0-.419-.814L1 0zm9.646 10.646a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708zM3 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026L3 11z" />
		</symbol>
		<symbol id="chevron-right" viewBox="0 0 16 16">
			<path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
		</symbol>
		<symbol id="geo-fill" viewBox="0 0 16 16">
			<path fill-rule="evenodd" d="M4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999zm2.493 8.574a.5.5 0 0 1-.411.575c-.712.118-1.28.295-1.655.493a1.319 1.319 0 0 0-.37.265.301.301 0 0 0-.057.09V14l.002.008a.147.147 0 0 0 .016.033.617.617 0 0 0 .145.15c.165.13.435.27.813.395.751.25 1.82.414 3.024.414s2.273-.163 3.024-.414c.378-.126.648-.265.813-.395a.619.619 0 0 0 .146-.15.148.148 0 0 0 .015-.033L12 14v-.004a.301.301 0 0 0-.057-.09 1.318 1.318 0 0 0-.37-.264c-.376-.198-.943-.375-1.655-.493a.5.5 0 1 1 .164-.986c.77.127 1.452.328 1.957.594C12.5 13 13 13.4 13 14c0 .426-.26.752-.544.977-.29.228-.68.413-1.116.558-.878.293-2.059.465-3.34.465-1.281 0-2.462-.172-3.34-.465-.436-.145-.826-.33-1.116-.558C3.26 14.752 3 14.426 3 14c0-.599.5-1 .961-1.243.505-.266 1.187-.467 1.957-.594a.5.5 0 0 1 .575.411z" />
		</symbol>
	</svg>


	<div class="row align-items-start">
		<div class="col">
			<div class="d-flex flex-column flex-shrink-0 p-3 fixed-bottom fixed-top">
				<a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
					<img src="<?php echo base_url() ?>/assets/img/pokeball.png" width="64">
					<span class="fs-4">EPidgey</span>
				</a>
				<hr>
				<ul class="nav nav-pills flex-column mb-auto">
					<li class="nav-item">
						<a href="#" class="nav-link active" aria-current="page">
							<img src="<?php echo base_url() ?>/assets/img/pokeeee.png" width="32" height="32">
							Pagina Inicial
						</a>
					</li>
					<li>
						<a href="#" class="nav-link text-white">
							<img src="<?php echo base_url() ?>/assets/img/explorar.png" width="32" height="32">
							Explorar
						</a>
					</li>
					<li>
						<a href="#" class="nav-link text-white">
							<img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz4KPHN2ZyB3aWR0aD0iNzUycHQiIGhlaWdodD0iNzUycHQiIHZlcnNpb249IjEuMSIgdmlld0JveD0iMCAwIDc1MiA3NTIiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CiA8Zz4KICA8cGF0aCBkPSJtMzc2IDE2Mi44OWMtOTEuNTQzIDAtMTY1Ljc1IDc0LjIxMS0xNjUuNzUgMTY1Ljc1IDAgMS4zNjcyIDAuMDcwMzEyIDIuNzE4OCAwLjEwNTQ3IDQuMDc4MSAxLjg1NTUtNy40NTcgNjEuNjI5LTExLjgyIDEyOS45NC0xMi45NzMgMy45ODQ0LTE2LjAzNSAxOC40MzgtMjcuOTM4IDM1LjcwNy0yNy45MzggMTcuMjU0IDAgMzEuNjkxIDExLjg3OSAzNS42OTUgMjcuODkxIDY4LjMyNCAxLjA2MjUgMTI4LjExIDUuMzY3MiAxMjkuOTYgMTMuMDE2IDAuMDI3MzQ0LTEuMzYzMyAwLjA5NzY1Ni0yLjcxMDkgMC4wOTc2NTYtNC4wNzQyIDAtOTEuNTQzLTc0LjIxMS0xNjUuNzUtMTY1Ljc1LTE2NS43NXoiLz4KICA8cGF0aCBkPSJtMzc2IDM2NS40OGMtMTcuMDYyIDAtMzEuMzc1LTExLjYxNy0zNS41NjItMjcuMzYzLTYzLjUwOCAwLjk4NDM4LTExOS42NiA0Ljc2NTYtMTI4Ljg0IDExLjQzNCA0LjIwNyAzMy40MjIgMTguMzc1IDYzLjcyNyAzOS40MTggODcuODgzIDI1LjIyNyAyOC45NjUgNTAuMTcyIDU4LjE4IDc0LjE2NCA4OC4xNzJsNTAuODE2IDYzLjUxMiA1MC44MDktNjMuNTEyYzI0LjAyLTMwLjAyMyA0OS4wMDgtNTkuMjUgNzQuMjQyLTg4LjI2MiAyMC45OTItMjQuMTMzIDM1LjEyOS01NC4zOTEgMzkuMzQtODcuNzU0LTkuMTg3NS02LjUxOTUtNjUuMzQtMTAuMzU1LTEyOC44NC0xMS40MjItNC4xOTkyIDE1LjcyMy0xOC41IDI3LjMxMi0zNS41NDcgMjcuMzEyem00Ny40OTItOC42NjAyYzUxLjAzOSAxLjE1MjMgODAuNzQ2IDMuNzY5NSA5NS44MDUgNi4wMzUyLTE1LjU0NyA2NS40ODgtNzQuNTkgMTEzLjEzLTE0My4zIDExMy4xMy02OC43NSAwLTEyNy44Mi00Ny42OTktMTQzLjMyLTExMy4yNCAxNC45OTItMi4yNzM0IDQ0LjY4NC00Ljg5MDYgOTUuNzkzLTUuOTgwNSA5Ljc1MzkgMTYuNDg4IDI3LjY4IDI3LjE0MSA0Ny41MzUgMjcuMTQxIDE5LjgxMi0wLjAwMzkwNyAzNy43MjMtMTAuNjI5IDQ3LjQ4OC0yNy4wODJ6Ii8+CiAgPHBhdGggZD0ibTQwMS43OCAzMjguNjRjMCAxNC4yMzgtMTEuNTM5IDI1Ljc4MS0yNS43ODEgMjUuNzgxLTE0LjIzOCAwLTI1Ljc4MS0xMS41NDMtMjUuNzgxLTI1Ljc4MXMxMS41NDMtMjUuNzgxIDI1Ljc4MS0yNS43ODFjMTQuMjQyIDAgMjUuNzgxIDExLjU0MyAyNS43ODEgMjUuNzgxIi8+CiA8L2c+Cjwvc3ZnPgo=" width="32" height="32">
							Notificações
						</a>
					</li>
					<li>
						<a href="#" class="nav-link text-white">
							<img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz4KPHN2ZyB3aWR0aD0iNzUycHQiIGhlaWdodD0iNzUycHQiIHZlcnNpb249IjEuMSIgdmlld0JveD0iMCAwIDc1MiA3NTIiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CiA8cGF0aCBkPSJtNDczLjc4IDIyOS4xOWgtMjAyLjU5Yy0yMy4xNTIgMC00MS43MDcgMTguNjE3LTQyIDQyLjEyMXYxMzEuNDNjMCAyNy4wNzggMjEuOTQ5IDQ5LjAyNyA0OS4wMzEgNDkuMDI3aDI2Ljc0MnY1OC43NThjMCAxMS45MjYgMTUuMzAxIDE2LjgyOCAyMi4yMyA3LjEyMTFsMzQuNTk4LTY1Ljg3OWgxMTEuNTdjMjcuMTk1IDAgNDkuNDQ1LTIyLjI0NiA0OS40NDUtNDkuNDQxdi0xMjQuMTFjMC0yNy4wODItMjEuOTUzLTQ5LjAzMS00OS4wMzEtNDkuMDMxem0tOTcuNzgxIDE4NC43Yy00MS41NjYgMC03NS43NzctMzEuMDQzLTgwLjUwOC03MS4wMzloNDguNTEyYzQuMTIxMSAxMy42NzIgMTYuODk4IDIzLjY4IDMxLjk5NiAyMy42OHMyNy44NzUtMTAuMDA4IDMxLjk5Ni0yMy42OGw0OC41MTYgMC4wMDM5MDZjLTQuNzM0NCAzOS45OTItMzguOTQ1IDcxLjAzNS04MC41MTIgNzEuMDM1em0tMTQuMzE2LTgwLjUwOGMwLTcuODQ3NyA2LjQwNjItMTQuMjA3IDE0LjMxNi0xNC4yMDdzMTQuMzE2IDYuMzU5NCAxNC4zMTYgMTQuMjA3LTYuNDEwMiAxNC4yMDctMTQuMzE2IDE0LjIwN2MtNy45MDIzIDAtMTQuMzE2LTYuMzU5NC0xNC4zMTYtMTQuMjA3em00Ni4zMTItOS41NzAzYy00LjEyMTEtMTMuNjc2LTE2Ljg5OC0yMy42OC0zMS45OTYtMjMuNjhzLTI3Ljg3NSAxMC4wMDQtMzEuOTk2IDIzLjY4aC00OC41MTJjNC43MzA1LTM5Ljk5MiAzOC45NDEtNzEuMDM5IDgwLjUwOC03MS4wMzlzNzUuNzc3IDMxLjA0MyA4MC41MDggNzEuMDM5eiIvPgo8L3N2Zz4K" width="32" height="32">
							Mensagens
						</a>
					</li>
					<li>
						<a href="#" class="nav-link text-white">
							<img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz4KPHN2ZyB3aWR0aD0iNzUycHQiIGhlaWdodD0iNzUycHQiIHZlcnNpb249IjEuMSIgdmlld0JveD0iMCAwIDc1MiA3NTIiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CiA8Zz4KICA8cGF0aCBkPSJtNTc5Ljg0IDI2OS40OWgtNjAuMTkxYy00LjAzMTItMTYuMjg1LTE4LjIwMy0yOC4zNTItMzUuMDI3LTI4LjM1MmgtNjUuMTQ1di01MC45M2MwLTUuMjI2Ni00LjI0MjItOS40NzI3LTkuNDcyNy05LjQ3MjdoLTIzMy42N2MtNS4yMjY2IDAtOS40NzI3IDQuMjQyMi05LjQ3MjcgOS40NzI3djM2MS4yN2MwIDUuMjI2NiA0LjI0MjIgOS40NzI3IDkuNDcyNyA5LjQ3MjdoMjMzLjY3IDAuMDA3ODEzIDAuMDA3ODEyIDE2OS44MmM1LjIyNjYgMCA5LjQ3MjctNC4yNDIyIDkuNDcyNy05LjQ3MjdsMC4wMDM5MDYtMjcyLjUyYzAuMDAzOTA2LTUuMjM0NC00LjIzNDQtOS40NzI3LTkuNDY4OC05LjQ3Mjd6bS0xNzkuMy02OS44MDl2NDMuODI0aC0xMjEuNzNjLTUuNjA1NSAwLTEwLjg3NSAyLjE4MzYtMTQuODM2IDYuMTQ4NGwtMTIuNTI3IDEyLjUyN2MtMS40NDE0IDEuNDQxNC0zLjQzMzYgMi4yNjU2LTUuNDY0OCAyLjI2NTZsLTYwLjE3Mi0wLjAwMzkwNnYtNjQuNzYyem0tMjE0LjczIDM0Mi4zMnYtMjYzLjM2aDYwLjE2OGM1Ljg1MTYgMCAxMS4zNTktMi4yNzczIDE1LjUwNC02LjQyMTlsMTIuNTI3LTEyLjUyN2MxLjI4NTItMS4yODUyIDIuOTg0NC0xLjk4NDQgNC43OTMtMS45ODQ0bDEyMS43MyAwLjAwMzkwNnYyODQuM3ptMzg0LjU3IDBoLTE1MC44OHYtMjgxLjkzaDY1LjEyNWM5LjUgMCAxNy4yMzQgOC40NzI3IDE3LjIzNCAxOC44ODMgMCA1LjIyNjYgNC4yNDIyIDkuNDcyNyA5LjQ3MjcgOS40NzI3aDU5LjA0N3YyNTMuNTd6Ii8+CiAgPHBhdGggZD0ibTIyNC4wNSAyNTUuMzRjMTMuODIgMCAyNS4wNjItMTEuMjQyIDI1LjA2Mi0yNS4wNjJzLTExLjI0Mi0yNS4wNjItMjUuMDYyLTI1LjA2MmMtMTMuODIgMC0yNS4wNjIgMTEuMjQyLTI1LjA2MiAyNS4wNjJzMTEuMjM4IDI1LjA2MiAyNS4wNjIgMjUuMDYyem0wLTQwLjY2YzguNTkzOCAwIDE1LjU5IDYuOTk2MSAxNS41OSAxNS41OXMtNi45OTYxIDE1LjU5LTE1LjU5IDE1LjU5LTE1LjU5LTYuOTk2MS0xNS41OS0xNS41OWMtMC4wMDM5MDYtOC41OTM4IDYuOTg4My0xNS41OSAxNS41OS0xNS41OXoiLz4KICA8cGF0aCBkPSJtMjYzIDIyNC44M2M0Ljc1MzkgMCA4LjYyNS0zLjg3MTEgOC42MjUtOC42MjVzLTMuODcxMS04LjYyNS04LjYyNS04LjYyNS04LjYyNSAzLjg3MTEtOC42MjUgOC42MjVjMCA0Ljc1NzggMy44NzExIDguNjI1IDguNjI1IDguNjI1em0wLTEyLjUxMmMyLjE0NDUgMCAzLjg4NjcgMS43NDYxIDMuODg2NyAzLjg4NjdzLTEuNzQ2MSAzLjg4NjctMy44ODY3IDMuODg2Ny0zLjg4NjctMS43NDIyLTMuODg2Ny0zLjg4NjcgMS43NDYxLTMuODg2NyAzLjg4NjctMy44ODY3eiIvPgogIDxwYXRoIGQ9Im0yMTMuMTggNDQ0LjNjLTguOTQ1MyAwLTE2LjIxOSA3LjI3NzMtMTYuMjE5IDE2LjIxOSAwIDguOTQxNCA3LjI3NzMgMTYuMjE5IDE2LjIxOSAxNi4yMTkgOC45NDUzIDAgMTYuMjI3LTcuMjc3MyAxNi4yMjctMTYuMjE5LTAuMDAzOTA2LTguOTM3NS03LjI4MTItMTYuMjE5LTE2LjIyNy0xNi4yMTl6bTAgMjIuOTc3Yy0zLjcyMjcgMC02Ljc1LTMuMDI3My02Ljc1LTYuNzVzMy4wMjczLTYuNzUgNi43NS02Ljc1YzMuNzIyNyAwIDYuNzUzOSAzLjAyNzMgNi43NTM5IDYuNzVzLTMuMDMxMiA2Ljc1LTYuNzUzOSA2Ljc1eiIvPgogIDxwYXRoIGQ9Im01NDAuMTkgNDI4LjUyYy04LjYwOTQgMC0xNS42MDkgNy4wMDM5LTE1LjYwOSAxNS42MDkgMCA4LjYwOTQgNy4wMDM5IDE1LjYwOSAxNS42MDkgMTUuNjA5IDguNjA1NSAwIDE1LjYwOS03LjAwMzkgMTUuNjA5LTE1LjYwOSAwLTguNjEzMy03LjAwMzktMTUuNjA5LTE1LjYwOS0xNS42MDl6bTAgMjEuNzQ2Yy0zLjM4NjcgMC02LjEzNjctMi43NTc4LTYuMTM2Ny02LjEzNjcgMC0zLjM4MjggMi43NTc4LTYuMTM2NyA2LjEzNjctNi4xMzY3IDMuMzgyOCAwIDYuMTM2NyAyLjc1NzggNi4xMzY3IDYuMTM2NyAwIDMuMzgyOC0yLjc1MzkgNi4xMzY3LTYuMTM2NyA2LjEzNjd6Ii8+CiAgPHBhdGggZD0ibTI4NC4zNiAyMjQuODNjNC43NTM5IDAgOC42MjUtMy44NzExIDguNjI1LTguNjI1cy0zLjg3MTEtOC42MjUtOC42MjUtOC42MjVjLTQuNzUzOSAwLTguNjI1IDMuODcxMS04LjYyNSA4LjYyNSAwIDQuNzU3OCAzLjg3MTEgOC42MjUgOC42MjUgOC42MjV6bTAtMTIuNTEyYzIuMTQ0NSAwIDMuODg2NyAxLjc0NjEgMy44ODY3IDMuODg2N3MtMS43NDIyIDMuODg2Ny0zLjg4NjcgMy44ODY3LTMuODg2Ny0xLjc0MjItMy44ODY3LTMuODg2NyAxLjc0MjItMy44ODY3IDMuODg2Ny0zLjg4Njd6Ii8+CiAgPHBhdGggZD0ibTMwNS43MiAyMjQuODNjNC43NTM5IDAgOC42MjUtMy44NzExIDguNjI1LTguNjI1cy0zLjg3MTEtOC42MjUtOC42MjUtOC42MjUtOC42MjUgMy44NzExLTguNjI1IDguNjI1YzAgNC43NTc4IDMuODcxMSA4LjYyNSA4LjYyNSA4LjYyNXptMC0xMi41MTJjMi4xNDQ1IDAgMy44ODY3IDEuNzQ2MSAzLjg4NjcgMy44ODY3cy0xLjc0NjEgMy44ODY3LTMuODg2NyAzLjg4NjctMy44ODY3LTEuNzQyMi0zLjg4NjctMy44ODY3Yy0wLjAwMzkwNy0yLjE0NDUgMS43NDYxLTMuODg2NyAzLjg4NjctMy44ODY3eiIvPgogIDxwYXRoIGQ9Im0zNzMuMTcgNDI2LjMyYzMuOTI1OCAwIDcuMTA1NS0zLjE3NTggNy4xMDU1LTcuMTA1NXYtMTE2LjU0YzAtMy45MjU4LTMuMTc1OC03LjEwNTUtNy4xMDU1LTcuMTA1NWwtMTU5Ljk5IDAuMDAzOTA3Yy0zLjkyNTggMC03LjEwNTUgMy4xNzU4LTcuMTA1NSA3LjEwNTV2OTMuODI0YzAgMS44ODY3IDAuNzUgMy42ODc1IDIuMDc4MSA1LjAyMzRsMjIuNzIzIDIyLjcyM2MxLjMzMiAxLjMzMiAzLjE0MDYgMi4wNzgxIDUuMDIzNCAyLjA3ODF6bS0xNTIuODktMzIuNzYydi04My43NzdoMTQ1Ljc5djEwMi4zNGgtMTI3LjIzeiIvPgogIDxwYXRoIGQ9Im0yMzcuNjUgNDQzLjVjLTIuNjEzMyAwLTQuNzM0NCAyLjEyMTEtNC43MzQ0IDQuNzM0NHMyLjEyMTEgNC43MzQ0IDQuNzM0NCA0LjczNDRoMjEuMjNjMi42MTMzIDAgNC43MzQ0LTIuMTIxMSA0LjczNDQtNC43MzQ0cy0yLjEyMTEtNC43MzQ0LTQuNzM0NC00LjczNDR6Ii8+CiAgPHBhdGggZD0ibTI3Ni41NyA0NDMuNWMtMi42MTMzIDAtNC43MzQ0IDIuMTIxMS00LjczNDQgNC43MzQ0czIuMTIxMSA0LjczNDQgNC43MzQ0IDQuNzM0NGgyMS4yM2MyLjYxMzMgMCA0LjczNDQtMi4xMjExIDQuNzM0NC00LjczNDRzLTIuMTIxMS00LjczNDQtNC43MzQ0LTQuNzM0NHoiLz4KICA8cGF0aCBkPSJtNTE3LjMxIDQwNS42MWMwLTIuNjEzMy0yLjEyMTEtNC43MzQ0LTQuNzM0NC00LjczNDRoLTIxLjIzYy0yLjYxMzMgMC00LjczNDQgMi4xMjExLTQuNzM0NCA0LjczNDRzMi4xMjExIDQuNzM0NCA0LjczNDQgNC43MzQ0aDIxLjIzYzIuNjE3MiAwLjAwMzkwNiA0LjczNDQtMi4xMTcyIDQuNzM0NC00LjczNDR6Ii8+CiAgPHBhdGggZD0ibTU1MS4wNyA0MDAuODhoLTIxLjIzYy0yLjYxMzMgMC00LjczNDQgMi4xMjExLTQuNzM0NCA0LjczNDRzMi4xMjExIDQuNzM0NCA0LjczNDQgNC43MzQ0aDIxLjIzYzIuNjEzMyAwIDQuNzM0NC0yLjEyMTEgNC43MzQ0LTQuNzM0NHMtMi4xMjExLTQuNzM0NC00LjczNDQtNC43MzQ0eiIvPgogIDxwYXRoIGQ9Im00MzQuNDYgMzAxLjl2NDEuNjIxYzAgMi42MTMzIDIuMTIxMSA0LjczNDQgNC43MzQ0IDQuNzM0NGgxMTEuODhjMi42MTMzIDAgNC43MzQ0LTIuMTIxMSA0LjczNDQtNC43MzQ0di00MS42MjFjMC0yLjYxMzMtMi4xMjExLTQuNzM0NC00LjczNDQtNC43MzQ0aC0xMTEuODhjLTIuNjEzMyAwLTQuNzM0NCAyLjEyMTEtNC43MzQ0IDQuNzM0NHptOS40Njg4IDQuNzM4M2gxMDIuNHYzMi4xNTJoLTEwMi40eiIvPgogIDxwYXRoIGQ9Im0yNDIuMzggMzk1LjMxaDEwMS41OGMyLjYxMzMgMCA0LjczNDQtMi4xMjExIDQuNzM0NC00LjczNDRsMC4wMDM5MDctNjMuODQ4YzAtMi42MTMzLTIuMTIxMS00LjczNDQtNC43MzQ0LTQuNzM0NGgtMTAxLjU4Yy0yLjYxMzMgMC00LjczNDQgMi4xMjExLTQuNzM0NCA0LjczNDR2NjMuODQ4Yy0wLjAwMzkwNyAyLjYxMzMgMi4xMTcyIDQuNzM0NCA0LjczMDUgNC43MzQ0em00LjczODMtNjMuODQ4aDkyLjExM3Y1NC4zNzVoLTkyLjExM3oiLz4KICA8cGF0aCBkPSJtMzY3LjUgNDczLjkzaC01LjExMzN2LTUuMTEzM2MwLTcuMzM1OS01Ljk2ODgtMTMuMzA1LTEzLjMwNS0xMy4zMDVzLTEzLjMwNSA1Ljk2ODgtMTMuMzA1IDEzLjMwNXY1LjExMzNoLTUuMTEzM2MtNy4zMzU5IDAtMTMuMzA1IDUuOTY4OC0xMy4zMDUgMTMuMzA1IDAgNy4zMzU5IDUuOTY4OCAxMy4zMDUgMTMuMzA1IDEzLjMwNWg1LjExMzN2NS4xMTMzYzAgNy4zMzU5IDUuOTY4OCAxMy4zMDUgMTMuMzA1IDEzLjMwNXMxMy4zMDUtNS45Njg4IDEzLjMwNS0xMy4zMDV2LTUuMTEzM2g1LjExMzNjNy4zMzU5IDAgMTMuMzA1LTUuOTY4OCAxMy4zMDUtMTMuMzA1LTAuMDAzOTA2LTcuMzM5OC01Ljk3MjctMTMuMzA1LTEzLjMwNS0xMy4zMDV6bTAgMTcuMTI5aC05LjU3NDJsLTUuMDExNyAwLjI3MzQ0djE0LjMxMmMwIDIuMTEzMy0xLjcxODggMy44MzItMy44MzIgMy44MzJzLTMuODMyLTEuNzE4OC0zLjgzMi0zLjgzMnYtOS41NzQybC0wLjI3MzQ0LTUuMDExN2gtMTQuMzEyYy0yLjExMzMgMC0zLjgzMi0xLjcxODgtMy44MzItMy44MzJzMS43MTg4LTMuODMyIDMuODMyLTMuODMyaDkuNTc0Mmw1LjAxMTctMC4yNzM0NHYtMTQuMzEyYzAtMi4xMTMzIDEuNzE4OC0zLjgzMiAzLjgzMi0zLjgzMnMzLjgzMiAxLjcxODggMy44MzIgMy44MzJ2OS41NzQybDAuMjczNDQgNS4wMTE3aDE0LjMxMmMyLjExMzMgMCAzLjgzMiAxLjcxODggMy44MzIgMy44MzJzLTEuNzE4OCAzLjgzMi0zLjgzMiAzLjgzMnoiLz4KICA8cGF0aCBkPSJtMzA0LjIyIDQ2OS44NGgtNjYuNTc0Yy0yLjYxMzMgMC00LjczNDQgMi4xMjExLTQuNzM0NCA0LjczNDR2MzcuODU5YzAgMi42MTMzIDIuMTIxMSA0LjczNDQgNC43MzQ0IDQuNzM0NGg2Ni41N2MyLjYxMzMgMCA0LjczNDQtMi4xMjExIDQuNzM0NC00LjczNDR2LTM3Ljg1OWMwLjAwMzkwNi0yLjYxMzMtMi4xMTcyLTQuNzM0NC00LjczMDUtNC43MzQ0em0tNC43MzgzIDM3Ljg2M2gtNTcuMDk4di0yOC4zODdoNTcuMTAyeiIvPgogIDxwYXRoIGQ9Im00ODEuODIgNDg3LjU4aC00Mi42MjljLTIuNjEzMyAwLTQuNzM0NCAyLjEyMTEtNC43MzQ0IDQuNzM0NHYxOC44NDhjMCAyLjYxMzMgMi4xMjExIDQuNzM0NCA0LjczNDQgNC43MzQ0aDQyLjYyOWMyLjYxMzMgMCA0LjczNDQtMi4xMjExIDQuNzM0NC00LjczNDR2LTE4Ljg0OGMwLjAwMzkwNy0yLjYxMzMtMi4xMTcyLTQuNzM0NC00LjczNDQtNC43MzQ0em0tNC43MzQ0IDE4Ljg0OGgtMzMuMTU2di05LjM3NWgzMy4xNTZ6Ii8+CiAgPHBhdGggZD0ibTU1MS4wNyA0ODcuNThoLTQyLjYyOWMtMi42MTMzIDAtNC43MzQ0IDIuMTIxMS00LjczNDQgNC43MzQ0djE4Ljg0OGMwIDIuNjEzMyAyLjEyMTEgNC43MzQ0IDQuNzM0NCA0LjczNDRoNDIuNjI5YzIuNjEzMyAwIDQuNzM0NC0yLjEyMTEgNC43MzQ0LTQuNzM0NHYtMTguODQ4YzAtMi42MTMzLTIuMTIxMS00LjczNDQtNC43MzQ0LTQuNzM0NHptLTQuNzM4MyAxOC44NDhoLTMzLjE1NnYtOS4zNzVoMzMuMTU2eiIvPgogIDxwYXRoIGQ9Im00ODYuNDEgNDI4LjQzaC00Ny4yMjdjLTIuNjEzMyAwLTQuNzM0NCAyLjEyMTEtNC43MzQ0IDQuNzM0NHYyNi44NTVjMCAyLjYxMzMgMi4xMjExIDQuNzM0NCA0LjczNDQgNC43MzQ0aDQ3LjIyN2MyLjYxMzMgMCA0LjczNDQtMi4xMjExIDQuNzM0NC00LjczNDR2LTI2Ljg1NWMwLjAwMzkwNy0yLjYwOTQtMi4xMTMzLTQuNzM0NC00LjczNDQtNC43MzQ0em0tNC43MzQ0IDI2Ljg1OWgtMzcuNzU0di0xNy4zODdoMzcuNzU0eiIvPgogIDxwYXRoIGQ9Im01NTEuMDcgMzU2LjU3aC0xMTEuODhjLTIuNjEzMyAwLTQuNzM0NCAyLjEyMTEtNC43MzQ0IDQuNzM0NHYyNi4yNjJjMCAyLjYxMzMgMi4xMjExIDQuNzM0NCA0LjczNDQgNC43MzQ0aDExMS44OGMyLjYxMzMgMCA0LjczNDQtMi4xMjExIDQuNzM0NC00LjczNDR2LTI2LjI2MmMwLTIuNjEzMy0yLjEyMTEtNC43MzQ0LTQuNzM0NC00LjczNDR6bS00LjczODMgMjYuMjYyaC0xMDIuNHYtMTYuNzg5aDEwMi40eiIvPgogPC9nPgo8L3N2Zz4K" width="32" height="32">
							Perfil
						</a>
					</li>
				</ul>
				<hr>
				<div class="dropdown">
					<a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
						<img src="<?php echo base_url() ?>/assets/img/profile-image-1.jpg" alt="" width="32" height="32" class="rounded-circle me-2">
						<strong>@kalebevasconcelos</strong>
					</a>
					<ul class="dropdown-menu dropdown-menu-dark text-small shadow">
						<li><a class="dropdown-item" href="#">Publicar</a></li>
						<li><a class="dropdown-item" href="#">Perfil</a></li>
						<li><a class="dropdown-item" href="#">Configurações</a></li>
						<li>
							<hr class="dropdown-divider">
						</li>
						<li><a class="dropdown-item" href="paginicial">Sair</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="col">
			<div class="feed">
				<div class="feed__header">
					<h2>Pagina Inicial</h2>
				</div>
				<div class="layout__main">

				</div>
				<div class="tweetBox">
					<form>
						<div class="tweetbox__input">
							<img src="<?php echo base_url() ?>/assets/img/profile-image-1.jpg">
							<input type="text" placeholder="O que está acontecendo?">
						</div>
						<button class="tweetBox__tweetButton">Tweet</button>
					</form>
				</div>
				<p></p>
				<div class="tweet">
					<img class="tweet__author-logo" src="<?php echo base_url() ?>/assets/img/profile-image-1.jpg" />
					<div class="tweet__main">
						<div class="tweet__header">
							<div class="tweet__author-name">
								Kalebe Vasconcelos
								<img src="<?php echo base_url() ?>/assets/img/verificado.png" width="16px">
								</g>
								</svg>

							</div>

							</g>
							</svg>
							<div class="tweet__author-slug">
								@kalebevasconcelos
							</div>
							<div class="tweet__publish-time">
								10m
							</div>
						</div>
						<div class="tweet__content">
							copiaru o twitter kkkk
						</div>
						<div class="post__footer">
							<span class="material-symbols-outlined">mode_comment</span>
							<span class="material-symbols-outlined">favorite</span>
							<span class="material-symbols-outlined">repeat</span>
						</div>
					</div>
				</div>
				<div class="tweet">
					<img class="tweet__author-logo" src="<?php echo base_url() ?>/assets/img/profile-image-2.jpg" />
					<div class="tweet__main">
						<div class="tweet__header">
							<div class="tweet__author-name">
								Kevin Guimaraes<img class="verificado" src="<?php echo base_url() ?>/assets/img/verificado.png" width="16px">
							</div>

							<div class="tweet__author-slug">
								@kevinguimaraes
							</div>
							<div class="tweet__publish-time">
								1h
							</div>
						</div>
						<div class="tweet__content">
							Já deu gente! Chega! Tem uma hora que não da mais :(

						</div>
						<div class="post__footer">
							<span class="material-symbols-outlined">mode_comment</span>
							<span class="material-symbols-outlined">favorite</span>
							<span class="material-symbols-outlined">repeat</span>
						</div>
					</div>
				</div>

				<div class="tweet">
					<img class="tweet__author-logo" src="<?php echo base_url() ?>/assets/img/profile-image-3.jpg" />
					<div class="tweet__main">
						<div class="tweet__header">
							<div class="tweet__author-name">
								Felipe Souza<img class="verificado" src="<?php echo base_url() ?>/assets/img/verificado.png" width="16px">
							</div>

							<div class="tweet__author-slug">
								@souza_felipe
							</div>
							<div class="tweet__publish-time">
								15h
							</div>
						</div>
						<div class="tweet__content">
							Muito feliz em participar desse momento com a turma do 3º Ano "B" de Informática e sentirei muitas saudades nos próximos anos. Espero que nossos momentos juntos fiquem registrado na memória de vocês! #terceirao #formandos #informatica
							<img class="tweet__image" src="<?php echo base_url() ?>/assets/img/post-image-1.jpg" />
						</div>
						<div class="post__footer">
							<span class="material-symbols-outlined">mode_comment</span>
							<span class="material-symbols-outlined">favorite</span>
							<span class="material-symbols-outlined">repeat</span>
						</div>
					</div>
				</div>

				<div class="tweet">
					<img class="tweet__author-logo" src="<?php echo base_url() ?>/assets/img/profile-image-4.jpg" />
					<div class="tweet__main">
						<div class="tweet__header">
							<div class="tweet__author-name">
								Renata eternas saudades ;-;
							</div>
							<div class="tweet__author-slug">
								@renatinhadopop
							</div>
							<div class="tweet__publish-time">
								18h
							</div>
						</div>
						<div class="tweet__content">
							Saudades da minha galerinha do barulho ;-;
						</div>
						<div class="post__footer">
							<span class="material-symbols-outlined">mode_comment</span>
							<span class="material-symbols-outlined">favorite</span>
							<span class="material-symbols-outlined">repeat</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col">
			<div class="layout__right-sidebar-container">
				<div class="widgets">
					<div class="widgets__input">
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
							<path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
						</svg>
						<input type="text" placeholder="Buscar no E-birdy">
					</div>
				</div>

				<div class="layout__right-sidebar">
					<div class="trends-for-you">
						<div class="trends-for-you__block">
							<div class="trends-for-you__heading">
								O que está acontecendo
							</div>
						</div>
						<div class="trends-for-you__block">
							<div class="trends-for-you__meta-information">
								Politica - Assuntos do Momento
							</div>
							<div class="trends-for-you__trend-name">
								#Eleicoes2022
							</div>
							<div class="trends-for-you__meta-information">
								155k Tweets
							</div>
						</div>
						<div class="trends-for-you__block">
							<div class="trends-for-you__meta-information">
								Assuntos do Momento
							</div>
							<div class="trends-for-you__trend-name">
								Brasil Hexacampeão Mundial
							</div>
						</div>
						<div class="trends-for-you__block">
							<div class="trends-for-you__meta-information">
								Assuntos do Momento
							</div>
							<div class="trends-for-you__trend-name">
								Pokemon
							</div>
							<div class="trends-for-you__meta-information">
								2,800 Tweets
							</div>
						</div>
					</div>
					<div class="who-to-follow">
						<div class="who-to-follow__block">
							<div class="who-to-follow__heading">
								Quem seguir
							</div>
						</div>
						<div class="who-to-follow__block">
							<img class="who-to-follow__author-logo" src="<?php echo base_url() ?>/assets/img/profile-image-1.jpg" />
							<div class="who-to-follow__content">
								<div>
									<div class="who-to-follow__author-name">
										Kalebe Vasconcelos<img class="verificado" src="<?php echo base_url() ?>/assets/img/verificado.png" width="20px">
									</div>

									<div class="who-to-follow__author-slug">
										@kalebevasconcelos
									</div>
								</div>
								<div class="who-to-follow__button">
									Seguir
								</div>
							</div>
						</div>
						<div class="who-to-follow__block">
							<img class="who-to-follow__author-logo" src="<?php echo base_url() ?>/assets/img/profile-image-2.jpg" />
							<div class="who-to-follow__content">
								<div>
									<div class="who-to-follow__author-name">
										Kevin Guimares<img class="verificado" src="<?php echo base_url() ?>/assets/img/verificado.png" width="20px">
									</div>
									<div class="who-to-follow__author-slug">
										@kevinguimaraes
									</div>
								</div>
								<div class="who-to-follow__button">
									Seguir
								</div>
							</div>
						</div>

						<div class="who-to-follow__block">
							<img class="who-to-follow__author-logo" src="<?php echo base_url() ?>/assets/img/profile-image-3.jpg" />
							<div class="who-to-follow__content">
								<div>
									<div class="who-to-follow__author-name">
										Felipe Souza<img class="verificado" src="<?php echo base_url() ?>/assets/img/verificado.png" width="20px">
									</div>
									<div class="who-to-follow__author-slug">
										@souza_felipe
									</div>

								</div>
								<div class="who-to-follow__button">
									Seguir
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="row align-items-center">
		<div class="col">

		</div>
		<div class="col">

		</div>
		<div class="col">

		</div>

	</div>

</body>

</html>
