@extends('layout')

@section('content')
    <h1>Listado de clientes</h1>
    <p>Consultá, registrá y actualizá los datos de tus clientes.</p>
    <div class="actions"><a class="button" href="{{ route('clientes.create') }}">+ Nuevo cliente</a></div>
    <table>
        <thead><tr><th>ID</th><th>NOMBRE</th><th>CORREO</th><th>ACCIONES</th></tr></thead>
        <tbody>
            @forelse ($clientes as $cliente)
                <tr>
                    <td>{{ $cliente->id }}</td>
                    <td>{{ $cliente->nombre }}</td>
                    <td>{{ $cliente->email }}</td>
                    <td class="row-actions">
                        <a href="{{ route('clientes.show', $cliente) }}">Ver</a>
                        <a href="{{ route('clientes.edit', $cliente) }}">Editar</a>
                        <form method="POST" action="{{ route('clientes.destroy', $cliente) }}">
                            @csrf
                            @method('DELETE')
                            <button class="danger small" type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr><td colspan="4">Todavía no hay clientes registrados.</td></tr>
            @endforelse
        </tbody>
    </table>
@endsection
