@extends('layouts.base_admin')
@section('content')
    @include('components.common.back_button', ['back_route' => 'article.index'])
    @include('components.admin.common.errors')
    <form action="{{ route('article.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">{{ __('vars.title') }}</label>
            <input type="text" class="form-control" name="title" id="title">
        </div>
        <div class="mb-3">
            <label for="text" class="form-label">{{ __('vars.text') }}</label>
            <textarea class="form-control" id="text" name="text" rows="3"></textarea>
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">{{ __('vars.status') }}</label>
            <select name="status" id="status" class="form-select">
                @foreach($common_statuses as $status)
                    <option value="{{ $status }}">{{ __('vars.common_status_' . $status) }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">{{ __('vars.image') }}</label>
            <input class="form-control" type="file" id="image" name="image">
        </div>
        @include('components.admin.buttons.submit')
    </form>
@endsection
