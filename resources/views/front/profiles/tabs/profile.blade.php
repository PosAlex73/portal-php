@php
    $profile = $user->profile
@endphp

@extends('layouts.users.profile')
@section('user_info')
    <form action="{{ route('profiles.update', ['user' => $user]) }}" method="post">
        @csrf
        @method('PUT')
        @include('components.fields.input', ['name' => 'phone', 'label' => __('vars.phone'), 'value' => $profile->phone])
        @include('components.fields.input', ['name' => 'address', 'label' => __('vars.address'), 'value' => $profile->address])
        <x-common.langs :lang="$profile->lang" />
        @include('components.fields.textarea', ['name' => 'skills', 'label' => __('vars.skills'), 'value' => $profile->skills])
        @include('components.fields.textarea', ['name' => 'about', 'label' => __('vars.about'), 'value' => $profile->about])
        @include('components.fields.image', ['name' => 'image', 'label' => __('vars.avatar'), 'img' => $profile->image])
        @include('components.admin.buttons.submit')
    </form>
@endsection
