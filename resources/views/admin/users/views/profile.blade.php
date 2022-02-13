<form action="{{ route('users.profile', ['user' => $user]) }}" method="post">
    @csrf
    @foreach(unserialize($user->settings->values) as $setting)

    @endforeach
</form>
