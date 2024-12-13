 <!-- NAVBAR SECTION -->
     
 <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a href="index.html" class="navbar-brand">
                <img src="{{ asset('images/edit.png') }}" alt="Logo" class="navbar-logo">
            </a>
            <button class="navbar-toggler custom-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a href="/" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="/about" class="nav-link">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a href="/menu" class="nav-link">Menu</a>
                        </li>
                        <li class="nav-item">
                            <a href="/gallery" class="nav-link">Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a href="/contact" class="nav-link">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('login') }}" class="nav-link">Log in</a>
                        </li>
                    </ul>
                    <a href="/contact" class="btn ss-btn">BOOK SEAT</a>
                </div>
            </div>
        </div>
    </nav>
