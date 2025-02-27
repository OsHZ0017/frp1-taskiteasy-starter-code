<a href="{{ route($route) }}" class="navbar-item {{ Request::url() == route($route) ? 'is-active' : '' }}">
    {{ $slot }}
</a>
