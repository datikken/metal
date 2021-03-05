@extends('layouts.app')


@section('content')
    @include('components.banner-page-about', [
        'heading' => 'Наши работы',
        'crumb' => 'Наши работы'
    ])
    @include('components.work')
    @include('components.info')
@endsection
