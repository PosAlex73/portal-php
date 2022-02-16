@extends('layouts.users.profile')
@section('user_info')
    <form action="{{ route('user_settings.update', ['user' => $user]) }}" method="post">
        @csrf
        @foreach(unserialize($user->settings->values) as $setting)
            <x-inputs.user-setting-fields :setting="$setting" :user="$user"/>
        @endforeach
        @include('components.admin.buttons.submit')
    </form>
@endsection
