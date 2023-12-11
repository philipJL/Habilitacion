@extends('welcome')

@section('content')

<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#create">
    Agregar
  </button>

<div class="table-responsive">
    <br>
    <table class="table">
        <thead class="bg-dark text-white">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre/empresa</th>
                <th scope="col">Contacto</th>
                <th scope="col">Direccion</th>
                <th scope="col">Telefono</th>
                <th>ACCIONES</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cliente as $cliente)
            <tr class="">
                <td scope="row">{{$cliente->idCliente}}</td>
                <td>{{$cliente->nom_empresa}}</td>
                <td>{{$cliente->per_contacto}}</td>
                <td>{{$cliente->direccion}}</td>
                <td>{{$cliente->telefono}}</td>
                <td>

                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#edit{{$cliente->idCliente}}">
                        Editar
                      </button>

                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{$cliente->idCliente}}">
                        Eliminar
                    </button>

                </td>
            </tr>

            @include('cliente.info')

            @endforeach
        </tbody>
    </table>
</div>
@include('cliente.create')

@endsection
