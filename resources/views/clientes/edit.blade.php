@extends('layout')

@section('content')
    <h1>Editar cliente</h1>
    <p>Modificá los datos y guardá los cambios.</p>
    <form class="form" method="POST" action="{{ route('clientes.update', $cliente) }}">
        @csrf
        @method('PUT')
        @include('clientes._form')
    </form>
@endsection
