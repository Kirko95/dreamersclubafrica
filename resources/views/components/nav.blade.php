<nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco_navbar ftco-navbar-light" id="ftco-navbar">
    <div class="container d-flex align-items-center">
        <a class="navbar-brand logo-size" href="/">
            <img style="height:80px; width:auto;" src="{{ asset('assets/images/fav.png') }}" alt="Dreamers club Africa">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
            aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a href="/" class="nav-link pl-0">Home</a></li>
                <li class="nav-item"><a href="/about" class="nav-link">About Us</a></li>
                <li class="nav-item"><a href="/programs" class="nav-link"> Our Program</a></li>
                <li class="nav-item"><a href="/gallery" class="nav-link">Gallery</a></li>
                <li class="nav-item"><a href="/contact" class="nav-link">Contact Us</a></li>
                {{-- <li class="nav-item"><a href="/#blog" class="nav-link">Blog</a></li> --}}
                <li class="nav-item"><a href="/register" class="nav-link btn btn-secondary px-4 py-3 mt-3">Register</a></li>
            </ul>
        </div>
    </div>
</nav>