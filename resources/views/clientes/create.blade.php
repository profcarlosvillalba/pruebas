@extends('layout')

@section('content')
    <h1>Nuevo cliente</h1>
    <p>Ingresá un nombre y un correo electrónico válido.</p>
    <form class="form" method="POST" action="{{ route('clientes.store') }}">
        @csrf
        @include('clientes._form')
    </form>
@endsection
