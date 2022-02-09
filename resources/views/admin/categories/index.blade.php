@extends('layouts.base_admin')
@section('content')
    <form action="{{ route('categories.mass_delete') }}" method="post">
    @include('components.admin.buttons.create', ['route' => 'category.create'])
    @if($categories->count() > 0)
    @include('components.admin.buttons.mass_delete')
        @csrf
        <table class="table">
            <tr>
                <th>#</th>
                <th>{{ __('vars.id') }}</th>
                <th>{{ __('vars.title') }}</th>
                <th>{{ __('vars.updated') }}</th>
                <th>{{ __('vars.crated') }}</th>
                <th>{{ __('vars.delete') }}</th>
            </tr>
            @foreach($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td><a href="{{ route('category.edit', ['category' => $category]) }}">{{ $category->title }}</a></td>
                    <td>{{ $category->created_at }}</td>
                    <td>{{ $category->updated_at }}</td>
                    <td>{{ $category->created_at }}</td>
                    <td><input type="checkbox" name="categories[]" value="{{ $category->id }}" class="form-check"></td>
                </tr>
            @endforeach
        </table>
        @include('components.common.pagination', ['entity' => $categories])
    @else
        <p>{{ __('vars.categories_not_found') }}</p>
    @endif
    </form>

@endsection
