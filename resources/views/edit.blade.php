@extends('templates.template')

@section('content')
    <h1 class="text-center">Editar Produto</h1>
    <hr>
    <div class="col-6 m-auto">
      <form action="{{ route('produtos.update', $produto->id) }}" method="post">
        @method('PUT')
        @csrf
        <div class="mb-3">
          <label for="name" class="form-label">Nome</label>
          <input type="text" class="form-control" id="name" name="name" value="{{ $produto->name }}">
        </div>
        <div class="mb-3">
          <label for="price" class="form-label">Preço</label>
          <input type="text" class="form-control" id="price" name="price" value="{{ $produto->price }}">
        </div>
        <div class="mb-3">
          <label for="quantity" class="form-label">Quantidade</label>
          <input type="number" class="form-control" id="quantity" name="quantity" value="{{ $produto->quantity }}">
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
      </form>
    </div>
@endsection