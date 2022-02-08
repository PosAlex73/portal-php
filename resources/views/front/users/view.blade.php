@extends('layouts.base_front')
@section('content')
    <div class="container">
        <div class="card text-center">
            <div class="card-body">
                <h5 class="card-title">{{ $user->name }}</h5>
                @if(!empty($user->profile->about))
                    <p class="card-text">{{ $user->profile->about }}</p>
                @endif
                @if($user->skills->count() > 0)
                    @foreach($user->skills as $skill)
                        <span class="badge rounded-pill bg-primary">{{ $skill->title }}</span>
                    @endforeach
                @endif

                @if($user->links->count() > 0)
                    <h2 class="my-4">{{ __('vars.user_links') }}</h2>
                    <div class="list-group my-4">
                        @foreach($user->links as $link)
                            <a href="{{ $link->url }}" class="list-group-item list-group-item-action">{{ $link->title }}</a>
                        @endforeach
                    </div>
                @endif

                @if($user->portfolios->count() > 0)
                    <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
                        @foreach($user->portfolios as $key => $portfolio)
                            <div class="feature col">
                                <h2>{{ $portfolio->title }}</h2>
                                <p>{{ $portfolio->description }}</p>
                                <a href="{{ $portfolio->link }}">
                                    {{ __('vars.check_project') }}
                                </a>
                                <p>
                                    <a href="{{ route('front.user', ['user' => $portfolio->user]) }}" class="text-muted">{{ __('vars.show_profile') }}</a>
                                </p>
                            </div>
                        @endforeach
                    </div>
                @else
                    <p>{{ __('vars.user_dont_have_portfolios') }}</p>
                @endif
            </div>
        </div>
    </div>
@endsection
