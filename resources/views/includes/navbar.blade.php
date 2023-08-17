<section class="menu menu2 cid-sDw9gFyu42" once="menu" id="menu2-0">

    <nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg">
        <div class="container">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="index.html">
                        <img src="{{ asset('storage/assets/images/icon-plus-80x80.png') }}" alt="Mobirise"
                            style="height: 3rem;">
                    </a>
                </span>
                <span class="navbar-caption-wrap"><a class="navbar-caption text-black text-primary display-7"
                        href="index.html">Teman Donor</a></span>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true">

                    <li class="nav-item"><a class="nav-link link text-black text-primary display-4"
                            href="{{ url('/') }}">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link link text-black text-primary display-4"
                            href="{{ route('artikel.home.index') }}">Artikel</a></li>
                    <li class="nav-item"><a class="nav-link link text-black text-primary display-4"
                            href="{{ route('stok.index') }}">Stok darah</a>
                    </li>
                </ul>


            </div>
        </div>
    </nav>
</section>
