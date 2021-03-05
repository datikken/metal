@extends('layouts.app')


@section('content')
    @include('components.banner-page-about', [
        'heading' => 'Услуги',
        'crumb' => 'Услуги'
    ])
    @include('components.services-list')
    @include('components.info')
@endsection
