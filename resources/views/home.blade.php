<x-layouts css="home" titulo="Pagina Home">
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <header>
      <div class="welcome"><h1>Bem Vindo!<font color="purple"> {{$nome ?? ''}} </font></h1></div>
      
          <form method="get" action="{{route('home')}}">
            <fieldset style="padding-left: 10px; border-radius: 5px" > <legend> Filtro </legend>
              <select name="filtro" id="filtragem" style="padding:5px; border-radius: 5px;">
                <option value="">Selecione o filtro</option>
                <option value="nome">Nome</option>
                <option value="endereco">Endereço</option>
                <option value="telefone">Telefone</option>
                <option value="produto">Produto</option>
                <option value="updated_at">Data e Horario</option>
              </select>
            <input type="submit" width="20px" value="Filtrar" class="btn">
            </fieldset>
          </form>
        <!--botões-->
      <div class="btn-home">
        <a href="{{route('add.cliente')}}"><div class="btn"> ADICIONAR </div></a>
        <a href="{{route('logout')}}"><div class="btn"> SAIR </div></a>
      </div>

  </header>
    <main id="home">
      {{-- @php
      header('refresh:10')
      @endphp --}}
      <table border="0" width="100%">
              <tr id="titulo-info">
                <th>NOME</th>
                <th>ENDEREÇO</th>
                <th>TELEFONE</th>
                <th>PRODUTO</th>
                <th>QUANT.</th>
                <th>Data/Hora</th>
                <th> Apagar </th>
              </tr>
              @foreach($dadosClientes as $item)
              <tr method="get" name="id" class="tabela-info" value="{{$item->id}}" name="{{$item->id}}" class="tab-item">
                <th>{{$item->nome}}</th>
                <th>{{$item->endereco}}</th>
                <th>{{$item->telefone}}</th>
                          {{--@php dd($item->id); @endphp--}}
                <th>
                      @foreach($dados as $prod)
                        @if($item->id == $prod->cliente_id)
                            {{$prod->nome}}<hr/>
                        @endif
                      @endforeach
                </th>
                <th>
                      @foreach($dados as $prod)
                        @if($item->id == $prod->cliente_id)
                            {{$prod->quantidade}}<hr>
                        @endif
                      @endforeach
                </th>
                <th>{{$item->created_at}}</th>
                <th>{{date('d-m-Y H:i:s', strtotime($item->created_at))}}</th>
                
                <th name="" id="btn-del"><a href="{{route('delete.produto', $item->id)}}" onclick="swal('Seu pedido foi deletado')" >
                  <img src="assets/icon/icon_delete.jpg" width="30px"/></a>
                </th>
                </tr>
              @endforeach

            {{-- 
              @foreach($dados as $item)
              <tr method="get" name="id" class="tabela-info" value="{{$item->id}}" name="{{$item->id}}" class="tab-item">
                <th>{{$item->nome}}</th>
                <th>{{$item->endereco}}</th>
                <th>{{$item->telefone}}</th>
                <th>{{$item->produto}}</th>
                <th>{{$item->quantidade}}</th>
                {{-- <th>{{$item->created_at}}</th> 
                <th>{{date('d-m-Y H:i:s', strtotime($item->created_at))}}</th>
                
                <th name="" id="btn-del"><a href="{{route('delete.produto', $item->id)}}" onclick="swal('Seu pedido foi deletado')" >
                  <img src="assets/icon/icon_delete.jpg" width="30px"/></a>
                </th>
                </tr>
              @endforeach 
            --}}
      </table>
    </main>
  
    <x-footer/>
</x-layouts>
