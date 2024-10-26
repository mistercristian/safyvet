<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold text-xl text-gray-800 leading-tight d-flex justify-content-center">
            {{ __('Servicios de Spa') }}
        </h1>
    </x-slot>

    <style>
        .custom-tittle {
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
                    <img src="{{ asset('img/servicios/spa_terapeutico.jpg') }}" class="card-img-top"
                        alt="Baño Terapéutico" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <div class="d-flex justify-content-center">
                            <h5 class="card-title">Baño Terapéutico</h5>
                        </div>
                        <div class="d-flex justify-content-center">
                            <p class="card-text">Un baño relajante con productos especiales para cuidar la piel y el
                                pelaje de tu mascota.</p>
                        </div>
                        <br>
                        <div class="d-flex justify-content-center">
                            <a href="#bano-terapeutico" class="btn btn-info">Ver Más</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Masajes -->
            <div class="col-md-4">
                <div class="card" style="width: 100%;">
                    <img src="{{ asset('img/servicios/spa_masajes.jpg') }}" class="card-img-top" alt="Masajes"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <div class="d-flex justify-content-center">
                            <h5 class="card-title">Masajes</h5>
                        </div>
                        <div class="d-flex justify-content-center">
                            <p class="card-text">Masajes relajantes para ayudar a tu mascota a liberar tensiones y
                                mejorar su bienestar.</p>
                        </div>
                        <br>
                        <div class="d-flex justify-content-center">
                            <a href="#masajes" class="btn btn-info">Ver Más</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Corte de Pelo -->
            <div class="col-md-4">
                <div class="card" style="width: 100%;">
                    <img src="{{ asset('img/servicios/spa_corte_pelo.jpg') }}" class="card-img-top" alt="Corte de Pelo"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <div class="d-flex justify-content-center">
                            <h5 class="card-title">Corte de Pelo</h5>
                        </div>
                        <div class="d-flex justify-content-center">
                            <p class="card-text">Cortes de pelo profesionales para mantener a tu mascota luciendo
                                hermosa y saludable.</p>
                        </div>
                        <br>
                        <div class="d-flex justify-content-center">
                            <a href="#corte-pelo" class="btn btn-info">Ver Más</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- SECCION 2 - DESCRIPCION -->

    <hr class="my-5" style="border-top: 7px solid #e0a119;">

    <div class="container mt-5">
        <h1 class="text-center mb-4 custom-tittle">Descripción de Servicios de Spa</h1>

        <div id="bano-terapeutico" class="row align-items-center mb-5">

            <div class="col-md-4">
                <img src="{{ asset('img/servicios/spa_terapeutico.jpg') }}" alt="Servicio de Baño Terapéutico"
                    class="img-fluid rounded">
            </div>

            <div class="col-md-8">
                <h2>Baño Terapéutico</h2>
                <p>El Baño Terapéutico es ideal para mascotas que necesitan un cuidado especial en su piel y pelaje.
                    Utilizamos productos hipoalergénicos y naturales que aseguran una limpieza profunda y un pelaje
                    brillante.</p>
                <p><strong>Incluye:</strong> Baño con productos especiales, secado y cepillado.</p>
                <p><strong>Precio:</strong> $60.000</p>
                <br>
                <button class="btn btn-warning" onclick="showModal('Baño Terapéutico')">Obtener</button>
            </div>
        </div>

        <div id="masajes" class="row align-items-center mb-5">

            <div class="col-md-4">
                <img src="{{ asset('img/servicios/spa_masajes.jpg') }}" alt="Servicio de Masajes"
                    class="img-fluid rounded">
            </div>

            <div class="col-md-8">
                <h2>Masajes</h2>
                <p>Los masajes para mascotas están diseñados para liberar tensiones y ayudar en la relajación. Nuestro
                    personal está capacitado para ofrecer la mejor experiencia a tu mascota.</p>
                <p><strong>Incluye:</strong> Masaje relajante, aromaterapia y tiempo de descanso.</p>
                <p><strong>Precio:</strong> $80.000</p>
                <br>
                <button class="btn btn-warning" onclick="showModal('Masajes')">Obtener</button>
            </div>
        </div>

        <div id="corte-pelo" class="row align-items-center mb-5">

            <div class="col-md-4">
                <img src="{{ asset('img/servicios/spa_corte_pelo.jpg') }}" alt="Servicio de Corte de Pelo"
                    class="img-fluid rounded">
            </div>

            <div class="col-md-8">
                <h2>Corte de Pelo</h2>
                <p>Nuestros cortes de pelo están diseñados para mantener a tu mascota fresca y a la moda. Utilizamos
                    herramientas profesionales y técnicas adecuadas para cada raza.</p>
                <p><strong>Incluye:</strong> Corte de pelo, cepillado y limpieza de oídos.</p>
                <p><strong>Precio:</strong> $70.000</p>
                <br>
                <button class="btn btn-warning" onclick="showModal('Corte de Pelo')">Obtener</button>
            </div>
        </div>
    </div>

    <hr class="my-5" style="border-top: 7px solid #e0a119;">

    <div class="container mt-5">
        <h2 class="text-center custom-tittle">Información de la Empresa</h2>
        <div class="row mt-4">

            <div class="col-md-4 mb-4">
                <div class="card text-center">
                    <div class="card-header">
                        <h5><i class="fas fa-envelope"></i> Contacto</h5>
                    </div>
                    <div class="card-body">
                        <p><i class="fas fa-envelope"></i> Email: <a href="mailto:info@safyvet.com">info@safyvet.com</a>
                        </p>
                        <p><i class="fas fa-phone"></i> Teléfono: +57 123 456 7890</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card text-center">
                    <div class="card-header">
                        <h5><i class="fas fa-map-marker-alt"></i> Dirección</h5>
                    </div>
                    <div class="card-body">
                        <p><i class="fas fa-map-marker-alt"></i> Calle 123 #45-67</p>
                        <p>Ciudad, Colombia</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card text-center">
                    <div class="card-header">
                        <h5><i class="fas fa-share-alt"></i> Síguenos</h5>
                    </div>
                    <div class="card-body">
                        <p>
                            <a href="https://es-la.facebook.com/login/device-based/regular/login/"
                                class="btn btn-primary btn-sm" target="_blank"><i class="fab fa-facebook-f"></i>
                                Facebook</a>
                            <a href="https://www.instagram.com/accounts/login/?next=%2Fhaoyii%2F&source=private_profile&locale=es_ES"
                                class="btn btn-danger btn-sm" target="_blank"><i class="fab fa-instagram"></i>
                                Instagram</a>
                            <a href="https://x.com/i/flow/login?input_flow_data=%7B%22requested_variant%22%3A%22eyJsYW5nIjoiZXMiLCJteCI6IjIifQ%3D%3D%22%7D"
                                class="btn btn-info btn-sm" target="_blank"><i class="fab fa-twitter"></i>
                                Twitter</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <hr class="my-5" style="border-top: 7px solid #e0a119;">

    <div class="modal fade" id="confirmationModal" tabindex="-1" aria-labelledby="confirmationModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="confirmationModalLabel">Servicio Obtenido</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                </div>
                <div class="modal-body text-center">

                    <div class="d-flex justify-content-center">
                        <img src="{{ asset('img/servicios/check-icon.png') }}" alt="Check" height="150px"
                            width="150px" class="check-icon">
                    </div>


                    <p id="modalServiceName"></p>
                    <p>Tu servicio ha sido obtenido correctamente. Nos pondremos en contacto contigo para confirmar los
                        detalles.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <script>
        function showModal(serviceName) {
            document.getElementById('modalServiceName').textContent = `Has obtenido el servicio: ${serviceName}`;
            var confirmationModal = new bootstrap.Modal(document.getElementById('confirmationModal'));
            confirmationModal.show();
        }
    </script>


</x-app-layout>
