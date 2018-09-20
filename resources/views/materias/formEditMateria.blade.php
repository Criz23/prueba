@extends('layouts.tema')

@section('contenido')
<div>
  <form action="/materia/update", method="POST">
    <label for="mateira">Materia:</label>
    <input type="text" name="materia">
    <input type="submit" name="Guardar">
  </form>
</div>
@endsection