@extends('adminlte::page')

@section('title', 'Blog for Free')

@section('content_header')
    <h1>Editar etiquetas</h1>
@stop

@section('content')

    <div class="card">

        @if (session('info'))
            <div class="alert alert-success">
                <strong>{{ session('info') }}</strong>
            </div>
        @endif

        <div class="card-body">
            {!! Form::model($tag, ['route' => ['admin.tags.update', $tag], 'method' => 'put']) !!}
            
            @include('admin.tags.partials.form')
            {!! Form::submit('Editar etiqueta', ['class' => 'btn btn-primary']) !!}
                        
            {!! Form::close() !!}
        </div>

    </div>
@stop

@section('js')
    <script src="{{ asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $("#name").stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#slug',
                space: '-'
            });
        });
    </script>

@stop
