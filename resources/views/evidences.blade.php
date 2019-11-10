<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="csrf-token" content="{{ csrf_token() }}">	
	<title>Document</title>
	<link rel="stylesheet" href="css/bootstrap/bootstrap.css">
	<script src="js/bootstrap/bootstrap.js"></script>
	<style>	  
		body {
      	  font-family: 'Roboto', sans-serif;
	 	}
	 	.simplemde-fullscreen .modal-dialog {
			position: absolute;
			top: 0;
			right: 0;
			bottom: 0;
			left: 0;
			width: 100%;
			max-width: 100%;
			margin: 0;
		}
    </style>
    <script src="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.js"></script>
    <script src="js/simplemde.min.js"></script>
	<link rel="stylesheet" href="css/simplemde.min.css">
	<link rel="stylesheet" href="css/evidences.css">
</head>
<br>
<h3 style="text-align: center;">Denuncias de Fraude</h3>
<br>
<body>
	<textarea id="editor1" style="display: none;" name="content"></textarea>
</body>
<br>
<div id="success" class="alert alert-success" role="alert" style="display: none;">
	Su evidencia de fraude ha sido enviada correctamente. Gracias.
</div>
<div id="error" class="alert alert-danger" role="alert" style="display: none;">
	Para enviar la evidencia de fraude debe cumplir con los siguientes requisitos:
</div>
<form id="evidence-form" action="/evidences" method="POST">
	@csrf
	<div class="container">
		<div class="row justify-content-center"> 
			<div class="col-lg-12 col-12">
				<div class="form-group">
					<input name="name" class="form-control" placeholder="Nombre o Apodo" maxlength="100">
				</div>
			</div>
			<div class="col-lg-12 col-12">
				<div class="form-group">
					<input name="email" type="email" class="form-control" placeholder="Dirección de correo electrónico" maxlength="100">
				</div>	
			</div>
			<div class="col-lg-4 col-10">
				<div class="form-group">
					<div id="captcha">
							{!! Captcha::img(); !!}
					</div>
				</div>
			</div>
			<div class="col-lg-1 col-2">
				<div id="change-captcha">
						<i class="fa fa-refresh" title="Refrescar código" style="color: #084a95;" onMouseOver="this.style.cursor='pointer'"></i>
				</div>
			</div>
			<div class="col-lg-5 col-12">
					<div class="form-group">
						<input type="text" class="form-control"  name="captcha" id="" placeholder="Código de verificación*" maxlength="10">
					</div>	
			</div>
			<textarea id="evidence-content" name="content" cols="30" rows="10" hidden></textarea>
			<div class="col-lg-2 col-12">
				<button type="submit" class="btn btn-info btn-block"> Enviar </button>
			</div>
		</div>
	</div>
</form>
<br>
<br>
<footer class="footer">
	<div class="container">
		<div class="content has-text-centered">
			<p style="text-align: center">
			<a href="/">Inicio</a> | <a href="/evidencias">Muro de evidencias</a>
			<br>
			&copy; Copyright <strong>Bolivia Libre</strong>. All Rights Reserved
			</p>
		</div>
	</div>
</footer>

<script src="lib/jquery/jquery.min.js"></script>
<script src="lib/jquery/jquery-migrate.min.js"></script>
<script src="js/mde.js"></script>
</html>