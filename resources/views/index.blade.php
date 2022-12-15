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
        <table class="table text-center" id="example">
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
                            <button class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#editModal{{$produto->id}}">
                                Edit
                            </button>
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

    @include('modal')

@endsection
@section('js')
    <script>
        $(document).ready(function () {
            $('#example').DataTable();
        });
    </script>
@endsection
