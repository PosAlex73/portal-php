@extends('layouts.base_front')
@section('content')
    <div class="px-4 text-center">
    </div>
    <div class="px-4 py-5 my-5 text-center">
        <h1 class="display-5 fw-bold">Centered hero</h1>
        <div class="col-lg-6 mx-auto">
            <p class="lead mb-4">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
        </div>
        @include('front.index.components.search', ['route' => 'portfolios', 'search_text' => __('search')])
    </div>
    @include('front.index.components.users')
    @include('front.index.components.portfolios')
@endsection
