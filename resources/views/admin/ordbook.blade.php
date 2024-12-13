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
                <p class="text-muted">Here’s a quick overview of your restaurant's orders and bookings.</p>
            </div><br/>

            <!-- Orders Section -->
            <div class="card mb-4">
                <div class="card-header">
                    <h4>Orders</h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Order ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Address</th>
                                <th>Phone</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Dish</th>
                                <th>Quantity</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as $order)
                                <tr>
                                    <td>{{ $order->order_id }}</td>
                                    <td>{{ $order->order_name }}</td>
                                    <td>{{ $order->order_email }}</td>
                                    <td>{{ $order->order_address }}</td>
                                    <td>{{ $order->order_phone }}</td>
                                    <td>{{ $order->order_date }}</td>
                                    <td>{{ $order->order_time }}</td>
                                    <td>{{ $order->order_dish }}</td>
                                    <td>{{ $order->order_qty }}</td>
                                    <td>{{ $order->order_status }}</td>
                                    <td>
                                        <form action="{{ route('admin.orders.update') }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="order_id" value="{{ $order->order_id }}">
                                            <select name="status" class="form-select" onchange="this.form.submit()">
                                                <option value="pending" {{ $order->order_status == 'pending' ? 'selected' : '' }}>Pending</option>
                                                <option value="completed" {{ $order->order_status == 'completed' ? 'selected' : '' }}>Completed</option>
                                                <option value="canceled" {{ $order->order_status == 'canceled' ? 'selected' : '' }}>Canceled</option>
                                            </select>
                                        </form>

                                        <!-- Delete Form -->
                                        <form action="{{ route('admin.orders.destroy', $order->order_id) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('Are you sure you want to delete this order?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Bookings Section -->
            <div class="card">
                <div class="card-header">
                    <h4>Bookings</h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Booking ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Guests</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Additional Notes</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($bookings as $booking)
                                <tr>
                                    <td>{{ $booking->booking_id }}</td>
                                    <td>{{ $booking->book_name }}</td>
                                    <td>{{ $booking->book_email }}</td>
                                    <td>{{ $booking->book_phone }}</td>
                                    <td>{{ $booking->book_guest }}</td>
                                    <td>{{ $booking->book_date }}</td>
                                    <td>{{ $booking->book_time }}</td>
                                    <td>{{ $booking->book_addition }}</td>
                                    <td>{{ $booking->book_status }}</td>
                                    <td>
                                        <form action="{{ route('admin.bookings.update') }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="booking_id" value="{{ $booking->booking_id }}">
                                            <select name="status" class="form-select" onchange="this.form.submit()">
                                                <option value="pending" {{ $booking->book_status == 'pending' ? 'selected' : '' }}>Pending</option>
                                                <option value="confirmed" {{ $booking->book_status == 'confirmed' ? 'selected' : '' }}>Confirmed</option>
                                                <option value="canceled" {{ $booking->book_status == 'canceled' ? 'selected' : '' }}>Canceled</option>
                                            </select>
                                        </form>

                                        <!-- Delete Form -->
                                        <form action="{{ route('admin.bookings.destroy', $booking->booking_id) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('Are you sure you want to delete this booking?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>