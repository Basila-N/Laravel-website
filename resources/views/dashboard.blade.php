<x-app-layout>
    <div class="container-fluid">
        <!-- Offcanvas Menu for Mobile View and Sidebar for Larger Screens -->
        <button class="btn btn-primary d-md-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu" aria-controls="offcanvasMenu">
            <i class="bi bi-list"></i> Menu
        </button>

        <!-- Offcanvas Menu for Mobile View -->
        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasMenu" aria-labelledby="offcanvasMenuLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasMenuLabel">Chef Food Panel</h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <nav class="nav flex-column">
                    <!-- <a href="/profile" class="nav-link"><i class="bi bi-person-circle"></i> Profile</a> -->
                    <a href="/" class="nav-link"><i class="bi bi-house-door"></i> Home Page</a>
                    <a href="/admin/menu" class="nav-link"><i class="bi bi-card-list"></i> Manage Menu</a>
                    <a href="/admin/ordbook" class="nav-link"><i class="bi bi-box-seam"></i> Orders & Booking</a>
                    <a href="/admin/contacts" class="nav-link"><i class="bi bi-gear"></i> Contact Enquiries</a>

                     <!-- Logout Button -->
                    <a href="#" class="nav-link text-start" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="bi bi-box-arrow-right"></i> Log Out
                    </a>
                    <form id="logout-form" method="POST" action="{{ route('logout') }}" style="display: none;">
                        @csrf
                    </form>
                </nav>
            </div>
        </div>

        <!-- Sidebar for Larger Screens -->
        <div class="col-12 col-md-3 sidebar d-none d-md-block">
            <h2 class="fw-bolder fs-3">Chef Food Panel</h2>
            <nav class="nav flex-column">
                <!-- <a href="/profile" class="nav-link"><i class="bi bi-person-circle"></i> Profile</a> -->
                <a href="/" class="nav-link"><i class="bi bi-house-door"></i> Home Page</a>
                <a href="/admin/menu" class="nav-link"><i class="bi bi-card-list"></i> Manage Menu</a>
                <a href="/admin/ordbook" class="nav-link"><i class="bi bi-box-seam"></i> Orders & Booking</a>
                <a href="/admin/contacts" class="nav-link"><i class="bi bi-gear"></i> Contact Enquiries</a>

                <!-- Logout Button -->
                <a href="#" class="nav-link text-start" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="bi bi-box-arrow-right"></i> Log Out
                </a>
                <form id="logout-form" method="POST" action="{{ route('logout') }}" style="display: none;">
                    @csrf
                </form>
            </nav>
        </div>


        <!-- Main Content Area -->
        <div class="col-12 col-md-9 content">
            <div class="header">
                <h1 class="display-6 fs-1 fw-bold">Welcome, Admin!</h1>
                <br/>
                <p class="text-muted">Here’s a quick overview of your restaurant's dashboard.</p>
            </div>
            <br/>
            <br/>

            <div class="row">
                <!-- <div class="col-12 col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Profile</h5>
                            <p class="card-text">View and update your profile information.</p>
                            <a href="/profile" class="btn w-100">Go to Profile</a>
                        </div>
                    </div>
                </div> -->
                <div class="col-12 col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Manage Menu</h5>
                            <p class="card-text">Add, edit, and remove menu items to keep it fresh.</p>
                            <a href="/admin/menu" class="btn w-100">Manage Menu</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Orders & Booking</h5>
                            <p class="card-text">View, manage, and update incoming orders with ease.</p>
                            <a href="/admin/ordbook" class="btn w-100">View Orders</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Contact Enquiries</h5>
                            <p class="card-text">Manage customer inquiries and feedback effectively.</p>
                            <a href="/admin/contacts" class="btn w-100">View Enquiries</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
