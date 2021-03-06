@auth
@extends('layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-10 col-lg-6 mx-auto">

            <form action="{{ route('ingresarsponsor') }}" method="post" enctype="multipart/form-data">
                @csrf
                <h1 class="display-4">Sponsores</h1>
                <hr>
                <div class="form-group">
                    <label>Nivel</label>
                    {{--         <input type="text" class="form-control" name="nivel"> --}}

                    <select name="nivel" class="form-control" required>
                        <option>Seleccione un nivel</option>
                        <option value="gold">GOLD</option>
                        <option value="silver">SILVER</option>
                    </select>

                </div>
                <div class="form-group">
                    <label>Sitio Web</label>
                    <input type="text" class="form-control" name="sitioweb" required>
                </div>
                <div class="form-group">
                    <label>Foto</label>
                    <input type="file" class="form-control" name="imagen" required>
                </div>
                <br>
                <input type="submit" class="btn border-success" value="Guardar">
            </form>
        </div>
    </div>
    <hr>
    <div class="table-responsive">
        <table class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th scope="col">Nivel</th>
                    <th scope="col">Sitio Web</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Eliminar</th>
                    <th scope="col">Editar</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($sponsores as $item)
                <tr>
                    <td>{{ $item ->nivel }}</td>
                    <td>{{ $item ->sitioweb }}</td>
                    <td><img src="images/sponsores/{{ $item ->imagen }}" alt="" class="img-thumbnail" width="100"></td>
                    <td><a class="btn btn-danger btn-sm" href="{{ route('eliminarsponsor',[$item->id]) }}"> Eliminar </a></td>
                    <td><a class="btn btn-primary btn-sm" href="{{ route('editarsponsor',[$item->id]) }}"> Editar </a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
@endauth