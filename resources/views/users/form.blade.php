<div class="row">
    <div class="form-group col-sm-6">
        <label class="required" for="username">Username</label>
        <input type="text" class="form-control" required value="{{ old('username', $user->username) }}" name="username" id="nome">
    </div>
    <div class="form-group col-sm-6">
        <label class="required" for="email">E-mail</label>
        <input type="email" class="form-control" required value="{{ old('email', $user->email) }}" name="email" id="mail">
    </div>
</div>
<div class="row">  
    <div class="col-md-6 col-12">
        <label class="required">Cargo</label>
        <select class="form-control select2" name="role_id" value="{{ old('role_id', $user->role_id) }}" required>
            <option></option>
            @foreach ($roles as $role)
                <option value="{{ $role->id }}">{{ $role->name }}</option>
            @endforeach
        </select>
    </div>
</div>
<hr>
<div class="row">
    @if($edit ?? false)
        <div class="form-group col-6">
            <label for="password">Senha</label>
            <input autocomplete="new-password" type="password" class="form-control" name="password" id="password">
        </div>
        <div class="form-group col-6">
            <label for="password">Confirme sua senha</label>
            <input autocomplete="new-password" type="password" class="form-control" name="password_confirmation" id="password">
        </div>
    @else
        <div class="form-group col-6">
            <label class="required" for="password">Senha</label>
            <input autocomplete="new-password" type="password" class="form-control" name="password" id="password" required>
        </div>
        <div class="form-group col-6">
            <label class="required" for="password">Confirme sua senha</label>
            <input autocomplete="new-password" type="password" class="form-control" name="password_confirmation" id="password" required>
        </div>
    @endif
</div>
