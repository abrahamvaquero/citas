@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Medicamentos</div>

                    <div class="panel-body">
                        @include('flash::message')
                        {!! Form::open(['route' => 'medicamentos.create', 'method' => 'get','class'=>'inline-important']) !!}
                        {!!   Form::submit('Crear medicamento', ['class'=> 'btn btn-primary'])!!}
                        {!! Form::close() !!}

                        {!! Form::open(['route' => 'medicamentos.destroyAll', 'method' => 'delete', 'class'=>'inline-important']) !!}
                        {!!   Form::submit('Borrar todos', ['class'=> 'btn btn-danger','onclick' => 'if(!confirm("¿Está seguro?"))event.preventDefault();'])!!}
                        {!! Form::close() !!}

                        <br><br>
                        <table class="table table-striped table-bordered">
                            <tr>

                                <td>Nombre</td>
                                <th>Presentacion</th>
                                <th>Composicion</th>
                                <th>Enlace</th>
                                <th colspan="2">Acciones</th>
                            </tr>

                            @foreach ($medicamentos as $medicamento)


                                <tr>
                                    <td>{{ $medicamento->nombre}}</td>
                                    <td>{{ $medicamento->presentacion }}</td>
                                    <td>{{ $medicamento->composicion}}</td>
                                    <td>{{ $medicamento->enlace}}</td>
                                    <td>
                                        {!! Form::open(['route' => ['medicamentos.edit',$medicamento->id], 'method' => 'get']) !!}
                                        {!!   Form::submit('Editar', ['class'=> 'btn btn-warning'])!!}
                                        {!! Form::close() !!}
                                    </td>
                                    <td>
                                        {!! Form::open(['route' => ['medicamentos.destroy',$medicamento->id], 'method' => 'delete']) !!}
                                        {!!   Form::submit('Borrar', ['class'=> 'btn btn-danger' ,'onclick' => 'if(!confirm("¿Está seguro?"))event.preventDefault();'])!!}
                                        {!! Form::close() !!}

                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
@endsection