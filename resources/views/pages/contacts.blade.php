@extends('layouts.app')


@section('content')
    @include('components.post_page_parallax.blade.php', [
          'heading' => 'Контакты',
          'crumb' => 'Контакты'
          ])
    @include('components.contacts')
    @include('components.map')
    @include('components.info')
@endsection
