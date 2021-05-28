<header class="p-3 bg-dark text-white">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="{{ route('home') }}" class="text-warning text-decoration-none fw-bold me-5 fs-3">PROFI</a>

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="#" class="nav-link px-2 text-white">Pricing</a></li>
                <li><a href="{{ route('contact-data') }}" class="nav-link px-2 text-white">Messages</a></li>
                <li><a href="{{ route('about') }}" class="nav-link px-2 text-white">About Us</a></li>
                <li><a href="{{ route('contact')}}" class="nav-link px-2 text-white">Contact</a></li>
            </ul>

            <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
                <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
            </form>

            <div class="text-end">
                <button type="button" class="btn btn-outline-light me-2">Login</button>
                <button type="button" class="btn btn-warning">Sign-up</button>
            </div>
        </div>
    </div>
</header>
