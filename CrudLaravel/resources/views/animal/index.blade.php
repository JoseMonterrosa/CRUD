@extends('layouts.PlantillaBase')
@section('content')
    <h1 class="bg-info text-center">Registro de animales</h1>
    <a href="animales/create" class="btn btn-primary">NUEVO</a>
    <table class="table table-dark table-striped mt-4">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Especie</th>
            <th scope="col">Nombre Comun</th>
            <th scope="col">Habitat</th>
            <th scope="col">Poblacion</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($animales as $ani)
            <tr>
                <th scope="row">{{$ani->id}}</th>
                <td>{{$ani->especie}}</td>
                <td>{{$ani->nombreComun}}</td>
                <td>{{$ani->habitat}}</td>
                <td>{{$ani->poblacion}}</td>
                <td>
                    <form action="{{route('animales.destroy',$ani->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                    <a href="/animales/{{$ani->id}}/edit"class="btn btn-success">EDITAR</a>
                    <button type="submit" class="btn btn-danger">BORRAR</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
      </table>
      
@endsection