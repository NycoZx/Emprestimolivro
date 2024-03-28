@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
      <div>
        <h1>Meus livros agendados</h1>
      </div>
        <div class="col-md-12">
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
                        <td><a class="btn btn-primary" href="{{route('livros.remover_agendamento', $livro->id)}}" role="button">Devolver</a></td>
                      </tr>
                    @endforeach
                  
                </tbody>
              </table>
        </div>

    </div>
</div>

@endsection

