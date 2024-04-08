<!DOCTYPE html>
<html lang="pt-br">
    <x-head/>
<body>
    <x-navbar-teste/>
    <h1>Detalhes do Restaurante</h1>
    <div>
        <p><strong>ID:</strong> {{ $restaurante->id }}</p>
        <p><strong>Nome:</strong> {{ $restaurante->nome }}</p>
        <p><strong>Endereço:</strong> {{ $restaurante->endereco }}</p>
    </div>
    <a href="{{ route('restaurante.index') }}">Voltar para Lista de Restaurantes</a>
</body>
</html>
