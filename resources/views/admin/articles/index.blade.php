@extends('layouts.base_admin')
@section('content')
    <form action="{{ route('articles.mass_delete') }}" method="post">
        @include('components.admin.buttons.create', ['route' => 'article.create'])
        @if($articles->count() > 0)
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
                @foreach($articles as $article)
                    <tr>
                        <td>{{ $article->id }}</td>
                        <td><a href="{{ route('article.edit', ['article' => $article]) }}">{{ $article->title }}</a></td>
                        <td>{{ __('vars.common_status') . $article->status }}</td>
                        <td>{{ $article->created_at }}</td>
                        <td>{{ $article->updated_at }}</td>
                        <td><input type="checkbox" name="articles[]" value="{{ $article->id }}" class="form-check"></td>
                    </tr>
                @endforeach
            </table>
            @include('components.common.pagination', ['entity' => $articles])
    </form>
    @else
        <p>{{ __('vars.articles_not_found') }}</p>
    @endif
@endsection
