@extends('layouts.app')


@section('content')
    @include('components.post_page_parallax', [
        'heading' => 'Новости',
        'crumb' => 'Новости'
    ])

    @include('components.post_page_grid_3', ['post' => $posts])

@endsection
