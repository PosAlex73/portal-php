@extends('layouts.base_front')
@section('content')
    <div class="px-4 text-center">
    </div>
    <div class="px-4 py-5 my-5 text-center">
        <h1 class="display-5 fw-bold">Centered hero</h1>
        <div class="col-lg-6 mx-auto">
            <p class="lead mb-4">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
        </div>
        <form action="{{ route('front.portfolios') }}">
            <div class="container display-5">
                <label for="portfolio_search" class="form-label">{{ __('vars.search_portfolios') }}</label>
                <input type="text" id="portfolio_search" class="form-control" name="search">
                <button type="submit" class="btn btn-primary">{{ __('vars.search') }}</button>
            </div>
        </form>
    </div>
    @include('front.index.components.users')
    @include('front.index.components.portfolios')
@endsection
