<div class="row">
        <div class="col-md-6 col-12">
            <label class="required">Cliente</label>
            <select class="form-control select2" name="cliente_id" value="{{ old('cliente_id', $venda->cliente_id) }}" required>
                <option></option>
                @foreach ($clientes as $cliente)
                    <option value="{{ $cliente->id }}">{{ $cliente->name }}</option>
                @endforeach
            </select>
        </div>
    <div class="form-group col-sm-6">
        <label class="required" for="qntdProdVenda">Quantidade de produtos</label>
        <input type="number" class="form-control" required value="{{ old('qntdProdVenda', $venda->qntdProdVenda) }}" name="qntdProdVenda" id="qntdProdVenda">
    </div>
</div>
<hr>
<div class="row">  
    <div class="form-group col-sm-6">
        <label class="required" for="precoTotal">Preço Total</label>
        <input type="text" class="form-control" required value="{{ old('precoTotal', $venda->precoTotal) }}" name="precoTotal" id="precoTotal">
    </div>
</div>

