<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Quienes Somos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    
    <style>
        /* Contenedor de tarjetas */
        .team-member {
            background-color: #fdf1d2;
            border: 2px solid #e1c284;
            border-radius: 10px;
            padding: 10px;
            margin: 10px 0;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        /* Icono y nombre del miembro */
        .team-member img {
            width: 40px;
            height: 40px;
        }

        .team-member-name {
            font-size: 16px;
            color: #333333;
            margin-top: 5px;
        }
    </style>


    <!-- Logo -->
    <div class="container d-flex justify-content-center">
        <img src="{{ asset('img/Logo/safivet2.png') }}" alt="safy" style="display: block; margin: auto;">
    </div>

        <!-- Encabezado -->
        <div class="container text-center">
            <h1><strong>Quienes Somos</strong></h1>
        </div>
        

        <!-- Descripción -->
        <p class="description">
            En SAFYVET, somos apasionados por el bienestar de las mascotas. Ofrecemos un espacio especializado donde el cuidado, la salud y la diversión de tu compañero peludo son nuestra prioridad. Con servicios dedicados como nuestro exclusivo jardín de paseos, tu mascota podrá disfrutar de momentos de esparcimiento y ejercicio en un ambiente seguro y acogedor. Además, contamos con una amplia gama de productos, desde alimentos de alta calidad, medicamentos especializados, hasta divertidos juguetes y accesorios.
        </p>

        <!-- Equipo -->
        <div class="team-member">
            <img src="{{asset('img/Quienes/Persona.png')}}" alt="Avatar">
            <div class="team-member-name">Gomez Juan Jose</div>
        </div>

        <div class="team-member">
            <img src="{{asset('img/Quienes/Persona.png')}}" alt="Avatar">
            <div class="team-member-name">Diego Toro Anaya</div>
        </div>

        <div class="team-member">
            <img src="{{asset('img/Quienes/Persona.png')}}" alt="Avatar">
            <div class="team-member-name">Cristian Guzman</div>
        </div>

        <div class="team-member">
            <img src="{{asset('img/Quienes/Persona.png')}}" alt="Avatar">
            <div class="team-member-name">Kevin Santiago Castaño</div>
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>

