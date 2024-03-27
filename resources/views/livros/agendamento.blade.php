@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
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
                        @if ($livro->status == 1)
                        <td><a class="btn btn-primary" href="{{route('livros.agendar', $livro->id)}}" role="button">Agendar</a></td>
                        @else
                        <td><p>Indisponível</p></td>  
                        @endif
                      </tr>
                    @endforeach
                  
                </tbody>
              </table>
        </div>
    </div>
</div>
@endsection
