@extends('layouts.main')

@section('titulo')
<title>EPS disponibles</title>
@endsection

@section('contenido')
    <h1 style="text-align: center; margin-top:20px; margin-bottom:30px;">EPS disponibles</h1>

    
<div class="total">
@foreach ($eps as $eps)
<div class="container col-lg-3">
<div class="card">
  <img src="https://www.pound250.com/wp-content/uploads/2015/05/generic-globe-vector-logo.jpg" alt="John" style="width:100%">
  <h1 style="font-size: 28px; margin-top:10px;">{{ $eps->nombre }}</h1>
  <p class="title">Asesor: {{$eps->asesor}}</p>
  <p>Tel: {{$eps->telefono}}</p>
  <p>Email: {{$eps->correo_asesor}}</p>
  <i class="fas fa-building"></i>
  
</div>
<br>
</div>

    @endforeach
</div>
   

    
@endsection

@section('estilos')
<style>

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
  max-width: 300px;
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