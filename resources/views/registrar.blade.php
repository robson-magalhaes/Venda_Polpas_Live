<x-layouts css="login" titulo="Pagina de Cadastro">

          <div class="container">

            <form method="POST" action="{{route('action.register')}}">
                    @csrf
                    <x-form.input_cadastro label="Nome:" type="text" name="name"/>
                    <x-form.input_cadastro label="Senha:" type="password" name="password"/>

                    <input type="submit"  value="Cadastrar" id="botao">
                    <a href="{{route('login')}}"><input type="button" value="Voltar" id="botao"></a>
            </form>

          </div>
  <x-footer/>
</x-layouts>