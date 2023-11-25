<!DOCTYPE html>
<html data-bs-theme="dark">

<head>
    <title>Login Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body class="d-flex align-items-center py-4 bg-body-tertiary">
    <div class="container col-md-3">
        <form action="{{route('login')}}" method="post">
            @csrf
            <h1 class="h3 mb-3 fw-normal">Ingreso al sistema</h1>
            @include('alertas.messages')
            <div class="form-floating">
                <input id="email" type="text" class="form-control" name="username" placeholder="mail@mail.com">
                <label for="email">Apodo/nickname o Correo</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                <label for="password">Contraseña</label>
            </div>

            <div class="text-center pt-1 mb-5 pb-1">
                <button class="btn btn-primary w-100 py-2" type="submit">Ingresar</button>
            </div>

            <div class="d-flex align-items-center justify-content-center pb-4">
                <p class="mb-0 me-2">No tienes cuenta?</p>
                <a href="{{route('register')}}" type="button" class="btn btn-outline-danger">Registrate</a>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>

</html>