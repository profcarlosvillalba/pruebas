@if ($errors->any())
    <div class="notice">Revisá los campos indicados antes de guardar.</div>
@endif
<div class="field">
    <label for="nombre">Nombre</label>
    <input id="nombre" name="nombre" value="{{ old('nombre', $cliente->nombre ?? '') }}">
    @error('nombre')<p class="error">{{ $message }}</p>@enderror
</div>
<div class="field">
    <label for="email">Correo electrónico</label>
    <input id="email" name="email" value="{{ old('email', $cliente->email ?? '') }}">
    @error('email')<p class="error">{{ $message }}</p>@enderror
</div>
<div class="actions">
    <button type="submit">Guardar cliente</button>
    <a class="button secondary" href="{{ route('clientes.index') }}">Volver al listado</a>
</div>
