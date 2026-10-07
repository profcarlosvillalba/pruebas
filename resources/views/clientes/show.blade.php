@extends('layout')

@section('content')
    <h1>Detalle del cliente</h1>
    <p>Información registrada en el sistema.</p>
    <div class="detail"><strong>NOMBRE</strong>{{ $cliente->nombre }}<strong>CORREO</strong>{{ $cliente->email }}</div>
    <div class="actions"><a class="button" href="{{ route('clientes.edit', $cliente) }}">Editar cliente</a><a class="button secondary" href="{{ route('clientes.index') }}">Volver al listado</a></div>
@endsection
