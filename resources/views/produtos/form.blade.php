<div class="row">
    <div class="form-group col-sm-6">
        <label class="required" for="nome">Nome</label>
        <input type="text" class="form-control" required value="{{ old('nome', $produto->nome) }}" name="nome" id="nome">
    </div>
    <div class="form-group col-sm-6">
        <label class="required" for="qntdEmEstoque">Quantidade em Estoque</label>
        <input type="number" class="form-control" required value="{{ old('qntdEmEstoque', $produto->qntdEmEstoque) }}" name="qntdEmEstoque" id="qntdEmEstoque">
    </div>
</div>
<hr>
<div class="row">  
    <div class="form-group col-sm-6">
        <label class="required" for="preco">Preço</label>
        <input type="text" class="form-control" required value="{{ old('preco', $produto->preco) }}" name="preco" id="preco">
    </div>
    <div class="form-group col-sm-6">
        <label class="required" for="precoPromocional">Preço Promocional</label>
        <input type="text" class="form-control" required value="{{ old('precoPromocional', $produto->precoPromocional) }}" name="precoPromocional" id="precoPromocional">
    </div>
</div>
<hr>
<div class="row">
    <div class="col-md-6 col-12">
        <label class="required">Categoria</label>
        <select class="form-control select2" name="category_id" value="{{ old('category_id', $produto->category_id) }}" required>
            <option></option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="col-md-6 col-12">
        <label class="required">Fornecedor</label>
        <select class="form-control select2" name="fornecedor_id" value="{{ old('fornecedor_id', $produto->fornecedor_id) }}" required>
            <option></option>
            @foreach ($fornecedores as $fornecedor)
                <option value="{{ $fornecedor->id }}">{{ $fornecedor->nome }}</option>
            @endforeach
        </select>
    </div>
</div>
<hr>
<div class="row">
    <div class="form-group col-sm-12">
        <label class="required" for="descricao">Descrição</label>
        <textarea name="descricao" class="form-control" required id="descricao" rows="5">{{ old('descricao',$produto->descricao) }}</textarea>  
    </div>
</div>
