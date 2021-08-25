@extends('layouts.main')

@section('titulo')
<title>Solicitud cita medica</title>
@endsection

@section('contenido')

<h1 style="text-align: center; margin-top:20px; margin-bottom:30px;">Solicitud de cita medica</h1>
<div class="borde">
    <form style="text-align: center;" action="{{ route('citas.store') }}" method="post">
        @csrf
        <label style="font-size: 30px; margin-top:80px; margin-bottom:40px;" for="start">Selecciona la fecha en la que desees tu cita</label><br>
        <input id="datefield" type='datetime-local' min="" max="2027-12-31T00:00" name="fecha_cita">
        <br>
        <label style="font-size: 30px; margin-top:30px; margin-bottom:40px;" for="start">Selecciona con que medico deseas tu cita</label><br>
        <select style="font-size: 20px; border-radius:5px 5px 5px 5px;" name="medico" id="medico">
            @foreach ($medicos as $medicos)
            <option value={{$medicos->id}}>{{ $medicos->nombre }} {{ $medicos->apellido }} - Sede {{ $medicos->name }}</option>
            @endforeach
        </select>
        <br>
        <input class="btn btn-primary" style="margin-top:40px; font-size: 20px;" type="submit" value="Agendar Cita">
    </form>

</div>

    
@endsection

@section('estilos')
<script>
var today = new Date();
var dd = today.getDate();
var mm = today.getMonth()+1; //January is 0 so need to add 1 to make it 1!
var yyyy = today.getFullYear();
if(dd<10){
  dd='0'+dd
} 
if(mm<10){
  mm='0'+mm
} 
today = yyyy+'-'+mm+'-'+dd+'T00:00';
document.getElementById("datefield").setAttribute("min", today);
</script>

<style>

.borde{
    margin-left: 180px;
    margin-right: 180px;
    border: 1px solid gainsboro;
    padding-bottom: 100px;
    border-radius: 5px 5px 5px 5px;
    box-shadow: 0px 4px 8px;
}

#datefield{
    border-radius: 5px 5px 5px 5px;
    width: 200px;
    font-size: 20px;
    height: 40px;
    margin-top: 20px;
    width: 250px;
}

</style>
@endsection

