<div class="mb-2">
    <label for="lang" class="form-label">{{ __('vars.lang') }}</label>
    <select name="lang" id="lang" class="form-select">
        @foreach($langs as $lang)
            <option @if($selected_lang === $lang) selected @endif value="{{ $lang }}">{{ __('langs.' . $lang) }}</option>
        @endforeach
    </select>
</div>
