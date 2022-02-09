@extends('layouts.base_admin')
@section('content')
    @include('components.common.back_button', ['route' => 'user.index'])
    <form action="{{ route('user.store') }}">

    </form>
@endsection
