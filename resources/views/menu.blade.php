@extends('layouts.main')

@section('content')

<div class="menubg" style="--background-image: url('{{ asset('images/fd17.jfif') }}');">

    <!--  HEADING SECTION -->

    <div class="container-fluid menu_divsn">
        <div class="menu_title">
            <h1>MENU CORNER</h1>
        </div>
        <div class="menu_content">
            <p>Discover a delightful range of dishes crafted to perfection with the finest ingredients</p>
        </div>
    </div>

     <!-- offer section -->

     <section class="offer_section layout_padding-bottom">
        <div class="container">
            <div class="heading_container">
                <h2>Our Special Offers</h2>
            </div>
            <div class="offer_container">
                <div class="row">
                    @if($offers->isEmpty())
                        <p>No offers available.</p>
                    @else
                        @foreach($offers as $offer)
                            <div class="col-md-6">
                                <div class="box">
                                    <div class="img-box">
                                        <img src="{{ asset('public/images/' . $offer->image) }}" alt="{{ $offer->food_name }}">
                                    </div>
                                    <div class="detail-box">
                                        <h5>{{ $offer->food_name }}</h5>
                                        <h6><span>{{ $offer->discount }}</span> %Off</h6>
                                        <h4><span>{{$offer->text}}</span></h4>
                                        <a href="/contact">Order Now</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </section>

     <!-- food section -->

   <section class="food_section layout_padding-bottom">
    <div class="container">
        <div class="head_sect">
            <h2>
            Our Menu
            </h2>
        </div>

        <ul class="filters_menu">
            <li class="active" data-filter="*">All</li>
            <li data-filter=".burger">Burger</li>
            <li data-filter=".pizza">Pizza</li>
            <li data-filter=".pasta">Pasta</li>
            <li data-filter=".fries">Fries</li>
        </ul>

        <div class="filters-content">
            <div class="row grid">
            <div class="col-sm-6 col-lg-4 all pizza">
                <div class="box">
                <div>
                    <div class="img-box">
                    <img src="{{ asset ('images/f1.png') }}" alt="">
                    </div>
                    <div class="detail-box">
                    <h5>
                        Delicious Pizza
                    </h5>
                    <p>
                        Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit, magnam voluptatem repellendus sed eaque
                    </p>
                    <div class="options">
                        <h6>
                        $20
                        </h6>
                        <a href="contact.php">
                            <img src="{{ asset ('images/delivery.png') }}" alt="">
                        </a>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 all burger">
                <div class="box">
                <div>
                    <div class="img-box">
                    <img src="{{ asset ('images/f2.png') }}" alt="">
                    </div>
                    <div class="detail-box">
                    <h5>
                        Delicious Burger
                    </h5>
                    <p>
                        Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit, magnam voluptatem repellendus sed eaque
                    </p>
                    <div class="options">
                        <h6>
                        $15
                        </h6>
                        <a href="contact.php">
                            <img src="{{ asset ('images/delivery.png') }}" alt="">
                        </a>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 all pizza">
                <div class="box">
                <div>
                    <div class="img-box">
                    <img src="{{ asset ('images/f3.png') }}" alt="">
                    </div>
                    <div class="detail-box">
                    <h5>
                        Delicious Pizza
                    </h5>
                    <p>
                        Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit, magnam voluptatem repellendus sed eaque
                    </p>
                    <div class="options">
                        <h6>
                        $17
                        </h6>
                        <a href="contact.php">
                            <img src="{{ asset ('images/delivery.png') }}" alt="">
                        </a>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 all pasta">
                <div class="box">
                <div>
                    <div class="img-box">
                    <img src="{{ asset ('images/f4.png') }}" alt="">
                    </div>
                    <div class="detail-box">
                    <h5>
                        Delicious Pasta
                    </h5>
                    <p>
                        Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit, magnam voluptatem repellendus sed eaque
                    </p>
                    <div class="options">
                        <h6>
                        $18
                        </h6>
                        <a href="contact.php">
                            <img src="{{ asset ('images/delivery.png') }}" alt="">
                        </a>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 all fries">
                <div class="box">
                <div>
                    <div class="img-box">
                    <img src="{{ asset ('images/f5.png') }}" alt="">
                    </div>
                    <div class="detail-box">
                    <h5>
                        French Fries
                    </h5>
                    <p>
                        Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit, magnam voluptatem repellendus sed eaque
                    </p>
                    <div class="options">
                        <h6>
                        $10
                        </h6>
                        <a href="contact.php">
                            <img src="{{ asset ('images/delivery.png') }}" alt="">
                        </a>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 all pizza">
                <div class="box">
                <div>
                    <div class="img-box">
                    <img src="{{ asset ('images/f6.png') }}" alt="">
                    </div>
                    <div class="detail-box">
                    <h5>
                        Delicious Pizza
                    </h5>
                    <p>
                        Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit, magnam voluptatem repellendus sed eaque
                    </p>
                    <div class="options">
                        <h6>
                        $15
                        </h6>
                        <a href="contact.php">
                            <img src="{{ asset ('images/delivery.png') }}" alt="">
                        </a>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 all burger">
                <div class="box">
                <div>
                    <div class="img-box">
                    <img src="{{ asset ('images/f7.png') }}" alt="">
                    </div>
                    <div class="detail-box">
                    <h5>
                        Tasty Burger
                    </h5>
                    <p>
                        Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit, magnam voluptatem repellendus sed eaque
                    </p>
                    <div class="options">
                        <h6>
                        $12
                        </h6>
                        <a href="contact.php">
                            <img src="{{ asset ('images/delivery.png') }}" alt="">
                        </a>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 all burger">
                <div class="box">
                <div>
                    <div class="img-box">
                    <img src="{{ asset ('images/f8.png')}}" alt="">
                    </div>
                    <div class="detail-box">
                    <h5>
                        Tasty Burger
                    </h5>
                    <p>
                        Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit, magnam voluptatem repellendus sed eaque
                    </p>
                    <div class="options">
                        <h6>
                        $14
                        </h6>
                        <a href="contact.php">
                            <img src="{{ asset ('images/delivery.png')}}" alt="">
                        </a>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 all pasta">
                <div class="box">
                <div>
                    <div class="img-box">
                    <img src="{{ asset ('images/f9.png') }}" alt="">
                    </div>
                    <div class="detail-box">
                    <h5>
                        Delicious Pasta
                    </h5>
                    <p>
                        Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit, magnam voluptatem repellendus sed eaque
                    </p>
                    <div class="options">
                        <h6>
                        $10
                        </h6>
                        <a href="contact.php">
                            <img src="{{ asset ('images/delivery.png') }}" alt="">
                        </a>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</section>

<!-- menu section  -->

<section class="ftco-section" id="menu">
    <div class="container-fluid px-4 menu_secn">
        <div class="row justify-content-center mb-5 pb-2">
            <div class="col-md-7 text-center heading-section1">
                <h2 class="mb-4 hed2">Special Items</h2>
            </div>
        </div>
        <div class="row">
            @if($menuItems->isEmpty())
                <p>No menu items available at the moment.</p>
            @else
                @foreach($menuItems as $item)
                    <div class="col-md-6 col-lg-4 menu-wrap">
                        <div class="heading-menu text-center"></div>
                        <div class="menus d-flex">
                            <div class="menu-img img" style="background-image: url('{{ asset('public/images/' . $item->image) }}');"></div>
                            <div class="text">
                                <div class="d-flex">
                                    <div class="one-half"><h3>{{ $item->food_name }}</h3></div>
                                    <div class="one-forth"><span class="price">₹{{ $item->price }}</span></div>
                                </div>
                                <p><span>{{ $item->discription }}</span></p>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
        <div class="btn-box">
            <a href="/contact">Order</a>
        </div>
    </div>
</section>

</div>

@endsection