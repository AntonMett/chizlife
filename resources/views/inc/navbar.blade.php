<nav class="navbar navbar-dark navbar-expand-lg fixed-top" aria-label="Main">
    <div class="container-fluid col-sm-7">
        <a href="/" class="navbar-brand d-inline-flex">ChizLife
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggler"
            aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarToggler">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a href="{{ route('home') }}" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('about') }}" class="nav-link">About</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('contact') }}" class="nav-link">Contact</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('contact-data') }}" class="nav-link"> All Contact Messages</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('add-product') }}" class="nav-link"> API/Add Product</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
