
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

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
        
        <div class="col-md-4">
            <div class="card" style="width: 100%;">
                <img src="{{ asset('img/jardin_divertido.jpg') }}" class="card-img-top" alt="Jardín Divertido" style="height: 200px; object-fit: cover;">
                <div class="card-body">
                    <div class="d-flex justify-content-center">
                        <h5 class="card-title">Jardín Divertido</h5>
                    </div>
                    <div class="d-flex justify-content-center">
                        <p class="card-text">Un espacio de diversión total, ideal para mascotas que disfrutan jugando y explorando al aire libre.</p>
                    </div>
                    <br>
                    <div class="d-flex justify-content-center">
                        <a href="#jardin-divertido" class="btn btn-info">Ver Más</a>
                    </div>
                </div>
            </div>
        </div>

       
        <div class="col-md-4">
            <div class="card" style="width: 100%;">
                <img src="{{ asset('img/jardin_aventura.jpg') }}" class="card-img-top" alt="Jardín Aventurero" style="height: 200px; object-fit: cover;">
                <div class="card-body">
                    <div class="d-flex justify-content-center">
                        <h5 class="card-title">Jardín Aventurero</h5>
                    </div>
                    <div class="d-flex justify-content-center">
                        <p class="card-text">Para los exploradores de corazón, este jardín ofrece un entorno lleno de aventuras y retos.</p>
                    </div>
                    <br>
                    <div class="d-flex justify-content-center">
                        <a href="#jardin-aventurero" class="btn btn-info">Ver Más</a>
                    </div>
                </div>
            </div>
        </div>

        
        <div class="col-md-4">
            <div class="card" style="width: 100%;">
                <img src="{{ asset('img/jardin_relajante.jpg') }}" class="card-img-top" alt="Jardín Relajante" style="height: 200px; object-fit: cover;">
                <div class="card-body">
                    <div class="d-flex justify-content-center">
                        <h5 class="card-title">Jardín Relajante</h5>
                    </div>
                    <div class="d-flex justify-content-center">
                        <p class="card-text">Un espacio tranquilo donde tu mascota puede relajarse y disfrutar de la naturaleza.</p>
                    </div>
                    <br>
                    <div class="d-flex justify-content-center">
                        <a href="#jardin-relajante" class="btn btn-info">Ver Más</a>
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

    <div id="jardin-divertido" class="row align-items-center mb-5">
        <div class="col-md-4">
            <img src="{{ asset('img/jardin_divertido.jpg') }}" alt="Jardín Divertido" class="img-fluid rounded">
        </div>
        <div class="col-md-8">
            <h2>Jardín Divertido</h2>
            <p>El Jardín Divertido es perfecto para mascotas activas que disfrutan de juegos y actividad constante en un ambiente seguro y al aire libre.</p>
            <p><strong>Incluye:</strong> Juegos interactivos, actividades recreativas.</p>
            <p><strong>Precio:</strong> $60.000</p>
            <br>
            <button onclick="showGardenModal('Jardín Divertido')" class="btn btn-warning">Obtener</button>
        </div>
    </div>

    <div id="jardin-aventurero" class="row align-items-center mb-5">
        <div class="col-md-4">
            <img src="{{ asset('img/jardin_aventura2.jpg') }}" alt="Jardín Aventurero" class="img-fluid rounded">
        </div>
        <div class="col-md-8">
            <h2>Jardín Aventurero</h2>
            <p>El Jardín Aventurero está diseñado para mascotas curiosas que disfrutan explorando y enfrentando nuevos desafíos en un entorno controlado.</p>
            <p><strong>Incluye:</strong> Senderos de exploración, actividades de aventura.</p>
            <p><strong>Precio:</strong> $75.000</p>
            <br>
            <button class="btn btn-warning" onclick="showGardenModal('Jardín Aventurero')">Obtener</button>
        </div>
    </div>

    <div id="jardin-relajante" class="row align-items-center mb-5">
        <div class="col-md-4">
            <img src="{{ asset('img/jardin_relajante.jpg') }}" alt="Jardín Relajante" class="img-fluid rounded">
        </div>
        <div class="col-md-8">
            <h2>Jardín Relajante</h2>
            <p>El Jardín Relajante es ideal para mascotas que buscan paz y tranquilidad, con un entorno de naturaleza para relajarse y descansar.</p>
            <p><strong>Incluye:</strong> Zonas tranquilas, tiempo de calidad en un entorno verde.</p>
            <p><strong>Precio:</strong> $55.000</p>
            <br>
            <button class="btn btn-warning" onclick="showGardenModal('Jardín Relajante')">Obtener</button>
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

</div>  

<hr class="my-5" style="border-top: 7px solid #e0a119;">


<div class="modal fade" id="confirmationModal" tabindex="-1" aria-labelledby="confirmationModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="confirmationModalLabel">Servicio Obtenido</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
            </div>
            <div class="modal-body text-center">
                <div class="d-flex justify-content-center">
                    <img src="{{ asset('img/check-icon.png') }}" alt="Check" height="150px" width="150px" class="check-icon">
                </div>
                <p id="modalServiceName"></p>
                <p>Tu jardín ha sido solicitado correctamente. Nos pondremos en contacto contigo para confirmar los detalles.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script>
    function showGardenModal(gardenName) {
        document.getElementById('modalServiceName').textContent = `Has obtenido el jardín: ${gardenName}`;
        var confirmationModal = new bootstrap.Modal(document.getElementById('confirmationModal'));
        confirmationModal.show();
    }
</script>
</x-app-layout>