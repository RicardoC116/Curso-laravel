@extends('layouts.plantilla')

@section('title', 'Curso ' . $curso)


@section('content')

    <h2>
        bienvenido al curso de <?php echo $curso; ?>
    </h2>
@endsection
