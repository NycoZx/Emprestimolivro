<?php

namespace App\Http\Controllers;

use App\Models\Livros;
use App\Models\UserLivro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
            'fornecedor' => $request->fornecedor,
            'estado' => $request->estado,
            'livraria' => $request->livraria,
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


    public function agendamento()
    {
        $livros = Livros::select("livros.*")
        ->get();

        return view('livros.agendamento', compact('livros'));
    }

    public function agendar($id_livro)
    {
        $livro = Livros::find($id_livro);
        $livro->status = 0;
        $livro->save();

        $user_livro = new UserLivro();
        $user_livro->id_livro = $id_livro;
        $user_livro->id_user = Auth::user()->id;
        $user_livro->save();

        return redirect()->route('livros.agendamento');
    }

public function meus_agendamentos()
    {
        $livros = Livros::select("livros.*")
        ->leftJoin("user_livros", "livros.id", "user_livros.id_livro")
        ->where("user_livros.id_user", Auth::user()->id)
        ->get();
        return view('livros.meus_agendamentos', compact('livros'));

    }

    public function remover_agendamento($id_livro)
    {
        $livro = Livros::find($id_livro);
        $livro->status = 1;
        $livro->save();

        $user_livro = UserLivro::where("id_livro",$id_livro)->first();
        $user_livro->delete();

        return redirect()->route('livros.meus_agendamentos');
    }





}

