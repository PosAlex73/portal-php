<div class="form-check">
    <input class="form-check-input" type="checkbox" name="{{ $name }}" value="{{ $value }}" id="flexCheckDefault">
    <label class="form-check-label" for="flexCheckDefault">
        {{ $label }}
    </label>
    @if(!empty($help))
        <p class="text-muted">{{ $help }}</p>
    @endif
</div>
