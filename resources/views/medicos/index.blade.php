@extends('layouts.main')

@section('titulo')
<title>Directorio medico</title>
@endsection

@section('contenido')
    <h1 style="text-align: center; margin-top:20px; margin-bottom:30px;">Medicos disponibles</h1>

    
<div class="total">
@foreach ($medicos as $medicos)
<div class="container col-lg-3">
<div class="card">
  <img src="https://www.deportesoriano.com/wp-content/uploads/2018/07/doctor-2411135_960_720.png" alt="John" style="width:100%">
  <h1 style="font-size: 28px;">{{ $medicos->nombre }} {{ $medicos->apellido }}</h1>
  <p class="title">Tel: {{$medicos->celular}}</p>
  <p>Email: {{$medicos->email}}</p>
  <i class="fas fa-hand-holding-medical"></i>
  
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