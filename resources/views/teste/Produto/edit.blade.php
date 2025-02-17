<!DOCTYPE html>
<html lang="pt-br">
    <x-head/>
<body>
    <x-navbar-teste/>
    <h1>Editar Produto</h1>
    <form action="{{ route('produto.update', $produto->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" value="{{ $produto->nome }}">
        </div>
        <div>
            <label for="descricao">Descrição:</label>
            <input type="text" id="descricao" name="descricao" value="{{ $produto->descricao }}">
        </div>
        <div>
            <label for="preco">Preço:</label>
            <input type="text" id="preco" name="preco" value="{{ $produto->preco }}">
        </div>
        <!-- Adicione aqui outros campos de edição, se necessário -->
        <button type="submit">Salvar Alterações</button>
    </form>
    <a href="{{ route('produto.index') }}">Cancelar</a>
</body>
</html>
