@extends('layouts.main')

@section('content')

<div class="contctimg" style="--background-image: url('{{ asset('images/insta-3.jpg') }}');">
    <!-- HEADING SECTION -->

    <div class="container-fluid contct_divs">
        <div class="contct_title">
            <h1>Connect US</h1>
        </div>
        <div class="contct_content">
            <p>Get in touch to schedule your dining experience or place an order</p>
        </div>
    </div>

 <!-- BANNER SECTION -->
 <div class="banner2" style="--background-image: url('{{ asset('images/banner2.png') }}');">
    <div>
        <h1>Fast & Free</h1>
        <h2>DELIVERY</h2>
    </div>
</div>

<!-- ORDER SWCTION  -->
<section class="ftco-section img" id="order">
    <div class="container">
        <div class="row justify-content-center d-flex">
            <div class="col-md-7 ftco-animate makereservation p-4 px-md-5 pb-md-5">
                <div class="heading-section ftco-animate mb-5 text-center">
                    <span class="subheading">Order</span>
                    <h2 class="mb-4">Your Favorite Dish</h2>
                </div>
                <form action="{{ route('order.store') }}" method="POST">
                    @csrf 
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" name="o_name" placeholder="Enter Name" id="name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" name="o_email" placeholder="@gmail.com" id="email">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="address">Address</label>
                                <input type="text" class="form-control" name="adrs" placeholder="Enter address" id="address">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="text" class="form-control" pattern="\d{10}" name="phn" placeholder="Enter PhNo" id="phone">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="order_date">Date</label>
                                <input type="date" class="form-control" name="date" id="orders_date">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="order_time">Time</label>
                                <input type="time" class="form-control" name="time" id="orders_time">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="dish">Dish Name</label>
                                <input type="text" class="form-control" name="d_name" placeholder="Enter Dish Name" id="dish">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="quantity">Quantity</label>
                                <input type="number" class="form-control" name="qtity" id="quantity" placeholder="Enter Quantity">
                            </div>
                        </div>
                        <div class="col-md-12 mt-3">
                            <div class="form-group text-center">
                                <button type="submit" name="order_submit" class="btn odr_buttn py-3 px-5 ">Order Your Food</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- CONTACT SECTION  -->

<div class="container-fluid" id="contact">
    <h1>CONTACT US</h1>
    <form action="{{ route('contact.store') }}" method="POST">
        @csrf 
        <div class="row">
            <div class="col-md-4 py-1 py-md-0">
                <div class="form-group">
                    <input type="text" class="form-control" name="f_name" id="usr" placeholder="Name" required>
                </div>
            </div>
            <div class="col-md-4 py-1 py-md-0">
                <div class="form-group">
                    <input type="email" class="form-control" name="email" id="eml" placeholder="Email" required>
                </div>
            </div>
            <div class="col-md-4 py-1 py-md-0">
                <div class="form-group">
                    <input type="tel" class="form-control" pattern="\d{10}" name="phone" id="phn" placeholder="Phone" required>
                </div>
            </div>
        </div>
        <div class="form-group">
            <textarea class="form-control" rows="5" id="comment" name="f_message" placeholder="Message" required></textarea>
        </div>
        <div id="messagebtn">
            <button type="submit" name="contact_submit" class="btn-send">Send Message</button>
        </div>
    </form>
</div>

<!-- Table Booking Section -->
<section class="table-booking-section">
    <div class="container bkg_tble">
        <h2 class="text-center mb-4">Book Your Table</h2>
        <form action="{{ route('booking.store') }}" method="POST" class="booking-form">
            @csrf 
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="b_name" id="name" placeholder="Enter your name" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="b_email" id="email" placeholder="Enter your email" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="phone">Phone</label>
                        <input type="tel" class="form-control" pattern="\d{10}" name="phno" id="phone" placeholder="Enter your phone number" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="guests">Number of Guests</label>
                        <input type="number" class="form-control" name="guest" id="guests" placeholder="Enter number of guests" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="date">Date</label>
                        <input type="date" class="form-control" name="b_date" id="date" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="time">Time</label>
                        <input type="time" class="form-control" name="b_time" id="time" required>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group mb-3">
                        <label for="message">Additional Requests</label>
                        <textarea class="form-control" name="addtn" id="message" rows="4" placeholder="Any special requests?"></textarea>
                    </div>
                </div>
                <div class="col-md-12 text-center ">
                    <button type="submit" name="booking_submit" class="btn btn-primary butn1">Book Now</button>
                </div>
            </div>
        </form>
    </div>
</section>
</div>

@endsection