@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div>
            <h1>Registre novos livros</h1>
        </div>
        <p></p>
        <div class="col-md-12">
            <div>
                <a class="btn btn-primary" href="{{route('livros.create')}}" role="button">Inserir Livro</a>
            </div>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Fornecedor</th>
                    <th scope="col">Ações</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ( $livros as $livro )
                    <tr>
                        <th scope="row">{{$livro->id}}</th>
                        <td>{{$livro->nome}}</td>
                        <td>{{$livro->fornecedor}}</td>
                        <td><a class="btn btn-primary" href="{{route('livros.edit', $livro->id)}}" role="button">Editar</a> <a class="btn btn-danger" href="{{route('livros.destroy', $livro->id)}}" role="button">Deletar</a></td>
                      </tr>
                    @endforeach
                  
                </tbody>
              </table>
        </div>
    </div>
</div>
@endsection
