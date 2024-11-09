
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-x5 text-gray-800 leading-tight">
            {{ __('Politicas') }}
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
                                    box-shadow: 5px 0 5px rgba(245, 113, 83, 0.925); 
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
                                <img src="{{ asset('img/safivet.png') }}" alt="safy">
                            </div>
                            <br>
                            <p class="Parrafo_info">Información importante sobre nuestros servicios y procedimientos</p>
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
                                    <h2 class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                            • Política de Tratamiento de Datos Personales
                                        </button>
                                    </h2>
                                    <div id="flush-collapseOne" class="accordion-collapse collapse " aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body"><p>En SAFYVET, estamos comprometidos con la protección de la privacidad y el manejo adecuado de los datos personales que recopilamos de nuestros clientes. Esta política describe cómo recopilamos, utilizamos, almacenamos y protegemos la información personal que nos proporcionas al utilizar nuestros servicios, tanto en línea como en nuestras instalaciones físicas.</p>
    
                                            <ol>
                                                <li>
                                                    <strong>Información Recopilada:</strong> 
                                                    <p>Recopilamos datos personales como nombre, dirección, número de teléfono, correo electrónico, historial de salud de tus mascotas y cualquier otra información relevante para brindar nuestros servicios de cuidado veterinario, venta de productos y jardín de paseos.</p>
                                                </li>
                                                <li>
                                                    <strong>Finalidad del Tratamiento:</strong>
                                                    <p>Utilizamos tus datos para:</p>
                                                    <ul>
                                                        <li>Gestionar citas y servicios veterinarios.</li>
                                                        <li>Ofrecerte productos y servicios como alimentos, medicamentos y accesorios para tus mascotas.</li>
                                                        <li>Comunicarnos contigo sobre promociones, eventos y novedades relacionadas con el cuidado de tu mascota.</li>
                                                        <li>Cumplir con obligaciones legales y administrativas.</li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <strong>Derechos del Usuario:</strong>
                                                    <p>Tienes el derecho de:</p>
                                                    <ul>
                                                        <li>Acceder a tus datos personales.</li>
                                                        <li>Solicitar la corrección o actualización de información.</li>
                                                        <li>Solicitar la eliminación de tus datos cuando sea legalmente viable.</li>
                                                        <li>Revocar el consentimiento para el uso de tus datos personales.</li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <strong>Seguridad de los Datos:</strong>
                                                    <p>Implementamos medidas de seguridad físicas, electrónicas y administrativas para proteger tus datos personales y garantizar su confidencialidad, evitando accesos no autorizados o el uso indebido.</p>
                                                </li>
                                                <li>
                                                    <strong>Contacto:</strong>
                                                    <p>Si tienes alguna duda o deseas ejercer tus derechos sobre tus datos personales, puedes contactarnos a través de nuestro correo electrónico o teléfono disponible en la página de contacto.</p>
                                                </li>
                                            </ol></div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                            • Política de Privacidad
                                        </button>
                                    </h2>
                                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body"><p>En SAFYVET, la protección de los datos personales de nuestros clientes y sus mascotas es una prioridad. Esta política tiene como objetivo informarte sobre cómo recopilamos, utilizamos, almacenamos y protegemos la información personal que nos proporcionas al utilizar nuestros servicios. Al acceder a nuestros servicios, aceptas la recopilación y el tratamiento de tus datos personales según lo establecido en esta política.</p>
                                            <strong>1. Responsable del Tratamiento</strong>
                                            <p>SAFYVET es el responsable del tratamiento de los datos personales que recopilamos. Nos comprometemos a manejar tu información de manera ética y de acuerdo con las leyes vigentes sobre protección de datos.</p>
                                            
                                            <strong>2. Información que Recopilamos</h2></strong>
                                            <p>Recopilamos diversos tipos de datos personales, que incluyen:</p>
                                            <ul>
                                                <li><strong>Datos de Identificación:</strong>
                                                    <ul>
                                                        <li>Nombre completo</li>
                                                        <li>Dirección</li>
                                                        <li>Número de teléfono</li>
                                                        <li>Correo electrónico</li>
                                                    </ul>
                                                </li>
                                                <li><strong>Datos Relacionados con Mascotas:</strong>
                                                    <ul>
                                                        <li>Nombre, especie, raza y edad de tus mascotas</li>
                                                        <li>Historial de salud y tratamientos veterinarios</li>
                                                    </ul>
                                                </li>
                                                <li><strong>Datos de Facturación:</strong>
                                                    <ul>
                                                        <li>Información de tarjetas de crédito o débito</li>
                                                        <li>Historial de compras y servicios</li>
                                                    </ul>
                                                </li>
                                            </ul>
                                    
                                            <strong>3. Finalidades del Tratamiento</strong>
                                            <p>Los datos personales que recopilamos serán utilizados para las siguientes finalidades:</p>
                                            <ul>
                                                <li><strong>Gestión de Servicios:</strong>
                                                    <ul>
                                                        <li>Agendar y gestionar citas veterinarias.</li>
                                                        <li>Proveer servicios de atención y cuidado de mascotas.</li>
                                                    </ul>
                                                </li>
                                                <li><strong>Comunicación:</strong>
                                                    <ul>
                                                        <li>Enviar información relevante sobre servicios, promociones y novedades.</li>
                                                        <li>Contactarte para recordatorios de citas y seguimiento de tratamientos.</li>
                                                    </ul>
                                                </li>
                                                <li><strong>Cumplimiento Legal:</strong>
                                                    <ul>
                                                        <li>Cumplir con obligaciones legales y regulatorias.</li>
                                                    </ul>
                                                </li>
                                            </ul>
                                    
                                            <strong>4. Base Legal para el Tratamiento</strong>
                                            <p>El tratamiento de tus datos personales se basa en:</p>
                                            <ul>
                                                <li><strong>Consentimiento:</strong> Al proporcionar tus datos, das tu consentimiento para su tratamiento.</li>
                                                <li><strong>Relación Contractual:</strong> El tratamiento es necesario para la ejecución de un contrato en el que eres parte.</li>
                                                <li><strong>Obligación Legal:</strong> El tratamiento es necesario para el cumplimiento de obligaciones legales.</li>
                                            </ul>
                                    
                                            <strong>5. Derechos de los Titulares de Datos</strong>
                                            <p>Como titular de tus datos personales, tienes derechos que puedes ejercer, tales como:</p>
                                            <ul>
                                                <li><strong>Acceso:</strong> Solicitar información sobre los datos personales que poseemos.</li>
                                                <li><strong>Corrección:</strong> Solicitar la corrección de tus datos si son inexactos o incompletos.</li>
                                                <li><strong>Suprimir:</strong> Solicitar la eliminación de tus datos personales en ciertos casos.</li>
                                                <li><strong>Revocación del Consentimiento:</strong> Puedes retirar tu consentimiento en cualquier momento.</li>
                                            </ul>
                                    
                                            <strong>6. Seguridad de los Datos</strong>
                                            <p>Implementamos medidas técnicas y organizativas para proteger tus datos personales contra el acceso no autorizado, el uso indebido, la alteración y la pérdida. Sin embargo, recuerda que ningún sistema es completamente seguro.</p>
                                    
                                            <strong>7. Transferencia de Datos</strong>
                                            <p>Podemos compartir tus datos personales con proveedores de servicios que colaboran con nosotros, como servicios de pago y envío de correos. Estos proveedores están obligados a proteger tus datos y no pueden usarlos para ningún otro propósito.</p>
                                    
                                            <strong>8. Conservación de Datos</strong>
                                            <p>Conservaremos tus datos personales durante el tiempo necesario para cumplir con las finalidades establecidas en esta política, y en cumplimiento de nuestras obligaciones legales.</p>
                                    
                                            <strong>9. Cambios en la Política</strong>
                                            <p>Nos reservamos el derecho a modificar esta Política de Tratamiento de Datos Personales en cualquier momento. Cualquier cambio será publicado en nuestro sitio web y, si es necesario, te informaremos de los cambios relevantes.</p>
                                    
                                            <strong>10. Contacto</strong>
                                            <p>Si tienes preguntas, inquietudes o deseas ejercer tus derechos relacionados con tus datos personales, no dudes en contactarnos:</p>
                                            <ul>
                                                <li><strong>Correo Electrónico:</strong> <a href="mailto:correo@safivet.com">correo@safivet.com</a></li>
                                                <li><strong>Teléfono:</strong> (123) 456-7890</li>
                                                <li><strong>Dirección:</strong> Avenida Veterinaria #123, Ciudad, País</li>
                                            </ul>
                                        
                                        
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                            • Política de Cookies
                                        </button>
                                    </h2>
                                    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body"><strong>1. ¿Qué son las cookies?</strong>
                                            <p>Las cookies son pequeños archivos de texto que se almacenan en tu dispositivo (computadora, tablet o teléfono) cuando visitas un sitio web. Estas cookies permiten que el sitio web reconozca tu dispositivo y recopile información sobre tus preferencias y hábitos de navegación.</p>
                                            
                                            <strong>2. ¿Para qué utilizamos las cookies?</strong>
                                            <p>Utilizamos cookies para:</p>
                                            <ul>
                                                <li>Mejorar la experiencia del usuario en nuestro sitio web.</li>
                                                <li>Analizar el tráfico y comportamiento del usuario en nuestro sitio.</li>
                                                <li>Recordar tus preferencias y configuraciones para futuras visitas.</li>
                                                <li>Ofrecerte contenidos y publicidad personalizada.</li>
                                            </ul>
                                            
                                            <strong>3. Tipos de cookies que utilizamos</strong>
                                            <p>En SAFYVET utilizamos los siguientes tipos de cookies:</p>
                                            <ul>
                                                <li><strong>Cookies de sesión:</strong> Estas cookies son temporales y se eliminan una vez que cierras tu navegador.</li>
                                                <li><strong>Cookies permanentes:</strong> Estas cookies permanecen en tu dispositivo por un período determinado o hasta que las elimines.</li>
                                                <li><strong>Cookies de terceros:</strong> Utilizamos cookies de servicios de terceros para analizar el tráfico, realizar publicidad y mejorar nuestros servicios.</li>
                                            </ul>
                                    
                                            <strong>4. Control de cookies</strong>
                                            <p>Puedes controlar y gestionar el uso de cookies en tu navegador. La mayoría de los navegadores permiten la eliminación de cookies y la configuración de preferencias de cookies. Sin embargo, ten en cuenta que deshabilitar las cookies puede afectar tu experiencia en nuestro sitio web.</p>
                                    
                                            <strong>5. Cambios en la Política de Cookies</strong>
                                            <p>Nos reservamos el derecho a modificar esta Política de Cookies en cualquier momento. Cualquier cambio será publicado en nuestro sitio web y, si es necesario, te informaremos de los cambios relevantes.</p>
                                    
                                            <strong>6. Contacto</strong>
                                            <p>Si tienes preguntas o inquietudes sobre nuestra Política de Cookies, no dudes en contactarnos:</p>
                                            <ul>
                                                <li><strong>Correo Electrónico:</strong> <a href="mailto:correo@safivet.com">correo@safivet.com</a></li>
                                                <li><strong>Teléfono:</strong> (123) 456-7890</li>
                                                <li><strong>Dirección:</strong> Avenida Veterinaria #123, Ciudad, País</li>
                                            </ul></div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingfour">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsefour" aria-expanded="false" aria-controls="flush-collapsefour">
                                            • Política de Devoluciones y Reembolsos
                                        </button>
                                    </h2>
                                    <div id="flush-collapsefour" class="accordion-collapse collapse" aria-labelledby="flush-headingfour" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body"><p>En SAFYVET, nos comprometemos a ofrecer productos y servicios de la más alta calidad. Si no estás completamente satisfecho con tu compra, estamos aquí para ayudarte.</p>
                                            <strong>1. Productos Elegibles para Devolución</strong>
                                            <p>Los siguientes productos son elegibles para devolución:</p>
                                            <ul>
                                                <li>Productos en su estado original y sin abrir.</li>
                                                <li>Productos defectuosos o dañados.</li>
                                                <li>Productos que no coincidan con lo que ordenaste.</li>
                                            </ul>
                                            
                                            <strong>2. Proceso de Devolución</strong>
                                            <p>Para devolver un producto, sigue estos pasos:</p>
                                            <ol>
                                                <li>Contacta nuestro servicio de atención al cliente a través de <a href="mailto:correo@safivet.com">correo@safivet.com</a> para iniciar el proceso de devolución.</li>
                                                <li>Proporciona detalles sobre el producto y el motivo de la devolución.</li>
                                                <li>Recibirás instrucciones sobre cómo proceder con la devolución.</li>
                                            </ol>
                                            
                                            <strong>3. Plazo para Devoluciones</strong>
                                            <p>Tienes un plazo de 30 días a partir de la fecha de compra para solicitar una devolución. Los artículos devueltos después de este período no serán aceptados.</p>
                                    
                                            <strong>4. Reembolsos</strong>
                                            <p>Una vez que recibamos tu artículo devuelto, lo inspeccionaremos y te notificaremos sobre la aprobación o el rechazo de tu reembolso. Si es aprobado, se procesará un reembolso automáticamente a tu método de pago original dentro de un plazo razonable.</p>
                                    
                                            <strong>5. Productos No Elegibles para Devolución</strong>
                                            <p>Los siguientes productos no son elegibles para devolución:</p>
                                            <ul>
                                                <li>Productos abiertos o utilizados.</li>
                                                <li>Tarjetas de regalo y productos en oferta.</li>
                                                <li>Servicios veterinarios ya prestados.</li>
                                            </ul>
                                    
                                            <strong>6. Gastos de Envío</strong>
                                            <p>Los gastos de envío no son reembolsables, y serás responsable de los gastos de envío para devolver los productos.</p>
                                    
                                            <strong>7. Contacto</strong>
                                            <p>Si tienes preguntas sobre nuestra Política de Devoluciones y Reembolsos, no dudes en contactarnos:</p>
                                            <ul>
                                                <li><strong>Correo Electrónico:</strong> <a href="mailto:correo@safivet.com">correo@safivet.com</a></li>
                                                <li><strong>Teléfono:</strong> (123) 456-7890</li>
                                                <li><strong>Dirección:</strong> Avenida Veterinaria #123, Ciudad, País</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingFive">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                                            • Política de Atención al Cliente
                                        </button>
                                    </h2>
                                    <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body"><p>En SAFYVET, nuestra prioridad es ofrecer un servicio de atención al cliente excepcional. Nos comprometemos a brindarte una experiencia positiva y a resolver cualquier inquietud que puedas tener respecto a nuestros servicios.</p>
                                        
                                            <strong>1. Canales de Atención</strong>
                                            <p>Ofrecemos varias formas para que te comuniques con nosotros:</p>
                                            <ul>
                                                <li><strong>Teléfono:</strong> (123) 456-7890 - Nuestro equipo está disponible para atenderte de lunes a viernes de 8:00 a.m. a 6:00 p.m.</li>
                                                <li><strong>Correo Electrónico:</strong> <a href="mailto:correo@safivet.com">correo@safivet.com</a> - Responderemos a tu consulta dentro de 24 horas hábiles.</li>
                                                <li><strong>Visitas Presenciales:</strong> Avenida Veterinaria #123, Ciudad, País. Horarios de atención: lunes a viernes de 8:00 a.m. a 6:00 p.m. y sábados de 9:00 a.m. a 1:00 p.m.</li>
                                            </ul>
                                    
                                            <strong>2. Consulta de Servicios</strong>
                                            <p>Puedes consultar sobre nuestros servicios veterinarios, productos disponibles y cualquier otra inquietud relacionada. Nuestro personal capacitado está listo para ayudarte a encontrar la mejor solución para tus necesidades.</p>
                                    
                                            <strong>3. Quejas y Sugerencias</strong>
                                            <p>Valoramos tu opinión. Si tienes alguna queja o sugerencia, por favor háznoslo saber a través de cualquiera de nuestros canales de atención. Nos comprometemos a tomar tus comentarios en cuenta para mejorar continuamente nuestros servicios.</p>
                                    
                                            <strong>4. Respuesta Rápida</strong>
                                            <p>Nos esforzamos por responder a todas las consultas y quejas de manera oportuna. Nuestro objetivo es resolver cualquier problema que puedas tener dentro de las 48 horas hábiles.</p>
                                    
                                            <strong>5. Privacidad y Confidencialidad</strong>
                                            <p>Tu información es importante para nosotros. Todas las interacciones se manejarán con la máxima confidencialidad y se utilizarán únicamente para atender tus consultas y proporcionar un servicio efectivo.</p>
                                    
                                            <strong>6. Horarios de Atención</strong>
                                            <p>Estamos disponibles para atenderte en los siguientes horarios:</p>
                                            <ul>
                                                <li><strong>Lunes a Viernes:</strong> 8:00 a.m. - 6:00 p.m.</li>
                                                <li><strong>Sábados:</strong> 9:00 a.m. - 1:00 p.m.</li>
                                                <li><strong>Días Festivos:</strong> Cerrado.</li>
                                            </ul>
                                    
                                            <strong>7. Contacto</strong>
                                            <p>Para cualquier consulta adicional, no dudes en contactarnos:</p>
                                            <ul>
                                                <li><strong>Teléfono:</strong> (123) 456-7890</li>
                                                <li><strong>Correo Electrónico:</strong> <a href="mailto:correo@safivet.com">correo@safivet.com</a></li>
                                                <li><strong>Dirección:</strong> Avenida Veterinaria #123, Ciudad, País</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingSix">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                                            • Política de Seguridad
                                        </button>
                                    </h2>
                                    <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body"><p>En SAFYVET, la seguridad de la información de nuestros clientes y de sus mascotas es nuestra principal prioridad. Implementamos diversas medidas para proteger los datos que recopilamos y utilizamos en nuestra operación diaria.</p>
                                            <strong>1. Protección de Datos Personales</strong>
                                            <p>Adoptamos prácticas de seguridad que incluyen controles físicos, electrónicos y administrativos para proteger la información personal que recopilamos de nuestros clientes. Esto incluye datos como nombre, dirección, número de teléfono y cualquier otra información relevante.</p>
                                    
                                            <strong>2. Acceso Restringido</strong>
                                            <p>El acceso a los datos personales está restringido a empleados autorizados que necesitan esta información para realizar su trabajo. Todos los empleados reciben formación regular en materia de seguridad de datos y privacidad.</p>
                                    
                                            <strong>3. Almacenamiento Seguro</strong>
                                            <p>La información se almacena en sistemas seguros con acceso controlado. Utilizamos tecnología de encriptación para proteger los datos sensibles tanto en tránsito como en reposo.</p>
                                    
                                            <strong>4. Evaluaciones de Seguridad</strong>
                                            <p>Realizamos evaluaciones de seguridad de manera regular para identificar y mitigar posibles vulnerabilidades en nuestros sistemas. Esto incluye pruebas de penetración y auditorías de seguridad internas.</p>
                                    
                                            <strong>5. Respuesta a Incidentes</strong>
                                            <p>En caso de un incidente de seguridad, contamos con un plan de respuesta que incluye la notificación inmediata a los afectados y las autoridades pertinentes, conforme a la normativa aplicable.</p>
                                    
                                            <strong>6. Protección Contra Malware</strong>
                                            <p>Implementamos software de seguridad para proteger nuestros sistemas contra virus, malware y otros tipos de ataques cibernéticos. Esto incluye firewalls, antivirus y sistemas de detección de intrusiones.</p>
                                    
                                            <strong>7. Concienciación del Personal</strong>
                                            <p>Realizamos capacitaciones periódicas para asegurar que todos nuestros empleados estén al tanto de las políticas de seguridad y comprendan la importancia de proteger la información de nuestros clientes.</p>
                                    
                                            <strong>8. Actualización de Políticas</strong>
                                            <p>Revisamos y actualizamos nuestras políticas de seguridad de manera regular para adaptarlas a las mejores prácticas y a los cambios en la normativa. Esta política puede ser modificada en función de la evolución de nuestra empresa y de la tecnología.</p>
                                    
                                            <strong>9. Contacto</strong>
                                            <p>Si tienes alguna pregunta o inquietud sobre nuestras políticas de seguridad, no dudes en contactarnos:</p>
                                            <ul>
                                                <li><strong>Teléfono:</strong> (123) 456-7890</li>
                                                <li><strong>Correo Electrónico:</strong> <a href="mailto:correo@safivet.com">correo@safivet.com</a></li>
                                                <li><strong>Dirección:</strong> Avenida Veterinaria #123, Ciudad, País</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingSeven">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseSeven">
                                            • Política de Citas y Cancelaciones
                                        </button>
                                    </h2>
                                    <div id="flush-collapseSeven" class="accordion-collapse collapse" aria-labelledby="flush-headingSeven" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body"><p>En SAFYVET, entendemos que la vida puede ser impredecible, por lo que hemos establecido una política de citas y cancelaciones para facilitar el acceso a nuestros servicios veterinarios mientras garantizamos la organización y eficiencia en nuestra agenda.</p>
                                        
                                            <strong>1. Citas</strong>
                                            <p>Te recomendamos programar tus citas con anticipación para asegurar la disponibilidad del veterinario y del servicio requerido. Puedes hacerlo a través de nuestra página web, por teléfono o visitando nuestras instalaciones.</p>

                                            <strong>2. Confirmación de Citas</strong>
                                            <p>Te enviaremos un recordatorio de tu cita un día antes, a través de correo electrónico o mensaje de texto. Es importante que confirmes tu asistencia para ayudarnos a organizar mejor nuestra agenda.</p>

                                            <strong>3. Cancelaciones</strong>
                                            <p>Si necesitas cancelar o reprogramar tu cita, te pedimos que lo hagas con al menos 24 horas de anticipación. Esto nos permitirá ofrecer ese espacio a otros clientes que necesiten nuestros servicios.</p>

                                            <strong>4. No Show</strong>
                                            <p>Si no te presentas a tu cita sin previo aviso, se considerará como un "no show". Después de dos "no shows", nos reservamos el derecho de solicitar un depósito para futuras citas.</p>

                                            <strong>5. Cambios de Cita</strong>
                                            <p>Si deseas cambiar la fecha o la hora de tu cita, puedes hacerlo llamando a nuestro servicio al cliente o a través de nuestra plataforma en línea, siempre que se realice con más de 24 horas de antelación.</p>

                                            <strong>6. Excepciones</strong>
                                            <p>Entendemos que pueden surgir situaciones imprevistas. Si te encuentras en una situación que impide cumplir con nuestra política de cancelación, por favor contáctanos para discutir tu caso.</p>

                                            <strong>7. Contacto</strong>
                                            <p>Si tienes preguntas sobre nuestra política de citas y cancelaciones, no dudes en contactarnos:</p>
                                            <ul>
                                                <li><strong>Teléfono:</strong> (123) 456-7890</li>
                                                <li><strong>Correo Electrónico:</strong> <a href="mailto:correo@safivet.com">correo@safivet.com</a></li>
                                                <li><strong>Dirección:</strong> Avenida Veterinaria #123, Ciudad, País</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingeight">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseeight" aria-expanded="false" aria-controls="flush-collapseeight">
                                            • Política de Envíos
                                        </button>
                                    </h2>
                                    <div id="flush-collapseeight" class="accordion-collapse collapse" aria-labelledby="flush-headingeight" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body"><p>En SAFYVET, nos comprometemos a ofrecerte un servicio de envío eficiente y seguro para que recibas los productos que adquieras en nuestra tienda en línea de manera rápida y confiable.</p>
                                        
                                            <strong>1. Ámbito de Aplicación</strong>
                                            <p>Esta política se aplica a todos los pedidos realizados a través de nuestro sitio web, donde ofrecemos una variedad de productos para el cuidado de tus mascotas.</p>

                                            <strong>2. Procesamiento de Pedidos</strong>
                                            <p>Los pedidos se procesarán en un plazo de 1 a 3 días hábiles después de la confirmación del pago. Te enviaremos un correo electrónico de confirmación una vez que tu pedido haya sido enviado.</p>

                                            <strong>3. Métodos de Envío</strong>
                                            <p>Ofrecemos diferentes métodos de envío, incluyendo:</p>
                                            <ul>
                                                <li><strong>Envío Estándar:</strong> Entrega en un plazo de 3 a 7 días hábiles.</li>
                                                <li><strong>Envío Express:</strong> Entrega en 1 a 2 días hábiles (sujeto a disponibilidad).</li>
                                            </ul>

                                            <strong>4. Tarifas de Envío</strong>
                                            <p>Las tarifas de envío varían según el método seleccionado y la ubicación de entrega. Los costos de envío se calcularán al finalizar la compra.</p>

                                            <strong>5. Seguimiento del Envío</strong>
                                            <p>Una vez que tu pedido haya sido enviado, recibirás un número de seguimiento por correo electrónico. Podrás utilizar este número para rastrear el estado de tu envío en línea.</p>

                                            <strong>6. Problemas con el Envío</strong>
                                            <p>Si tu pedido no llega en el plazo estipulado, o si recibes un artículo dañado o incorrecto, contáctanos de inmediato para que podamos resolver el problema.</p>

                                            <strong>7. Cambios en la Política</strong>
                                            <p>Nos reservamos el derecho de modificar esta política de envíos en cualquier momento. Te informaremos sobre cualquier cambio a través de nuestro sitio web.</p>

                                            <strong>8. Contacto</strong>
                                            <p>Si tienes preguntas sobre nuestra política de envíos, no dudes en contactarnos:</p>
                                            <ul>
                                                <li><strong>Teléfono:</strong> (123) 456-7890</li>
                                                <li><strong>Correo Electrónico:</strong> <a href="mailto:correo@safivet.com">correo@safivet.com</a></li>
                                                <li><strong>Dirección:</strong> Avenida Veterinaria #123, Ciudad, País</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingNine">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseNine" aria-expanded="false" aria-controls="flush-collapseNine">
                                            • Política de Pago
                                        </button>
                                    </h2>
                                    <div id="flush-collapseNine" class="accordion-collapse collapse" aria-labelledby="flush-headingNine" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body"><p>En SAFYVET, queremos que tu experiencia de compra sea fácil y segura. Esta política describe los métodos de pago aceptados y las condiciones relacionadas.</p>
                                        
                                            <strong>1. Métodos de Pago Aceptados</strong>
                                            <p>Ofrecemos varias opciones de pago para que elijas la que mejor se adapte a tus necesidades:</p>
                                            <ul>
                                                <li><strong>Tarjeta de Crédito:</strong> Aceptamos todas las tarjetas de crédito principales (Visa, MasterCard, American Express).</li>
                                                <li><strong>Transferencia Bancaria:</strong> Puedes realizar una transferencia a nuestra cuenta bancaria. Los detalles serán proporcionados al finalizar la compra.</li>
                                                <li><strong>PayPal:</strong> También aceptamos pagos a través de PayPal para mayor comodidad.</li>
                                            </ul>

                                            <strong>2. Seguridad en los Pagos</strong>
                                            <p>Tu seguridad es nuestra prioridad. Todos los pagos realizados a través de nuestro sitio web están encriptados y protegidos mediante tecnologías de seguridad de última generación.</p>

                                            <strong>3. Confirmación de Pago</strong>
                                            <p>Una vez que tu pago haya sido procesado, recibirás un correo electrónico de confirmación. Esto puede tardar algunos minutos, dependiendo del método de pago utilizado.</p>

                                            <strong>4. Devoluciones y Reembolsos</strong>
                                            <p>Consulta nuestra política de devoluciones y reembolsos para obtener información sobre cómo se manejan los reembolsos en caso de que necesites devolver un producto.</p>

                                            <strong>5. Cambios en la Política</strong>
                                            <p>Nos reservamos el derecho de modificar esta política de pago en cualquier momento. Te informaremos sobre cualquier cambio a través de nuestro sitio web.</p>

                                            <strong>6. Contacto</strong>
                                            <p>Si tienes preguntas sobre nuestra política de pago, no dudes en contactarnos:</p>
                                            <ul>
                                                <li><strong>Teléfono:</strong> (123) 456-7890</li>
                                                <li><strong>Correo Electrónico:</strong> <a href="mailto:correo@safivet.com">correo@safivet.com</a></li>
                                                <li><strong>Dirección:</strong> Avenida Veterinaria #123, Ciudad, País</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingTen">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTen" aria-expanded="false" aria-controls="flush-collapseTen">
                                            • Política de Propiedad Intelectual
                                        </button>
                                    </h2>
                                    <div id="flush-collapseTen" class="accordion-collapse collapse" aria-labelledby="flush-headingTen" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body"><p>En SAFYVET, respetamos y protegemos la propiedad intelectual de todos los creadores, incluyendo la nuestra. Esta política describe los derechos de propiedad intelectual que se aplican a nuestros servicios y contenidos.</p>
                                            <strong>1. Derechos de Autor</strong>
                                            <p>Todos los contenidos presentes en este sitio web, incluyendo textos, gráficos, logotipos, imágenes, videos y software, están protegidos por derechos de autor y son propiedad de SAFYVET o de sus respectivos propietarios. Cualquier uso no autorizado de estos contenidos puede constituir una violación de los derechos de autor.</p>
                                    
                                            <strong>2. Marcas Registradas</strong>
                                            <p>Las marcas, nombres comerciales y logotipos utilizados y mostrados en nuestro sitio web son marcas registradas o no registradas de SAFYVET. No se permite su uso sin el consentimiento expreso de SAFYVET.</p>
                                    
                                            <strong>3. Licencia de Uso</strong>
                                            <p>Se concede una licencia limitada y no exclusiva para acceder y utilizar el contenido de nuestro sitio web para fines personales y no comerciales. Esta licencia no incluye la reventa o uso comercial de cualquier contenido del sitio, la recopilación y el uso de listados de productos, descripciones o precios, y cualquier uso derivado del sitio o su contenido.</p>
                                    
                                            <strong>4. Infracción de Derechos de Propiedad Intelectual</strong>
                                            <p>Si consideras que tus derechos de propiedad intelectual han sido infringidos en nuestro sitio web, por favor contáctanos de inmediato con la información pertinente para que podamos tomar las medidas adecuadas.</p>
                                    
                                            <strong>5. Cambios en la Política</strong>
                                            <p>Nos reservamos el derecho de modificar esta política de propiedad intelectual en cualquier momento. Cualquier cambio será publicado en esta página, por lo que te recomendamos revisarla periódicamente.</p>
                                    
                                            <strong>6. Contacto</strong>
                                            <p>Si tienes preguntas sobre nuestra política de propiedad intelectual, no dudes en contactarnos:</p>
                                            <ul>
                                                <li><strong>Teléfono:</strong> (123) 456-7890</li>
                                                <li><strong>Correo Electrónico:</strong> <a href="mailto:correo@safivet.com">correo@safivet.com</a></li>
                                                <li><strong>Dirección:</strong> Avenida Veterinaria #123, Ciudad, País</li>
                                            </ul>
                                        
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-heading1">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse1" aria-expanded="false" aria-controls="flush-collapse1">
                                            • Política de Accesibilidad
                                        </button>
                                    </h2>
                                    <div id="flush-collapse1" class="accordion-collapse collapse" aria-labelledby="flush-heading1" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body"><p>En SAFYVET, estamos comprometidos a garantizar la accesibilidad de nuestros servicios y de nuestro sitio web para todas las personas, incluyendo aquellas con discapacidades. Esta política describe nuestro enfoque hacia la accesibilidad y las medidas que implementamos para lograrla.</p>
                                            <strong>1. Compromiso con la Accesibilidad</strong>
                                            <p>Nos esforzamos por proporcionar una experiencia de usuario accesible a todos, sin importar sus habilidades o discapacidades. Esto incluye el cumplimiento de las pautas de accesibilidad web y la normativa legal correspondiente.</p>
                                    
                                            <strong>2. Diseño Inclusivo</strong>
                                            <p>Nuestro sitio web está diseñado teniendo en cuenta los principios de diseño inclusivo. Esto significa que se han realizado esfuerzos para asegurar que el contenido sea fácilmente navegable y comprensible para todos los usuarios.</p>
                                    
                                            <strong>3. Tecnología de Asistencia</strong>
                                            <p>Reconocemos que algunos usuarios pueden utilizar tecnologías de asistencia para acceder a nuestro sitio. Nos esforzamos por garantizar que nuestro contenido sea compatible con estas tecnologías, incluyendo lectores de pantalla y dispositivos de entrada alternativos.</p>
                                    
                                            <strong>4. Feedback y Mejora Continua</strong>
                                            <p>Valoramos el feedback de nuestros usuarios y estamos comprometidos a realizar mejoras continuas en la accesibilidad de nuestro sitio. Si encuentras alguna barrera de accesibilidad, te animamos a que nos lo hagas saber.</p>
                                    
                                            <strong>5. Recursos y Contacto</strong>
                                            <p>Para más información sobre nuestra política de accesibilidad o si necesitas asistencia adicional, no dudes en ponerte en contacto con nosotros:</p>
                                            <ul>
                                                <li><strong>Teléfono:</strong> (123) 456-7890</li>
                                                <li><strong>Correo Electrónico:</strong> <a href="mailto:correo@safivet.com">correo@safivet.com</a></li>
                                                <li><strong>Dirección:</strong> Avenida Veterinaria #123, Ciudad, País</li>
                                            </ul>
                                    
                                            <strong>6. Revisión de la Política</strong>
                                            <p>Esta política será revisada periódicamente para asegurar que seguimos cumpliendo con nuestros objetivos de accesibilidad y para reflejar cualquier cambio en nuestras prácticas o en la normativa aplicable.</p>
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

                           
                            

                            <!-- Option 1: Bootstrap Bundle with Popper -->
                            
                            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
                           
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
                       

                 
                       
                        </body>
                        </html>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
