@extends('layouts.base_front')
@section('content')
    <div class="container">
        @include('components.common.back_button', ['back_route' => 'front.blog'])
        <div class="card">
            <div class="card-header">
                {{ $article->title }}
            </div>
        </div>
    </div>
@endsection
