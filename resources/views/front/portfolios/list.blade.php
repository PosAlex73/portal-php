@extends('layouts.base_front')
@section('content')
    <div class="container">
        @if($portfolios->count() > 0)
        @include('front.index.components.search', ['route' => 'portfolios', 'search_text' => __('search'), 'hide_title' => true])
        @foreach($portfolios as $portfolio)
                <div class="card">
                    <div class="card-body">
                        <p class="card-title">{{ $portfolio->title }}</p>
                        <p class="card-text">{{ $portfolio->description }}</p>
                        <a href="{{ route('front.portfolio', ['portfolio' => $portfolio]) }}">{{ __('vars.show_portfolio') }}</a>
                    </div>
                </div>
            @endforeach
            @include('components.common.pagination', ['entity' => $portfolios])
        @else
            <p>{{ __('vars.no_portfolios_found') }}</p>
        @endif
    </div>
@endsection
