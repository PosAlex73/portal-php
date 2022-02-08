<header class="p-3 mb-3 border-bottom">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
                <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
            </a>

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="#" class="nav-link px-2 link-secondary">Overview</a></li>
                @foreach($front_menu as $item)
                    <li><a href="{{ route($item['link']) }}" class="nav-link px-2 link-dark">{{ __($item['name']) }}</a></li>
                @endforeach
            </ul>

            <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
                <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
            </form>
            @guest
                <a href="{{ route('login') }}" role="button" aria-disabled="true" class="btn btn-outline-success mr-2">{{ __('var.login') }}</a>
                <a href="{{ route('register') }}" role="button" aria-disabled="true" class="btn btn-outline-success">{{ __('var.register') }}</a>
            @else
                <a href="{{ route('front_profile') }}" role="button" aria-disabled="true" class="btn btn-outline-success mr-2">{{ __('var.profile') }}</a>
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <input type="submit" class="btn btn-outline-danger" value="{{ __('var.logout') }}">
                </form>
            @endguest
        </div>
    </div>
</header>
