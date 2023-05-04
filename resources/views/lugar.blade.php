@extends('template.layout')

@section('menu')


@foreach($lugares as $lugar)
    <section class="bg-success" style="background:#0f3d24a1 !important">
        <div class="container" >
            <div class="row align-items-center py-5" style="padding:5px 0 !important;">
                <div class="col-md text-white"> 
                    <h1>{{$lugar->nombre}}</h1>
                    <p>
                        <img src="{{$lugar->imagen}}" alt="About Hero" style="float:right;width:40%;">
                        {{$lugar->descripcion}}
                    </p>
                    <div class="link" style="bottom:0;">
                        <p>Hacer una reserva para <a href="{{route('contact')}}" style="text-decoration:none;color:#8cdca0;"><b>{{$lugar->nombre}}</b></a> </p>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    
@endforeach

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