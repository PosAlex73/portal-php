<div class="mb-3">
    <div class="">
        <img src="{{ $img }}" alt="{{ $alt ?? '' }}" class="img-fluid">
    </div>
    <label for="{{ $name }}" class="form-label">{{ $label }}</label>
    <input class="form-control" type="file" name="{{ $name }}" id="{{ $name }}">
    @if(!empty($help))
        <p class="text-muted">{{ $help }}</p>
    @endif
</div>
