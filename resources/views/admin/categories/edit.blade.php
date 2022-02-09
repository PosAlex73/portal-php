@extends('layouts.base_admin')
@section('content')
    @include('components.common.back_button', ['back_route' => 'category.index'])
    @include('components.admin.common.errors')
    <form action="{{ route('category.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">{{ __('vars.title') }}</label>
            <input type="text" class="form-control" name="title" id="title" value="{{ $category->title }}">
        </div>
        @include('components.admin.buttons.submit')
    </form>
@endsection
