<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold text-xl text-gray-800 leading-tight d-flex ">
            <h1 class="font-semibold text-xl text-gray-800 leading-tight d-flex">
            {{$servicio->nombre}}
            </h1>
        </h1>
    </x-slot>

    <style>
        .custom-tittle{
            font-size: 2rem; 
            font-weight: bold; 
        }
    </style>

<div class="container mt-5">
    <h1 class="text-center mb-4 custom-tittle">Edit {{$servicio->nombre}}</h1>
    
    <div class="row">

    <form method="POST" action="{{route('servicios.update',['id'=>$servicio->id])}}" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="mb-3">
          <label for="codigo" class="form-label">Codigo</label>
          <input type="text" class="form-control" id="id" aria-describedby="codigoHelp" name="id" disabled="disable" value="{{$servicio->id}}">
          <div id="idHelp" class="form-text">Codigo Servicio</div>
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="name" aria-describedby="nameHelp" name="name" placeholder="Nombre Comuna" value="{{$servicio->nombre}}">
            
          </div>

          <div class="mb-3">

        <label for="municipio" class="form-label">Categoria:</label>
        <select class="form-select" id="categoria" name="categoria" required>
            <option selected disabled value="">Seleccionar Uno...</option>
            @foreach ($categorias as $categoria )
            @if ($categoria->id ==$servicio->categoria_id)
            <option selected value="{{$categoria->id}}">{{$categoria->nombre}}</option>
            @else
            <option value="{{$categoria->id}}">{{$categoria->nombre}}</option>   
            
            @endif   
            @endforeach
        </select>
          </div>

        <div class="mb-3">
            <label for="name" class="form-label">Descripcion Corta</label>
            <textarea class="form-control" id="descri"  name="descri" narows="3" value="">{{$servicio->descripcion}}</textarea>
            
          </div>

          <div class="mb-3">
            <label for="name" class="form-label">Descripcion Larga</label>
            <textarea class="form-control" id="descri2"  name="descri2" narows="3" value="">{{$servicio->descripcion2}}</textarea>
            
          </div>

          <div class="mb-3">
            <label for="foto" class="form-label">foto</label>
            <input class="form-control" type="file" id="foto" name="foto" value="" >
          </div>

          <div class="mb-3">
            <label for="price" class="form-label">Precio</label>
            <input type="text" class="form-control" id="price" aria-describedby="nameHelp" name="price"  value="{{$servicio->price}}">
            
          </div>
          <div class="mb-3">
            <label for="stock" class="form-label">Incluye</label>
            <input type="text" class="form-control" id="incluye" aria-describedby="nameHelp" name="incluye"  value="{{$servicio->incluye}}">
            
          </div>

        <div class="mt-3">
            <button type="submit" class="btn btn-primary">Guardar</button>
            <a href="{{ route('servicios.index', ['categoria_id' => $servicio->categoria_id]) }}" class="btn btn-warning">Cancelar</a>

            
            
          </div>
        
      </form>
        
   

     

        <hr class="my-5" style="border-top: 7px solid #e0a119;">

        <!----------------------- Inicio Pie de Pagina----------------->

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
                    <h5><i class="fas fa-share-alt"></i> Síguenos</h5>  </div>
                 <div class="card-body">
                    <p>
                        <a href="#" class="btn btn-primary btn-sm"><i class="fab fa-facebook-f"></i> Facebook</a>
                        <a href="#" class="btn btn-danger btn-sm"><i class="fab fa-instagram"></i> Instagram</a>
                        <a href="#" class="btn btn-info btn-sm"><i class="fab fa-twitter"></i> Twitter</a>
                    </p>
                 </div><!-- cierre Div card-body-->
            </div><!-- cierre Div card text-center-->
        </div><!-- cierre Div col-md-4 mb-4-->
    </div>
</div>
<!----------------------- Fin Pie de Pagina----------------->
</div>  


        


       

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script>
        function showGardenModal(gardenName) {
            document.getElementById('modalServiceName').textContent = `Has obtenido el Accesorio: ${gardenName}`;
            var confirmationModal = new bootstrap.Modal(document.getElementById('confirmationModal'));
            confirmationModal.show();
        }
    </script>
</x-app-layout>
