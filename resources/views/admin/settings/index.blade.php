@extends('layouts.base_admin')
@section('content')
    <form action="{{ route('settings.update') }}" method="post">
        @csrf
        @foreach($settings as $setting)
            <x-settings :setting="$setting" />
        @endforeach
        @include('components.buttons.submit')
    </form>
@endsection
