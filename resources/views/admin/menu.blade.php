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
                    <a href="../index.php" class="nav-link"><i class="bi bi-house-door"></i> Home Page</a>
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
            <h2 class="fw-bolder fs-3">Chef Food Panel</h2>
            <nav class="nav flex-column">
                <!-- <a href="/profile" class="nav-link"><i class="bi bi-person-circle"></i> Profile</a> -->
                <a href="../index.php" class="nav-link"><i class="bi bi-house-door"></i> Home Page</a>
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
                <p class="text-muted">Here’s a quick overview of your restaurant's menu's.</p>
            </div>


        <div class="container my-5">
            <div class="row">
                <!-- Add New Menu Item Form -->
                <div class="col-md-6">
                    <div class="form-card my-4 p-4 border rounded shadow bg-light">
                        <h2 class="text-center mb-4 fs-3 fw-bolder">Add New Menu Item</h2>
                        <form method="POST" action="{{ route('menus.add') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="menu_name" class="form-label font-weight-bold">Food Item:</label>
                                <input type="text" id="menu_name" name="name" class="form-control form-control-lg" placeholder="Menu Item Name" required>
                            </div>

                            <div class="form-group mb-3">
                                <label for="menu_description" class="form-label font-weight-bold">Description:</label>
                                <input type="text" id="menu_description" name="description" class="form-control" placeholder="Description" required>
                            </div>

                            <div class="form-group mb-3">
                                <label for="menu_price" class="form-label font-weight-bold">Price:</label>
                                <input type="number" id="menu_price" name="price" class="form-control form-control-lg" placeholder="Price" required min="0" step="0.01">
                            </div>

                            <div class="form-group mb-4">
                                <label for="menu_image" class="form-label font-weight-bold">Image:</label>
                                <input type="file" id="menu_image" name="image" class="form-control-file" accept="image/*" required>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary btn-lg px-5 btn-custom">Add Menu Item</button>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Add New Offer Form -->
                <div class="col-md-6">
                    <div class="form-card my-4 p-4 border rounded shadow bg-light">
                        <h2 class="text-center fs-3 fw-bolder">Add New Offer</h2>
                        <form method="POST" action="{{ route('offers.add') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="offer_title" class="form-label font-weight-bold">Offer Title:</label>
                                <input type="text" id="offer_title" name="title" class="form-control" placeholder="Offer Title" required>
                            </div>
                            <div class="mb-3">
                                <label for="offer_discount" class="form-label font-weight-bold">Discount:</label>
                                <input type="number" id="offer_discount" name="discount" class="form-control" placeholder="Discount" required min="0" max="100" step="0.1">
                            </div>
                            <div class="mb-3">
                                <label for="offer_link" class="form-label font-weight-bold">Add Text:</label>
                                <input type="text" id="offer_link" name="link" class="form-control" placeholder="Add Text" required>
                            </div>
                            <div class="mb-3">
                                <label for="offer_images" class="form-label font-weight-bold">Upload Image:</label>
                                <input type="file" id="offer_images" name="image" class="form-control" accept="image/*" required>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary btn-lg px-5 btn-custom">Add Offer</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center my-4">
            <h2>
                <a href="{{ route('admin.fetch_menu') }}" class="btn btn-link fs-4">View and Manage Menu</a>
            </h2>
            <h2>
                <a href="{{ route('admin.fetch_offers') }}" class="btn btn-link fs-4">View and Manage Offers</a>
            </h2>
        </div>

    </div>
</x-app-layout>
