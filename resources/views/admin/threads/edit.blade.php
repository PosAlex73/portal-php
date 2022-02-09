@extends('layouts.base_admin')
@section('content')
    @include('components.common.back_button', ['back_route' => 'thread.index'])
    @include('components.admin.common.errors')
    <form action="{{ route('thread.update', ['thread' => $thread]) }}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">{{ __('vars.title') }}</label>
            <input type="text" class="form-control" name="title" id="title" value="{{ $thread->user->name }}">
        </div>
        <div class="mb-3">
            <label for="user_id" class="form-label">{{ __('vars.user') }}</label>
            <select name="user_id" id="user_id">
                @foreach($simple_users as $user)
                    <option value="{{ $user->id }}"@if($thread->user->id === $user->id) selected @endif>{{ $user->name }}</option>
                @endforeach
            </select>
        </div>
        @include('components.admin.buttons.submit')
    </form>
@endsection
