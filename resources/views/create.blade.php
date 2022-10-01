@extends('templates.template')

@section('content')
    <!-- Modal Cadastro-->
    <form action="{{ route('produtos.store') }}" method="post">
        @csrf
        <div class="modal fade modal-lg" id="cadastroModal" tabindex="-1" aria-labelledby="cadastroModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
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
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection

{{--@extends('templates.template')

@section('content')
   <h1 class="text-center">Cadastrar Produto</h1>
    <hr>
    <div class="col-6 m-auto">
      <form action="{{ route('produtos.store') }}" method="post">
        @csrf
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
        <button type="submit" class="btn btn-primary">Cadastrar</button>
      </form>
    </div>

@endsection
--}}
