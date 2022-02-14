<div class="mb-2">
    <label for="{{ $name }}" class="form-label">{{ $label }}</label>
</div>
<select class="form-select" name="{{ $name }}" id="{{ $name }}" aria-label="Default select example">
    @foreach($variants as $variant)
        <option @if(!empty($value) && $value === $variant) selected @endif value="{{ $variant }}">{{ __('vars.' . $variant) }}</option>
    @endforeach
</select>
