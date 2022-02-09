<div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark vh-100" style="width: 280px;">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
        <span class="fs-4">Sidebar</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
        @foreach($admin_menu as $item)
            <li class="nav-item mb-2">
                <a href="{{ route($item['link']) }}" class="nav-link active" aria-current="page">
                    {{ __($item['name']) }}
                </a>
            </li>
        @endforeach
    <hr>
</div>
