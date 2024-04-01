<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Pedido</title>
</head>
<body>
    <h1>Editar Pedido</h1>
    <form action="{{ route('pedido.update', $pedido->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="cliente">Cliente:</label>
            <select name="cliente" id="cliente">
                @foreach($usuarios as $usuario)
                    @if($usuario->tipo === 'Cliente')
                        <option value="{{ $usuario->id }}" {{ $pedido->cliente_id == $usuario->id ? 'selected' : '' }}>{{ $usuario->nome }}</option>
                    @endif
                @endforeach
            </select>
        </div>
        <div>
            <label for="entregador">Entregador:</label>
            <select name="entregador" id="entregador">
                @foreach($usuarios as $usuario)
                    @if($usuario->tipo === 'Entregador')
                        <option value="{{ $usuario->id }}" {{ $pedido->entregador_id == $usuario->id ? 'selected' : '' }}>{{ $usuario->nome }}</option>
                    @endif
                @endforeach
            </select>
        </div>
        <div>
            <label for="restaurante">Restaurante:</label>
            <select name="restaurante" id="restaurante">
                @foreach($restaurantes as $restaurante)
                    <option value="{{ $restaurante->id }}" {{ $pedido->restaurante_id == $restaurante->id ? 'selected' : '' }}>{{ $restaurante->nome }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="status">Status:</label>
            <select name="status" id="status">
                <option value="Em andamento" {{ $pedido->status === 'Em andamento' ? 'selected' : '' }}>Em andamento</option>
                <option value="Entregue" {{ $pedido->status === 'Entregue' ? 'selected' : '' }}>Entregue</option>
                <option value="Cancelado" {{ $pedido->status === 'Cancelado' ? 'selected' : '' }}>Cancelado</option>
                <!-- Adicione aqui outros status, se necessário -->
            </select>
        </div>
        <!-- Adicione aqui outros campos de edição, se necessário -->
        <button type="submit">Salvar Alterações</button>
    </form>
    <a href="{{ route('pedido.index') }}">Cancelar</a>
</body>
</html>
