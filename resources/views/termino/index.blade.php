<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-x5 text-gray-800 leading-tight">
            {{ __('Terminos Y condiciones') }}
        </h2>
    </x-slot>
    
    <div class="link bootstrap">
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">

                       
                        <html lang="en">
                        <head>
                            <meta charset="UTF-8">
                            <meta name="viewport" content="width=device-width, initial-scale=1.0">
                            <meta http-equiv="X-UA-Compatible" content="ie=edge">
                            
                            <title>Politicas</title>
                            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
                            <style>

                                .Parrafo_info{
                                   color: darkgray;
                                    text-align: center;
                                }

                                .container {
                                    max-width: 100%;
                                    height: auto;
                                }
                                .Buscar {
                                    display: contents;
                                    justify-content: center; /* Centra horizontalmente */
                                    align-items: center; /* Centra verticalmente (opcional) */
                                    height: 50px; 
                                }
                                .Buscar-input {
                                    border-color: #F19501; /* Mantiene el color del borde al hacer foco en el input */
                                }
                                .Buscar-input:focus {
                                    border-color: #F19501; /* Mantiene el color del borde al hacer foco en el input */
                                    box-shadow: 5px 0 5px #F19501; 
                                }

                                /*-----Acordion CCS */

                                .accordion-button {
                                    background-color: #F19501; /* Color de fondo */
                                    color: white; /* Color del texto */
                                }

                                /* Cambiar el color del fondo cuando el acordeón está colapsado */
                                .accordion-button.collapsed {
                                    background-color: #ffffff; /* Color cuando está cerrado */
                                    color: #000000; /* Color del texto */
                                }

                                /* Cambiar el color de fondo al hacer hover sobre los botones */
                                .accordion-button:hover {
                                    background-color: #F19501; /* Color al pasar el mouse */
                                }

                                /* Cambiar el color del borde del acordeón */
                                .accordion-item {
                                    border-color: #F19501; /* Color del borde */
                                   
                                }

                        

                            </style>
                        </head>
                        <body>
                            <div class="container d-flex justify-content-center">
                                <img src="{{ asset('img/safivet2.png') }}" alt="safy">
                            </div>
                            <br>
                            <p class="Parrafo_info">Información importante sobre nuestros Terminos Y condiciones</p>
                            <br>
                            
                            <div class="Buscar">
                                <form class="d-flex justify-content-center" onsubmit="return false;">
                                    <input id="searchInput" class="form-control form-control-sm me-2 w-50 Buscar-input" type="search" placeholder="Search" aria-label="Search" oninput="filterAccordion()">
                                    <button class="btn btn-outline-Light" type="submit">
                                        <img src="https://png.pngtree.com/png-clipart/20230401/original/pngtree-magnifying-glass-line-icon-png-image_9015864.png" alt="Lupa" height="20px" width="20px">
                                    </button>
                                </form>
                            </div>
                            <br>

                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                <div class="accordion-item">
                                  <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                        • Aceptación de los Términos
                                    </button>
                                  </h2>
                                  <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body"><p>Al acceder y utilizar los servicios de SAFYVET, usted acepta cumplir y estar sujeto a estos Términos y Condiciones. Si no está de acuerdo con alguna parte de estos términos, no podrá utilizar nuestros servicios. </p> </div>
                                  </div>
                                </div>
                                <div class="accordion-item">
                                  <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                        •Descripción de Servicios
                                    </button>
                                  </h2>
                                  <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body"><p>SAFYVET ofrece una amplia gama de servicios veterinarios, incluyendo pero no limitado a:</p>
                                        <li>Consultas y exámenes de rutina</li>
                                        <li>Vacunaciones</li>
                                        <li>Cirugías menores y mayores</li>
                                        <li>Tratamientos dentales</li>
                                        <li>Diagnóstico por imágenes (rayos X, ultrasonido)</li>
                                        <li>Servicios de laboratorio</li>
                                        <li>Cuidados de emergencia</li>

                                    </div>
                                  </div>
                                </div>
                                <div class="accordion-item">
                                  <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                        • Responsabilidades del Cliente
                                    </button>
                                  </h2>
                                  <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body"><p>Los propietarios son responsables de:</p>
                                        <li>Proporcionar información precisa sobre la salud y el historial médico de su mascota</li>
                                            <li>Seguir las instrucciones de tratamiento y cuidado proporcionadas por nuestros veterinarios</li>
                                            <li>Mantener las citas programadas o cancelar con la debida anticipación</li>
                                            <li>Mantener a su mascota bajo control en nuestras instalaciones</li>
                                            <li>Pagar por los servicios prestados en el momento de la visita</li>

                                    </div>
                                  </div>

                                  
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseLimi" aria-expanded="false" aria-controls="flush-collapseLimi">
                                        • Limitación de Responsabilidad
                                      </button>
                                    </h2>
                                    <div id="flush-collapseLimi" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                      <div class="accordion-body"><p> SAFYVET y sus empleados no serán responsables por daños indirectos, incidentales o consecuentes que surjan del
                                        uso de nuestros servicios. Nuestra responsabilidad se limita al costo de los servicios prestados. En caso de
                                        negligencia médica, la responsabilidad se determinará de acuerdo con las leyes aplicables.</p>
                                      </div>
                                    </div>
                              </div>

                              <div class="accordion-item">
                                    <h2 class="accordion-header">
                                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseModi" aria-expanded="false" aria-controls="flush-collapseModi">
                                        • Modificaciones a los Términos
                                      </button>
                                    </h2>
                                    <div id="flush-collapseModi" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                      <div class="accordion-body"><p> SAFYVET se reserva el derecho de modificar estos términos en cualquier momento. Los cambios entrarán en vigor
                                        inmediatamente después de su publicación en nuestro sitio web. Es su responsabilidad revisar periódicamente
                                        estos términos para mantenerse informado de cualquier actualización.
                                      </p>

                                      </div>
                                    </div>
                              </div>


                              <div class="accordion-item">
                                <h2 class="accordion-header">
                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseApli" aria-expanded="false" aria-controls="flush-collapseApli">
                                    • Ley Aplicable
                                  </button>
                                </h2>
                                <div id="flush-collapseApli" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                  <div class="accordion-body"><p> Estos Términos y Condiciones se regirán e interpretarán de acuerdo con las leyes de [insertar jurisdicción],
                                    sin tener en cuenta sus disposiciones sobre conflictos de leyes.
                                  </p>

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

</div>  

<hr class="my-5" style="border-top: 7px solid #e0a119;">
                               
                           
                                <script>
                                function filterAccordion() {
                                    const input = document.getElementById('searchInput');
                                    const filter = input.value.toLowerCase();
                                    const accordionItems = document.querySelectorAll('.accordion-item');

                                    accordionItems.forEach(item => {
                                        const header = item.querySelector('.accordion-header button');
                                        if (header.textContent.toLowerCase().includes(filter)) {
                                            item.style.display = ''; // Mostrar el item
                                        } else {
                                            item.style.display = 'none'; // Ocultar el item
                                        }
                                    });
                                }
                                </script>


                            <!-- Option 1: Bootstrap Bundle with Popper -->
                            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
                        </body>
                        </html>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>