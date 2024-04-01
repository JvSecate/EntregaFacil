<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do Usuário</title>
</head>
<body>
    <h1>Detalhes do Usuário</h1>
    <div>
        <p><strong>ID:</strong> {{ $usuario->id }}</p>
        <p><strong>Nome:</strong> {{ $usuario->nome }}</p>
        <p><strong>Email:</strong> {{ $usuario->email }}</p>
        <p><strong>Tipo:</strong> {{ $usuario->tipo }}</p>
    </div>
    <a href="{{ route('usuario.index') }}">Voltar para Lista de Usuários</a>
</body>
</html>
