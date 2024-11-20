<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight"> {{ __('Reporte') }} </h2>
    </x-slot>

    <style>
        .custom-tittle {
            font-size: 2rem;
            font-weight: bold;
        }

        .btn-circle {
            display: inline-block;
            width: 100px;
            height: 100px;
            border-radius: 50%;
            overflow: hidden;
            border: none;
            transition: transform 0.3s ease;
            margin-bottom: 10px;
        }

        .btn-circle:hover {
            transform: scale(1.05);
        }

        .img-circle {
            width: 100%;
            height: auto;
            display: block;
            border-radius: 50%;
            object-fit: cover;
        }

        .card {
            text-align: center;
        }
        /* Ajustar el tamaño del gráfico */
#facturasPorCategoriaChart {
    width: 400px; /* Hace que el gráfico ocupe el 100% del ancho del contenedor */
    height: 400px; /* Ajusta la altura del gráfico */
}

    </style>

    <h2 class="text-center custom-title">Reportería</h2><br>

    <div class="container">
        <!-- Gráfico -->
        <div class="col-md-6">
            <div class="col-md-4">
                <h4>Facturas por Categoría</h4>
                <canvas id="facturasPorCategoriaChart"></canvas>
            </div>

            <!-- Tabla: Productos comprados -->
            <div class="col-md-6">
                <h4>Productos Comprados</h4>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Producto</th>
                            <th>Cantidad</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($productosComprados as $producto)
    <tr>
        <td>{{ $producto->producto->nombre }}</td> <!-- Nombre del producto -->
        <td>{{ $producto->cantidad }}</td> <!-- Cantidad total comprada -->
        
    </tr>
@endforeach

                    </tbody>
                </table>
            </div>
        </div>

        <hr class="my-5" style="border-top: 7px solid #e0a119;">

        <!-- Tabla: Facturas -->
        <div class="col-md-12">
            <h4>Listado de Facturas</h4>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>factura No.</th>
                        <th>Producto</th>
                        <th>Cantidad</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($facturas as $factura)
                    <tr>
                        <td>FC{{ $factura->id }}</td>
                        <td>{{ $factura->producto->nombre }}</td>
                        <td>{{ $factura->cantidad }}</td>
                        <td>${{ number_format($factura->total, 2) }}</td>
                        
                    </tr>
                    @endforeach
                </tbody>
            </table>
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
                        <p><i class="fas fa-envelope"></i> Email: <a
                                href="mailto:info@safyvet.com">info@safyvet.com</a>
                        </p>
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
                            <a href="https://es-la.facebook.com/login/device-based/regular/login/"
                                class="btn btn-primary btn-sm" target="_blank"><i class="fab fa-facebook-f"></i>
                                Facebook</a>
                            <a href="https://www.instagram.com/accounts/login/?next=%2Fhaoyii%2F&source=private_profile&locale=es_ES"
                                class="btn btn-danger btn-sm" target="_blank"><i class="fab fa-instagram"></i>
                                Instagram</a>
                            <a href="https://x.com/i/flow/login?input_flow_data=%7B%22requested_variant%22%3A%22eyJsYW5nIjoiZXMiLCJteCI6IjIifQ%3D%3D%22%7D"
                                class="btn btn-info btn-sm" target="_blank"><i class="fab fa-twitter"></i>
                                Twitter</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <hr class="my-5" style="border-top: 7px solid #e0a119;">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // Datos del gráfico
    const data = @json($facturasPorCategoria);
    const labels = data.map(item => item.categoria);
    const values = data.map(item => item.total_facturas);
    const percentages = data.map(item => item.porcentaje.toFixed(2));

    const ctx = document.getElementById('facturasPorCategoriaChart').getContext('2d');
    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: labels,
            datasets: [{
                label: 'Total Facturas',
                data: values,
                backgroundColor: 'rgba(54, 162, 235, 0.6)',
            }]
        },
        options: {
            plugins: {
                tooltip: {
                    callbacks: {
                        label: function(context) {
                            const index = context.dataIndex;
                            return `${context.raw} facturas (${percentages[index]}%)`;
                        }
                    }
                }
            }
        }
    });
</script>


</x-app-layout>
