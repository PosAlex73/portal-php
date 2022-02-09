@extends('layouts.base_admin')
@section('content')
    <form action="{{ route('threads.mass_delete') }}" method="post">
        @include('components.admin.buttons.create', ['route' => 'thread.create'])
        @include('components.admin.common.errors')
    @if($threads->count() > 0)
        @include('components.admin.buttons.mass_delete')
        @csrf
        <table class="table">
            <tr>
                <th>#</th>
                <th>{{ __('vars.name') }}</th>
                <th>{{ __('vars.status') }}</th>
                <th>{{ __('vars.created') }}</th>
                <th>{{ __('vars.updated') }}</th>
                <th>{{ __('vars.delete') }}</th>
            </tr>
            @foreach($threads as $thread)
                <tr>
                    <td>{{ $thread->id }}</td>
                    <td><a href="{{ route('thread.edit', ['thread' => $thread]) }}">{{ $thread->user->name }}</a></td>
                    <td>{{ __('vars.common_status') . $thread->status }}</td>
                    <td>{{ $thread->created_at }}</td>
                    <td>{{ $thread->updated_at }}</td>
                    <td><input type="checkbox" name="threads[]" value="{{ $thread->id }}" class="form-check"></td>
                </tr>
            @endforeach
        </table>
        @include('components.common.pagination', ['entity' => $threads])
    </form>
    @else
        <p>{{ __('vars.articles_not_found') }}</p>
    @endif
@endsection
