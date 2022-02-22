<div>
    <ul class="nav nav-pills">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('user.edit', ['user' => $user]) }}">{{ (__('.var.edit')) }}</a>
        </li>
        @foreach($user_tabs as $tab)
            <li class="nav-item">
                <x-users.link :tab="$tab" :user="$user" />
            </li>
        @endforeach
    </ul>
</div>

