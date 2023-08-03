<x-layouts css="style_add_p" titulo="Adicionar Produtos">
    <section>
		<div class="container">
			
				<form method="get" 
					action="{{route('add.produto.geral')}}"
				{{-- action="{{route('carrinho.index')}}" --}}
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

				<label for="nome" id="view-nome">Nome:<br>
				<input type="text" id="nome" name="nome" >
				</label>

				<label for="endereco" id="view-ende">Endereço:<br>
					<input type="text" id="endereco" name="endereco" >
				</label>

				<!-- <label for="local">Cidade/Municipio:<br>
					<input type="text" id="local" name="local" required>
				</label> -->

				<label for="telefone" id="view-tel">Numero de telefone:<br>
					<input type="number" id="telefone" >
				</label>

				<label for="produtos" class="view-none">Produto:<br>
				<select name="produto" id="produtos">
					<option id="opt" value="">Selecione o produto</option>
					<option id="opt" value="Açai">Açai</option>
					<option id="opt" value="Acerola">Acerola</option>
					<option id="opt" value="Amora">Amora</option>
					<option id="opt" value="Goiaba">Goiaba</option>
					<option id="opt" value="Graviola">Graviola</option>
					<option value="Maracuja">Maracuja</option>
					<option value="Morango">Morango</option>
					<option value="Laranja">Laranja</option>
					<option value="Uva">Uva</option>
				</select>
				<input type="number" id="quantidade" name="quantidade" value="0" size="1">
				</label>

				{{-- <label for="adicionar">
					<input id="btn-salvar" type="buttom" onclick="adicionarProduto()" value="Adicionar">
				</label> --}}

				<label for="Continuar">
					<input class="btn-salvar" id="btn-1" type="button" value="Continuar">
				</label>

				<label for="adicionar">
					<input class="view-none btn-salvar" id="btn-2" type="submit" value="Continuar">
				</label>

				{{-- <input type="submit" name="produto" onclick="gerarListaProdutos()"  id="btn-salvar-2" value="Salvar"> --}}
				<div id="seila"></div>
				</form>
		</div>
		

		{{-- @foreach($data as $item)
			{{$item}}
		@endforeach --}}

		<div id="tela-result">

			{{-- <div class="box-produto" name="Uva">
				<div class="box-titulo">Uva</div>
				<img src="" alt="">
				<div class="box-info"></div>
				<div class="valor">R$</div>
				<input type="number" name="quantidade" class="">
				<button class="btn-add">COMPRAR</button>
			</div> --}}

				<div id="temp">
					{{-- <h2>LISTA DE PRODUTOS VENDIDOS</h2>
					<form method="post" action="">
				
						<label for="produtos" class="view-none">Produto:<br>
							<select name="produto" id="produtos">
								<option id="opt" value="">Selecione o produto</option>
								<option id="opt" value="Açai">Açai</option>
								<option id="opt" value="Acerola">Acerola</option>
								<option id="opt" value="Amora">Amora</option>
								<option id="opt" value="Goiaba">Goiaba</option>
								<option id="opt" value="Graviola">Graviola</option>
								<option value="Maracuja">Maracuja</option>
								<option value="Morango">Morango</option>
								<option value="Laranja">Laranja</option>
								<option value="Uva">Uva</option>
							</select>
							<input type="number" id="quantidade" name="quantidade" value="0" size="1">
							</label>
		
					</form> --}}
					{{-- <table border="1" width="100%">
						<tr id="listaProdutos">
							
							
							<!-- Lista de produtos vazia -->
						</tr>
					</table> --}}
				</div>
		</div>
	</section>
	<script>
		
	</script>
    
</x-layouts>