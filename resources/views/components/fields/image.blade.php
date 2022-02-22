<div class="mb-3">
    @if(!empty($value))
    <div class="">
        <img src="{{ asset($value) }}" alt="{{ $alt ?? $name }}" class="img-fluid">
    </div>
    @else
        <p>{{ __('vars.have_no_image') }}</p>
    @endif
    <label for="{{ $name }}" class="form-label">{{ $label }}</label>
    <input class="form-control" type="file" name="{{ $name }}" id="{{ $name }}">
    @if(!empty($help))
        <p class="text-muted">{{ $help }}</p>
    @endif
</div>
