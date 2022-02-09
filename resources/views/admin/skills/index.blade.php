@extends('layouts.base_admin')
@section('content')
    <form action="{{ route('skills.mass_delete') }}" method="post">
        @include('components.admin.buttons.create', ['route' => 'skill.create'])
        @if($skills->count() > 0)
            @include('components.admin.buttons.mass_delete')
            @csrf
            <table class="table">
                <tr>
                    <th>#</th>
                    <th>{{ __('vars.title') }}</th>
                    <th>{{ __('vars.status') }}</th>
                    <th>{{ __('vars.created') }}</th>
                    <th>{{ __('vars.updated') }}</th>
                    <th>{{ __('vars.delete') }}</th>
                </tr>
                @foreach($skills as $skill)
                    <tr>
                        <td>{{ $skill->id }}</td>
                        <td><a href="{{ route('skill.edit', ['skill' => $skill]) }}">{{ $skill->title }}</a></td>
                        <td>{{ __('vars.common_status') . $skill->status }}</td>
                        <td>{{ $skill->created_at }}</td>
                        <td>{{ $skill->updated_at }}</td>
                        <td><input type="checkbox" name="skills[]" value="{{ $skill->id }}" class="form-check"></td>
                    </tr>
                @endforeach
            </table>
            @include('components.common.pagination', ['entity' => $skills])
    </form>
    @else
        <p>{{ __('vars.articles_not_found') }}</p>
    @endif
@endsection
