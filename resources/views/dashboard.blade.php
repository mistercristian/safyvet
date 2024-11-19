<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Inicio') }}
        </h2>
    </x-slot>

    <style>
        .custom-tittle {
            font-size: 2rem;
            font-weight: bold;
        }

        .btn-circle {
            display: inline-block;
            width: 100px;
            height: 100px;
            border-radius: 50%;
            overflow: hidden;
            border: none;
            transition: transform 0.3s ease;
            margin-bottom: 10px;
        }

        .btn-circle:hover {
            transform: scale(1.05);
        }

        .img-circle {
            width: 100%;
            height: auto;
            display: block;
            border-radius: 50%;
            object-fit: cover;
        }

        .card {
            text-align: center;
        }
    </style>

    <div class="py-12">
        <h2 class="text-center custom-tittle">Ofertas</h2><br>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                        class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                        aria-label="Slide 4"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('img/dashboard/oferta1.jpg') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('img/dashboard/oferta2.jpg') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('img/dashboard/oferta3.jpg') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('img/dashboard/oferta4.jpg') }}" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>

    <h2 class="text-center custom-tittle">Nuestros Servicios</h2><br>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 text-center">
            <div class="row">

                <div class="col-md-4 mb-4">
                    <a href="{{ route('servicios.index', ['categoria_id' => 4])}}" class="btn-circle">
                        <img src="{{ asset('img/dashboard/jardin.jpg') }}" alt="Jardín" class="img-circle">
                    </a>
                    <p class="mt-2">Jardín</p>
                </div>

                <div class="col-md-4 mb-4">
                    <a href="{{ route('servicios.index', ['categoria_id' => 6])}}" class="btn-circle">
                        <img src="{{ asset('img/dashboard/paseo.jpg') }}" alt="Paseos" class="img-circle">
                    </a>
                    <p class="mt-2">Paseos</p>
                </div>

                <div class="col-md-4 mb-4">
                    <a href="{{ route('servicios.index', ['categoria_id' => 5])}}" class="btn-circle">
                        <img src="{{ asset('img/dashboard/spa.jpg') }}" alt="Spa" class="img-circle">
                    </a>
                    <p class="mt-2">Spa</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div id="nosotros" class="row align-items-center mb-5">

            <div class="col-md-4">
                <img src="{{ asset('img/dashboard/about_us.jpg') }}" alt="Sobre Nosotros" class="img-fluid rounded">
            </div>

            <div class="col-md-8">
                <h1 class="custom-tittle"><strong>Sobre nosotros</strong></h1><br>
                <p>En SAFYVET, somos apasionados por el bienestar de las mascotas.
                    Ofrecemos un espacio especializado donde el cuidado, la salud y la diversión de tu compañero peludo
                    son nuestra prioridad.
                    Con servicios dedicados como nuestro exclusivo jardín de paseos, tu mascota podrá disfrutar de
                    momentos de esparcimiento y ejercicio en un ambiente seguro y acogedor.
                    Además, contamos con una amplia gama de productos, desde alimentos de alta calidad, medicamentos
                    especializados, hasta divertidos juguetes y accesorios.</p>
                <br>
                <a href="{{route('quienes.index')}}"><button class="btn btn-outline-warning" >Conoce más de nosotros</button></a>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <h1 class="text-center mb-4 custom-tittle">¡Con SafyVet lo tienes todo!</h1>
        <div class="row">
            <!-- Domicilio -->
            <div class="col-md-4 mb-4">
                <div class="card" style="width: 100%;">
                    <div class="d-flex justify-content-center">
                        <button class="btn-circle">
                            <img src="{{ asset('img/dashboard/domicilio.png') }}" class="img-circle" alt="entregas">
                        </button>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><strong>Entregas a domicilio</strong></h5>
                        <p class="card-text"><strong>Entregamos todo lo que necesitas</strong>, cuando lo necesitas.
                            Pide tranquilo. Nosotros hacemos el resto.</p>
                    </div>
                </div>
            </div>

            <!-- Pagos Online -->
            <div class="col-md-4 mb-4">
                <div class="card" style="width: 100%;">
                    <div class="d-flex justify-content-center">
                        <button class="btn-circle">
                            <img src="https://thumbs.dreamstime.com/z/icono-de-pago-en-efectivo-billetes-color-naranja-dise%C3%B1o-vectorial-bien-organizado-y-editable-utilizando-con-fines-comerciales-207700855.jpg"
                                class="img-circle" alt="pagos">
                        </button>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><strong>Pagos online 100% seguro</strong></h5>
                        <p class="card-text">Escoge tu método de pago preferido. ¡No te preocupes! Contamos con
                            pasarelas de pagos seguras.</p>
                    </div>
                </div>
            </div>

            <!-- Todo lo que necesitas -->
            <div class="col-md-4 mb-4">
                <div class="card" style="width: 100%;">
                    <div class="d-flex justify-content-center">
                        <button class="btn-circle">
                            <img src="https://media.istockphoto.com/id/948486842/es/vector/icono-de-caja-de-cart%C3%B3n-del-paquete-devoluci%C3%B3n-de-producto-e-ilustraci%C3%B3n-de-reembolso.jpg?s=612x612&w=0&k=20&c=nV-WnZF9oT-zYWlqYTIny3fYeKJ1P_9jgI5tOGrhen0="
                                class="img-circle" alt="all">
                        </button>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><strong>Todo lo que necesitas</strong></h5>
                        <p class="card-text">Contamos con productos y servicios para el mejor cuidado de tu mascota.
                        </p>
                    </div>
                </div>
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
                        <p><i class="fas fa-envelope"></i> Email: <a
                                href="mailto:info@safyvet.com">info@safyvet.com</a>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</x-app-layout>
