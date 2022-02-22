<div class="container">
    <footer class="py-3 my-4">
        <ul class="nav justify-content-center border-bottom pb-3 mb-3">
            @foreach($front_menu as $item)
                <li class="nav-item"><a href="{{ route($item['link']) }}" class="nav-link px-2 text-muted">{{ __($item['name']) }}</a></li>
            @endforeach
        </ul>
        <p class="text-center text-muted">&copy; 2021 Company, Inc</p>
    </footer>
</div>
