@extends('empleados.form')
@extends('layouts.app')

@section('content')

<div class="container m-2">
    <a href="{{url('/empleado')}}" class="btn btn-outline-primary">Volver</a>
</div>

@section('formulario')
    <h1>Crear Nuevo Registro</h1>
    <form action="{{url('/empleado')}}" method="post" enctype="multipart/form-data" novalidate>
        @csrf
        
        <div class="mb-3">
            <label for="Nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control @error('Nombre') is-invalid @enderror" name="Nombre" id="Nombre" value="{{old('Nombre')}}">
            @error('Nombre')
                <small class="invalid-feedback">
                    <strong >
                        {{$message}}
                    </strong>
                </small>
            @enderror
        </div>
        
        <div class="mb-3">
            <label for="ApellidoPaterno" class="form-label">Apellido Paterno</label>
            <input type="text" class="form-control @error('ApellidoPaterno') is-invalid @enderror" name="ApellidoPaterno" id="ApellidoPaterno" value="{{old('ApellidoPaterno')}}">
            @error('ApellidoPaterno')
                <small class="invalid-feedback">
                    <strong >
                        {{$message}}
                    </strong>
                </small>
            @enderror
        </div>
        
        <div class="mb-3">
            <label for="ApellidoMaterno" class="form-label">Apellido Materno</label>
            <input type="text" class="form-control @error('ApellidoMaterno') is-invalid @enderror" name="ApellidoMaterno" id="ApellidoMaterno" value="{{old('ApellidoMaterno')}}">
            @error('ApellidoMaterno')
                <small class="invalid-feedback">
                    <strong >
                        {{$message}}
                    </strong>
                </small>
            @enderror
        </div>
        
        <div class="mb-3">
        <label for="Correo" class="form-label">Correo</label>
        <input type="email" class="form-control @error('Correo') is-invalid @enderror" name="Correo" id="Correo" aria-describedby="emailHelp" value="{{old('Correo')}}">
            @error('Correo')
                <small class="invalid-feedback">
                    <strong >
                        {{$message}}
                    </strong>
                </small>
            @enderror
        </div>

        <div class="mb-3">
        <label for="Foto" class="form-label">Foto</label>
        <input class="form-control @error('Foto') is-invalid @enderror" type="file" name="Foto" id="Foto">
            @error('Foto')
                <small class="invalid-feedback">
                    <strong >
                        {{$message}}
                    </strong>
                </small>
            @enderror
        </div>

        <button type="submit" class="btn btn-success btn-lg">Enviar Datos</button>
    </form>
@endsection
@endsection