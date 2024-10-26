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
                    <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quienes Somos</title>
    <style>
       
              /* Encabezado */
        h1 {
            font-size: 24px;
            color: #333333;
            margin: 0;
        }

        /* Texto de la descripción */
        .description {
            color: #333333;
            font-size: 14px;
            line-height: 1.6;
            margin: 20px 0;
        }

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
</head>
<body>

    <!-- Logo -->
    <div class="container d-flex justify-content-center">
        <img src="{{ asset('img/Logo/safivet2.png') }}" alt="safy" style="display: block; margin: auto;">
    </div><br>


    <div class="container">
       
        
        <!-- Encabezado -->
        <div class="container text-center">
            <h1>Quienes Somos</h1>
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
    </div>

</body>
</html>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

