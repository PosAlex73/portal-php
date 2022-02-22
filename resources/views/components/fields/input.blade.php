<div class="mb-2">
    <label for="{{ $name }}" class="form-label">{{ $label }}</label>
    <input
        type="text"
        class="form-control"
        id="{{ $name }}"
        name="{{ $name }}"
        @if(!empty($value)) value="{{ $value }}" @endif
    >
    @if(!empty($help))
        <p class="text-muted">{{ $help }}</p>
    @endif
</div>
