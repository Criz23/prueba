@extends('layouts.tema')

@section('contenido')
<div>
  <!--<h1>
    Listado de Materias 
  </h1>
  
  <a href="{{ action('MateriaController@create') }}" class="btn-success">Nueva Materia</a>-->
  @if($materias->count() == 0)
  <div class="alert alert-warning">
    No tienes materias registradas
  </div>
  @else
  <div class="col-md-12">
    <div class="tile">
      <h3 class="tile-title">Listado de Materias</h3>
      <table class="table table-sm">
        <thead>
          <tr>
            <th>Id</th>
            <th>Materia</th>
            <th>CNR</th>
            <th>Sección</th>
            <th>Horario</th>
            <th>Fecha de Creación</th>
            <th>Ultima Actualización</th>
          </tr>
        </thead>
        <tbody>
          @foreach($materias as $materia)
        <tr>
          <td>{{ $materia->id }}</td>
          <td>{{ $materia->nombre_materia }}</td>
          <td>{{ $materia->crn }}</td>
          <td>{{ $materia->seccion }}</td>
          <td>{{ $materia->horario }}</td>
          <td>{{ $materia->created_at }}</td>
          <td>{{ $materia->updated_at }}</td>
        </tr>
        @endforeach
        </tbody>
      </table>
    </div>
  </div>
  @endif
</div>
@endsection