@php
    $user = \Illuminate\Support\Facades\Auth::user();
@endphp

@extends('layouts.base_front')
@section('content')
    @if(!empty($userTabs))
        <x-users.profile-tabs :user_tabs="$userTabs" :user="$user" :active_tab="$active_tab ?? ''"/>
    @endif
    @if(!empty($portfolioMenu))
        <x-users.tabs :user_tabs="portfolioMenu" :user="$user" :active_tab="$active_tab ?? ''" />
    @endif
    @yield('user_info')
@endsection
