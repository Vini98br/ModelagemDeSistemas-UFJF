<div class="row">
    <div class="form-group col-sm-6">
        <label class="required" for="nome">Nome</label>
        <input type="text" class="form-control" required value="{{ old('name', $role->name) }}" name="name" id="nome">
    </div>
    <div class="form-group col-sm-12">
        <label class="required">Descrição do Cargo</label>
        <textarea name="description" class="form-control" required id="description" rows="5">{{ old('description',$role->description) }}</textarea>        
    </div>
</div>