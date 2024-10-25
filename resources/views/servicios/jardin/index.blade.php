
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold text-xl text-gray-800 leading-tight d-flex justify-content-center">
            {{ __('Servicios de Jardín') }}
        </h1>
    </x-slot>

    <style>
        .carousel-item img {
            max-height: 500px; 
            object-fit: cover; 
            width: 100%; 
        }

        .carousel-inner {
            height: 500px; 
        }

        .carousel-indicators button {
            background-color: #333; 
        }

        .carousel-caption {
            background-color: rgb(252, 252, 252); 
            padding: 10px;
        }

        .card-img-top {
            width: 100%;
            height: 100%;
        }

        .custom-tittle{
            font-size: 2rem; 
            font-weight: bold; 
        }
    </style>

<div class="container mt-5">
    <h1 class="text-center mb-4 custom-tittle">Nuestros Jardines</h1>
    <div class="row">
        <!-- Jardín Divertido -->
        <div class="col-md-4">
            <div class="card" style="width: 100%;">
                <img src="{{ asset('img/jardin_divertido.jpg') }}" class="card-img-top" alt="Jardín Divertido" style="height: 200px; object-fit: cover;">
                <div class="card-body">
                    <div class="d-flex justify-content-center">
                        <h5 class="card-title">Jardín Divertido</h5>
                    </div>
                    <div class="d-flex justify-content-center">
                        <p class="card-text">Un espacio lleno de juegos y actividades para que tus mascotas se diviertan al máximo.</p>
                    </div>
                    <br>
                    <div class="d-flex justify-content-center">
                        <a href="#jardin-divertido" class="btn btn-warning">Ver Más</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Jardín Aventurero -->
        <div class="col-md-4">
            <div class="card" style="width: 100%;">
                <img src="{{ asset('img/jardin_aventura.jpg') }}" class="card-img-topp" alt="Jardín Aventurero" style="height: 200px; object-fit: cover;">
                <div class="card-body">
                    <div class="d-flex justify-content-center">
                        <h5 class="card-title">Jardín Aventurero</h5>
                    </div>
                    <div class="d-flex justify-content-center">
                        <p class="card-text">Ideal para mascotas que aman explorar y vivir nuevas aventuras en un entorno seguro.</p>
                    </div>
                    <br>
                    <div class="d-flex justify-content-center">
                        <a href="#jardin-aventurero" class="btn btn-warning">Ver Más</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Jardín Relajante -->
        <div class="col-md-4">
            <div class="card" style="width: 100%;">
                <img src="{{ asset('img/jardin_relajante.jpg') }}" class="card-img-top" alt="Jardín Relajante" style="height: 200px; object-fit: cover;">
                <div class="card-body">
                    <div class="d-flex justify-content-center">
                        <h5 class="card-title">Jardín Relajante</h5>
                    </div>
                    <div class="d-flex justify-content-center">
                        <p class="card-text">Un lugar tranquilo y pacífico donde tu mascota puede relajarse y disfrutar del aire libre.</p>
                    </div>
                    <br>
                    <div class="d-flex justify-content-center">
                        <a href="#jardin-relajante" class="btn btn-warning">Ver Más</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- SECCION 2 - DESCRIPCION -->

<div class="container mt-5">
    <h1 class="text-center mb-4 custom-tittle">Descripción de Servicios</h1> 

    <div id="jardin-aventurero" class="row align-items-center mb-5">
        <!-- Imagen del Servicio -->
        <div class="col-md-4">
            <img src="{{ asset('img/jardin_aventura2.jpg') }}" alt="Servicio de Jardín Aventurero" class="img-fluid rounded">
        </div>
        <!-- Descripción del Servicio -->
        <div class="col-md-8">
            <h2>Jardín Aventurero</h2>
            <p>El Jardín Aventurero es ideal para mascotas que aman explorar y vivir nuevas aventuras en un entorno seguro. En este espacio, tu mascota podrá disfrutar de senderos, obstáculos, y áreas de exploración diseñadas especialmente para estimular su curiosidad y mantenerlo activo.</p>
            <p><strong>Incluye:</strong> Senderos de aventura, obstáculos para saltar, áreas de exploración.</p>
            <p><strong>Precio:</strong> $100.000</p>
            <br>
            <button class="btn btn-warning" onclick="alert('Servicio obtenido: Jardín Aventurero')">Obtener</button>
        </div>
    </div>

    <div id="jardin-divertido" class="row align-items-center mb-5">
        <!-- Imagen del Servicio -->
        <div class="col-md-4">
            <img src="{{ asset('img/jardin_divertido2.png') }}" alt="Servicio de Jardín Divertido" class="img-fluid rounded">
        </div>
        <!-- Descripción del Servicio -->
        <div class="col-md-8">
            <h2>Jardín Divertido</h2>
            <p>El Jardín Divertido ofrece un espacio lleno de juegos y actividades para que tus mascotas se diviertan al máximo. Diseñado para ser un lugar de esparcimiento y diversión, cuenta con áreas de juego seguras donde tu mascota puede correr, saltar y disfrutar.</p>
            <p><strong>Incluye:</strong> Juegos interactivos, áreas de salto, espacios de socialización.</p>
            <p><strong>Precio:</strong> $120.000</p>
            <br>
            <button class="btn btn-warning" onclick="alert('Servicio obtenido: Jardín Divertido')">Obtener</button>
        </div>
    </div>

    <div id="jardin-relajante" class="row align-items-center mb-5">
        <!-- Imagen del Servicio -->
        <div class="col-md-4">
            <img src="{{ asset('img/jardin_relajante2.jpg') }}" alt="Servicio de Jardín Relajante" class="img-fluid rounded">
        </div>
        <!-- Descripción del Servicio -->
        <div class="col-md-8">
            <h2>Jardín Relajante</h2>
            <p>El Jardín Relajante es un lugar tranquilo y pacífico donde tu mascota puede relajarse y disfrutar del aire libre. Es perfecto para mascotas que prefieren un entorno sereno, lejos del ruido y las distracciones, ideal para descanso y recarga de energía.</p>
            <p><strong>Incluye:</strong> Áreas de descanso, sombra natural, espacio tranquilo.</p>
            <p><strong>Precio:</strong> $80.000</p>
            <br>
            <button class="btn btn-warning" onclick="alert('Servicio obtenido: Jardín Relajante')">Obtener</button>
        </div>
    </div>
</div>




    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</x-app-layout>
