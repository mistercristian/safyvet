<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold text-xl text-gray-800 leading-tight d-flex justify-content-center">
            {{ __('Accesorios') }}
        </h1>
    </x-slot>

    <style>
        .custom-tittle{
            font-size: 2rem; 
            font-weight: bold; 
        }
    </style>

<div class="container mt-5">
    <h1 class="text-center mb-4 custom-tittle">Nuestros Accesorios</h1>
    <div class="row">

        <!-- ACCESORIOS 1-->

        <div class="col-md-4">
            <div class="card" style="width: 100%;">
                <img src="{{ asset('img/productos/accesorios/reino.jpg') }}" class="card-img-top" alt="Reino" style="height: 200px; object-fit: cover;">
                <div class="card-body">
                    <div class="d-flex justify-content-center">
                        <h5 class="card-title">Reino de Roma</h5>
                    </div>
                    <div class="d-flex justify-content-center">
                        <p class="card-text">Los rascadores y gimnasios son indispensables para nuestros gatos porque permiten limar sus uñas. </p>
                    </div>
                    <br>
                    <div class="d-flex justify-content-center">
                        <a href="#bano-terapeutico" class="btn btn-warning">Comprar</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- ACCESORIOS 2-->

        <div class="col-md-4">
            <div class="card" style="width: 100%;">
                <img src="{{ asset('img/productos/accesorios/comedero.jpg') }}" class="card-img-top" alt="Masajes" style="height: 200px; object-fit: cover;">
                <div class="card-body">
                    <div class="d-flex justify-content-center">
                        <h5 class="card-title">Comederos</h5>
                    </div>
                    <div class="d-flex justify-content-center">
                        <p class="card-text">Elaborados con materiales que no son tóxicos para las mascotas ya que no se usan pinturas o barnices.</p>
                    </div>
                    <br>
                    <div class="d-flex justify-content-center">
                        <a href="#masajes" class="btn btn-warning">Comprar</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- ACCESORIOS 3-->

        <div class="col-md-4">
            <div class="card" style="width: 100%;">
                <img src="{{ asset('img/productos/accesorios/pethouse.jpg') }}" class="card-img-top" alt="Corte de Pelo" style="height: 200px; object-fit: cover;">
                <div class="card-body">
                    <div class="d-flex justify-content-center">
                        <h5 class="card-title">Pet House</h5>
                    </div>
                    <div class="d-flex justify-content-center">
                        <p class="card-text">Hechos con madera de pino tratada con cera de abeja, aceite de linaza y antipolillas.</p>
                    </div>
                    <br>
                    <div class="d-flex justify-content-center">
                        <a href="#corte-pelo" class="btn btn-warning">Comprar</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- ACCESORIOS 4-->

        <div class="col-md-4">
            <div class="card" style="width: 100%;">
                <img src="{{ asset('img/productos/accesorios/dog.jpg') }}" class="card-img-top" alt="Baño Terapéutico" style="height: 200px; object-fit: cover;">
                <div class="card-body">
                    <div class="d-flex justify-content-center">
                        <h5 class="card-title">Chaleco Dog</h5>
                    </div>
                    <div class="d-flex justify-content-center">
                        <p class="card-text">El chaleco CHALMYS la mejor solución para la ansiedad de tu Mascota..</p>
                    </div>
                    <br>
                    <div class="d-flex justify-content-center">
                        <a href="#bano-terapeutico" class="btn btn-warning">Comprar</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- ACCESORIOS 5-->

        <div class="col-md-4">
            <div class="card" style="width: 100%;">
                <img src="{{ asset('img/productos/accesorios/cat.jpg') }}" class="card-img-top" alt="Masajes" style="height: 200px; object-fit: cover;">
                <div class="card-body">
                    <div class="d-flex justify-content-center">
                        <h5 class="card-title">Chaleco Dog</h5>
                    </div>
                    <div class="d-flex justify-content-center">
                        <p class="card-text">El chaleco CHALMYS la mejor solución para la ansiedad de tu Mascota.</p>
                    </div>
                    <br>
                    <div class="d-flex justify-content-center">
                        <a href="#masajes" class="btn btn-warning">Comprar</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- ACCESORIOS 6-->

        <div class="col-md-4">
            <div class="card" style="width: 100%;">
                <img src="{{ asset('img/productos/accesorios/cat_house.jpg') }}" class="card-img-top" alt="Corte de Pelo" style="height: 200px; object-fit: cover;">
                <div class="card-body">
                    <div class="d-flex justify-content-center">
                        <h5 class="card-title">Reino de Alfheim</h5>
                    </div>
                    <div class="d-flex justify-content-center">
                        <p class="card-text">Es un gran lugar para agregar más detalles sobre tu producto como su tamaño.</p>
                    </div>
                    <br>
                    <div class="d-flex justify-content-center">
                        <a href="#corte-pelo" class="btn btn-warning">Comprar</a>
                    </div>
                </div>
            </div>
        </div>


        


    </div>
</div>


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</x-app-layout>
