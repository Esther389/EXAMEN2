@extends('layouts.app')

@section('content')
<h1>Plantas</h1>
<a href="{{ route('plantas.create') }}">Agregar Planta</a>
<table>
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Altura</th>
            <th>Tipo</th>
            <th>Riego</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($plantas as $planta)
            <tr>
                <td>{{ $planta->nombre }}</td>
                <td>{{ $planta->altura }}</td>
                <td>{{ $planta->tipo }}</td>
                <td>{{ $planta->riego }}</td>
                <td>
                    <a href="{{ route('plantas.edit', $planta->id) }}">Editar</a>
                    <form action="{{ route('plantas.destroy', $planta->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
