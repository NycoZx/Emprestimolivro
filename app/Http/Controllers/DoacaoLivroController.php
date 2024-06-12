<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livro; // Supondo que você tenha um modelo para livros

class DoacaoLivroController extends Controller
{
    public function mostrarFormulario()
    {
        return view('doacao_livro.formulario');
    }

    public function doarLivro(Request $request)
    {
        // Validação dos dados do formulário
        $request->validate([
            'nome' => 'required|string|max:255',
            'estado' => 'required|string|max:255',
            'livraria' => 'required|string|max:255',
            'fornecedor' => 'required|string|max:255', // Certifique-se de validar o fornecedor
        ]);

        // Criar um novo livro com os dados fornecidos
        Livro::create([
            'nome' => $request->nome,
            'estado' => $request->estado,
            'livraria' => $request->livraria,
            'fornecedor' => $request->fornecedor,
        ]);

        // Redirecionar após a criação do livro
        return redirect()->route('livros.index')->with('success', 'Livro doado com sucesso.');
    }
}

