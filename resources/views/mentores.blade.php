@auth
@extends('layout')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12 col-sm-10 col-lg-6 mx-auto">
            <form action="{{ route('ingresarmentor') }}" method="post" enctype="multipart/form-data">
                @csrf
                <h1 class="display-4">Mentores</h1>
                <hr>
                <div class="form-group">
                    <label>Nombre</label>
                    <input type="text" class="form-control" name="nombre" required>
                </div>
                <div class="form-group">
                    <label>Especialidad</label>
                    <input type="text" class="form-control" name="especialidad" required>
                </div>
                <div class="form-group">
                    <label>Descripcion</label>
                    <input type="text" class="form-control" name="descripcion" required>
                </div>
                <div class="form-group">
                    <label>Facebook</label>
                    <input type="text" class="form-control" name="facebook">
                </div>
                <div class="form-group">
                    <label>Twitter</label>
                            <input type="text" class="form-control" name="twitter">
                </div>
                <div class="form-group">
                    <label>linkedin</label>
                            <input type="text" class="form-control" name="linkedin">
                </div>
                <div class="form-group">
                    <label>Instagram</label>
                            <input type="text" class="form-control" name="instagram">
                </div>
                <div class="form-group">
                    <label>Sitio Web</label>
                            <input type="text" class="form-control" name="sitioweb">
                </div>
                <div class="form-group">
                    <label>Email</label>
                            <input type="email" class="form-control" name="email" required>
                </div>
                <div class="form-group">
                    <label>Foto</label>
                    <input type="file" class="form-control" name="foto" required>
                </div>
                <br>
                <input type="submit" class="btn border-success" value="Guardar">
                <a href="{{ url('reportementor') }}" class="btn border-success "target="_blank">Generar Reporte</a>
            </form>
        </div>
    </div>
    <hr>
    <div class="table-responsive">
        <table class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Especialidad</th>
                    <th scope="col">Instagram</th>
                    <th scope="col">Facebook</th>
                    <th scope="col">Twitter</th>
                    <th scope="col">linkedin</th>
                    <th scope="col">Sitio Web</th>
                    <th scope="col">E-Mail</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Eliminar</th>
                    <th scope="col">Editar</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mentores as $item)
                <tr>
                    <td>{{ $item ->nombre }}</td>
                    <td>{{ $item ->descripcion }}</td>
                    <td>{{ $item ->especialidad }}</td>
                    <td>{{ $item ->instagram }}</td>
                    <td>{{ $item ->facebook }}</td>
                    <td>{{ $item ->twitter }}</td>
                    <td>{{ $item ->linkedin }}</td>
                    <td>{{ $item ->sitioweb }}</td>
                    <td>{{ $item ->email }}</td>
                    <td><img src="images/mentores/{{ $item ->foto }}" alt="" class="img-thumbnail" width="75"></td>
                    <td><a class="btn btn-danger btn-sm" href="{{ route('eliminarmentor',[$item->id]) }}"> Eliminar </a></td>
                    <td><a class="btn btn-primary btn-sm" href="{{ route('editarmentor',[$item->id] )}}"> Editar </a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
@endauth