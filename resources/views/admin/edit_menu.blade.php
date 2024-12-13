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
                    <!-- <a href="/profile" class="nav-link"><i class="bi bi-person-circle"></i> Profile</a>
                    <a href="../index.php" class="nav-link"><i class="bi bi-house-door"></i> Home Page</a> -->
                    <a href="/admin/menu" class="nav-link"><i class="bi bi-card-list"></i> Manage Menu</a>
                    <a href="/admin/ordbook" class="nav-link"><i class="bi bi-box-seam"></i> Orders & Booking</a>
                    <a href="/admin/cntctadmin" class="nav-link"><i class="bi bi-gear"></i> Contact Enquiries</a>

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
            <h2 class="fs-3 fw-bolder">Chef Food Panel</h2>
            <nav class="nav flex-column">
                <!-- <a href="/profile" class="nav-link"><i class="bi bi-person-circle"></i> Profile</a>
                <a href="../index.php" class="nav-link"><i class="bi bi-house-door"></i> Home Page</a> -->
                <a href="/admin/menu" class="nav-link"><i class="bi bi-card-list"></i> Manage Menu</a>
                <a href="/admin/ordbook" class="nav-link"><i class="bi bi-box-seam"></i> Orders & Booking</a>
                <a href="/admin/cntctadmin" class="nav-link"><i class="bi bi-gear"></i> Contact Enquiries</a>

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
                <p class="text-muted">Here’s a quick overview of your restaurant's editing menu's.</p>
            </div>
    
    <div class="container">
        <!-- <h1>Edit Menu Item</h1> -->
        <form method="POST" action="{{ route('menus.update', $menu->id) }}" enctype="multipart/form-data">
            @csrf
            @method('POST')

            <div class="form-group">
                <label for="name">Food Item</label>
                <input type="text" name="name" class="form-control" value="{{ $menu->food_name }}">
            </div>
            
            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" name="description" class="form-control" value="{{ $menu->discription }}">
            </div>

            <div class="form-group">
                <label for="price">Price</label>
                <input type="number" name="price" class="form-control" value="{{ $menu->price }}">
            </div>

            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" name="image" class="form-control">
                <img src="{{url('public/images/'.$menu['image'])}}" width="50" height="50">
            </div>

            <button type="submit" class="btn btn-primary btn-custom">Update Menu Item</button>
        </form>
    </div>
</div>
</x-app-layout>
