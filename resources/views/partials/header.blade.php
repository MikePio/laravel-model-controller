<header>

    <nav class="navbar navbar-expand-lg navbar-light bg-primary d-flex justify-content-between">
        <div class="container w-100">
            <h2>Movie DB</h2>
        </div>
        <div class="container ms-auto">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() === 'home' ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
            </ul>
        </div>
    </nav>

</header>
