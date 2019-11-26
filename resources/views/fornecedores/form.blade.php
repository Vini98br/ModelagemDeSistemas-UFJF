<div class="row">
    <div class="form-group col-sm-6">
        <label class="required" for="nome">Nome</label>
        <input type="text" class="form-control" required value="{{ old('nome', $fornecedor->nome) }}" name="nome" id="nome">
    </div>
    <div class="form-group col-sm-6">
        <label class="required" for="telefone">Telefone</label>
        <input type="text" class="form-control" required value="{{ old('telefone', $fornecedor->telefone) }}" name="telefone" id="telefone">
    </div>
</div>
<hr>
<div class="row">  
    <div class="form-group col-sm-6">
        <label class="required" for="email">E-mail</label>
        <input type="email" class="form-control" required value="{{ old('email', $fornecedor->email) }}" name="email" id="email">
    </div>
    <div class="form-group col-sm-6">
        <label class="required" for="endereco">Endereço</label>
        <input type="text" class="form-control" required value="{{ old('endereco', $fornecedor->endereco) }}" name="endereco" id="endereco">
    </div>
</div>
