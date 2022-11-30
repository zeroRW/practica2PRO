<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>DIARIO</title>
</head>
<body class="">

<style>
    body{
        background: #2193b0;  /* fallback for old browsers */
        background: -webkit-linear-gradient(to right, #6dd5ed, #2193b0);  /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to right, #6dd5ed, #2193b0); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    }
</style>

        <!--NAVBAR-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="/" style="color:black">Mi diario</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('apodoHome')? 'text-primary fw-bold':'' }}" aria-current="page" href="{{route('apodoHome')}}" style="color:black">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('recuerdo.create')? 'text-primary fw-bold':'' }}" href="{{route('recuerdo.create')}}" style="color:black">Registrar</a>
                </li>
                <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('recuerdos.index')? 'text-primary fw-bold':'' }}" href="{{route('recuerdos.index')}}" style="color:black">Consultar recuerdos</a>
                </li>
            </ul>
            </div>
        </div>
        </nav>

        <!--CONTENIDO-->

        @yield('contenido')

        <!-- PIE DE PAGINA-->
        <footer class="footer">
            <div class="alert alert-black d-flex justify-content-center flex-wrap " role="alert">
            Todos los derechos reservados Kapcheem Copyright ©      
            </div>
        </footer>
        
        
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>