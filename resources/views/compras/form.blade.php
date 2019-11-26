<div class="row">
        <div class="col-md-6 col-12">
                <label class="required">Fornecedor</label>
                <select class="form-control select2" name="fornecedor_id" value="{{ old('fornecedor_id', $compra->fornecedor_id) }}" required>
                    <option></option>
                    @foreach ($fornecedores as $fornecedor)
                        <option value="{{ $fornecedor->id }}">{{ $fornecedor->nome }}</option>
                    @endforeach
                </select>
            </div>
    <div class="form-group col-sm-6">
        <label class="required" for="qntdProdCompra">Quantidade de produtos</label>
        <input type="number" class="form-control" required value="{{ old('qntdProdCompra', $compra->qntdProdCompra) }}" name="qntdProdCompra" id="qntdEmEstoque">
    </div>
</div>
<hr>
<div class="row">  
    <div class="form-group col-sm-6">
        <label class="required" for="precoTotal">Preço Total</label>
        <input type="text" class="form-control" required value="{{ old('precoTotal', $compra->precoTotal) }}" name="precoTotal" id="preco">
    </div>
</div>

