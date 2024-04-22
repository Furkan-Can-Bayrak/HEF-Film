
<div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark " style="position: fixed; top: 0; left: 0; width: 280px; height: 100%; overflow-y: auto;">

        <br><br><br>
        <span class="fs-4">Kategoriler</span>

    <hr>
    <ul class="nav nav-pills flex-column mb-auto ">
        <!-- KATEGORİLER-->
        <li><a class="text-decoration-none" href="{{route('films.indexByCategory','aksiyon')}}">Aksiyon</a></li>
        <li><a class="text-decoration-none" href="{{route('films.indexByCategory','dram')}}">Dram</a></li>
        <li><a class="text-decoration-none" href="{{route('films.indexByCategory','romantik')}}">Romantik</a></li>
        <li><a class="text-decoration-none" href="{{route('films.indexByCategory', 'komedi')}}">Komedi</a></li>
        <li><a class="text-decoration-none" href="{{route('films.indexByCategory', 'bilim-kurgu')}}">Bilim Kurgu</a></li>
        <hr>
        <hr>
        <!--  KATEGORİLER SONU -->
        <li><a class="text-decoration-none" href="{{route('showRate')}}">Oy ver</a></li>
        <li><a class="text-decoration-none" href="{{route('createFilm')}}">Film Ekle</a></li>
    </ul>

    @if(\Illuminate\Support\Facades\Auth::check())
    <hr>
    <div class="dropdown">
        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
            <strong>{{\Illuminate\Support\Facades\Auth::user()->name}}</strong>
        </a>


        <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
               <li><a href="{{route('profile.show')}}" class="text-white ps-2 text-decoration-none underline">Profile</a></li>

                @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                <li><a href="{{ route('api-tokens.index') }}">Api Tokens</a></li>
                @endif
            <li><a href="{{route('indexFavourite')}}" class="text-white ps-2 text-decoration-none underline">Favori Filmlerim</a></li>

                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a href="javascript:;" onclick="parentNode.submit();" class="text-white ps-2 text-decoration-none underline">Log Out</a>
                    </form></li>
        </ul>
    </div>
    @endif
</div>
