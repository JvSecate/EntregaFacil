<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active" href="">Página Principal</a>
                </li>
                <li class="nav-item">
                <a class="nav-link active" href="{{ route('usuario.index') }}">Usuário</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('pedido.index')}}" class="nav-link active">Pedidos</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('produto.index')}}" class="nav-link active">Produtos</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('item_pedidos.index')}}" class="nav-link active">Item de um Pedido</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('restaurante.index')}}" class="nav-link active">Restaurantes</a>
                </li>
            </ul>
        </div>
    </div>
</nav>