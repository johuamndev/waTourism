@extends('template.layout')

@section('menu')

    <div id="template-mo-zay-hero-carousel" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="1"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="2"></li>
        </ol>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="./assets/img/index_img3.jpg" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left align-self-center">
                                <h1 class="h1 text-success"><b>Descubre nuestros mejores paquetes turísticos</b></h1>
                                <h3 class="h2">Te estamos esperando!!</h3>
                                <p>
                                Vive tus sueños descubriendo Machu Picchu y los más impresionantes destinos del Perú.

                                Reserva tu paquete de viaje ahora y viaja después...
                                <a rel="sponsored" class="text-success" href="{{route('contact')}}" target="_blank">Hacer reserva</a> 
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="./assets/img/index_img2.jpg" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                <h1 class="h1">Lugares turísticos</h1>
                                <h3 class="h2">Te animas a conocerlos... te esperamos!</h3>
                                <p>
                                Conoce nuestra amplia selección de lugares turísticos en Perú.

                                Excursiones, actividades y paquetes turísticos creados para viajeros que desean explorar y conocer lo mejor del Perú de la mano de nuestro equipo de expertos profesionales locales.
                                <a rel="sponsored" class="text-success" href="{{route('lugares')}}" target="_blank">Ver lugares</a> 
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="./assets/img/index_img1.jpg" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                <h1 class="h1">Quienes somos</h1>
                                <h3 class="h2">somos turismo </h3>
                                <p>
                               City Tours es una compañía joven y dinámica situada en las mismas zonas turisticas, amantes de la naturaleza y comprometidos con el turismo sostenible de nuestra región y del Perú
                               <a rel="sponsored" class="text-success" href="{{route('nosotros')}}" target="_blank">Ver más</a> 
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="prev">
            <i class="fas fa-chevron-left"></i>
        </a>
        <a class="carousel-control-next text-decoration-none w-auto pe-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="next">
            <i class="fas fa-chevron-right"></i>
        </a>
    </div>

@endsection