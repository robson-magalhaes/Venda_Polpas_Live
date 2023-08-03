<x-layouts css="login" titulo="Tela de Login">
    <header>

          <img src="assets/imagens/mylogotype.jpeg">
          <div class="menu">
            <a href="" class="btn-header ativo">Login</a>
            <!-- <a href="" class="btn btn-header">Contato</a>
            <a href="" class="btn btn-header">Fale conosco</a> -->
          </div>
    </header>
    <main>
        <div class="formulario">

                <form method="POST" action="{{route('action_login')}}">
                    @csrf
                    <h1 style="color:white;font-family: 'Anton', sans-serif;">Login</h1><hr/>
                    <br>
                    <label for=""><br>
                    Nome:<br>
                    <input type="text" name="name">
                    </label>

                    <label for=""><br>
                    Senha:<br>
                    <input type="password" name="password">
                    </label>

                    <br/><input type="submit" value="Login" class="btn btn-login">
                </form>
                {{-- <a href="{{route('registrar')}}">Cadastre-se aqui</a> --}}
        </div>
        <div class="banner">.</div>
  </main>
  <x-footer/>
</x-layouts>
