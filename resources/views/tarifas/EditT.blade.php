@extends('general')
@section('content')

<div class="container p-4">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body">
                <form action="{{ route('EditTarifas')}}" method="POST">

                    @csrf
                    @method('PATCH')

                    <div class="form-group">
                    <label  style="font-size:1rem;">Tipo de vehiculo</label>
                        <select name="tipo_vehiculo" class="form-control"  autofocus>
                            <option value="carro">Carro</option>
                            <option value="moto">Moto</option>
                            <option value="camion">Camion</option>
                        </select>         
                    </div>
                    <div class="form-group">
                        <input type="text" name="tarifa" class="form-control" placeholder="Tarifa Por Hora" autofocus>
                    </div>
                    <input type="submit" name="actualizar" class="btn btn-success btn-block" value="Editar Tarifa">
                </form>
            </div>
        </div>
        <div class="col-md-8">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Tipo Vehiculo</th>
                        <th>Tarifa Por Hora</th>

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
                        </tr>
                        @endforeach
                </tbody>
            </table>
        </div>
    </div>
    
</div>

@endsection