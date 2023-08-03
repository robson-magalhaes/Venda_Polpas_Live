<!-- adicionar.blade.php -->
<x-layouts css="cesta" titulo="adicionar na cesta">
<h1>Adicionar ao Carrinho</h1>

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<form action="{{ route('carrinho.adicionar') }}" method="POST">
    @csrf
    <input type="hidden" name="produto_id" value="{{ $produto->id }}">
    <label for="quantidade">Quantidade:</label>
    <input type="number" name="quantidade" id="quantidade">
    <button type="submit">Adicionar ao Carrinho</button>
</form>
</x-layouts>
