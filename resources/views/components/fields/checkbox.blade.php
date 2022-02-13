<div class="form-check m-2">
    <input type="hidden" name="{{ $name }}" value="F">
    <input class="form-check-input" type="checkbox" @if($value !== 'F') checked @endif name="{{ $name }}" value="A" id="{{ $name }}">
    <label class="form-check-label" for="{{ $name }}">
        {{ $label }}
    </label>
    @if(!empty($help))
        <p class="text-muted">{{ $help }}</p>
    @endif
</div>
