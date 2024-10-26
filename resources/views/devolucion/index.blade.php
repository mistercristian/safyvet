<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-x5 text-gray-800 leading-tight ">
          {{ __('Devoluciones') }}
      </h2>
  </x-slot>
  
  <div class="link bootstrap">
      <div class="py-12">
          <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
              <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg" >
               
                  <div class="p-6 text-gray-900">

                    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
                    <br>
                   <div class="container d-flex justify-content-center">
                     <img src="{{ asset('img/safivet2.png') }}" alt="safy" height="250" width="250">
                 </div>
                 <br>
                 <p class="text-center">Cambiar de opinión está bien. Gracias a nuestra Satisfacción garantizada, puedes devolver un producto hasta 30 días calendario después de la fecha en que lo recibes, según su categoría. Ten en cuenta que hay algunas excepciones</p>
                 
                 
                 <div class="d-flex justify-content-center ">
                  <form method="POST" action='{{route('devoluciones.store')}}' class="p-4 border rounded bg-light" style="border: 2px solid #F19501;">
                    @csrf
                      <div class="mb-3">
                          <label for="nombre" class="form-label">Ingrese nombre y apellidos</label>
                          <input type="text" class="form-control" id="nombre" aria-describedby="nombreHelp" placeholder="Ingrese nombre" name="nombre" required style="border-color: #F19501;">
                          <div id="nombreHelp" class="form-text"></div>
                      </div>
              
                      <div class="form-floating mb-3">
                          <textarea class="form-control" placeholder="Leave a comment here" id="descripcion" name="descripcion" style="border-color: #F19501;"></textarea>
                          <label for="floatingTextarea">Descripción</label>
                      </div>
              
                      <div class="mb-3">
                          <label for="formFileMultiple" class="form-label">Imágenes</label>
                          <input class="form-control" type="file" id="foto" name="foto" multiple style="border-color: #F19501;">
                      </div>

                      <div class="text-center">
                      <button type="submit" class="btn btn" style="background-color: #F19501; color: white; border-color: #F19501;">Enviar</button>
                    </div>
                  
                    </form>
              </div>
              
                   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
                 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
                 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
                      
                  </div>
              </div>
          </div>
      </div>
  </div>
</x-app-layout>

