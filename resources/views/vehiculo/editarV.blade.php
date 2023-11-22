@extends('general')
@section('content')
<div class="container p-4">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body">
                <form action="{{route('Updatevehiculos',['id'=>$vehiculo->id])}}" method="POST">
                    @method('PATCH')
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
                    <div class="form-group">
                        <label style="font-size:1rem;">Marca</label>
                        <input type="text" name="marca" class="form-control" placeholder="Marca"
                            value="{{$vehiculo->marca}}" autofocus>
                    </div>
                    <div class="form-group">
                        <label style="font-size:1rem;">Placa</label>
                        <input type="text" name="placa" class="form-control" placeholder="Placa"
                            value="{{$vehiculo->placa}}" autofocus>
                    </div>
                    <div class="form-group">
                        <label style="font-size:1rem;">Color</label>
                        <input type="text" name="color" class="form-control" placeholder="Color"
                            value="{{$vehiculo->color}}" autofocus>
                    </div>
                    <input type="submit" name="actualizar" class="btn btn-success btn-block" value="Editar Vehiculo">
                </form>
            </div>
        </div>
    </div>
</div>
@endsection