@extends('layouts.app')

@section('content')
    @include('components.banner-page-about', [
        'heading' => 'О компании',
        'crumb' => 'О компании'
        ])
    @include('components.why')
    @include('components.info')
@endsection
