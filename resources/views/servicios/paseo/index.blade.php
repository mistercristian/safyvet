<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

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
                        <a href="#paseo-actividad" class="btn btn-info">Ver Más</a>
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
                        <a href="#paseo-socializacion" class="btn btn-info">Ver Más</a>
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
                        <a href="#paseo-ocio" class="btn btn-info">Ver Más</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- SECCION 2 - DESCRIPCION -->

<hr class="my-5" style="border-top: 7px solid #e0a119;">

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
            <button onclick="showWalkModal('Paseo de Actividad')" class="btn btn-warning">Obtener</button>
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
            <button class="btn btn-warning" onclick="showWalkModal('Paseo de Socialización')">Obtener</button>
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
            <button class="btn btn-warning" onclick="showWalkModal('Paseo de Ocio')">Obtener</button>
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
                    <p><i class="fas fa-envelope"></i> Email: <a href="mailto:info@safyvet.com">info@safyvet.com</a></p>
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
                        <a href="#" class="btn btn-primary btn-sm"><i class="fab fa-facebook-f"></i> Facebook</a>
                        <a href="#" class="btn btn-danger btn-sm"><i class="fab fa-instagram"></i> Instagram</a>
                        <a href="#" class="btn btn-info btn-sm"><i class="fab fa-twitter"></i> Twitter</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal de confirmación -->
<div class="modal fade" id="confirmationModal" tabindex="-1" aria-labelledby="confirmationModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="confirmationModalLabel">Servicio Obtenido</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
            </div>
            <div class="modal-body text-center">
                <!-- Imagen de Check -->
                <div class="d-flex justify-content-center"> 
                    <img src="{{ asset('img/check-icon.png') }}" alt="Check" height="150px" width="150px" class="check-icon">
                </div>
                
                <!-- Mensaje de confirmación -->
                <p id="modalServiceName"></p>
                <p>Tu paseo ha sido solicitado correctamente. Nos pondremos en contacto contigo para confirmar los detalles.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap y JS para el Modal -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!-- Script personalizado para mostrar el nombre del paseo en el Modal -->
<script>
    function showWalkModal(walkName) {
        document.getElementById('modalServiceName').textContent = `Has obtenido el paseo: ${walkName}`;
        var confirmationModal = new bootstrap.Modal(document.getElementById('confirmationModal'));
        confirmationModal.show();
    }
</script>
</x-app-layout>
