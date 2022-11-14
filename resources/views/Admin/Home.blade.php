@extends('layoutadmin')

@section('Content')
<form action="{{route('slider.store.slider')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <label>Texto superior:</label>
    <input type="text" name="texto1"><br/>
    <label>Texto inferior:</label>
    <input type="text" name="texto2"><br/>
    <label>Imagen de fondo:</label>
    <input type="file" name="image" accept="image/*"><br/>
    @error('image')
    <small>{{$message}}</small>
    @enderror
    <button type="submit">Crear Slider</button>
</form><br/><br/>
<form action="{{route('slider.store.banner')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <label>Texto:</label>
    <input type="text" name="texto"><br/>
    <label>Imagen de fondo:</label>
    <input type="file" name="image" accept="image/*"><br/>
    @error('image')
    <small>{{$message}}</small>
    @enderror
    <button type="submit">Crear Banner</button>
</form><br/><br/>
<form action="{{route('slider.store.ad')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <label>Texto:</label>
    <input type="text" name="texto"><br/>
    <label>Imagen de fondo:</label>
    <input type="file" name="image" accept="image/*"><br/>
    @error('image')
    <small>{{$message}}</small>
    @enderror
    <button type="submit">Crear Enlaces</button>
</form><br/><br/>
<form action="{{route('slider.store.new')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <label>Imagen banner home:</label>
    <input type="file" name="homeimage" accept="image/*"><br/>
    @error('homeimage')
    <small>{{$message}}</small>
    @enderror
    <label>Título home:</label>
    <input type="text" name="hometittle"><br/>
    <label>Descripción home:</label>
    <input type="text" name="homedesc"><br/>
    <label>Imagen Banner:</label>
    <input type="file" name="bannerimage" accept="image/*"><br/>
    @error('bannerimage')
    <small>{{$message}}</small>
    @enderror
    <label>Título Noticia:</label>
    <input type="text" name="newtittle"><br/>
    <label>Descripción Noticia:</label>
    <input type="textarea" name="newdesc"><br/>
    <label>Url Noticia:</label>
    <input type="text" name="urltittle"><br/>
    <button type="submit">Crear Noticia</button>
</form><br/><br/>
<form action="{{route('slider.store.psy')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <label>Nombre:</label>
    <input type="text" name="name"><br/>
    <label>Apellido Paterno:</label>
    <input type="text" name="app"><br/>
    <label>Apellido Materno:</label>
    <input type="text" name="apm"><br/>
    <label>Especialidad:</label>
    <input type="text" name="specialty"><br/>
    <label>No de colegiatura:</label>
    <input type="text" name="NDC"><br/>
    <label>Detalle de profesión:</label>
    <input type="text" name="descprofession"><br/>
    <label>Foto:</label>
    <input type="file" name="image" accept="image/*"><br/>
    @error('image')
    <small>{{$message}}</small>
    @enderror
    <button type="submit">Cargar Psicólogo</button>
</form><br/><br/>
@endsection