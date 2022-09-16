@extends('layouts.PlantillaBase')
@section('content')
<h1 class="text-center">AÑADIR ANIMAL</h1>
    
    <form action ="/animales/{{$animal->id}}" method="POST">
        
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="" class="form-label">Especie</label>
            <input type="text" class="form-control" id="Especie" name="Especie" value="{{$animal->especie}}">
          </div>
        <div class="form-group">
            <label for="" class="form-label">Nombre comun</label>
            <input type="text" class="form-control" id="NombreComun" name="NombreComun" value="{{$animal->nombreComun}}">
          </div>
        <div class="form-group">
            <label for="" class="form-label">Habitat</label>
            <input type="text" class="form-control" id="Habitat" name="Habitat" value="{{$animal->habitat}}">
          </div>
        <div class="form-group">
            <label for="" class="form-label">Poblacion</label>
            <input type="number" class="form-control" id="Poblacion" name="Poblacion" value="{{$animal->poblacion}}">
          </div>
          <div class="mb-3">
          <a href="/animales" class="btn btn-secondary btn-sm">VOLVER</a>
          <button type="submit" class="btn btn-primary btn-sm">SOBREESCRIBIR</button>
          </div>
    </form>
@endsection
