@extends('layouts.base_admin')
@section('content')
    @include('components.common.back_button', ['back_route' => 'user.index'])
    @include('components.admin.common.errors')
    <x-users.tabs :user_tabs="$userTabs" :user="$user"/>
    <form action="{{ route('user.update', ['user' => $user]) }}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-2">
            <label for="name" class="form-label">{{ __('vars.user_name') }}</label>
            <input type="text" required name="name" id="name" class="form-control" value="{{ $user->name }}">
        </div>
        <div class="mb-2">
            <label for="email" class="form-label">{{ __('vars.email') }}</label>
            <input type="email" required name="email" id="email" class="form-control" value="{{ $user->email }}">
        </div>
        <div class="mb-2">
            <label for="status" class="form-select">{{ __('vars.status') }}</label>
            <select name="status" id="status">
                @foreach($common_statuses as $status)
                    <option value="{{ $status }}"@if($user->$status === $status) selected @endif>{{ __('vars.common_status_' . $status) }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-2">
            <label for="type" class="form-select">{{ __('vars.user_type') }}</label>
            <select name="type" id="type">
                @foreach($user_types as $type)
                    <option value="{{ $type }}"@if($user->type === $type) selected @endif>{{ __('vars.user_types' . $type) }}</option>
                @endforeach
            </select>
        </div>
        @include('admin.users.components.password')

        @include('components.admin.buttons.submit')
    </form>
@endsection
