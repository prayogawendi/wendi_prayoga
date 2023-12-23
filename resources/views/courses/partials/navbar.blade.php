<nav class="navbar navbar-expand-lg" style="background-color: rgb(63, 63, 63);">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav fs-5 d-flex m-auto align-items-center">
                <li class="nav-item">
                    <a href="/categories" class="nav-link {{ $navbar === 'categories' ? 'active' : '' }} text-warning fw-bold">Courses</a>
                </li>
                <li class="nav-item">
                    <a href="/" class="nav-link {{ $navbar === 'home' ? 'active' : '' }}">
                        <div class="text-center">
                            <img src="/img/Logo-UTI.png" alt="" width="60">
                        </div>
                        <div>
                            <span class="fst-italic text-white fw-bold">University</span>
                        </div>
                    </a>
                </li>
                <li class="nav-item me-1">
                    <a href="/profile" class="nav-link {{ $navbar === 'profile' ? 'active' : '' }} text-warning fw-bold">Profile</a>
                </li>
            </ul>
        </div>
    </div>
</nav>