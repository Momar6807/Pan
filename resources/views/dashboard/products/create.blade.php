@extends('dashboard.layout')
@section('content')
<div class="container" style="padding-top:5%;">
    <div class="col-md-12" style="width:100%">
        <div class="card">
            <div class="card-header">Registrar Nuevo Usuario</div>
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
                            <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                               
                                <div class="pull-right">
                                    <a class="btn btn-primary" href="{{ route('products.index') }}"> Regresar</a>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-6">
                                        <div class="form-group">
                                            <strong>Nombre:</strong>
                                            <input type="text" name="name" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-6">
                                        <div class="form-group">
                                            <strong>Descripción:</strong>
                                            <input type="text" name="description" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-4">
                                        <div class="form-group">
                                            <strong>Cantidad:</strong>
                                            <input type="text" name="stock" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-4">
                                        <div class="form-group">
                                            <strong>Precio:</strong>
                                            <input type="text" name="price" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-4">
                                        <div class="form-group">
                                            <strong>Familia:</strong>
                                            <input id="family" type="text" name="product_family_id" class="form-control">
                                        </div>
                                    </div>
                                    
                                    <div class="col-xs-12 col-sm-12 col-md-6">
                                        <div class="form-group">
                                            <strong>Imagen:</strong>
                                            <input type="file" name="image" class="form-control">
                                        </div>
                                    </div>
                                   
                                    
                                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                        <button type="submit" class="btn btn-primary">Registrar</button>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection