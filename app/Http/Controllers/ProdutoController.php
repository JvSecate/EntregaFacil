<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use App\Http\Controllers\Controller;
use App\Models\Restaurante;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produtos = Produto::all();
        return view('teste.produto.index', compact('produtos'));
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
        $produto = produto::findOrFail($id);
        return view('teste.produto.show', compact('produto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $produto = Produto::findOrFail($id);
        return view('teste.produto.edit', compact('produto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validação dos dados do formulário
        $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'required|string',
            'preco' => 'required|numeric|min:0',
            // Adicione aqui outras regras de validação, se necessário
        ]);

        try {
            // Encontra o produto pelo ID
            $produto = Produto::findOrFail($id);

            // Atualiza os campos do produto com os dados do formulário
            $produto->nome = $request->nome;
            $produto->descricao = $request->descricao;
            $produto->preco = $request->preco;
            // Atualize outros campos conforme necessário

            // Salva as alterações no banco de dados
            $produto->save();

            // TODO Corrigir redirecionar/ Testar try/catch
            // Redireciona de volta para a página de detalhes do produto
            return view('teste.produto.show', compact('produto'));
        } catch (\Exception $e) {
            // Em caso de erro, redireciona de volta para a página de edição com uma mensagem de erro
            return view('teste.produto.edit', compact('produto'));        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Produto $produto)
    {
        //
    }
}
