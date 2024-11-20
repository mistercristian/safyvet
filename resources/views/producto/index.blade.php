<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold text-xl text-gray-800 leading-tight d-flex ">
            <h1 class="font-semibold text-xl text-gray-800 leading-tight d-flex">
                {{  $categoria_nombre }} 
            </h1>
        </h1>
    </x-slot>

    <style>
        .custom-tittle{
            font-size: 2rem; 
            font-weight: bold; 
        }
        .btn-custom {
    height: ;: 53.6px; /* Ajusta el tamaño del botón */

}
    </style>

<div class="container mt-5">
    <h1 class="text-center mb-4 custom-tittle">Nuestros {{  $categoria_nombre }}</h1>
    @if(Auth::user()->role === 'administrador')
    <div class="col-md-1">
        <a href="{{ route('productos.create') }}" class="btn btn-success">Add</a>
        </div>
        @endif
    <div class="row">
        
        
    @foreach ($productos as $producto)

        <!-- ACCESORIOS 1-->

        <div class="col-md-4">
            <div class="card" style="width: 100%;">
                <img src="{{ asset('img/productos/'.$producto->foto) }}" class="card-img-top" alt="Reino" style="height: 200px; object-fit: cover;">
                <div class="card-body">
                    <div class="d-flex justify-content-center">
                        <h5 class="card-title">{{$producto->nombre}}</h5>
                    </div>
                    <div class="d-flex justify-content-center">
                        <p class="card-text">{{$producto->descripcion}} </p>
                    </div>

                    <div class="d-flex justify-content-center">
                         <p class="card-text">Stock: {{ round($producto->stock) }} </p>
                    </div>

                    <div class="d-flex justify-content-center">
                    <strong><p class="card-text">Valor: {{ round($producto->price) }} </p></strong>
                    </div>



                    <br>
                     <div class="d-flex justify-content-center">
                        <button onclick="window.location.href='{{ route('factura.create', ['id' => $producto->id]) }}'" class="btn btn-warning">
                            Comprar
                        </button>
                    
                            @if(Auth::user()->role === 'administrador')

                        
                            <button onclick="window.location.href='{{ route('productos.edit', ['id' => $producto->id]) }}'" class="btn btn-info" >
                                Editar
                            </button>

                           

                            <form action="{{route('productos.destroy', ['producto'=>$producto->id])}}" method="POST" >
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


        


        <div class="modal fade" id="confirmationModal" tabindex="-1" aria-labelledby="confirmationModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="confirmationModalLabel">Producto Obtenido</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                    </div>
                    <div class="modal-body text-center">
                        <div class="d-flex justify-content-center">
                            <img src="{{ asset('img/check-icon.png') }}" alt="Check" height="150px" width="150px" class="check-icon">
                        </div>
                        <p id="modalServiceName"></p>
                        <p>Tu Accesorio ha sido solicitado correctamente. Nos pondremos en contacto contigo para confirmar los detalles.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
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
