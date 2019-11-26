<div class="row">
    <div class="form-group col-sm-6">
        <label class="required" for="name">Nome</label>
        <input type="text" class="form-control" required value="{{ old('name', $cliente->name) }}" name="name" id="nome">
    </div>
    <div class="form-group col-sm-6">
        <label class="required" for="idade">Idade</label>
        <input type="number" class="form-control" required value="{{ old('idade', $cliente->idade) }}" name="idade" id="idade">
    </div>
</div>

<hr>
<div class="row">
        <div class="form-group col-6">
            <label for="telefone">Telefone</label>
            <input  type="text" required value="{{ old('telefone', $cliente->telefone) }}" class="form-control" name="telefone" id="telefone">
        </div>
        <div class="form-group col-6">
            <label class="required" for="endereco">Endereço</label>
            <input type="text" class="form-control" value="{{ old('endereco', $cliente->endereco) }}" name="endereco" id="endereco" required>
        </div>
</div>
