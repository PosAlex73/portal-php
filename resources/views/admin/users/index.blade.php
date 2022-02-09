@extends('layouts.base_admin')
@section('content')
    @include('components.admin.buttons.create', ['route' => 'user.create'])
    @if($users->count() > 0)
    <form action="{{ route('user.mass_delete') }}" method="post">
        @csrf
        @method('DELETE')
        <table class="table">
            <tr>
                <th>#</th>
                <th>{{ __('vars.name') }}</th>
                <th>{{ __('vars.email') }}</th>
                <th>{{ __('vars.status') }}</th>
                <th>{{ __('vars.created') }}</th>
                <th>{{ __('vars.delete') }}</th>
            </tr>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td><a href="{{ route('user.edit', ['user' => $user]) }}">{{ $user->name }}</a></td>
                    <td>{{ $user->email }}</td>
                    <td>{{ __('vars.user_status_') . $user->status }}</td>
                    <td>{{ $user->created_at }}</td>
                    <td><input type="checkbox" name="users_id[]" value="{{ $user->id }}" class="form-check"></td>
                </tr>
            @endforeach
        </table>
        @include('components.common.pagination', ['entity' => $users])
    </form>
    @else
        <p>{{ __('vars.users_not_found') }}</p>
    @endif
@endsection
