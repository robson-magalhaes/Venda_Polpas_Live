<x-layouts css="produtos" titulo="Pagina de Produtos">
    <main>
        <div class="container-produto">
            <div class="titulo">
                <h1>{{$info['nome']}}<br>
                Agora faça seu pedido!!</h1>
            </div>
        
            <div class="container-carrinho">
            <img src="" alt="" srcset="">
            <div class="carrinho">

                <table border="0">
                    <tr><th>PRODUTO</th><th>QUANTIDADE</th><th>VALOR</th></tr>
                    @foreach($carrinho as $p)
                    @php
                        $total += $p->valor*$p->quantidade
                    @endphp
                    <tr>
                    <th>{{$p->nome}}</th>
                    <th>{{$p->quantidade}}</th>
                    <th>{{$p->valor}}</th>
                    <th><a href="{{route('del.item.cart', $p->id)}}"> x </a></th>
                    </tr>
                    @endforeach
                </table>
                
                
            </div>
            <div class="carrinho-confirm">
                <h4>VALOR TOTAL R${{$total}}</h4>
            <a id="btn-confirmar" href="{{route('obrigado')}}">CONFIRMAR</a>
            </div>
        </div>
            <div class="box-section">
                @foreach ($produtos as $item)
                    <form method="get" action="{{ route('index.carrinho') }}">
                        @csrf

                        <div class="produtos">
                            <div class="produto-info">
                                    <img src="assets/imagens/{{$item->imagem}}" alt="Imagem do Produto">
                                    <h2 class="p-titulo">{{ $item->nome }}</h2>
                                    <p class="p-valor" >Preço: R$ {{ $item->valor }}</p>
                                    
                                    <input type="hidden" name="produtos_id" value="{{$item->id}}">
                                    <input type="hidden" name="nomeProd" value="{{$item->nome}}">
                                    <input type="hidden" name="valor" value="{{ $item->valor }}">
                                    <input class="qnt" type="number" name="quantidade" value="0" min="0" size="2">
                                    <input type="hidden" name="cliente_id" value="{{$cliente_id ?? ''}}">
                                    <button type="submit"  id="btn-add">+</button>
                            </div>
                        </div>
                    
                    </form>
                @endforeach
            </div>

        </div>
    </main>
</x-layouts>