@extends('layouts.users.profile')
@section('user_info')
    <h3>{{ __('vars.user_info') }}</h3>

    <form action="{{ route('front.user.update', ['user' => $user]) }}" method="post">
        @csrf
        @include('components.fields.input', ['name' => 'name', 'value' => $user->name, 'label' => __('var.name')])
        @include('components.fields.email', ['name' => 'email', 'value' => $user->email, 'label' => __('var.email')])
        @include('components.fields.select', ['name' => 'status', 'variant' => $user->status, 'label' => __('var.status'), 'variants' => $common_statuses])
        @include('components.buttons.submit')
    </form>
@endsection
