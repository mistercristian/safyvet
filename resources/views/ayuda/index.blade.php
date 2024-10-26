<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Ayuda') }}
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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <title>Document</title>

    <style>
        .help-container {
            text-align: center;
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            
        }

    </style>
</head>
<body>
    <div class="help-container">
        
        
        <!-- Logo -->
        <div class="container d-flex justify-content-center">
            <img src="{{asset("img/Logo/safivet2.png")}}" alt="Logo Safy Vet">
        </div>
        

    </div>
    
    <div class="accordion" id="accordionExample">
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                1. ¿Cómo puedo crear una cuenta en el aplicativo?
            </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <strong>Contenido sobre la ayuda</strong> 
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              2. ¿Cómo inicio sesión en mi cuenta?
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <strong>Contenido sobre la ayuda</strong> 
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              3. ¿Qué hago si olvido mi contraseña?
            </button>
          </h2>
          <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <strong>Contenido sobre la ayuda</strong> 
            </div>
          </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsePer" aria-expanded="false" aria-controls="collapsePer">
                4. ¿Cómo actualizo mi información personal?

              </button>
            </h2>
            <div id="collapsePer" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>Contenido sobre la ayuda</strong> 
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseMas" aria-expanded="false" aria-controls="collapseMas">
                5. ¿Cómo puedo programar una cita para mi mascota? 	

              </button>
            </h2>
            <div id="collapseMas" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>Contenido sobre la ayuda</strong> 
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseCita" aria-expanded="false" aria-controls="collapseCita">
                6. ¿Puedo cancelar o reprogramar una cita?
              </button>
            </h2>
            <div id="collapseCita" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>Contenido sobre la ayuda</strong> 
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseHis" aria-expanded="false" aria-controls="collapseHis">
                7. ¿Puedo ver el historial de citas de mi mascota?
              </button>
            </h2>
            <div id="collapseHis" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>Contenido sobre la ayuda</strong> 
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseDis" aria-expanded="false" aria-controls="collapseDis">
                8. ¿Puedo consultar los servicios disponibles y sus precios?
              </button>
            </h2>
            <div id="collapseDis" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>Contenido sobre la ayuda</strong> 
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTra" aria-expanded="false" aria-controls="collapseTra">
                9. ¿Puedo consultar los resultados de los análisis o tratamientos de mi mascota?
              </button>
            </h2>
            <div id="collapseTra" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>Contenido sobre la ayuda</strong> 
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseCan" aria-expanded="false" aria-controls="collapseCan">
                10. ¿Hay algún cargo por cancelación de citas?
              </button>
            </h2>
            <div id="collapseCan" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>Contenido sobre la ayuda</strong> 
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsePro" aria-expanded="false" aria-controls="collapsePro">
                11. ¿Qué hago si tengo problemas para usar el aplicativo?
              </button>
            </h2>
            <div id="collapsePro" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>Contenido sobre la ayuda</strong> 
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseCom" aria-expanded="false" aria-controls="collapseCom">
                12. ¿El aplicativo es compatible con todos los dispositivos?
              </button>
            </h2>
            <div id="collapseCom" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>Contenido sobre la ayuda</strong> 
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseInfo" aria-expanded="false" aria-controls="collapseInfo">
                13. ¿Cómo se protege mi información personal y la de mi mascota?
              </button>
            </h2>
            <div id="collapseInfo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>Contenido sobre la ayuda</strong> 
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


      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
