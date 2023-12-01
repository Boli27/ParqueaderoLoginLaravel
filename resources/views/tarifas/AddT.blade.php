@extends('general')
@section('content')

<div class="container p-4">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body">
                <form action="{{ route('AddTarifas')}}" method="POST">

                    @csrf
                    @method('POST')
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
                    @if (session('danger'))
                    <div class="alert alert-danger alert-dismissible fade show">{{ session('danger') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
                    <p style="font-size:2rem; text-align:center;">Agregar Tarifa</p>
                    <div class="form-group">
                        <input type="text" name="tipo_vehiculo" class="form-control" placeholder="Tipo de Vehiculo" autofocus>
                    </div>
                    <div class="form-group">
                        <input type="text" name="precio_tarifa" class="form-control" placeholder="Tarifa Por Hora" autofocus>
                    </div>
                    <input type="submit" name="actualizar" class="btn btn-success btn-block" value="Agregar Tarifa">
                </form>
            </div>
        </div>
        <div class="col-md-8">
        
            <table class="table table-bordered">
                <thead >
                    <tr>
                        <th>Tipo Vehiculo</th>
                        <th>Tarifa Por Hora</th>
                        <th>Accion</th>
                    </tr>
                </thead>
                <tbody>
                        @foreach ($tarifas as $tarifa)
                        <tr>
                            <td>
                                {{$tarifa-> tipo_vehiculo}}
                            </td>
                            <td>
                                {{$tarifa->precio_tarifa}}
                            </td>
                            <td>
                            <a href="{{ route('ShowEditTarifas', ['id' => $tarifa->id])}}">
                                <button class="btn btn-secondary btn-sm"><i class="fa-solid fa-pen-to-square"></i>Editar</button> 
                            </a>
                            <form action="{{ route('Deletetarifa', ['id' => $tarifa->id])}}" method="POST">
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