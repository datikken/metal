@extends('layouts.app')

@section('content')
    @include('components.post_page_parallax.blade.php', [
        'heading' => 'О компании',
        'crumb' => 'О компании'
        ])
    @include('components.why')
    @include('components.info')
@endsection
