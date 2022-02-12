<div>
    <ul class="nav nav-tabs">
        @foreach($user_tabs as $tab)
            <li class="nav-item">
                <x-users.link :tab="$tab" :user="$user" />
            </li>
        @endforeach
    </ul>
</div>

