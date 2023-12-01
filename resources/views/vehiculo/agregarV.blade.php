
@extends('general')

@section('content')

<main class="container p-4">
    <div class="row">
        <div class="col-md-4">
            <div class="card card-body">
                <form method="POST" action="{{route('Addvehiculos')}}">
                    @csrf

                    @error('marca')
                    <div class="alert alert-danger alert-dismissible fade show">Campo "Marca" es requerido
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @enderror
                    @error('color')
                    <div class="alert alert-danger alert-dismissible fade show">Campo "Color" es requerido
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @enderror
                    @error('placa')
                    <div class="alert alert-danger alert-dismissible fade show">Campo "Placa" es requerido
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
                    <p style="font-size:2rem; text-align:center;">Agregar Vehiculo</p>

                    <div class="form-group">
                        <label for="tipo_vehiculo" style="font-size:1rem;">Tipo de vehiculo</label>
                        <select name="tipo_vehiculo" class="form-control" autofocus>
                        @foreach ($tipo_vehiculo_dist as $diponible)
                                <option value="{{$diponible->tipo_vehiculo}}">{{$diponible->tipo_vehiculo}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" name="marca" class="form-control" placeholder="Marca" autofocus>
                    </div>
                    <div class="form-group">
                        <input type="text" name="placa" class="form-control" placeholder="Placa" autofocus>
                    </div>
                    <div class="form-group">
                        <input type="text" name="color" class="form-control" placeholder="Color" autofocus>
                    </div>
                    <input type="submit" name="AgregarVehiculo" class="btn btn-success btn-block"
                        value="Agregar Vehiculo">
                </form>
            </div>
        </div>

        <!-- tabla de vehiculos agregados -->

        <div class="col-md-8">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Vehiculo</th>
                        <th>Marca</th>
                        <th>Placa</th>
                        <th>Color</th>
                        <th>Fecha Ingreso</th>
                        <th>Accion</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($vehiculos as $vehiculo)
                    <tr>
                        <td>
                            {{$vehiculo->tipo_vehiculo}}
                        </td>
                        <td>
                            {{$vehiculo->marca}}
                        </td>
                        <td>
                            {{$vehiculo->placa}}
                        </td>
                        <td>
                            {{$vehiculo->color}}
                        </td>
                        <td>
                            {{$vehiculo->fecha_ingreso}}
                        </td>
                        <!-- botones donde llamamos a nuestras funcionalidades -->
                        <td>
                            <form action="{{ route('GenerateComprobante', ['id' => $vehiculo->id]) }}" method="POST">
                                @csrf
                                <button class="btn btn-secondary btn-sm"><i class="fas fa-receipt"></i>Generar
                                    Comprobante</button>
                            </form>
                            <form action="{{ route('ShowComprobante', ['id' => $vehiculo->id]) }}" method="GET">
                                @csrf
                                <button class="btn btn-secondary btn-sm"><i class="fa-solid fa-eye"></i>Ver
                                    Comprobante</button>
                            </form>
                            <a href="{{ route('ShowEditvehiculos', ['id' => $vehiculo->id]) }}">
                                <button class="btn btn-secondary btn-sm"><i class="fa-solid fa-pen-to-square"></i>Editar</button> 
                            </a>
                            <form action="{{ route('Deletevehiculo', ['id' => $vehiculo->id]) }}" method="POST">
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
</main>
@endsection


