<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold text-xl text-gray-800 leading-tight d-flex ">
            <h1 class="font-semibold text-xl text-gray-800 leading-tight d-flex">
                Facturacion Safyvet
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
    <h1 class="text-center mb-4 custom-tittle">Generar Factura </h1>
    
    <div class="row">

        <form action="{{ route('factura.store') }}" method="POST">
            @csrf
            <input type="hidden" name="producto_id" value="{{ $producto->id }}">
            <input type="hidden" name="valor" value="{{ $producto->price }}">
    
            <div class="mb-3">
                <label for="usuario_nombre" class="form-label">Nombre del Cliente</label>
                <input type="text" class="form-control" id="usuario_nombre" value="{{ $usuario->name }}" disabled>
            </div>
    
            <div class="mb-3">
                <label for="producto_nombre" class="form-label">Producto</label>
                <input type="text" class="form-control" id="producto_nombre" value="{{ $producto->nombre }}" disabled>
            </div>
    
            <div class="mb-3">
                <label for="valor" class="form-label">Precio Unitario</label>
                <input type="text" class="form-control" id="valor" value="${{ number_format($producto->price, 2) }}" disabled>
            </div>
    
            <div class="mb-3">
                <label for="cantidad" class="form-label">Cantidad</label>
                <input type="number" class="form-control" id="cantidad" name="cantidad" value="1" min="1" required>
            </div>

            <div class="mb-3">
                <label for="name" class="form-label">Observacion</label>
                <textarea class="form-control" id="obser"  name="obser" narows="3" value=""></textarea>
                
              </div>
    
              <div class="mb-3">
                <label for="total" class="form-label">Total</label>
                <input type="text" class="form-control" id="total" value="${{ number_format($producto->price, 2) }}" disabled>
            </div>
    
            <button type="submit" class="btn btn-primary">Confirmar Compra</button>
            <a href="{{ route('productos.index', ['categoria_id' => $producto->categoria_id]) }}" class="btn btn-secondary">Cancelar</a>
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



<script>
    document.getElementById('cantidad').addEventListener('input', function () {
        const cantidad = this.value;
        const valor = {{ $producto->price }}; // El valor debe estar sin comillas y ser un número
        const total = cantidad * valor;

        // Formatea el total a un valor monetario
        document.getElementById('total').value = `$${total.toFixed(2)}`;
    });
</script>

</x-app-layout>
