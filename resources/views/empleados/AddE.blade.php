@extends('general')
@section('content')

<div class="container p-4">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body">
                <form action="{{ route('AddEmpleado')}}" method="POST">

                    @csrf
                    @method('POST')
                    @error('nombre')
                    <div class="alert alert-danger alert-dismissible fade show">Campo "Nombre" es requerido
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @enderror
                    @error('contacto')
                    <div class="alert alert-danger alert-dismissible fade show">Campo "Contacto" es requerido
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @enderror
                    @error('sueldo')
                    <div class="alert alert-danger alert-dismissible fade show">Campo "Sueldo" es requerido
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @enderror
                    @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show">{{ session('success') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
                    @if (session('danger'))
                    <div class="alert alert-danger alert-dismissible fade show">{{ session('danger') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
                    <p style="font-size:2rem; text-align:center;">Agregar Empleado</p>
                    <div class="form-group">
                        <input type="text" name="nombre" class="form-control" placeholder="Nombre Empleado" autofocus>
                    </div>
                    <div class="form-group">
                        <input type="text" name="contacto" class="form-control" placeholder="Contacto del Empleado" autofocus>
                    </div>
                    <div class="form-group">
                        <input type="text" name="sueldo" class="form-control" placeholder="Sueldo del Empleado" autofocus>
                    </div>
                    <input type="submit" name="actualizar" class="btn btn-success btn-block" value="Agregar Empleado">
                </form>
            </div>
        </div>
        <div class="col-md-8">
        
            <table class="table table-bordered">
                <thead >
                    <tr>
                        <th>Nombre</th>
                        <th>Contacto</th>
                        <th>Sueldo</th>
                        <th>Accion</th>
                    </tr>
                </thead>
                <tbody>
                        @foreach ($empleados as $empleado)
                        <tr>
                            <td>
                                {{$empleado-> nombre}}
                            </td>
                            <td>
                                {{$empleado-> contacto}}
                            </td>
                            <td>
                                {{$empleado-> sueldo}}
                            </td>
                            <td>
                            <a href="{{ route('ShowEditEmpleado', ['id' => $empleado->id])}}">
                                <button class="btn btn-secondary btn-sm"><i class="fa-solid fa-pen-to-square"></i>Editar</button> 
                            </a>
                            <form action="{{ route('DeleteEmpleado', ['id' => $empleado->id])}}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-danger btn-sm"><i
                                        class="fa-solid fa-trash-can"></i>Eliminar</button>
                            </form>
                        </td>
                        </tr>
                        @endforeach
                </tbody>
            </table>
        </div>
    </div>
    
</div>

@endsection