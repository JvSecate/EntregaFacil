<?php

namespace App\Http\Controllers;

use App\Models\ItemPedido;
use App\Models\Produto;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ItemPedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $item_pedidos = ItemPedido::all();
        return view('teste.item_pedidos.index', compact('item_pedidos'));
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
        $itemPedido = ItemPedido::findOrFail($id);
        return view('teste.item_pedidos.show', compact('itemPedido'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $itemPedido = ItemPedido::findOrFail($id);
        $produtos = Produto::all();
        return view('teste.item_pedidos.edit', compact('itemPedido', 'produtos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validação dos dados do formulário
        $request->validate([
            'produto' => 'required|exists:produtos,id',
            'quantidade' => 'required|integer|min:1',
            // Adicione aqui outras regras de validação, se necessário
        ]);
        $produtos = Produto::all();
        try {
            // Encontra o item de pedido pelo ID
            $itemPedido = ItemPedido::findOrFail($id);

            // Atualiza os campos do item de pedido com os dados do formulário
            $itemPedido->produto_id = $request->produto;
            $itemPedido->quantidade = $request->quantidade;
            // Atualize outros campos conforme necessário

            // Salva as alterações no banco de dados
            $itemPedido->save();

            // Redireciona de volta para a página de detalhes do item de pedido
            return view('teste.item_pedidos.show', compact('itemPedido', 'produtos'));
        } 
        catch (\Exception $e) {
            // Em caso de erro, redireciona de volta para a página de edição
            return view('teste.item_pedidos.edit', compact('itemPedido', 'produtos'));
        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ItemPedido $itemPedido)
    {
        //
    }
}
