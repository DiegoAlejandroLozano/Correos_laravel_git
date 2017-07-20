<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Enviar correos</title>

    <!-- Bootstrap -->
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  </head>
  <body>
    
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-sm-offset-3">
				
				<form action="{{ route('formularioCorreo') }}" method="POST">
					{{ csrf_field() }}
				
					<div class="form-group">
						<label for="nombre">Nombre</label>
						<input type="text" id="nombre" name="nombre" class="form-control">
					</div>

					<div class="form-group">
						<label for="correo">Correo</label>
						<input type="email" id="correo" name="correo" class="form-control">
					</div>

					<div class="form-group">
						<label for="contenido">Contenido</label>
						<textarea name="contenido" id="contenido" cols="30" rows="10" class="form-control"></textarea>
					</div>

					<div class="form-group">
						<input type="submit" value="Enviar" class="form-control btn-primary">
					</div>

				</form>

			</div>
		</div>
	</div>


    <!-- Bootstrap's JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
  </body>
</html>