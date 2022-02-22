@php

if (empty($route)) {
    $route = 'index';
}
@endphp

<a href="{{ route($route) }}" class="btn btn-primary">{{ __('vars.back') }}</a>
