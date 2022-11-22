@extends('dashboard.users.layout')
@section('content')
<div class="container" style="padding-top:5%;">
    <div class="row justify-content-center">
        <div class="col-md-12" style="width:100%">
            <div class="card">
                <div class="card-header">Usuarios</div>
                <div class="card-body -top-3">
                    <div class="pull-right">
                        <a class="btn btn-success" href="{{ route('users.create') }}"> Registrar nuevo Usuario</a>
                    </div>

                    @if($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                    @endif
                    <div class="card-body -top-3">
                        <div id="divTipo">
                            <span class="">Clientes</span>
                            <table class="table table-sm table-bordered" style="background-color:#ffffff">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Nombre Completo</th>
                                        <th scope="col">Correo Electrónico</th>
                                        <th scope="col">Contraseña</th>
                                        <th scope="col">Teléfono</th>
                                        <th scope="col">Dirección</th>
                                        <th scope="col">Foto de Perfil</th>
                                        <th style="width: 30px">Opciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $datos = DB::table('users')->get();
                                    @endphp
                                    @foreach($datos as $d)
                                    <tr>
                                        <td> {{$d->id }}</td>
                                        <td>{{$d->name . ' ' . $d->last_name}}</td>
                                        <td>{{$d->email}}</td>
                                        <td>*****</td>
                                        <td>{{$d->phone}}</td>
                                        <td>{{$d->address}}</td>
                                        
                                        <td>
                                            <form action="{{ route('users.destroy',$d->id) }}" method="POST">
                                                <a class="btn btn-primary" href="{{ route('users.edit',$d->id) }}">Editar</a>
                                                @csrf
                                                @method('DELETE')

                                                <button type="submit" class="btn btn-danger">Borrar</button>
                                            </form>
                                        </td>
                                    </tr>

                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            function tipoUsuarios() {
                var x = document.getElementById("divTipo");
                (x.style.display === "none" ? x.style.display = "block" : x.style.display = "none");
                x = document.getElementById("divTipos");
                (x.style.display === "block" ? x.style.display = "none" : x.style.display = "block")
            }
        </script>
    </div>
</div>


@endsection