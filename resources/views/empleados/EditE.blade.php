@extends('general')
@section('content')

<div class="container p-4">
    <div class="col" >
        <div class="col-md-4 mx-auto">
            <div class="card card-body">
                <form action="{{ route('EditEmpleado',['id'=>$empleado->id])}}" method="POST">

                    @csrf
                    @method('PATCH')
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
                    <p style="font-size:2rem; text-align:center;">Editar Empleado</p>
                    <div class="form-group">
                        <input type="text" name="nombre" class="form-control" placeholder="Nombre" autofocus
                        value="{{$empleado->nombre}}">
                    </div>
                    <div class="form-group">
                        <input type="text" name="contacto" class="form-control" placeholder="Contacto" autofocus
                        value="{{$empleado->contacto}}">
                    </div>
                    <div class="form-group">
                        <input type="text" name="sueldo" class="form-control" placeholder="Sueldo" autofocus
                        value="{{$empleado->sueldo}}">
                    </div>
                    <input type="submit" name="actualizar" class="btn btn-success btn-block" value="Editar Empleado">
                </form>
            </div>
        </div>
    </div>
    
</div>

@endsection