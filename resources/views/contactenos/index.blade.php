<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Contactenos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
    <style>
        

        .contact-container {
            text-align: center;
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            
        }

        .social-icons {
            margin-top: 20px;
        }

        .social-icons a {
            margin: 0 10px;
            display: inline-block;
        }

        .social-icons img {
            width: 30px;
            
        }

        .submit {
        background-color: #e0a119;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

        
    </style>

</head>
<body>
    <div class="contact-container">
        
        
        <!-- Logo -->
        <div class="container d-flex justify-content-center">
            <img src="{{asset("img/Logo/safivet2.png")}}" alt="Logo Safy Vet">
        </div>
        

        <!-- Título -->
        <h2>Contactenos</h2>

        <!-- Información de contacto -->
        <p><strong>Localización</strong><br>Cra 25 # 6 - 42</p>
        <p><strong>Correo Electronico</strong><br><a href="mailto:safyvet@example.com">safyvet@example.com</a></p>
        <p><strong>Numero de telefono</strong><br>1-234-567-8890</p>

        <!-- Iconos de redes sociales -->
        <div class="social-icons">
            <a href="#"><img src="{{asset("img/Contactenos/Instagram.png")}}" alt="Instagram"></a>
            <a href="#"><img src="{{asset("img/Contactenos/Facebook.png")}}" alt="Facebook"></a>
            <a href="#"><img src="{{asset("img/Contactenos/Twitter.png")}}" alt="Twitter"></a>
        </div>
    

    
    <form name="contact" action="{{route('contactenos.store')}}" method="POST">
@csrf
        <div>
            <p><strong><label>Nombre</label></strong><br>
            <input type="text" id="name" name="name" value="" placeholder="Ingrese el nombre">
        </div>

        <div>
            <p><strong><label>Correo Electronico</label></strong><br>
            <input type="email" id="email" name="email" value="" placeholder="Ingresa tu correo" required>
        </div>       

        <div>
            <p><strong><label>Mensaje</label></strong><br>
            <input type="text" id="message" name="message" value="" placeholder="Ingresa un mensaje" >
        </div>

       <div>
        <button class="submit" class="btn btn-primary">Enviar</button>
       </div>
    </div>
    </form>
    
</body>
</html>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    
    