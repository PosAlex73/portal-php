@extends('layouts.base_front')
@section('content')
    <div class="container">
        @include('components.common.back_button', ['back_route' => 'front.portfolios'])
        <div class="card">
            <div class="card-header">
                {{ $portfolio->title }}
            </div>
            <div class="card-body">
                <p class="card-text">{{ $portfolio->description }}</p>
                <p class="text-muted">{{ $portfolio->user->name }}</p>
                <a href="{{ $portfolio->url }}">{{ __('vars.view_project') }}</a>
                <a href="{{ route('front.user', ['user' => $portfolio->user]) }}">{{ __('vars.show_profile') }}</a>
            </div>
        </div>
    </div>
@endsection
