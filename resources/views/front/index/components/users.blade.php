@if($best_users)
<div class="container px-4 py-5" id="featured-3">
    <h2 class="pb-2 border-bottom">{{ __('vars.new_users') }}</h2>
    <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
        @foreach($best_users as $key => $user)
            <div class="feature col">
                <h2>{{ $user->name }}</h2>
                <p>
                    <a href="{{ route('front.user', ['user' => $user]) }}" class="text-muted">{{ __('vars.show_profile') }}</a>
                </p>
            </div>
        @endforeach
    </div>
</div>
@else
    <div class="container px-4 py-5" id="featured-3">
        <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
            <p>{{ __('vars.no_users_found') }}</p>
        </div>
    </div>
@endif
