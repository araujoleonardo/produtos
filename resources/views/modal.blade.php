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


<!-- Modal Editar-->
@foreach ($produtos as $produto)
<div class="modal fade modal-lg" id="editModal{{$produto->id}}" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
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
        </div>
    </div>
</div>
@endforeach