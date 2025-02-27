{{-- Navigation bar --}}
<nav class="navbar is-primary has-text-white">
    <div class="container">
        <div class="navbar-brand">
            {{-- the container for the brand logo --}}
            <a href="/" class="navbar-item">
                <i class="fa-solid fa-list-check"></i>&nbsp;TaskITEasy
            </a>

            {{-- The navbar-burger is a hamburger menu that only appears on touch devices. --}}
            <a role="button" class="navbar-burger" data-target="navMenu" aria-label="menu" aria-expanded="false">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>

        {{-- The navbar-menu is hidden on touch devices (<1024px). The modifier class `is-active` is added
             by means of the javascript to display it. --}}
        <div class="navbar-menu" id="navMenu">
            <div class="navbar-start">
                <x-nav.bar/>
            </div>
        </div>
    </div>
</nav>
