<div class="container px-4 py-5" id="featured-3">
    <h2 class="pb-2 border-bottom">{{ __('vars.new_portfolios') }}</h2>
    <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
        @foreach($portfolios as $key => $portfolio)
            <div class="feature col">
                <h2>{{ $portfolio->title }}</h2>
                <p>{{ $portfolio->description }}</p>
                <a href="{{ $portfolio->link }}">
                    {{ __('vars.check_project') }}
                </a>
                <p>
                    <a href="{{ route('front.user', ['user' => $portfolio->user]) }}" class="text-muted">{{ __('vars.show_profile') }}</a>
                </p>
            </div>
        @endforeach
    </div>
</div>
