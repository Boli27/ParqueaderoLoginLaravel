<!-- header y head por defecto que usare en varias ventanas, sin necesidad de repetir donde se use, solo llamandolo -->

@auth
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Parqueadero el Candado</title>
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <!-- BOOTSTRAP 4 -->
    <link rel="stylesheet" href="https://bootswatch.com/4/yeti/bootstrap.min.css">
    <!-- FONT AWESOEM -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.4.2/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: sans-serif;

        }

        .color-container {
            width: 16px;
            height: 16px;
            display: inline-block;
            border-radius: 4px;
        }

        a {
            text-decoration: none;
            color: black;
        }
        
    </style>

</head>

<body>


    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Menu |</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation" >
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('Addvehiculos')}}">Crud Vehiculos <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link " href="{{route('ShowAddTarifas')}}">Crud Tarifas</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link " href="{{route('ShowAddEmpleado')}}">Crud Empleados</a>
                </li>
                <li class="nav-item dropdown active ml-auto">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        {{auth()->user()->username}}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="{{route('Logout')}}">Cerrar Sesion</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    @yield('content')

    <!-- footer por defecto que usare en varias ventanas, sin necesidad de repetir donde se use, solo llamandolo -->

    <!-- BOOTSTRAP 4 SCRIPTS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
        integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
        integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
        crossorigin="anonymous"></script>

    <!-- font awesome script, para usar algunos iconos   -->
    <script src="https://kit.fontawesome.com/947dbb31fd.js" crossorigin="anonymous"></script>
</body>

</html>
@endauth



@guest
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Parqueadero el Candado</title>
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <!-- BOOTSTRAP 4 -->
    <link rel="stylesheet" href="https://bootswatch.com/4/yeti/bootstrap.min.css">
    <!-- FONT AWESOEM -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.4.2/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: sans-serif;

        }

        .color-container {
            width: 16px;
            height: 16px;
            display: inline-block;
            border-radius: 4px;
        }

        a {
            text-decoration: none;
        }
    </style>

</head>

<body>
    <main class="container p-4">
        <div class="row">
            <div class="col-md-12">
                <h1>Para realizar esta accion necesita inicia sesion
                    <a href="{{route('login')}}" type="button" class="btn btn-outline-primary">Regresar a login</a>
                </h1>
            </div>
        </div>
    </main>

    <!-- footer por defecto que usare en varias ventanas, sin necesidad de repetir donde se use, solo llamandolo -->

    <!-- BOOTSTRAP 4 SCRIPTS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
        integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
        integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
        crossorigin="anonymous"></script>

    <!-- font awesome script, para usar algunos iconos   -->
    <script src="https://kit.fontawesome.com/947dbb31fd.js" crossorigin="anonymous"></script>
</body>

</html>

@endguest