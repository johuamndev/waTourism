@extends('template.layout')

@section('menu')

    <div class="container-fluid bg-light py-5">
        <div class="col-md-6 m-auto text-center">
            <h1 class="h1"><b>Contacto</b></h1>
            <p>
                Quieres hacer una reserve, <b>Envianos tus datos para contactarnos</b>
            </p>
        </div>
    </div>

<div class="dib" style="display: flex;">

    <div id="mapid" style="width: 100%; height: 600px; padding: 20px 0 20px 60px;">
            
        <div style="width: 100%"><iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=es&amp;q=cercado,arequipa,%20peru+(peru)&amp;t=&amp;z=15&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.gps.ie/car-satnav-gps/">GPS devices</a></iframe></div>
    </div>


    <div class="container py-5" style="margin: 0;padding: 0;">
        
        <div class="row" style="--bs-gutter-x:0;">
            
            <form class="col-md-9 m-auto" method="post" role="form" action="{{route('contacto.store')}}">
                <div class="row" style="display:flex;justify-content:center;align-items: center;>">
                    @if ($mensaje = Session::get('success'))
                        <p style="padding:5px 0;text-align:center;width:100%;background:#05e3054a;border-radius:10px">{{$mensaje}}</p>
                    @endif
                </div>
                @csrf
                <div class="row">
                    <div class="form-group col-md-6 mb-3">
                        <label for="inputname">Nombre</label>
                        <input type="text" class="form-control mt-1" id="name" name="nombre" placeholder="Name" required>
                    </div>
                    <div class="form-group col-md-6 mb-3">
                        <label for="inputemail">Apellido</label>
                        <input type="text" class="form-control mt-1" id="name" name="apellido" placeholder="name" required>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6 mb-3">
                        <label for="inputemail">Email</label>
                        <input type="email" class="form-control mt-1" id="email" name="email" placeholder="Email" required>
                        
                    </div>
                    <div class="form-group col-md-6 mb-3">
                        <label for="inputname">Telefono</label>
                        <input type="number" class="form-control mt-1" id="number" name="telefono" placeholder="number" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="inputsubject">Nombre del lugar</label>
                    <input type="text" class="form-control mt-1" id="subject" name="nombreLugar" placeholder="Subject">
                </div>
                <div class="mb-3">
                    <label for="inputmessage">Descripcion del lugar</label>
                    <textarea class="form-control mt-1" id="message" name="descripcion" placeholder="descripcion" rows="8"></textarea>
                </div>
                <div class="mb-3">
                    
                        <button type="submit" class="btn btn-success btn-lg px-3" style="width:100%;">Enviar</button>
                </div>
            </form>
        </div>
    </div>
</div>

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