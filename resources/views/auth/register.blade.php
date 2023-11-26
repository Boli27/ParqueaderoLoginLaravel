<!DOCTYPE html>
<html data-bs-theme="dark">
<head>
    <title>Register El candado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/estilo.css') }}">
</head>
<body class="d-flex align-items-center py-4 bg-body-secondary">
<div class="container col-md-3" style="margin-top:3rem;">
@include('alertas.messages')

    <h1 class="h3 mb-3 fw-normal" style="text-align:center;">Registro de admin a Parqueadero El candado</h1>
    <form action="{{route('register')}}" method="POST">
        @csrf
        <!--campo de name-->
        <div class="form-floating">
            <input type="text" class="form-control" id="floatingName" name="name" placeholder="Nombre de usuario">
            <label for="floatingName">Nombre</label>
        </div>    

        <!--campo de nombre de username-->
        <div class="form-floating">
            <input type="text" class="form-control" id="floatingName" name="username" placeholder="Nombre de usuario">
            <label for="floatingName">Apodo/Nickname</label>
        </div>  

        <!--campo de correo electrónico-->
        <div class="form-floating">
            <input type="email" class="form-control @error('email') is-invalid @enderror" id="floatingInput" name=email placeholder="name@example.com">
            <label for="floatingInput">Correo</label>
            
                    <span class="invalid-feedback" role="alert">
                        <strong></strong>
                    </span>
                
        </div>
        <!--campo de contraseña-->
        <div class="form-floating">
            <input type="password" class="form-control @error('password') is-invalid @enderror" id="floatingPassword" name="password" required placeholder="Password">
            <label for="floatingPassword">Contraseña</label>
            
                    <span class="invalid-feedback" role="alert">
                        <strong></strong>
                    </span>
                
            
        </div>
        <!--campo de confirmacion-->
        <div class="form-floating">
            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required placeholder="Password">
            <label for="password-confirm">Confirmar Contraseña</label>
            
                    <span class="invalid-feedback" role="alert">
                        <strong></strong>
                    </span>
                
        </div>
        <!--botones-->
        <div class="row mb-0">
            <div class="col-md-10">
                <button type="submit" class="btn btn-primary">
                    Registrarse
                </button>
                <a href="{{route('login')}}" type="button" class="btn btn-outline-warning">Regresar a login</a>
            </div>
        </div>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
