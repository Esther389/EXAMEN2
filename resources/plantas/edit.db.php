@extends('layouts.app')

@section('content')
<h1>Editar Planta</h1>
<form action="{{ route('plantas.update', $planta->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" value="{{ $planta->nombre }}" required>
    
    <label for="altura">Altura:</label>
    <input type="text" name="altura" value="{{ $planta->altura }}" required>
    
    <label for="tipo">Tipo:</label>
    <input type="text" name="tipo" value="{{ $planta->tipo }}" required>
    
    <label for="riego">Riego:</label>
    <input type="text" name="riego" value="{{ $planta->riego }}" required>
    
    <button type="submit">Actualizar</button>
</form>
@endsection
