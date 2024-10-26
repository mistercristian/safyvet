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
    <h1 class="text-center mb-4 custom-tittle">Nuestros Medicamentos</h1>
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



    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</x-app-layout>
