<!DOCTYPE html>
<html lang="en">
    <x-head/>
<body>
    <x-navbar-teste/>
    <h1>Painel de Testes</h1>
    <ul>
        <li><a href="{{ route('usuario.index') }}">Usuários</a></li>
        <li><a href="{{ route('restaurante.index') }}">Restaurantes</a></li>
        <li><a href="{{ route('produto.index') }}">Produtos</a></li>
        <li><a href="{{ route('pedido.index') }}">Pedidos</a></li>
        <li><a href="{{ route('item_pedidos.index') }}">Itens de Pedido</a></li>
    </ul>
</body>
</html>
