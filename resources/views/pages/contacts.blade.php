@extends('layouts.app')


@section('content')
    @include('components.post_page_parallax', [
          'heading' => 'Контакты',
          'crumb' => 'Контакты'
          ])
    @include('components.contacts')
    @include('components.map')
    @include('components.info')
@endsection
