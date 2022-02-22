<form action="{{ route('front.' . $route) }}">
    <div class="container display-5">
        @if(empty($hide_title))
            <label for="portfolio_search" class="form-label">{{ __('vars.' . $search_text) }}</label>
        @endif()
        <input type="text" id="search" class="form-control" name="search">
        <button type="submit" class="btn btn-primary">{{ __('vars.search') }}</button>
    </div>
</form>
