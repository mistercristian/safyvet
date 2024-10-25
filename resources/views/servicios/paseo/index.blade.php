<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold text-xl text-gray-800 leading-tight d-flex justify-content-center">
            {{ __('Servicios de Paseo') }}
        </h1>
    </x-slot>

    <style>
        .custom-tittle{
            font-size: 2rem; 
            font-weight: bold; 
        }
    </style>

<div class="container mt-5">
    <h1 class="text-center mb-4 custom-tittle">Nuestros Paseos</h1>
    <div class="row">
        <!-- Paseo de Actividad -->
        <div class="col-md-4">
            <div class="card" style="width: 100%;">
                <img src="{{ asset('img/paseo_actividad.jpg') }}" class="card-img-top" alt="Paseo de Actividad" style="height: 200px; object-fit: cover;">
                <div class="card-body">
                    <div class="d-flex justify-content-center">
                        <h5 class="card-title">Paseo de Actividad</h5>
                    </div>
                    <div class="d-flex justify-content-center">
                        <p class="card-text">Un paseo lleno de energía y actividad para que tu mascota se mantenga en forma y saludable.</p>
                    </div>
                    <br>
                    <div class="d-flex justify-content-center">
                        <a href="#paseo-actividad" class="btn btn-warning">Ver Más</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Paseo de Socialización -->
        <div class="col-md-4">
            <div class="card" style="width: 100%;">
                <img src="{{ asset('img/paseo_social.jpg') }}" class="card-img-top" alt="Paseo de Socialización" style="height: 200px; object-fit: cover;">
                <div class="card-body">
                    <div class="d-flex justify-content-center">
                        <h5 class="card-title">Paseo de Socialización</h5>
                    </div>
                    <div class="d-flex justify-content-center">
                        <p class="card-text">Diseñado para que tu mascota socialice con otros perros y personas en un ambiente seguro.</p>
                    </div>
                    <br>
                    <div class="d-flex justify-content-center">
                        <a href="#paseo-socializacion" class="btn btn-warning">Ver Más</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Paseo de Ocio -->
        <div class="col-md-4">
            <div class="card" style="width: 100%;">
                <img src="{{ asset('img/paseo_ocio.jpg') }}" class="card-img-top" alt="Paseo de Ocio" style="height: 200px; object-fit: cover;">
                <div class="card-body">
                    <div class="d-flex justify-content-center">
                        <h5 class="card-title">Paseo de Ocio</h5>
                    </div>
                    <div class="d-flex justify-content-center">
                        <p class="card-text">Un paseo relajado para que tu mascota disfrute del aire libre y explore su entorno a su propio ritmo.</p>
                    </div>
                    <br>
                    <div class="d-flex justify-content-center">
                        <a href="#paseo-ocio" class="btn btn-warning">Ver Más</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- SECCION 2 - DESCRIPCION -->

<div class="container mt-5">
    <h1 class="text-center mb-4 custom-tittle">Descripción de Servicios</h1> 

    <div id="paseo-actividad" class="row align-items-center mb-5">
        <!-- Imagen del Servicio -->
        <div class="col-md-4">
            <img src="{{ asset('img/paseo_actividad.jpg') }}" alt="Servicio de Paseo de Actividad" class="img-fluid rounded">
        </div>
        <!-- Descripción del Servicio -->
        <div class="col-md-8">
            <h2>Paseo de Actividad</h2>
            <p>El Paseo de Actividad está diseñado para mantener a tu mascota en forma, ofreciendo un recorrido lleno de ejercicios y juegos. Ideal para perros activos que necesitan gastar energía.</p>
            <p><strong>Incluye:</strong> Ejercicios dinámicos, juegos interactivos, socialización.</p>
            <p><strong>Precio:</strong> $80.000</p>
            <br>
            <button class="btn btn-warning" onclick="alert('Servicio obtenido: Paseo de Actividad')">Obtener</button>
        </div>
    </div>

    <div id="paseo-socializacion" class="row align-items-center mb-5">
        <!-- Imagen del Servicio -->
        <div class="col-md-4">
            <img src="{{ asset('img/paseo_social.jpg') }}" alt="Servicio de Paseo de Socialización" class="img-fluid rounded">
        </div>
        <!-- Descripción del Servicio -->
        <div class="col-md-8">
            <h2>Paseo de Socialización</h2>
            <p>El Paseo de Socialización permite a tu mascota interactuar con otros perros y personas, favoreciendo su comportamiento y confianza en entornos sociales.</p>
            <p><strong>Incluye:</strong> Socialización con otros perros, paseos en grupo, juegos.</p>
            <p><strong>Precio:</strong> $90.000</p>
            <br>
            <button class="btn btn-warning" onclick="alert('Servicio obtenido: Paseo de Socialización')">Obtener</button>
        </div>
    </div>

    <div id="paseo-ocio" class="row align-items-center mb-5">
        <!-- Imagen del Servicio -->
        <div class="col-md-4">
            <img src="{{ asset('img/paseo_ocio.jpg') }}" alt="Servicio de Paseo de Ocio" class="img-fluid rounded">
        </div>
        <!-- Descripción del Servicio -->
        <div class="col-md-8">
            <h2>Paseo de Ocio</h2>
            <p>El Paseo de Ocio es perfecto para mascotas que disfrutan de un ritmo más tranquilo. Este servicio se enfoca en la exploración y relajación en un ambiente natural.</p>
            <p><strong>Incluye:</strong> Paseos relajados, exploración tranquila, tiempo de calidad.</p>
            <p><strong>Precio:</strong> $70.000</p>
            <br>
            <button class="btn btn-warning" onclick="alert('Servicio obtenido: Paseo de Ocio')">Obtener</button>
        </div>
    </div>
</div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</x-app-layout>
