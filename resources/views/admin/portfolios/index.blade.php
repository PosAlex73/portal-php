@extends('layouts.base_admin')
@section('content')
    <form action="{{ route('portfolios.mass_delete') }}" method="post">
        @include('components.admin.buttons.create', ['route' => 'portfolio.create'])
        @csrf
        @if($portfolios->count() > 0)
            @include('components.admin.buttons.mass_delete')
            <table class="table">
                <tr>
                    <th>#</th>
                    <th>{{ __('vars.id') }}</th>
                    <th>{{ __('vars.title') }}</th>
                    <th>{{ __('vars.status') }}</th>
                    <th>{{ __('vars.updated') }}</th>
                    <th>{{ __('vars.crated') }}</th>
                    <th>{{ __('vars.delete') }}</th>
                </tr>
                @foreach($portfolios as $portfolio)
                    <tr>
                        <td>{{ $portfolio->id }}</td>
                        <td><a href="{{ route('portfolio.edit', ['portfolio' => $portfolio]) }}">{{ $portfolio->title }}</a></td>
                        <td>{{ $portfolio->created_at }}</td>
                        <td>{{ __('vars.common_status_') . $portfolio->status }}</td>
                        <td>{{ $portfolio->updated_at }}</td>
                        <td>{{ $portfolio->created_at }}</td>
                        <td><input type="checkbox" name="portfolios[]" value="{{ $portfolio->id }}" class="form-check"></td>
                    </tr>
                @endforeach
            </table>
            @include('components.common.pagination', ['entity' => $portfolios])
        @else
            <p>{{ __('vars.categories_not_found') }}</p>
        @endif
    </form>

@endsection
