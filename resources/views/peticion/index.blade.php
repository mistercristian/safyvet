<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('PQRS') }}
        </h2>
    </x-slot>

    <div class="container">
      <br>
      <form method="POST" >
          @csrf
            
            <div class="mb-3">
              <label for="name" class="form-label">Nombre y Apellido</label>
              <input type="text" class="form-control" id="nombre" name="name" aria-describedby='nameHelp' placeholder="Ingrese Nombre" required>
            </div>

            <div class="mb-3">
                <label for="name" class="form-label">Correo</label>
                <input type="text" class="form-control" id="mail" aria-describedby="mailHelp" name="mail" 
                placeholder="Ingresa Email" required>
              </div>

              <div class="mb-3">
                <label for="name" class="form-label">PQRS</label>
                <select id="pqrs" name="pqrs" class="block mt-1 w-full">
                  <option value="Peticion">Peticion</option>
                  <option value="Queja">Queja</option>
                  <option value="Reclamo">Reclamo</option>
                  <option value="Sugerencia">Sugerencia</option>
              </select>
              </div>

              <div class="mb-3">
                <label for="name" class="form-label">Asunto</label>
                <input type="text" class="form-control" id="asunto" aria-describedby="asuntoHelp" name="asunto" 
                placeholder="Ingresa Asunto" required>
              </div>

              <div class="mb-3">
                <label for="name" class="form-label">Comentario</label>
              <textarea class="form-control" id="comen"  name="comen" narows="3" value="" required></textarea>
              </div>

          <div class="mt-3">
              <button type="submit" class="btn btn-success">Enviar</button>
              <a href="{{route('peticiones.index')}}" class="btn btn-warning">Cancelar</a>
              
              
            </div>
          
        </form>
  
  
      </div>
  
     
  
      <!-- Option 1: Bootstrap Bundle with Popper -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  
</x-app-layout>