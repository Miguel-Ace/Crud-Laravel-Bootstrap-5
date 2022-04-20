
@extends('layouts.app')

@section('content')

<div class="container m-2">
  <a href="{{url('empleado/create')}}" class="btn btn-outline-primary">Registrar Nuevo Empleado</a>
</div>


  <div class="row">
    <div class="col col-md-10 offset-md-1">
      @if(Session::has('success'))
      <div class="alert alert-success" role="alert">
        {{Session::get('success')}}
      </div>
      @endif
      
      @if(Session::has('danger'))
      <div class="alert alert-danger" role="alert">
        {{Session::get('danger')}}
      </div>
      @endif
      
      @if(Session::has('info'))
      <div class="alert alert-info" role="alert">
        {{Session::get('info')}}
      </div>
      @endif
    </div>
  </div>



    <div class="row">
        <div class="col col-md-10 offset-md-1">

            <table class="table table-dark table-hover">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido Paterno</th>
                    <th scope="col">Apellido Materno</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Acciones</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($empleados as $empleado)
                    <tr>
                      <th scope="row">{{$empleado->id}}</th>
                      <td>
                          <img src="{{asset('storage').'/'.$empleado->Foto}}" width="100" alt="">
                      </td>
                      <td>{{$empleado->Nombre}}</td>
                      <td>{{$empleado->ApellidoPaterno}}</td>
                      <td>{{$empleado->ApellidoMaterno}}</td>
                      <td>{{$empleado->Correo}}</td>
                      <td>

                        <a href="{{url('/empleado/'.$empleado->id.'/edit')}}" class="btn btn-outline-primary">
                            Editar
                        </a>
                        ||
                        <form action="{{url('/empleado/'.$empleado->id)}}" method="post" class="d-inline">
                            @csrf

                            {{method_field('DELETE')}}
                            <button type="submit" onclick="return confirm('¿Quieres Borrar?')" class="btn btn-outline-danger">Borrar</button>
                        </form>

                      </td>
                    </tr>
                    @endforeach
                </tbody>
              </table>

        </div>
    </div>
@endsection