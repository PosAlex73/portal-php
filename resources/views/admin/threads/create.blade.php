@extends('layouts.base_admin')
@section('content')
    @include('components.common.back_button', ['back_route' => 'thread.index'])
    @include('components.admin.common.errors')
    <form action="{{ route('thread.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">{{ __('vars.title') }}</label>
            <input type="text" class="form-control" name="title" id="title">
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">{{ __('vars.status') }}</label>
            <select name="status" id="status">
                @foreach($common_statuses as $status)
                    <option value="{{ $status }}">{{ __('vars.common_status_' . $status) }}</option>
                @endforeach
            </select>
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
