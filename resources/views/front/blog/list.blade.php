@extends('layouts.base_front')
@section('content')
    @include('components.buttons.back_button', ['route' => Request::exists('search') ? 'front.blog' : 'index'])
    @if($articles->count() > 0)
        <form action="{{ route('front.blog') }}" method="get">
            <div class="m-2">
                @include('components.fields.input', ['name' => 'search', 'label' => __('vars.search'), 'value' => Request::get('search')])
                @include('components.buttons.submit')
                @include('components.buttons.reset')
            </div>
        </form>
        @foreach($articles as $article)
            <div class="card">
                <div class="card-body">
                    <p class="card-title">{{ $article->title }}</p>
                    <p class="card-text">{{ $article->short_description }}...</p>
                    <a href="{{ route('front.article', ['article' => $article]) }}">{{ __('vars.show_article') }}</a>
                </div>
            </div>
        @endforeach
        @include('components.common.pagination', ['entity' => $articles])
    @else
        <p>{{ __('vars.no_portfolios_found') }}</p>
    @endif
@endsection
