@php
$links = $user->links;
@endphp

@extends('layouts.users.profile')
@section('user_info')
    <form action="{{ route('front_links.store', ['user' => $user]) }}" method="post">
        @csrf
        @include('components.fields.hidden', ['name' => 'user_id', 'value' => $user->id])
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#create_new_link">
            {{ __('vars.create_new_link') }}
        </button>
        @include('components.admin.buttons.mass_delete')

        @if($links->count() > 0)
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">{{ __('vars.title') }}</th>
                    <th scope="col">{{ __('vars.url') }}</th>
                    <th scope="col">{{ __('vars.status') }}</th>
                    <th scope="col">{{ __('vars.delete') }}</th>
                </tr>
                </thead>
                <tbody>
                @foreach($links as $link)
                    <tr>
                        <th scope="row">{{ $link->id }}</th>
                        <td>{{ $link->title }}</td>
                        <td><a href="{{ $link->url }}">{{ __('vars.link_to_portfolio') }}</a></td>
                        <td>{{ __('vars.common_status_' . $link->status) }}</td>
                        <td><input type="checkbox" class="form-check" name="user_links[]" value="{{$link->id}}"></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @else
            <p>{{ __('vars.no_user_links_found') }}</p>
        @endif
    </form>


    <form action="{{ route('user_link.store') }}" method="post">
        @csrf
        @include('components.fields.hidden', ['name' => 'user_id', 'value' => $user->id])
        <div class="modal fade" id="create_new_link" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">{{ __('vars.create_new_link') }}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        @include('components.fields.input', ['name' => 'title', 'label' => __('vars.title'), 'value' => ''])
                        @include('components.fields.input', ['name' => 'url', 'label' => __('vars.url'), 'value' => ''])
                        @include('components.fields.select', ['name' => 'status', 'label' => __('vars.status'), 'variants' => $common_statuses])
                    </div>
                    <div class="modal-footer">
                        @include('components.admin.buttons.close_modal')
                        @include('components.admin.buttons.submit')
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
