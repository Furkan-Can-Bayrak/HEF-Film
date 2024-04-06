<header class="p-3 text-bg-dark">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
            </a>
            <h1 class="me-3"><a href="/" class="text-white text-decoration-none">HEF Film</a></h1>

            <ul class="nav col-6  me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="{{route('films.indexByType', 'dizi')}}" class="nav-link px-5 fs-5 ">Diziler</a></li>
                <li><a href="{{route('films.indexByType', 'film')}}" class="nav-link px-5 fs-5">Filmler</a></li>
            </ul>

            <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
                <input type="search" class="form-control form-control-dark text-bg-dark" placeholder="Search..." aria-label="Search">
            </form>

            <div class="text-end">
                @if (Route::has('login'))
                    <nav class="-mx-3 flex flex-1 justify-end">
                        @auth

                        @else
                            <a
                                href="{{ route('login') }}"
                                class="text-white rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]"
                            >
                                Log in
                            </a>

                            @if (Route::has('register'))
                                <a
                                    href="{{ route('register') }}"
                                    class="text-white rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]"
                                >
                                    Register
                                </a>
                            @endif
                        @endauth

                    </nav>
                @endif
            </div>
        </div>
    </div>
</header>






