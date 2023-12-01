@extends('general')
@section('content')

<div class="container p-4">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body">
                <form action="" method="GET">
                    <div class="form-group">
                        <label for="">Marca: <span>
                                {{$datosComprobante->marca}}
                            </span>
                        </label>
                    </div>
                    <div class="form-group">
                        <label for="">Placa: <span>
                                {{$datosComprobante->placa}}
                            </span>
                        </label>
                    </div>
                    <div class="form-group">
                        <label for="">Color: <span>
                                {{$datosComprobante->color}}
                            </span></label>
                    </div>
                    <div class="form-group">
                        <label for="">Tipo Vehiculo: <span>
                                {{$datosComprobante->tipo_vehiculo}}
                            </span></label>
                    </div>
                    <div class="form-group">
                        <label for="">Fecha Ingreso: <span>
                                {{$datosComprobante->fecha_ingreso}}
                            </span>
                        </label>
                    </div>
                    <div class="form-group">
                        <label for="">Fecha Salida: <span>
                                {{$datosComprobante->fecha_salida}}
                            </span>
                        </label>
                    </div>
                    <div class="form-group">
                        <label for="">Valor A Pagar: <span>
                                {{$datosComprobante->valor_pagar}}
                            </span>
                        </label>
                    </div>
                </form>
            </div>
            <a href="{{route('Addvehiculos')}}" style="text-decoration: none;">
                <button name="agregarvehiculo" class="btn btn-success btn-block" value="Crud vehiculo" style="margin-top:2rem;">Crud Vehiculo

                </button>
            </a>
        </div>
    </div>
</div>

@endsection