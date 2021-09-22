@extends('layouts.app')

@section('template_title')
    {{ $usuario->name ?? 'Show Usuario' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Usuario</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('usuarios.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $usuario->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido Paterno:</strong>
                            {{ $usuario->apellido_paterno }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido Materno:</strong>
                            {{ $usuario->apellido_materno }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha De Nacimiento:</strong>
                            {{ $usuario->fecha_de_nacimiento }}
                        </div>
                        <div class="form-group">
                            <strong>Sexo:</strong>
                            {{ $usuario->sexo }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $usuario->estado }}
                        </div>
                        <div class="form-group">
                            <strong>Calle:</strong>
                            {{ $usuario->calle }}
                        </div>
                        <div class="form-group">
                            <strong>Numero De Casa:</strong>
                            {{ $usuario->numero_de_casa }}
                        </div>
                        <div class="form-group">
                            <strong>Numero Interior:</strong>
                            {{ $usuario->numero_interior }}
                        </div>
                        <div class="form-group">
                            <strong>Colonia:</strong>
                            {{ $usuario->colonia }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
