<div class="mb-2">
    <label for="{{ $name }}" class="form-label">{{ $label }}</label>
    <textarea class="form-control" name="{{ $name }}" id="{{ $name }}" cols="{{ $cols ?? '' }}" rows="{{ $rows ?? '' }}">{{ $value }}</textarea>
    @if(!empty($help))
        <p class="text-muted">{{ $help }}</p>
    @endif
</div>
