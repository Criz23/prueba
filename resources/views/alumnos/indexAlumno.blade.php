@extends('layouts.tema')

@section('contenido')
<div>
  @if($alumnos->count() == 0)
  <div class="alert alert-warning">
    No tienes alumnos registrados
  </div>
  @else
  <div class="col-md-12">
    <div class="tile">
      <h3 class="tile-title">Listado de Alumnos</h3>
      <table class="table table-sm">
        <thead>
          <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Codigo</th>
            <th>Carrera</th>
            <th>Fecha de Creación</th>
            <th>Ultima Actualización</th>
          </tr>
        </thead>
        <tbody>
          @foreach($alumnos as $alumno)
        <tr>
          <td>{{ $alumno->id }}</td>
          <td>{{ $alumno->nombre_alumno }}</td>
          <td>{{ $alumno->codigo }}</td>
          <td>{{ $alumno->carrera }}</td>
          <td>{{ $alumno->created_at }}</td>
          <td>{{ $alumno->updated_at }}</td>
        @endforeach
        </tbody>
      </table>
    </div>
  </div>
  @endif
</div>
@endsection