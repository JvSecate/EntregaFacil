<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do Restaurante</title>
</head>
<body>
    <h1>Detalhes do Restaurante</h1>
    <div>
        <p><strong>ID:</strong> {{ $restaurante->id }}</p>
        <p><strong>Nome:</strong> {{ $restaurante->nome }}</p>
        <p><strong>Endereço:</strong> {{ $restaurante->endereco }}</p>
    </div>
    <a href="{{ route('restaurante.index') }}">Voltar para Lista de Restaurantes</a>
</body>
</html>
