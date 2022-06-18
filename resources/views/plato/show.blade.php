@extends('layouts.apprestaurantep')

@section('template_title')
    {{ $plato->name ?? 'Show Plato' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Plato</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('platos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Nombre P:</strong>
                            {{ $plato->nombre_p }}
                        </div>
                        <div class="form-group">
                            <strong>Precio:</strong>
                            {{ $plato->precio }}
                        </div>
                        <div class="form-group">
                            <strong>Stock:</strong>
                            {{ $plato->stock }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $plato->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Comentario:</strong>
                            {{ $plato->comentario }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
