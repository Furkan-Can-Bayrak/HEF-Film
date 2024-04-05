
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


    <hr>
    <div class="dropdown">
        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
            <strong>mdo</strong>
        </a>
        <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
            <li><a class="dropdown-item" href="#">New project...</a></li>
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Sign out</a></li>
        </ul>
    </div>
</div>
