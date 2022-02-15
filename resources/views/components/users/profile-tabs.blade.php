<div>
    <ul class="nav nav-pills">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('front_profile') }}">{{ (__('var.profile')) }}</a>
        </li>
        @foreach($user_tabs as $tab)
            <li class="nav-item">
                <x-users.link :tab="$tab" :user="$user" />
            </li>
        @endforeach
    </ul>
</div>

