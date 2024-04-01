<?php

namespace App\Http\Controllers;

use App\Models\Restaurante;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RestauranteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $restaurantes = Restaurante::all();
        return view('teste.restaurante.index', compact('restaurantes'));
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
        $restaurante = Restaurante::findOrFail($id);
        return view('teste.restaurante.show', compact('restaurante'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $restaurante = Restaurante::findOrFail($id);
        return view('teste.restaurante.edit', compact('restaurante'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validação dos dados do formulário
        $request->validate([
            'nome' => 'required|string|max:255',
            'endereco' => 'required|string|max:255',
            // Adicione aqui outras regras de validação, se necessário
        ]);

        try {
            // Encontra o restaurante pelo ID
            $restaurante = Restaurante::findOrFail($id);

            // Atualiza os campos do restaurante com os dados do formulário
            $restaurante->nome = $request->nome;
            $restaurante->endereco = $request->endereco;
            // Atualize outros campos conforme necessário

            // Salva as alterações no banco de dados
            $restaurante->save();

            // Redireciona de volta para a página de detalhes do restaurante
            return view('teste.restaurante.show', compact('restaurante'));
        } 
        catch (\Exception $e) {
            // Em caso de erro, redireciona de volta para a página de edição
            return view('teste.restaurante.edit', compact('restaurante'));
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            // Encontra o restaurante pelo ID
            $restaurante = Restaurante::findOrFail($id);

            // Exclui o restaurante do banco de dados
            $restaurante->delete();

            // Redireciona de volta para a lista de restaurantes
            return redirect()->route('restaurante.index')->with('success', 'restaurante excluído com sucesso.');
        } 
        catch (\Exception $e) {
            // Em caso de erro, redireciona de volta para a lista de restaurantes
            return redirect()->route('restaurante.index')->with('error', 'Erro ao excluir o restaurante.');
        }
    }
}
