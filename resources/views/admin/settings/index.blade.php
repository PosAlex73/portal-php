@extends('layouts.base_admin')
@section('content')
    <form action="{{ route('settings.update') }}" method="post" enctype="multipart/form-data">
        @csrf
        @foreach($settings as $setting)
            <x-settings :setting="$setting" />
        @endforeach
        @include('components.buttons.submit')
    </form>
@endsection
