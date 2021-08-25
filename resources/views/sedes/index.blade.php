@extends('layouts.main')

@section('titulo')
<title>Sedes</title>
@endsection

@section('contenido')
    <h1 style="text-align: center; margin-top:20px; margin-bottom:30px;">Sedes</h1>

    
<div class="total">
@foreach ($sedes as $sedes)
<div class="container col-lg-3">
<div class="card">
  <img src="https://static.vecteezy.com/system/resources/previews/000/547/193/original/real-estate-building-logo-icon-vector.jpg" alt="John" style="width:100%">
  <h1 style="font-size: 28px; margin-top:10px;">{{ $sedes->name }}</h1>
  <p class="title">Direccion:</p>
  <p class="title">{{$sedes->direccion}}</p>
  
  <i class="fas fa-location-arrow"></i>
  
</div>
<br>
</div>

    @endforeach
</div>
   

    
@endsection

@section('estilos')
<style>

.img{
    border-radius: 10px;
}

.total{
    text-align: center;
}

.container{
    margin: 20px;
    display: inline-block;
    align-items: center;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 350px;
  margin: auto;
  text-align: center;
  display:block;
}

.title {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

i{
    font-size: 22px;
    margin-bottom: 15px;
}

</style>
@endsection