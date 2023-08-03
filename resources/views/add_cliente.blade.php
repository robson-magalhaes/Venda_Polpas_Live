<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Raleway:ital,wght@1,300&display=swap');
    </style>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
  
    <link rel="stylesheet" href="{{route('index')}}/assets/css/style_add_p.css"/>
    <title>Inicio</title>
</head>
<body>
    <section>
		<div class="container-cliente">
			<form method="get" 
					action="{{route('add.cliente.action')}}"
				 >

                	@csrf
                  
				<h1>FAÇA SEU PEDIDO</h1><hr/>
                  
                 @if($errors->any())
				<ul class="alert alert-error">
					@foreach ($errors->all() as $error)
						<li>{{$error}}</li>
					@endforeach
				</ul>
				@endif
				
				<input type="hidden" id="cliente_id" name="id">

				<label for="nome" id="view-nome">Nome:<br>
				<input type="text" id="nome" name="nome" >
				</label>

				<label for="endereco" id="view-ende">Endereço:<br>
					<input type="text" id="endereco" name="endereco" >
				</label>

				<label for="telefone" id="view-tel">Numero de telefone:<br>
					<input type="number" id="telefone" name="telefone">
				</label>

				<label for="continuar">
					<input id="btn-salvar" type="submit" value="Continuar" onclick="continuar()">
				</label>

			</form>
		</div>

	</section>
	<script>
		var viewCliente = document.querySelector('.container-cliente');
		var viewProduto = document.querySelector('.container-produto');

		function continuar(){
			viewProduto.style.display="flex";
			viewCliente.style.display="none";
		}
	</script>
	<script src="../assets/js/view_p.js"></script>
	{{-- <script src="../assets/js/script.js"></script> --}}
</body>
</html>