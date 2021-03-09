@extends('layouts.app')

@section('content')
    @include('components.post_page_parallax', [
        'heading' => 'О компании',
        'crumb' => 'О компании'
        ])

    <div class="section why overlap">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-md-4 col-md-push-8">
                    @include('components.services_widget')
                    @include('components.contacts_widget')
                </div>

                <div class="col-sm-8 col-md-8 col-md-pull-4">
                    @if(isset($post))
                        @include('components.post_content', ['post' => $post ])
                    @else
                        @include('components.post_content')
                    @endif
                </div>
            </div>
        </div>
    </div>

    @if(isset($post))
        @include('components.post_content')
    @endif

    @include('components.info')
@endsection
