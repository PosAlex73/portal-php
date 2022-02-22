<div class="mb-2">
    <label for="{{ $name }}" class="form-label">{{ $label }}</label>
    <input type="number" class="form-control" id="{{ $name }}" name="{{ $name }}" value="{{ $value }}">
    @if(!empty($help))
        <p class="text-muted">{{ $help }}</p>
    @endif
</div>
