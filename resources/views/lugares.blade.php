@extends('template.layout')

@section('menu')

    <section class="bg-light">
        <div class="container py-5">
            <div class="text-center py-3">
                <div class="col-lg-6 m-auto">
                    <h1 class="h1">Zonas Turísticas del Perú 2023</h1>
                    <p>
                    Conoce nuestra amplia selección de zonas turísticas en Perú.<br>
                    Excursiones, actividades y paquetes turísticos creados para viajeros que desean explorar y conocer <b>lo mejor del Perú de la mano de nuestro equipo de expertos profesionales locales</b>.
                    </p>
                </div>
            </div>

            <div class="arreglar" style="display: grid;grid-template-columns: repeat(3,1fr);grid-gap: 50px;  grid-auto-rows: minmax(200px,auto);">

            @foreach($lugares as $lugar)

            
            <div class="row">
                <div class="pr">
                    <div class="card h-100">
                        <a href="{{route('lugar', $lugar->id)}}">
                            <img src="{{$lugar->imagen}}" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <?php $contador = rand(1,5);
                            if($contador == 1){ ?>
                            <ul class="list-unstyled d-flex justify-content-between">
                                <li>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                </li>
                            </ul>
                            <?php }
                            elseif($contador ==2){
                                ?>
                            <ul class="list-unstyled d-flex justify-content-between">
                                <li>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                </li>
                            </ul>
                            <?php }
                            elseif($contador ==3){
                                ?>
                            <ul class="list-unstyled d-flex justify-content-between">
                                <li>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                </li>
                            </ul>
                            <?php }elseif($contador ==4){
                                ?>
                            <ul class="list-unstyled d-flex justify-content-between">
                                <li>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                </li>
                            </ul>
                            <?php }else{
                                ?>
                            <ul class="list-unstyled d-flex justify-content-between">
                                <li>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                </li>
                            </ul>
                            <?php } 
                            $contador_2 = rand(1,100);
                            ?>
                            <a href="{{route('lugar', $lugar->id)}}" class="h2 text-decoration-none text-dark">{{$lugar->nombre}}</a>
                            <p class="card-text">
                                {{$lugar->descripcion}}
                            </p>
                                
                        </div>
                        <div class="location" style="padding:10px;bottom:0;">
                                <p class="text-muted">Vistas (<?php echo $contador_2; ?>)</p>
                                <div class="mb-3">
                                <a href="{{route('lugar', $lugar->id)}}">
                                    <button type="#" class="btn btn-success" style="width:100%;background: #1ecb3480 !important">Ver más</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
   
            @endforeach

            </div> 
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