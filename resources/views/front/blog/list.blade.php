@extends('layouts.base_front')
@section('content')
    @if($articles->count() > 0)
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
