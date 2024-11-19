<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold text-xl text-gray-800 leading-tight d-flex ">
            {{  $categoria_nombre }}
        </h1>
    </x-slot>

    <style>
        .card-img-top {
            width: 100%;
            height: 100%;
        }

        .custom-tittle {
            font-size: 2rem;
            font-weight: bold;
        }
    </style>

    <div class="container mt-5">
        <h1 class="text-center mb-4 custom-tittle">Nuestros {{  $categoria_nombre }}</h1>
        @if(Auth::user()->role === 'administrador')
    <div class="col-md-1">
        <a href="{{ route('servicios.create') }}" class="btn btn-success">Add</a>
        </div>
        @endif
        <div class="row">

            @foreach ($servicios as $servicio)

            <div class="col-md-4">
                <div class="card" style="width: 100%;">
                    <img src="{{ asset('img/servicios/'.$servicio->foto) }}" class="card-img-top"
                        alt="Jardín Divertido" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <div class="d-flex justify-content-center">
                            <h5 class="card-title">{{$servicio->nombre}}</h5>
                        </div>
                        <div class="d-flex justify-content-center">
                            <p class="card-text">{{$servicio->descripcion}}</p>
                        </div>
                        <br>
                        <div class="d-flex justify-content-center">
                            <a href="#{{$servicio->nombre}}" class="btn btn-info">Ver Más</a>
                            @if(Auth::user()->role === 'administrador')

                        
                            <button onclick="window.location.href='{{ route('servicios.edit', ['id' => $servicio->id]) }}'" class="btn btn-warning" >
                                Editar
                            </button>

                           

                            <form action="{{route('servicios.destroy', ['servicio'=>$servicio->id])}}" method="POST" >
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-danger" >Eliminar</button>
                                </form>
                                
                                @endif
                        </div>
                    </div>
                </div>
            </div>

            @endforeach


            
            
        </div>
    </div>

    <!-- SECCION 2 - DESCRIPCION -->

    <hr class="my-5" style="border-top: 7px solid #e0a119;">

    <div class="container mt-5">
        <h1 class="text-center mb-4 custom-tittle">Descripción de {{  $categoria_nombre }}</h1>

        @foreach ($servicios as $servicio)

        <div id="{{$servicio->nombre}}" class="row align-items-center mb-5">
            <div class="col-md-4">
                <img src="{{ asset('img/servicios/'.$servicio->foto) }}" alt="{{$servicio->nombre}}"
                    class="img-fluid rounded">
            </div>
            <div class="col-md-8">
                <h2>{{$servicio->nombre}}</h2>
                <p>{{$servicio->descripcion2}}</p>
                <p><strong>Incluye:</strong> {{$servicio->incluye}}</p>
                <p><strong>Precio:</strong> ${{$servicio->price}}</p>
                <br>
                <button onclick="showGardenModal('{{$servicio->nombre}}')" class="btn btn-warning">Obtener</button>

                



            </div>
        </div>

        @endforeach
        
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
                    <p>Tu jardín ha sido solicitado correctamente. Nos pondremos en contacto contigo para confirmar los
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
        function showGardenModal(gardenName) {
            document.getElementById('modalServiceName').textContent = `Has obtenido el jardín: ${gardenName}`;
            var confirmationModal = new bootstrap.Modal(document.getElementById('confirmationModal'));
            confirmationModal.show();
        }
    </script>
</x-app-layout>
