@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Crear tratamientoo</div>

                    <div class="panel-body">
                        @include('flash::message')

                        {!! Form::open(['route' => 'tratamientos.store']) !!}

                        <div class="form-group">
                            {!! Form::label('fecha_ini', 'Fecha de inicio del tratamiento') !!}

                            <input type="datetime-local" id="fecha_ini" name="fecha_ini" class="form-control" value="{{Carbon\Carbon::now()->addMinute()->format('Y-m-d')}}" />
                        </div>

                        <div class="form-group">
                            {!! Form::label('fecha_fin', 'Fecha de finalizacion del tratamiento') !!}

                            <input type="datetime-local" id="fecha_fin" name="fecha_fin" class="form-control" value="{{Carbon\Carbon::now()->addMinute()->format('Y-m-d')}}" />
                        </div>
                        <div class="form-group">
                            {!! Form::label('descripcion', 'Descripcion del tratamiento') !!}
                            {!! Form::text('descripcion',null,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('nombre', 'Nombre del tratamiento') !!}
                            {!! Form::text('nombre',null,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>

                        {!! Form::submit('Guardar',['class'=>'btn-primary btn']) !!}

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
