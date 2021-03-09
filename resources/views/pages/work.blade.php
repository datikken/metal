@extends('layouts.app')

@section('content')
    @include('components.post_page_parallax', [
        'heading' => 'Наши работы',
        'crumb' => 'Наши работы'
    ])

    @include('components.post_page_grid_2')
    @include('components.info')
@endsection
