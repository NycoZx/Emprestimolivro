<?php

namespace App\Http\Controllers;

use App\Models\Livros;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class LivrosController extends Controller
{
    public function index()
    {
        $livros = Livros::all();

        return view('livros.index', compact('livros'));
    }

    public function create()
    {

        return view('livros.create');
    }

    public function store(Request $request) 
    {
        $livro = Livros::create([
            'nome' => $request->nome,
            'fornecedor' => $request->fornecedor
        ]);
    
        return redirect()->route('livros.index');
    }

    public function edit($id)
    {
        $livro = Livros::find($id);
        return view('livros.edit', compact("livro"));
    }

    public function update(Request $request, $id) 
    {
        $livro = Livros::find($id);
        $livro->nome = $request->nome;
        $livro->fornecedor = $request->fornecedor;
        $livro->save();
    
        return redirect()->route('livros.index');
    }

    public function destroy($id)
    {
        $livro = Livros::find($id);
        $livro->delete();
        return redirect()->route('livros.index');
    }






}

