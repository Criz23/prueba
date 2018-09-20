@extends('layouts.tema')

@section('contenido')
<div class="row">
  <div class="col-md-6">
    <div class="tile">
      <h3 class="tile-title">Registro Materia</h3>
      <div class="tile-body">
        <form  action="{{ route('materia.store') }}" method="POST">
          {{ csrf_field() }}
          <div class="form-group">
            <label class="control-label" for="nombre_materia">Nombre Materia</label>
            <input class="form-control" type="text" name="nombre_materia" placeholder="Escribe el nombre de la materia">
          </div>
          <div class="form-group">
            <label class="control-label" for="crn">CRN</label>
            <input class="form-control" type="text" name="crn" placeholder="Escribe el CRN de la materia">
          </div>
          <div class="form-group">
            <label class="control-label" for="seccion">Sección</label>
            <input class="form-control" type="text" name="seccion" placeholder="Escribe la sección de la materia">
          </div>
          <div class="form-group">
            <label class="control-label" for="horario">Horario</label>
            <input class="form-control" type="time" name="horario" placeholder="Escribe el horario de la materia">
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