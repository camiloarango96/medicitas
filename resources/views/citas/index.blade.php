@extends('layouts.main')

@section('titulo')
<title>Citas</title>
@endsection

@section('contenido')
    <h1 style="text-align: center; margin-top:20px; margin-bottom:100px;">Citas pendientes</h1>
    
    
    <table  style="margin-left: auto; margin-right: auto; width:1000px;">
        <tr>
          <th>Fecha de la cita</th>
          <th>Doctor</th>
          <th>Sede</th>
          <th>Cancelacion cita</th>
        </tr>
        @foreach ($citasMed as $citas)
        <tr>
            <td>id: {{$citas->id}} {{$citas->fecha_cita}}</td>
            <td>{{$citas->nombre}} {{$citas->apellido}}</td>
            <td>{{ $citas->name }}</td>
            <form action="{{ route('citas.destroy', $citas->id) }}" method="post">
                @csrf
                @method('DELETE')
                <td><input type="submit" class="btn btn-danger" value="Cancelar esta cita"></td>
                
            </form>
            
          </tr>
        @endforeach
      </table>
    

   

    
@endsection

@section('estilos')

<style>

.center {
  margin-left: auto;
  margin-right: auto;
}

</style>

@endsection