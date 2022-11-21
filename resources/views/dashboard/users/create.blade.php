@extends('layouts.app')
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
                            <form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3" style="display:inline-block">
                                    <span>Cliente</span>
                                    <label class="switch">
                                        <input type="checkbox" id="tipoUsuario" name="tipoUsuario" value="empleado">
                                        <span class="slider round" onclick="tipoUsuario()" id="tUsuario"></span>
                                    </label>
                                    <span class="">Empleado</span>
                                </div>
                                <div class="pull-right">
                                    <a class="btn btn-primary" href="{{ route('users.index') }}"> Regresar</a>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-6">
                                        <div class="form-group">
                                            <strong>Nombre Completo:</strong>
                                            <input type="text" name="nombre" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-6">
                                        <div class="form-group">
                                            <strong>Correo Electrónico:</strong>
                                            <input type="email" name="email" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-4">
                                        <div class="form-group">
                                            <strong>Contraseña:</strong>
                                            <input type="password" name="password" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-4">
                                        <div class="form-group">
                                            <strong>Teléfono:</strong>
                                            <input type="tel" name="telefono" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-4">
                                        <div class="form-group">
                                            <strong>Dirección:</strong>
                                            <input type="text" name="direccion" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-4">
                                        <div class="form-group">
                                            <strong>Confirmar Contraseña:</strong>
                                            <input id="password-confirm" type="password" name="password_confirmation" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-8">
                                        <div class="form-group">
                                            <strong>Imagen:</strong>
                                            <input type="file" name="imagen" class="form-control">
                                        </div>
                                    </div>
                                    <div id="divEmpleados">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-md-6">
                                                <div class="form-group">
                                                    <strong>RFC:</strong>
                                                    <input id="rfc" type="text" class="form-control @error('rfc') is-invalid @enderror" name="rfc" value="">

                                                    @error('rfc')
                                                    <script>
                                                        datoerr();
                                                    </script>
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-6">
                                                <div class="form-group">
                                                    <strong>Cargo:</strong>
                                                    <input id="cargo" type="cargo" class="form-control @error('cargo') is-invalid @enderror" name="cargo" value="">
                                                    @error('cargo')
                                                    <script>
                                                        datoerr();
                                                    </script>
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-6">
                                                <div class="form-group">
                                                    <strong>Fecha de Nacimiento:</strong>
                                                    <input id="fecha_nac" type="date" class="form-control @error('password') is-invalid @enderror" name="fecha_nac">

                                                    @error('fecha_nac')
                                                    <script>
                                                        datoerr();
                                                    </script>
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-6">
                                                <div class="form-group">
                                                    <strong>Sueldo:</strong>
                                                    <input id="sueldo" type="number" class="form-control @error('sueldo') is-invalid @enderror" name="sueldo" value="">

                                                    @error('sueldo')
                                                    <script>
                                                        datoerr();
                                                    </script>
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <script>
                                            tipoUsuario();
                                            if (document.getElementById('tipoUsuario').checked) {
                                                tipoUsuario();
                                            }
                                        </script>
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