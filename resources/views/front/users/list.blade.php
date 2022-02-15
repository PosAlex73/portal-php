@extends('layouts.base_front')
@section('content')
    <h2>{{ __('vars.all_users') }}</h2>
    @include('front.index.components.search', ['route' => 'portfolios', 'search_text' => __('search'), 'hide_title' => true])
    <div class="row py-5 row-cols-1 row-cols-lg-3">
        @if($users->count() > 0)
            @foreach($users as $user)
                <div class="card">
                    <div class="card-body">
                        <p class="card-title">{{ $user->name }}</p>
                        <p class="card-text">{{ $user->profile->about }}</p>
                        <a href="{{ route('front.user', ['user' => $user]) }}">{{ __('vars.show_profile') }}</a>
                    </div>
                </div>
            @endforeach
                @include('components.common.pagination',  ['entity' => $users])
        @else
            <p>{{ __('vars.no_users_found') }}</p>
        @endif
    </div>
@endsection
