@extends('layouts.base_admin')
@section('content')
    @include('components.common.back_button', ['back_route' => 'user.index'])
    @include('components.admin.common.errors')
    @if(!empty($userTabs))
        <x-users.tabs :user_tabs="$userTabs" :user="$user" :active_tab="$active_tab ?? ''"/>
    @endif
    @if(!empty($portfolioMenu))
        <x-users.tabs :user_tabs="portfolioMenu" :user="$user" :active_tab="$active_tab ?? ''" />
    @endif
    @yield('user_info')
@endsection
