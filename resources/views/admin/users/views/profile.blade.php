{{ $settings = $user->settings }}
<form action="{{ route('users.settings') }}" method="post">
    @csrf
    {{ $settings }}
</form>
