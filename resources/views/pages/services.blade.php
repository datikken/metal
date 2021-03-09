@extends('layouts.app')


@section('content')
    @include('components.post_page_parallax.blade.php', [
        'heading' => 'Услуги',
        'crumb' => 'Услуги'
    ])
    @include('components.services-list')
    @include('components.info')
@endsection
