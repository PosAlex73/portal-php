@php
$contacts = $user->contacts
@endphp

@extends('layouts.users.profile')
@section('user_info')
    <form action="{{ route('front.contacts.update', ['user' => $user]) }}">
        @csrf
        @if($contacts->count() > 0)
            @foreach($contacts as $contact)

            @foreach
        @else
            <p>{{ __('vars.no_contacts') }}</p>
        @endif
    </form>
@endsection
