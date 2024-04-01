<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usuarios = Usuario::all();
        return view('teste.usuario.index', compact('usuarios'));
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
        $usuario = Usuario::findOrFail($id);
        return view('teste.usuario.show', compact('usuario'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $usuario = Usuario::findOrFail($id);
        return view('teste.usuario.edit', compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validação dos dados do formulário
        $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|email|unique:usuarios,email,' . $id,
            'tipo' => 'required|in:Cliente,Entregador',
        ]);

        try {
            // Encontra o usuário pelo ID
            $usuario = Usuario::findOrFail($id);

            // Atualiza os campos do usuário com os dados do formulário
            $usuario->nome = $request->nome;
            $usuario->email = $request->email;
            $usuario->tipo = $request->tipo;

            // Salva as alterações no banco de dados
            $usuario->save();

            // TODO Corrigir redirecionar/ Testar try/catch
            // Redireciona de volta para a página de detalhes do usuário
            return redirect()->route('teste.usuario.show', $usuario->id)->with('success', 'Usuário atualizado com sucesso!');
        } catch (\Exception $e) {
            // Em caso de erro, redireciona de volta para a página de edição com uma mensagem de erro
            //return redirect()->route('teste.usuario.edit', $id)->with('error', 'Erro ao atualizar usuário: ' . $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Usuario $usuario)
    {
        //
    }
}