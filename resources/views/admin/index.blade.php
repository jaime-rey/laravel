@extends('adminlte::page')

@section('title', 'Blog for Free')

@section('content_header')
    <h1>Blog in Freedom</h1>
@stop

@section('content')
    <p>Bienvenido administrador.</p>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        Swal.fire(
            'Good job!',
            'You clicked the button!',
            'success'
        );
    </script>
@stop
