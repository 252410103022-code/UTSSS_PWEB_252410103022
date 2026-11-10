@props(['username' => 'Pengunjung'])

<nav class="navbar navbar-expand-lg navbar-pink">
    <div class="container">
        <a class="navbar-brand" href="{{ route('dashboard', ['username' => $username]) }}">
            <span>♡</span> PinkBakery
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menuNavbar" aria-controls="menuNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="menuNavbar">
            <ul class="navbar-nav ms-auto align-items-lg-center">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('dashboard', ['username' => $username]) }}">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('pengelolaan', ['username' => $username]) }}">Pengelolaan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('profile', ['username' => $username]) }}">Profile</a>
                </li>
                <li class="nav-item ms-lg-3">
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button class="btn btn-pink btn-sm" type="submit">Keluar</button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>