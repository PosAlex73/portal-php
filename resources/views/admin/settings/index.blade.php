@extends('layouts.base_admin')
@section('content')
    <form action="{{ route('settings.update') }}" method="post">
        @csrf
        @foreach($settings as $setting)

        @endforeach
    </form>
@endsection
