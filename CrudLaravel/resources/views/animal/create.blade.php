@extends('layouts.PlantillaBase')
@section('content')
<h1 class="text-center">AÑADIR ANIMAL</h1>
    
    <form action ="/animales" method="POST">
        @csrf
        <div class="form-group">
            <label for="" class="form-label">Especie</label>
            <input type="text" class="form-control" id="Especie" name="Especie" placeholder="Especie">
          </div>
        <div class="form-group">
            <label for="" class="form-label">Nombre comun</label>
            <input type="text" class="form-control" id="NombreComun" name="NombreComun" placeholder="Nombre comun">
          </div>
        <div class="form-group">
            <label for="" class="form-label">Habitat</label>
            <input type="text" class="form-control" id="Habitat" name="Habitat" placeholder="Habitat">
          </div>
        <div class="form-group">
            <label for="" class="form-label">Poblacion</label>
            <input type="number" class="form-control" id="Poblacion" name="Poblacion" value="00">
          </div>
          <div Class="mb-3">
          <a href="/animales" class="btn btn-secondary btn-sm">VOLVER</a>
          <button type="submit" class="btn btn-primary btn-sm">AGREGAR</button>
          </div>
    </form>
@endsection