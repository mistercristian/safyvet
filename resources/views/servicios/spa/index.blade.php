<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold text-xl text-gray-800 leading-tight d-flex justify-content-center">
            {{ __('Servicios de Spa') }}
        </h1>
    </x-slot>

    <style>
        .custom-tittle{
            font-size: 2rem; 
            font-weight: bold; 
        }
    </style>

<div class="container mt-5">
    <h1 class="text-center mb-4 custom-tittle">Nuestros Servicios de Spa</h1>
    <div class="row">
        <!-- Baño Terapéutico -->
        <div class="col-md-4">
            <div class="card" style="width: 100%;">
                <img src="{{ asset('img/spa_terapeutico.jpg') }}" class="card-img-top" alt="Baño Terapéutico" style="height: 200px; object-fit: cover;">
                <div class="card-body">
                    <div class="d-flex justify-content-center">
                        <h5 class="card-title">Baño Terapéutico</h5>
                    </div>
                    <div class="d-flex justify-content-center">
                        <p class="card-text">Un baño relajante con productos especiales para cuidar la piel y el pelaje de tu mascota.</p>
                    </div>
                    <br>
                    <div class="d-flex justify-content-center">
                        <a href="#bano-terapeutico" class="btn btn-warning">Ver Más</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Masajes -->
        <div class="col-md-4">
            <div class="card" style="width: 100%;">
                <img src="{{ asset('img/spa_masajes.jpg') }}" class="card-img-top" alt="Masajes" style="height: 200px; object-fit: cover;">
                <div class="card-body">
                    <div class="d-flex justify-content-center">
                        <h5 class="card-title">Masajes</h5>
                    </div>
                    <div class="d-flex justify-content-center">
                        <p class="card-text">Masajes relajantes para ayudar a tu mascota a liberar tensiones y mejorar su bienestar.</p>
                    </div>
                    <br>
                    <div class="d-flex justify-content-center">
                        <a href="#masajes" class="btn btn-warning">Ver Más</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Corte de Pelo -->
        <div class="col-md-4">
            <div class="card" style="width: 100%;">
                <img src="{{ asset('img/spa_corte_pelo.jpg') }}" class="card-img-top" alt="Corte de Pelo" style="height: 200px; object-fit: cover;">
                <div class="card-body">
                    <div class="d-flex justify-content-center">
                        <h5 class="card-title">Corte de Pelo</h5>
                    </div>
                    <div class="d-flex justify-content-center">
                        <p class="card-text">Cortes de pelo profesionales para mantener a tu mascota luciendo hermosa y saludable.</p>
                    </div>
                    <br>
                    <div class="d-flex justify-content-center">
                        <a href="#corte-pelo" class="btn btn-warning">Ver Más</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- SECCION 2 - DESCRIPCION -->

<div class="container mt-5">
    <h1 class="text-center mb-4 custom-tittle">Descripción de Servicios de Spa</h1> 

    <div id="bano-terapeutico" class="row align-items-center mb-5">
        <!-- Imagen del Servicio -->
        <div class="col-md-4">
            <img src="{{ asset('img/spa_terapeutico.jpg') }}" alt="Servicio de Baño Terapéutico" class="img-fluid rounded">
        </div>
        <!-- Descripción del Servicio -->
        <div class="col-md-8">
            <h2>Baño Terapéutico</h2>
            <p>El Baño Terapéutico es ideal para mascotas que necesitan un cuidado especial en su piel y pelaje. Utilizamos productos hipoalergénicos y naturales que aseguran una limpieza profunda y un pelaje brillante.</p>
            <p><strong>Incluye:</strong> Baño con productos especiales, secado y cepillado.</p>
            <p><strong>Precio:</strong> $60.000</p>
            <br>
            <button class="btn btn-warning" onclick="alert('Servicio obtenido: Baño Terapéutico')">Obtener</button>
        </div>
    </div>

    <div id="masajes" class="row align-items-center mb-5">
        <!-- Imagen del Servicio -->
        <div class="col-md-4">
            <img src="{{ asset('img/spa_masajes.jpg') }}" alt="Servicio de Masajes" class="img-fluid rounded">
        </div>
        <!-- Descripción del Servicio -->
        <div class="col-md-8">
            <h2>Masajes</h2>
            <p>Los masajes para mascotas están diseñados para liberar tensiones y ayudar en la relajación. Nuestro personal está capacitado para ofrecer la mejor experiencia a tu mascota.</p>
            <p><strong>Incluye:</strong> Masaje relajante, aromaterapia y tiempo de descanso.</p>
            <p><strong>Precio:</strong> $80.000</p>
            <br>
            <button class="btn btn-warning" onclick="alert('Servicio obtenido: Masajes')">Obtener</button>
        </div>
    </div>

    <div id="corte-pelo" class="row align-items-center mb-5">
        <!-- Imagen del Servicio -->
        <div class="col-md-4">
            <img src="{{ asset('img/spa_corte_pelo.jpg') }}" alt="Servicio de Corte de Pelo" class="img-fluid rounded">
        </div>
        <!-- Descripción del Servicio -->
        <div class="col-md-8">
            <h2>Corte de Pelo</h2>
            <p>Nuestros cortes de pelo están diseñados para mantener a tu mascota fresca y a la moda. Utilizamos herramientas profesionales y técnicas adecuadas para cada raza.</p>
            <p><strong>Incluye:</strong> Corte de pelo, cepillado y limpieza de oídos.</p>
            <p><strong>Precio:</strong> $70.000</p>
            <br>
            <button class="btn btn-warning" onclick="alert('Servicio obtenido: Corte de Pelo')">Obtener</button>
        </div>
    </div>
</div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</x-app-layout>
