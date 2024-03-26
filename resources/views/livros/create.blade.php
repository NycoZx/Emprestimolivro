@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <form action="{{route("livros.store")}}" method="POST" class="row g-3">
                @csrf
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nome</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nome do livro" name="nome">
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Fornecedor</label>
                <select class="form-select" aria-label="Default select example" name="fornecedor">
                    <option selected>Selecione o Fornecedor</option>
                    <option value="Livraria Cultura">Livraria Cultura</option>
                    <option value="Livraria da vida">Livraria da vida</option>
                    <option value="Saraiva">Saraiva</option>
                  </select>
              </div>
              <div class="col-auto">
                <button type="submit" class="btn btn-primary mb-3">Salvar</button>
              </div>
            </form>
            
        </div>
    </div>
</div>
@endsection
