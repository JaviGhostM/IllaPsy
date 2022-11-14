@extends('layout')
@section('IllaPshychology', 'title')

@section('Content')
<!-- Inicio Slider -->
<div class="slide-contenedor">
    @foreach ($Slider as $Sliders)
    <div class="miSlider fade">
        <h2>{{$Sliders->texto1}}</h2>
        <h1>{{$Sliders->texto2}}</h1>
        <img src="{{$Sliders->image}}" alt="">
    </div>
    @endforeach
    <div class="direcciones">
        <a href="#" class="atras" onclick="avanzaSlide(-1)">&#10094;</a>
        <a href="#" class="adelante" onclick="avanzaSlide(1)">&#10095;</a>
    </div>
    <div class="barras">
        <span class="barra active" onclick="posicionSlide(1)"></span>
        <span class="barra" onclick="posicionSlide(2)"></span>
        <span class="barra" onclick="posicionSlide(3)"></span>
        <span class="barra" onclick="posicionSlide(4)"></span>
    </div>
    </div>
<!-- Fin Slider -->
<div class="Content">
<!-- Contenedor 1 ¿En que te podemos ayudar? -->
<div class="content-one-help">
    <h2>¿En qué podemos ayudarte?</h2>
</div>
<div class="grid grid-cols-1 sm:grid-cols-2 grid-rows-1 sm:grid-rows-1 md:grid-rows-2 gap-4 content-one justify-items-center" style="background-image: url(../images/grisweb.jpg); background-size:cover; background-position:cover;">  
    <div Class="content-one-seleccion-opc content-one-box-help w-9/12 sm:w-11/12">
        <div class="icon-blue">
            <img src="../storage/images/icon-agenda.png" alt="">
        </div>
            <p>Quiero agendar una cita</p> 
            <a href="">Ver más</a>
    </div>  
    <div Class="content-one-seleccion-opc content-one-box-help w-9/12 sm:w-11/12">
        <div class="icon-blue">
            <img src="../storage/images/icon-psico.png" alt="">
        </div>
            <p>Buscar una especialidad de psicólogos</p> 
            <a href="">Ver más</a>
    </div>
    <div Class="content-one-seleccion-opc content-one-box-help w-9/12 sm:w-11/12">
        <div class="icon-blue">
            <img src="../storage/images/icon-agenda.png" alt="">
        </div>
            <p>Ver mi historial de consultas</p> 
            <a href="">Ver más</a>
    </div>
    <div Class="content-one-seleccion-opc content-one-box-help w-9/12 sm:w-11/12">
        <div class="icon-blue">
            <img src="../storage/images/icon-agenda.png" alt="">
        </div>
            <p>Solicitar un presupuesto</p> 
            <a href="">Ver más</a>
    </div>
</div>
<!-- Find Contenedor 1 ¿En que te podemos ayudar? -->
<!-- Imagen Banner Inter Contenido 
@foreach ($Banner as $Banners)
<div class="grid justify-items-center content-two my-10 md:my-16 h-52 sm:h-56 md:h-80 w-full" style="background-image: url({{$Banners->image}}); background-size:cover; background-position:cover;">  
    <div class="content-two-text">        
            <p>{{$Banners->texto}}</p>
        <a href="#">Conoce más aquí</a>       
    </div>
</div>
@endforeach
Fin de Imagen Banner Inter Contenido -->
<!-- Presupuesto -->
<div class="grid grid-cols-1 max-w-screen-md:grid-cols-1 md:grid-cols-2 content-tree">
    <div class="w-full content-tree-left">
        <div class="content-tree-left-img" style="background-image: url(../images/presupuesto.jpg);">            
        </div>
        <div class="content-tree-left-info">
            <h2>¿Deseas un presupuesto?</h2>
            <p><span>Haz clic aquí y llena tus datos para que nuestro equipo pueda tomar contacto contigo.</span></p>
            <p><a href="#" style="background-color:#ffffff; color:#0099CC;">Solicita un presupuesto aquí</a></p>         
        </div>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-1 lg:grid-cols-2 gap-3  w-full content-tree-right">
        @foreach ($Ad as $Ads)
        <div class="w-full content-tree-right-info">     
            <div class="w-1/4 sm:w-1/2 md:w-1/5 lg:w-3/4   content-tree-right-info-icon">
                <img src="{{$Ads->image}}">
            </div>            
            <div class="w-full md:w-full content-tree-right-info-text">
                <h3><span>{{$Ads->texto}}</span></h3>
                <a href="#">Conoce más</a>
            </div>
        </div>
        @endforeach
    </div>
</div>
<!-- Fin de presupuesto -->
<!-- Personal Staff -->
<div class="content-staff">
    <h1>Staff de psicólogos</h1>
    <p>Siéntete tranquilo, en IllaPsychology tenemos todo lo que necesitas.</p>
    <div class="grid grid-cols-1 sm:grid-cols-1 lg:grid-cols-6 gap-5 content-four-new">
        @foreach ($Psy as $Psys)
        <div class="content-four-new-box sm:col-span-1 md:col-span-2 ">
            <div class="content-four-new-box-img"><img src="{{$Psys->image}}" alt=""></div>
            <div><h2 class="new-title">{{$Psys->name}} {{$Psys->app}} {{$Psys->apm}}</h2></div>
            <div><h3 class="new-description">{{$Psys->specialty}}</h3></div>
            <div class="psy-info"><a href="#">Ver información</a></div>
        </div>
        @endforeach
    </div>
    <div class="btn-psy">
        <a href="#">Consultar Staff</a>
    </div>
</div>
<!-- Fin Personal Staff -->
<!-- Carrusel de noticias -->
<div class="content-four">
    <p>Profesionales formados en Psicología y Recursos Humanos: hemos desarrollado nuestra experiencia en Consultoría y en empresas a nivel nacional e internacional, ofreciendo un servicio innovador en adquisición de talento, acompañamiento paso a paso y ofreciendo soluciones a medida.</p>
    <p></p>
    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-5 content-four-new">
        @foreach ($New as $News)
        <div class="content-four-new-box">
            <div class="content-four-new-box-img"><img src="{{$News->homeimage}}" alt=""></div>
            <div><h2 class="new-title">{{$News->hometittle}}</h2></div>
            <div><h3 class="new-date">{{$News->created_at}}</h3></div>
            <div><h3 class="new-description">{{$News->homedesc}}</h3></div>
            <div class="new-more"><a href="#">Ver más...</a></div>
        </div>
        @endforeach
    </div>
    <div class="btn-news">
        <a href="#">Más atículos aquí</a>
    </div>
</div>
<!-- Fin Carrusel de noticias -->
</div>
<!-- Dirección -->
<div class="content-five">
    <div class="content-five-text"><p>Estamos cerca de ti y tu familia</p></div>
    <div class="content-five-direction" style="background-image: url(../images/maps-illa.jpeg); background-size:cover; background-position:cover;">        
        <div class="content-five-direction-info">
            <h1 style="border-bottom: #ffffff 1px solid; padding-bottom: 5px; margin-bottom: 15px;">Nuestra responsabilidad es contigo</h1>
            <div class="content-five-direction-icon"><img src="../images/icono-localizar.png" alt=""></div> 
            <p>
               <span style="font-size: 2vw; font-weight: 600">UBICACIÓN DE NUESTRA SEDE</span><br/>
                Av. Esteban Pabletich manzana A - Lote 11 <br/>
                Teléfono: +51 970 089 580<br/>
                Correo: illanetzx22@gmail.com

            </p>
            <div class="content-five-direction-btn">
               <a href="https://www.google.com.mx/maps/place/ILLANETZ/@-9.9472731,-76.2453451,17z/data=!3m1!4b1!4m5!3m4!1s0x91a7c3e372165653:0x224443ef0e652fc6!8m2!3d-9.9472842!4d-76.2431535?hl=es&authuser=0" target="_blank"><span>Localizar con Google Maps</span></a>
            </div>
        </div>
        
    </div>
</div>
<!-- Fin dirección -->
@endsection