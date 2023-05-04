@extends('template.layout')

@section('menu')

    <section class="py-5" style="background:#0f3d24a1;display:flex;">
        
                <div class="text-white" style="width:100%;margin:0 60px;">
                <h1>Acerca de nosotros</h1>
                    <p style=""> <img src="assets/img/img_nosotros.jpg" alt="About Hero" style="width:40%;box-sizing:border-box;float:right;padding:10px;">
                    City tours es una compañía joven y dinámica, amantes de la naturaleza y comprometidos con el turismo sostenible de nuestra región y del Perú, con una experiencia inigualable en el sector de turismo ofrecemos los mejores trekking, como nuestros paquetes organizados en diferentes ciudades del Perú. También somos caracterizada por el buen servicio y oferta de productos turísticos de calidad en destinos nacionales e internacionales, trabajando con un equipo de más de 60 personas comprometido con cumplir los sueños de viaje de nuestros clientes. Coordinamos todos los servicios de un paquete turístico, como tiquetes aéreos, alojamiento, alimentación, traslados, tours, asistencias médicas, alquiler de autos, cruceros. entre otros. Igualmente gestionamos todos los servicios de viajes corporativos, convenciones, viajes de incentivos y eventos.
                    <b>Misión:</b>  Inspirar y hacer vivir experiencias de viaje memorables. <b>Visión:</b>  Ser una empresa sólida, confiable y socialmente responsable, reconocida por sus clientes por la calidad y el servicio. Con un equipo humano profesional, amable y feliz. <b>Política de calidad: </b> se compromete a mantener la confiabilidad, accesibilidad en el servicio, la calidad de sus productos, la investigación en nuevas tecnologías y el crecimiento. Igualmente a desarrollar la capacidad de satisfacer al cliente, procesos eficaces, la gestión de sistemas y financiera, las alianzas con proveedores, a promover la realización personal y profesional del recurso humano, los valores organizacionales y programas sociales. Así como a mejorar el posicionamiento de marca. Además es una empresa comprometida con la implementación y mantenimiento del sistema de seguridad y salud en el trabajo.

                    <img src="assets/img/img_nosotros2.jpg" alt="About Hero" style="width:40%;box-sizing:border-box;float:left;padding:10px;">

                   <b>Política de sostenibilidad: </b> una empresa comprometida con el desarrollo sostenible, que respeta el patrimonio natural y cultural de cada país, promoviendo con clientes, proveedores y empleados prácticas responsables con el medio ambiente, comunidades locales y patrimonio cultural. Así mismo apoya el desarrollo económico de la región donde opera y de los destinos que comercializa.
                   <b>Política de seguridad y salud en el trabajo: </b>En sus operaciones de diseño, asesoría y venta de paquetes turísticos, así como funciones administrativas en todas las sedes, reconocer la importancia del capital humano y comprometerse al más alto nivel de la organización con la implementación y mejoramiento continuo a través del Sistema de Gestión de Seguridad y Salud en el Trabajo, el cual va encaminado a promover y mantener el bienestar físico, mental y social de los trabajadores y demás partes interesadas, ofreciendo lugares de trabajo seguros y adecuados.
                   
                   
                    </p>
                </div>
                
    </section>

    <footer class="bg-dark" id="tempaltemo_footer">
        <div class="container">
            <div class="row">

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-success border-bottom pb-3 border-light logo">City Tours</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li>
                            <i class="fas fa-map-marker-alt fa-fw"></i>
                            Plaza de armas Arequipa - Arequipa - Perú
                        </li>
                        <li>
                            <i class="fa fa-phone fa-fw"></i>
                            <a class="text-decoration-none" href="#">+51 999888777</a>
                        </li>
                        <li>
                            <i class="fa fa-envelope fa-fw"></i>
                            <a class="text-decoration-none" href="#">info@citytours.com</a>
                        </li>
                    </ul>
                </div>

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-light border-bottom pb-3 border-light">Lugares</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li><a class="text-decoration-none" href="{{route('lugares')}}">Valle del colca</a></li>
                        <li><a class="text-decoration-none" href="{{route('lugares')}}">Machu picchu</a></li>
                        <li><a class="text-decoration-none" href="{{route('lugares')}}">Choquequirao</a></li>
                        <li><a class="text-decoration-none" href="{{route('lugares')}}">Lineas de nazca</a></li>
                        <li><a class="text-decoration-none" href="{{route('lugares')}}">Kuelab</a></li>
                        <li><a class="text-decoration-none" href="{{route('lugares')}}">Reserva nacional de paracas</a></li>
                        <li><a class="text-decoration-none" href="{{route('lugares')}}">Islas ballestas</a></li>
                    </ul>
                </div>

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-light border-bottom pb-3 border-light">Redes sociales</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a rel="nofollow" class="text-light text-decoration-none" target="_blank" href="http://fb.com/"><i class="fab fa-facebook-f fa-lg fa-fw"></i> Facebook</a>
                        </li><br><br>
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="https://www.instagram.com/"><i class="fab fa-instagram fa-lg fa-fw"></i>   Instagram</a>
                        </li><br><br>
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="https://twitter.com/"><i class="fab fa-twitter fa-lg fa-fw"></i>   Twitter</a>
                        </li><br><br>
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="https://www.linkedin.com/"><i class="fab fa-linkedin fa-lg fa-fw"></i> Linkedin</a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
        </footer>

@endsection