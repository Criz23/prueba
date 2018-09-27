@extends('layouts.tema')

@section('contenido')
<div class="row">
  <div class="col-md-6">
    <div class="tile">
      <h3 class="tile-title">Registro Alumno</h3>
      <div class="tile-body">
        <form  action="{{ route('alumno.store') }}" method="POST">
          {{ csrf_field() }}
          <div class="form-group">
            <label class="control-label" for="nombre_alumno">Nombre Alumno</label>
            <input class="form-control" type="text" name="nombre_alumno" placeholder="Escribe el nombre del alumno">
          </div>
          <div class="form-group">
            <label class="control-label" for="codigo">Codigo</label>
            <input class="form-control" type="text" name="codigo" placeholder="Escribe el codigo del alumno">
          </div>
          <div class="form-group">
            <label class="control-label" for="carrera">Carrera</label>
            <input class="form-control" type="text" name="carrera" placeholder="Escribe la carrera del alumno">
          </div>
          <div>
            <input class="btn btn-primary" type="submit" name="Registrar" value="Registrar">
          </div>
        </form>
      <!--</div>
      <div class="tile-footer">
        <button class="btn btn-primary" type="button"><i class="fa fa-fw fa-lg fa-check-circle"></i>Registrar</button>
      </div>-->
    </div>
  </div>
</div>
@endsection