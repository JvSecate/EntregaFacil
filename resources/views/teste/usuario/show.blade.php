<!DOCTYPE html>
<html lang="pt-br">
<x-head/>
<body>
    <x-navbar-teste/>
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <h1>Detalhes do Usuário</h1>
        <div>
            <p><strong>ID:</strong> {{ $usuario->id }}</p>
            <p><strong>Nome:</strong> {{ $usuario->nome }}</p>
            <p><strong>Email:</strong> {{ $usuario->email }}</p>
            <p><strong>Tipo:</strong> {{ $usuario->tipo }}</p>
        </div>
        <a href="{{ route('usuario.index') }}">Voltar para Lista de Usuários</a>
    </div>
</body>
</html>
