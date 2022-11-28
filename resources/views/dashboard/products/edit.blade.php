@extends('dashboard.layout')
@section('content')
<div class="container" style="padding-top:5%;">
    <div class="col-md-12" style="width:100%">
        <div class="card">
            <div class="card-header">Editar Producto</div>
            <div class="card-body -top-3">
                <div class="card col-md-10-center">
                    <div class="card-body">
                        <div class="rowr">
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                            <form action="{{ route('products.update',$product->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="pull-right">
                                    <a class="btn btn-primary" href="{{ route('products.index') }}"> Regresar</a>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-2">
                                        <div class="form-group">
                                            <strong>ID:</strong>
                                            <input type="number" name="id" value="{{ $product->id }}" class="form-control" readonly>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-5">
                                        <div class="form-group">
                                            <strong>Nombre:</strong>
                                            <input type="text" name="name" value="{{ $product->name }}" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-5">
                                        <div class="form-group">
                                            <strong>Descripción:</strong>
                                            <input type="text" name="last_name" value="{{ $product->description }}" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-5">
                                        <div class="form-group">
                                            <strong>Cantidad:</strong>
                                            <input type="text" name="email" value="{{ $product->stock }}" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-4">
                                        <div class="form-group">
                                            <strong>Precio:</strong>
                                            <input type="text" name="password" value="{{ $product->price }}" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-4">
                                        <div class="form-group">
                                            <strong>Tipo de producto:</strong>
                                            <select>
                                                <input type="text" name="phone" value="{{ $product->product_family_id }}" class="form-control">
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-8">
                                        <div class="form-group">
                                            <strong>Imagen:</strong>
                                            <input type="file" name="imagen" class="form-control">
                                            <img src="image/{{ $product->image }}" width="300px">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                        <button type="submit" class="btn btn-primary">Registrar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endsection