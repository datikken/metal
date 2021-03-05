@extends('layouts.app')


@section('content')
    @include('components.banner-page-about', [
          'heading' => 'Контакты',
          'crumb' => 'Контакты'
          ])
    @include('components.contacts')
    @include('components.map')
    @include('components.info')
@endsection
