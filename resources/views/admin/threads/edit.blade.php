@php
$messages = $thread->messages;
@endphp

@extends('layouts.base_admin')
@section('content')
@include('components.common.back_button', ['back_route' => 'thread.index'])
@include('components.admin.common.errors')
<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
    <li class="nav-item" role="presentation">
        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">{{ __('vars.thread') }}</button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">{{ __('vars.settings') }}</button>
    </li>
</ul>
<div class="tab-content" id="pills-tabContent">
    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
        <form action="{{ route('threads.save_message', ['thread' => $thread]) }}" method="post">
            @csrf
            @if($messages->count() > 0)
                <div class="border-2 p-2 overflow-scroll" style="max-height: 500px">
                    @foreach($messages as $message)
                    <div class="alert @if($message->user_id === 0) alert-primary @else alert-secondary @endif" role="alert">
                        {{ $message->message }}
                    </div>
                    @endforeach
                </div>
            @else
                <p>{{ __('vars.no_messages_found') }}</p>
            @endif
            <textarea name="message" id="" cols="30" rows="" class="form-control my-2"></textarea>
            <input type="submit" value="{{ __('vars.send_message') }}" class="btn btn-outline-primary">
        </form>

    </div>
    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
        @include('admin.threads.components.settings_form')
    </div>
</div>
@endsection
