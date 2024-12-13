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
            <h2 class="fs-3 fw-bolder">Chef Food Panel</h2>
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
                <p class="text-muted">Here’s a quick overview of your restaurant's contacts.</p>
            </div>

            <!-- Contact Section -->
            <div class="container-fluid mt-4">
            @if ($contacts->count() > 0)
                <table class="table table-bordered mt-3" >
                    <thead class="thead-light">
                        <tr style="background-color: #d1d2d9">
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Message</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($contacts as $contact)
                            <tr>
                                <td>{{ $contact->id }}</td>
                                <td>{{ $contact->contact_name }}</td>
                                <td>{{ $contact->contact_email }}</td>
                                <td>{{ $contact->contact_phone }}</td>
                                <td>{{ $contact->contact_message }}</td>
                                <td>
                                    <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('Are you sure you want to delete this order?');">
                                         @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <p class="text-center">No contact enquiries found.</p>
            @endif
            </div>
          
        </div>
    </div>
</x-app-layout>