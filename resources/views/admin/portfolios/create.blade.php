@extends('layouts.base_admin')
@section('content')
    @include('components.common.back_button', ['back_route' => 'portfolio.index'])
    @include('components.admin.common.errors')
    <form action="{{ route('portfolio.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">{{ __('vars.title') }}</label>
            <input type="text" class="form-control" name="title" id="title">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">{{ __('vars.description') }}</label>
            <textarea class="form-control" id="description" name="description" rows="3"></textarea>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">{{ __('vars.image') }}</label>
            <input class="form-control" type="file" id="image" name="image">
        </div>
        <div class="mb-3">
            <label for="url" class="form-label">{{ __('vars.url') }}</label>
            <input type="text" class="form-control" id="url" placeholder="https://www.example.com" name="url">
        </div>
        <div class="mb-3">
            <label for="user_id" class="form-label">{{ __('vars.user') }}</label>
            <select name="user_id" id="user_id">
                @foreach($simple_users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>
        </div>
        @include('components.admin.buttons.submit')
    </form>
@endsection
