@extends('general')
@section('content')

<div class="container p-4">
    <div class="col" >
        <div class="col-md-4 mx-auto">
            <div class="card card-body">
                <form action="{{ route('EditTarifas',['id'=>$tarifa->id])}}" method="POST">

                    @csrf
                    @method('PATCH')
                    @error('precio_tarifa')
                    <div class="alert alert-danger alert-dismissible fade show">Campo "Tarifa Por hora" es requerido
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @enderror
                    @error('tipo_vehiculo')
                    <div class="alert alert-danger alert-dismissible fade show">Campo "Tipo Vehiculo" es requerido
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
                    
                    <p style="font-size:2rem; text-align:center;">Agregar Tarifa</p>
                    <div class="form-group">
                        <input type="text" name="tipo_vehiculo" class="form-control" placeholder="Tipo de Vehiculo" autofocus
                        value="{{$tarifa->tipo_vehiculo}}">
                    </div>
                    <div class="form-group">
                        <input type="text" name="precio_tarifa" class="form-control" placeholder="Tarifa Por Hora" autofocus
                        value="{{$tarifa->precio_tarifa}}">
                    </div>
                    <input type="submit" name="actualizar" class="btn btn-success btn-block" value="Editar Tarifa">
                </form>
            </div>
        </div>
    </div>
    
</div>

@endsection