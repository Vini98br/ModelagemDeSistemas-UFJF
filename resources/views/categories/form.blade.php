<div class="row">
    <div class="form-group col-sm-12">
        <label class="required" >Nome</label>
        <input type="text" class="form-control" required value="{{ old('name', $category->name) }}" name="name">
    </div>
    <div class="form-group col-sm-12">
            <label class="required">Descrição do Cargo</label>
            <textarea name="description" class="form-control" required id="description" rows="5">{{ old('description',$category->description) }}</textarea>        
    </div>
</div>