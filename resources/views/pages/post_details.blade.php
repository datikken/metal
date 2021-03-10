@extends('layouts.app')

@section('content')
    @include('components.post_page_parallax', [
        'heading' => 'post_category',
        'crumb' => 'Услуги'
    ])

    <div class="section why overlap">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-md-4 col-md-push-8">
                    @include('components.services_widget')
                    @include('components.contacts_widget')
                </div>

                <div class="col-sm-8 col-md-8 col-md-pull-4">
                    <div class="single-page">
                        @include('components.post_content', ['post' => $post ])
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('components.info')
@endsection
