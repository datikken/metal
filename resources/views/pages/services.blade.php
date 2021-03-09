@extends('layouts.app')


@section('content')
    @include('components.post_page_parallax', [
        'heading' => 'Услуги',
        'crumb' => 'Услуги'
    ])

    @include('components.post_page_grid')
    @include('components.info')
@endsection
