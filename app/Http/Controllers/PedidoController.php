<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use App\Models\Restaurante;
use App\Http\Controllers\Controller;
use App\Models\Usuario;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pedidos = Pedido::all();
        return view('teste.pedido.index', compact('pedidos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $pedido = pedido::findOrFail($id);
        return view('teste.pedido.show', compact('pedido'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $pedido = Pedido::findOrFail($id);
        $usuarios = Usuario::all();
        $restaurantes = Restaurante::all();
        return view('teste.pedido.edit', compact('pedido', 'usuarios', 'restaurantes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validação dos dados do formulário
        $request->validate([
            'cliente' => 'required|exists:usuarios,id',
            'entregador' => 'required|exists:usuarios,id',
            'restaurante' => 'required|exists:restaurantes,id',
            'status' => 'required|in:Em andamento,Entregue,Cancelado',
            // Adicione aqui outras regras de validação, se necessário
        ]);

        $usuarios = Usuario::all();
        $restaurantes = Restaurante::all();

        try {
            // Encontra o pedido pelo ID
            $pedido = Pedido::findOrFail($id);

            // Atualiza os campos do pedido com os dados do formulário
            $pedido->cliente_id = $request->cliente;
            $pedido->entregador_id = $request->entregador;
            $pedido->restaurante_id = $request->restaurante;
            $pedido->status = $request->status;
            // Atualize outros campos conforme necessário

            // Salva as alterações no banco de dados
            $pedido->save();

            // Redireciona de volta para a página de detalhes do pedido
            return view('teste.pedido.show', compact('pedido', 'usuarios', 'restaurantes'));
        } 
        catch (\Exception $e) {
            // Em caso de erro, redireciona de volta para a página de edição
           return view('teste.pedido.edit', compact('pedido', 'usuarios', 'restaurantes'))->with('error', $e->getMessage());        
        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            // Encontra o Pedido pelo ID
            $pedido = Pedido::findOrFail($id);

            // Exclui o pedido do banco de dados
            $pedido->delete();

            // Redireciona de volta para a lista de pedidos
            return redirect()->route('pedido.index')->with('success', 'pedido excluído com sucesso.');
        } 
        catch (\Exception $e) {
            // Em caso de erro, redireciona de volta para a lista de pedidos
            return redirect()->route('pedido.index')->with('error', 'Erro ao excluir o pedido.');
        }
    }
}
