@extends('layouts.base_admin')
@section('content')
    @include('components.common.back_button', ['back_route' => 'skill.index'])
    @include('components.admin.common.errors')
    <form action="{{ route('skill.update', ['skill' => $skill]) }}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">{{ __('vars.title') }}</label>
            <input type="text" class="form-control" name="title" id="title" value="{{ $skill->title }}">
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">{{ __('vars.status') }}</label>
            <select name="status" id="status">
                @foreach($common_statuses as $status)
                    <option value="{{ $status }}" @if($skill->status === $status) selected @endif>{{ __('vars.common_status_' . $status) }}</option>
                @endforeach
            </select>
        </div>
        @include('components.admin.buttons.submit')
    </form>
@endsection
