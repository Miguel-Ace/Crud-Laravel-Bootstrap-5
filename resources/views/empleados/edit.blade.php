@extends('empleados.form')
@extends('layouts.app')

@section('content')

@section('formulario')
    <h1>Editar El Registro</h1>
    <form action="{{ url('/empleado/'.$empleado->id) }}" method="post" enctype="multipart/form-data" novalidate>
        @csrf
        {{ method_field('PATCH') }}
        
        <div class="mb-3">
            <label for="Nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" name="Nombre" id="Nombre" value="{{$empleado->Nombre}}">
        </div>
        
        <div class="mb-3">
            <label for="ApellidoPaterno" class="form-label">Apellido Paterno</label>
            <input type="text" class="form-control" name="ApellidoPaterno" id="ApellidoPaterno" value="{{$empleado->ApellidoPaterno}}">
        </div>
        
        <div class="mb-3">
            <label for="ApellidoMaterno" class="form-label">Apellido Materno</label>
            <input type="text" class="form-control" name="ApellidoMaterno" id="ApellidoMaterno" value="{{$empleado->ApellidoMaterno}}">
        </div>
        
        <div class="mb-3">
        <label for="Correo" class="form-label">Correo</label>
        <input type="email" class="form-control" name="Correo" id="Correo" aria-describedby="emailHelp" value="{{$empleado->Correo}}">
        </div>

        <div class="mb-3">
        <label for="Foto" class="form-label"></label>
        <h6>{{$empleado->Foto}}</h6>
        <img src="{{asset('storage').'/'.$empleado->Foto}}" width="100" alt="">
        <input class="form-control" type="file" name="Foto" id="Foto">
        </div>

        <button type="submit" class="btn btn-success btn-lg">Enviar Datos</button>
    </form>
@endsection
@endsection