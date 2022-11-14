<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('font-awesome/css/font-awesome.min.css')}}">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <header>       
          <nav>
            <input type="checkbox" id="check">
            <label for="check" class="checkbtn">
                <i class="fa fa-bars"></i>
            </label>
            <a href="{{route('home')}}" class="enlace">
                <img src="../images/sinfodo.png" alt="" class="logo">
            </a>
            <ul>
                <li><a href="{{route('we.index')}}"><i class="fa fa-group" aria-hidden="true"></i>Nosotros</a></li>
                <li><a href="#"><i class="fa fa-user-md" aria-hidden="true"></i>Servicios</a></li>
                <li><a href="#"><i class="fa fa-vcard-o" aria-hidden="true"></i>Psicólogos</a></li>                
                <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i>Contacto</a></li>
                <li><a href="#"><i class="fa fa-comments" aria-hidden="true"></i>Blog</a></li>
                <li><a href="#"><i class="fa fa-phone-square" aria-hidden="true"></i>80000000</a></li>
                <li><a href="#" class="session"><i class="fa fa-user" aria-hidden="true"></i>Mi cuenta</a></li>
            </ul>
        </nav>
    </header>

    @yield('Content')

    <footer>
        <div class="grid grid-cols-1 sm:grid-cols-2 footer-page">
            <div class="grid justify-items-center footer-page-1">
                <img src="../images/sinfodo.png" alt=""> 
            </div>
            <div class="grid justify-items-center footer-page-2">
                <ul>
                    <li><a href="{{route('we.index')}}">Nosotros</a></li>
                    <li><a href="#">Servicios</a></li>
                    <li><a href="#">Médicos</a></li>
                    <li><a href="#">Convenios</a></li>
                    <li><a href="#">Contacto</a></li>
                    <li><a href="#">Enviar un mensaje</a></li>
                </ul>
            </div>
        </div>
    </footer>
    <script type="text/javascript"> 
let indice = 1;
muestraSlides(indice);

function avanzaSlide(n){
    muestraSlides( indice+=n );
}

function posicionSlide(n){
    muestraSlides(indice=n);
}
setInterval(function tiempo(){
    muestraSlides(indice+=1)
},4000);
function muestraSlides(n){
    let i;
    let slides = document.getElementsByClassName('miSlider');
    let barras = document.getElementsByClassName('barra');

    if(n > slides.length){
        indice = 1;
    }
    if(n < 1){
        indice = slides.length;
    }
    for(i = 0; i < slides.length; i++){
        slides[i].style.display = 'none';
    }
    for(i = 0; i < barras.length; i++){
        barras[i].className = barras[i].className.replace(" active", "");
    }
    slides[indice-1].style.display = 'block';
    barras[indice-1].className += ' active';
}
    </script>
</body>
</html>