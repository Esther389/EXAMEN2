
@extends('layouts.app')

@section('content')
<h1>Agregar Planta</h1>
<form action="{{ route('plantas.store') }}" method="POST">
    @csrf
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" required>
    
    <label for="altura">Altura:</label>
    <input type="text" name="altura" required>
    
    <label for="tipo">Tipo:</label>
    <input type="text" name="tipo" required>
    
    <label for="riego">Riego:</label>
    <input type="text" name="riego" required>
    
    <button type="submit">Agregar</button>
</form>
@endsection
