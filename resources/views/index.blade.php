@extends('templates.template')

@section('content')

<h1 class="text-center">Produtos</h1>
    <hr>
    <div class="text-center mt-3 mb-3">
        <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#cadastroModal">
            + Novo produto
        </button>
    </div>
    <div class="col-8 m-auto">
        <table class="table text-center">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Preço</th>
                    <th scope="col">Quantidade</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($produtos as $produto)
                <tr>
                    <th scope="row">{{ $produto->id }}</th>
                    <td>{{ $produto->name }}</td>
                    <td>{{ $produto->price }}</td>
                    <td>{{ $produto->quantity }}</td>
                    <td>
                        <div class="d-flex justify-content-center">
                        <div class="p-1">
                            <button class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#showModal{{$produto->id}}">
                                View
                            </button>
                        </div>
                        <div class="p-1">
                            <a href="{{ route('produtos.edit', $produto->id) }}">
                            <button class="btn btn-outline-primary">Edit</button>
                            </a>
                        </div>
                        <div class="p-1">
                            <form action="{{ route('produtos.destroy', $produto->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-outline-danger" type="submit">Excluir</button>
                            </form>
                        </div>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Modal Cadastro-->
    <div class="modal fade modal-lg" id="cadastroModal" tabindex="-1" aria-labelledby="cadastroModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <form action="{{ route('produtos.store') }}" method="post">
                        @csrf
                        <div class="modal-header">
                            <h5 class="modal-title" id="cadastroModalLabel">Cadastrar Produto</h5>
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Nome</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label">Preço</label>
                            <input type="text" class="form-control" id="price" name="price">
                        </div>
                        <div class="mb-3">
                            <label for="quantity" class="form-label">Quantidade</label>
                            <input type="number" class="form-control" id="quantity" name="quantity">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-primary">Cadastrar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Show -->
    @foreach ($produtos as $produto)
        <div class="modal fade modal-lg" id="showModal{{$produto->id}}" tabindex="-1" aria-labelledby="showModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Detalhes do Produto</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Id: {{$produto->id}} <br>
                    Nome: {{$produto->name}} <br>
                    Preço: {{$produto->price}} <br>
                    Quantidade: {{$produto->quantity}} <br>
                    Data de cadastro: {{$produto->created_at}} <br>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Sair</button>
                </div>
            </div>
            </div>
        </div>
    @endforeach

@endsection
