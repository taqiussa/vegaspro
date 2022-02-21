<nav class="navbar navbar-expand-lg navbar-light bg-info shadow px-5 py-4" id="navbar-brand">
    <a wire:click.prevent="changeRoute('home')" class="navbar-brand" href="">
        <img src="{{ asset('images/vimeo.svg') }}" width="50" height="50" />
        Vegas | Pro
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a wire:click.prevent="changeRoute('home')"
                    class="nav-link text-white text-lg 
                @if ($pageroute == 'home')
                border-bottom border-white border-width-3
                @endif 
                "
                    href="">Home</a>
            </li>
            <li class="nav-item">
                <a wire:click.prevent="changeRoute('registration')"
                    class="nav-link text-white text-lg
                @if ($pageroute == 'registration')
                border-bottom border-white border-width-3
                @endif
                "
                    href="">Registration</a>
            </li>
            <li class="nav-item">
                <a wire:click.prevent="changeRoute('waitinglist')"
                    class="nav-link text-white text-lg
                @if ($pageroute == 'waitinglist')
                border-bottom border-white border-width-3
                @endif
                "
                    href="">Waiting List</a>
            </li>
            <li class="nav-item">
                <a wire:click.prevent="changeRoute('onprocess')"
                    class="nav-link text-white text-lg
                @if ($pageroute == 'onprocess')
                border-bottom border-white border-width-3
                @endif
                "
                    href="">On Process</a>
            </li>
            <li class="nav-item">
                <a wire:click.prevent="changeRoute('done')"
                    class="nav-link text-white text-lg
                @if ($pageroute == 'done')
                border-bottom border-white border-width-3
                @endif
                "
                    href="">Done</a>
            </li>
        </ul>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <a href="{{ route('logout') }}" class="btn btn-outline-light bg-cyan shadow"
                onclick="event.preventDefault();this.closest('form').submit();">
                <i class="fas fa-sign-out-alt"></i> Logout
            </a>
        </form>
    </div>
</nav>
