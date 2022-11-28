@extends('dashboard.layout')
@section('content')
<div class="container" style="padding-top:5%;">
    <div class="row justify-content-center">
        <div class="col-md-12" style="width:100%">
            <div class="card">
                <div class="card-header"></div>
                <div class="card-body -top-3">
                    <div class="pull-right">
                        <a class="btn btn-success" href="{{ route('products.create') }}"> Registrar nuevo Producto</a>
                    </div>

                    @if($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                    @endif
                    <div class="card-body -top-3">
                        <div id="divTipo">
                            <span class="">Productos</span>
                            <table class="table table-sm table-bordered" style="background-color:#ffffff">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Descripción</th>
                                        <th scope="col">Cantidad</th>
                                        <th scope="col">Precio</th>
                                        <th scope="col">Familia</th>
                                        <th scope="col">Foto</th>
                                        <th style="width: 30px">Opciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $datos = DB::table('products')->get();
                                    @endphp
                                    @foreach($datos as $d)
                                    <tr>
                                        <td> {{$d->id }}</td>
                                        <td>{{$d->name}}</td>
                                        <td>{{$d->description}}</td>
                                        <td>{{$d->stock}}</td>
                                        <td>{{$d->price}}</td>
                                        <td>{{$d->product_family_id}}</td>
                                        <td><img src="image/{{$d->image}}" alt=""></td>
                                        
                                        <td>
                                            <form action="{{ route('products.destroy',$d->id) }}" method="POST">
                                                <a class="btn btn-primary" href="{{ route('products.edit',$d->id) }}">Editar</a>
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
    </div>
</div>


@endsection