@extends('templates.template')

@section('content')
    <h1 class="text-center">Visualizar</h1>
    <hr>
    <div class="col-8 m-auto">
      Id: {{$produto->id}} <br>
      Nome: {{$produto->name}} <br>
      Preço: {{$produto->price}} <br>
      Quantidade: {{$produto->quantity}} <br>
      Data de cadastro: {{$produto->created_at}} <br>
      <br>
      <a href="{{ route('produtos.index') }}">
        <button class="btn btn-outline-info">Todos os produtos</button>
      </a>

    </div>
@endsection
