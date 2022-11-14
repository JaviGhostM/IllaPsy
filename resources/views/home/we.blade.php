@extends('layout')
@section('Nosotros', 'title')

@section('Content')
<div class="Content">
    <!-- Banner -->
    <div class="content-banner">
        <div class="Banner">                      
            <img src="../images/WEBNosotros.jpg" alt="">
        </div>
    </div>
    <!-- Fine de Banner -->
    <!-- Contenedor 1 -->
    <div class="content-one-we">
    <div class="content-one-we-title">
       <span>ILLA - PSYCHOLOGY</span>
    </div>
    <div class="content-one-we-text">
        <h1>¿Quiénes somos?</h1> 
        <p>
            Somos una empresa dedicada a la Piscología Personalizada, abarcamos varios campos como la psicología clínica, social, educativa, organizaciónal, investigativa, deportiva y jurídica. Contamos con profesionales experimentados para lo que usted necesite.
        </p>
    </div>
    <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-4 content-one-we-service">
    <div class="content-one-we-service-colums">
        <div class="py-4 image">
            <img src="../images/icono_terapia_adultos.png" alt="">
        </div>
        <div class="py-4 text">
            <h1>TERAPIA PSICOLÓGICA EN ADULTOS</h1>
        </div>
    </div>
    <div class="content-one-we-service-colums">
        <div class="py-4 image">
            <img src="../images/icon-terapia-familiar.png" alt="">
        </div>
        <div class="py-4 text">
            <h1>TERAPIA FAMILIAR</h1>
        </div>
    </div>
    <div class="content-one-we-service-colums">
        <div class="py-4 image">
            <img src="../images/icon-terapia-pareja.png" alt="">
        </div>
        <div class="py-4 text">
            <h1>TERAPIA DE PAREJA</h1>
        </div>
    </div>
    <div class="content-one-we-service-colums">
        <div class="py-4 image">
            <img src="../images/icono-infantil.png" alt="">
        </div>
        <div class="py-4 text">
            <h1>TERAPIA EN NIÑOS Y ADOLECENTES</h1>
        </div>
    </div>
    </div>
    </div>
    <!-- Fin contenedor 1 -->
    <!-- Inicio Contenedor 2 Banner Sede -->
    <div class="content-two-we" >
        <div class="content-two-we-title">
            <h1>Estamos cerca de ti y de tu familia</h1>
            <p>Conoce nuestra sede</p>
        </div>
        <div class="content-two-we-banner">        
            <img src="../images/sede-desc.jpeg"/>
            <div class="content-two-we-banner-text">
                <p>SEDE AMARILLIS</p>
                <a href="#">Ver más</a>
            </div>
        </div>
        
    </div>
    <!-- Fin contenedor 2 -->
    </div>
@endsection