@php
    $contacts = $user->contacts

@endphp

@extends('layouts.users.user')
@section('user_info')
    <form action="{{ route('contacts.mass_delete') }}" method="post">
        @csrf
        @include('components.fields.hidden', ['name' => 'user_id', 'value' => $user->id])
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#create_new_contact">
            {{ __('vars.create_new_contact') }}
        </button>
        @include('components.admin.buttons.mass_delete')

        @if(!empty($contacts))
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">{{ __('vars.title') }}</th>
                    <th scope="col">{{ __('vars.contact') }}</th>
                    <th scope="col">{{ __('vars.type') }}</th>
                    <th scope="col">{{ __('vars.status') }}</th>
                    <th scope="col">{{ __('vars.delete') }}</th>
                </tr>
                </thead>
                <tbody>
                @foreach($contacts as $contact)
                    <tr>
                        <th scope="row">{{ $contact->id }}</th>
                        <td>{{ $contact->title }}</td>
                        <td>{{ $contact->contact }}</td>
                        <td>{{ __('vars.user_contacts_' . $contact->type) }}</td>
                        <td>{{ __('vars.common_status_' . $contact->status) }}</td>
                        <td><input type="checkbox" class="form-check" name="contacts[]" value="{{$contact->id}}"></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @else
            <p>{{ __('vars.no_contacts_found') }}</p>
        @endif
    </form>


    <form action="{{ route('contact.store') }}" method="post">
        @csrf
        @include('components.fields.hidden', ['name' => 'user_id', 'value' => $user->id])
        <div class="modal fade" id="create_new_contact" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">{{ __('vars.create_new_contact') }}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        @include('components.fields.input', ['name' => 'title', 'label' => __('vars.title'), 'value' => ''])
                        @include('components.fields.input', ['name' => 'contact', 'label' => __('vars.contact'), 'value' => ''])
                        @include('components.fields.select', ['name' => 'status', 'label' => __('vars.status'), 'variants' => $common_statuses])
                        @include('components.fields.select', ['name' => 'type', 'label' => __('vars.type'), 'variants' => $common_statuses])
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
