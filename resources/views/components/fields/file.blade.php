<div class="mb-3">
    <label for="{{ $name }}" class="form-label">{{ $label }}</label>
    <input class="form-control" type="file" name="{{ $name }}" id="{{ $name }}">
    @if(!empty($help))
        <p class="text-muted">{{ $help }}</p>
    @endif
</div>
