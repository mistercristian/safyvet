<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-x5 text-gray-800 leading-tight">
          {{ __('PQRS') }}
      </h2>
  </x-slot>
  
  <div class="link bootstrap">
      <div class="py-12">
          <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
              <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                  <div class="p-6 text-gray-900">


    <div class="container">

      <div class="container d-flex justify-content-center">
        <img src="{{ asset('img/safivet.png') }}" alt="safy">
    </div>
      <br>
      <p class="text-center" style="font-size: 24px;"><strong> Crear PQR</strong></p>
      <p class="text-center">Recordar que todos los campos son obligatotios</p>
      <form method="POST" action='{{route('peticiones.store')}}' class="p-4 border rounded bg-light" style="border: 2px solid #F19501;" >
          @csrf
            
            <div class="mb-3">
              <label for="name" class="form-label">Nombre y Apellido</label>
              <input type="text" class="form-control" id="nombre" name="nombre" aria-describedby='nameHelp' placeholder="Ingrese Nombre" 
              style="border-color: #F19501;" required>
            </div>

            <div class="mb-3">
                <label for="name" class="form-label">Correo</label>
                <input type="text" class="form-control" id="email" aria-describedby="mailHelp" name="email" 
                placeholder="Ingresa Email" style="border-color: #F19501;" required>
              </div>

              <div class="mb-3" >
                <label for="name" class="form-label" >PQRS</label>
                <select id="pqrs" name="pqrs" class="block mt-1 w-full" style="border-color: #F19501;">
                  <option value="Peticion">Peticion</option>
                  <option value="Queja">Queja</option>
                  <option value="Reclamo">Reclamo</option>
                  <option value="Sugerencia">Sugerencia</option>
              </select>
              </div>

              <div class="mb-3">
                <label for="name" class="form-label">Asunto</label>
                <input type="text" class="form-control" id="asunto" aria-describedby="asuntoHelp" name="asunto" 
                placeholder="Ingresa Asunto" style="border-color: #F19501;" required>
              </div>

              <div class="mb-3">
                <label for="name" class="form-label">Comentario</label>
              <textarea class="form-control" id="comen"  name="comentario" narows="3" value="" style="border-color: #F19501;" required></textarea>
              </div>

              
              
              <div class="text-center">
                
                <button type="submit" class="btn btn" style="background-color: #F19501; color: white; border-color: #F19501;">Enviar</button>
                <a href="{{route('peticiones.index')}}" class="btn btn-danger">Cancelar</a>
              </div>

            </div>
          
        </form>
  
  
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
              <hr class="my-5" style="border-top: 7px solid #e0a119;">
              </div>  
              
             
  
     
  
      <!-- Option 1: Bootstrap Bundle with Popper -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  
    </div>
  </div>
</div>
</div>
</div>
</x-app-layout>