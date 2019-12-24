@auth
@extends('layout')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-12 col-sm-10 col-lg-6 mx-auto">

      <form action="{{ route('ingresarevento') }}" method="post">
        @csrf
        <h1 class="display-4">Eventos</h1>
        <hr>
        <div class="form-group">
          <label>Actividad</label>
          <input type="text" class="form-control" name="actividad">
        </div>
        <div class="form-group">
          <label>Descripcion del Evento</label>
          <input type="text" class="form-control" name="descripcion">
        </div>
        <div class="form-group">
          <label>Día del evento</label>
          <input type="date" class="form-control" name="dia">
        </div>
        <div class="form-group">
          <label>Hora</label>
          <input type="time" class="form-control" name="hora">
        </div>
        <br>
        <input type="submit" class="btn btn-info" value="Guardar">
      </form>
    </div>
  </div>
  <hr>
  <div class="table-responsive">
    <table class="table" border="1">
      <thead>
        <tr>
          <th scope="col">Actividad</th>
          <th scope="col">Descripcion</th>
          <th scope="col">Hora</th>
          <th scope="col">Dia</th>
          <th scope="col">Eliminar</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($eventos as $item)
        <tr>
          <td>{{ $item ->actividad }}</td>
          <td>{{ $item ->descripcion }}</td>
          <td>{{ $item ->hora }}</td>
          <td>{{ $item ->dia }}</td>
          <td><a href="{{ route('eliminarevento',[$item->id]) }}"> Eliminar </a></td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>

@endsection

@endauth