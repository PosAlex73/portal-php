@php
    $user = \Illuminate\Support\Facades\Auth::user();
@endphp

@extends('layouts.base_front')
@section('content')
    @if(!empty($userTabs))
        <x-users.profile-tabs :user_tabs="$userTabs" :user="$user" :active_tab="$active_tab ?? ''"/>
    @endif
@endsection
