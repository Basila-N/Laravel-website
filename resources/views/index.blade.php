
@extends('layouts.main')

@section('content')

   
    <!-- CAROUSEL SECTION -->

    
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
        
        <ol class="carousel-indicators">
            <li data-bs-target="#carouselExample" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#carouselExample" data-bs-slide-to="1"></li>
            <li data-bs-target="#carouselExample" data-bs-slide-to="2"></li>
        </ol>

        
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="banner" style="background-image: url('{{ asset('images/h11.jpg') }}');"></div>
                <div class="carousel-caption">
                    <h2 class="animate__animated animate__bounceInRight" style="animation-delay: 1s">Fresh Flavors <span>Every Day </span></h2>
                    <h3 class="animate__animated animate__bounceInLeft" style="animation-delay: 2s">Locally Sourced, Thoughtfully Prepared</h3>
                    <p class="animate__animated animate__bounceInRight" style="animation-delay: 3s"><a href="/contact">Order</a></p>
                </div>
            </div>
            <div class="carousel-item">
                <div class="banner" style="background-image: url('{{ asset('images/h5.jpg') }}');"></div>
                <div class="carousel-caption">
                    <h2 class="animate__animated animate__slideInDown" style="animation-delay: 1s">Taste the <span>Tradition</span></h2>
                    <h3 class="animate__animated animate__fadeInUp" style="animation-delay: 2s">Authentic Flavors, Crafted with Love</h3>
                    <p class="animate__animated animate__zoomIn" style="animation-delay: 3s"><a href="/contact">Order</a></p>
                </div>
            </div>
            <div class="carousel-item">
                <div class="banner" style="background-image: url('{{ asset('images/fd1.jpg') }}');"></div>
                <div class="carousel-caption">
                    <h2 class="animate__animated animate__zoomIn" style="animation-delay: 1s">From Farm <span>to Fork</span></h2>
                    <h3 class="animate__animated animate__fadeInLeft" style="animation-delay: 2s">Where Local Ingredients Meet Creative Cuisine</h3>
                    <p class="animate__animated animate__zoomIn" style="animation-delay: 3s"><a href="/contact">Order</a></p>
                </div>
            </div>
        </div>

        
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>


    <!-- ABOUT SECTION -->

     <div class="container my-5 about_sec">
        <div class="row align-items-center">
            <div class="col-md-6">
                <img src="{{ asset ('images/fd14.jpeg') }}" alt="About Us" class="img-fluid rounded shadow">
            </div>
            <div class="col-md-6 abt_cnt">
                <h2 class="display-4 mb-4">ABOUT US</h2>
                <p class="lead">Made of fresh & premium ingredients</p>
                <p>At <strong style="color: #FFCE1C;">Chef Food</strong>, we believe in the joy of sharing great food made with love and passion. Our dishes are crafted from the freshest, highest-quality ingredients, offering a taste experience that celebrates both tradition and innovation. Whether you’re here for a quick bite or a full-course meal, we promise to make every visit memorable with flavors that delight and service that warms your heart.</p>
                <a href="about.html" class="btn sbtn_bttn mt-3">More About</a>
            </div>
        </div>
  
    </div> 

     <!-- Your Counter Section -->
    <div class="counter-wrapper" style="--background-image: url('{{ asset('images/cheffood.avif') }}');">
        <div class="container">
            <div class="row d-md-flex">
                <div class="col-md-9">
                    <div class="row d-md-flex align-items-center">
                        <div class="col-md-3 col-sm-6 mb-4">
                            <div class="counter">
                                <strong class="number" data-number="11">0</strong>
                                <span>Years of Experience</span>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 mb-4">
                            <div class="counter">
                                <strong class="number" data-number="100">0</strong>
                                <span>Cakes/Variety</span>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 mb-4">
                            <div class="counter">
                                <strong class="number" data-number="30">0</strong>
                                <span>Staffs</span>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 mb-4">
                            <div class="counter">
                                <strong class="number" data-number="1500">0</strong>
                                <span>Happy Customers</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center count_para">
                    <p>The amount of love gained by you people is just pure, and we are continuously improving our services and tastes.</p>
                </div>
            </div>
        </div>
    </div> 

    <!-- FEATURES SECTION -->

    <div class="container-fluid feature-section py-5">
        <div class="container">
            <h2 class="text-center mb-5">FEATURES</h2>
            <div class="row">
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card cad1 h-100 text-center border-0 shadow">
                        <img src="{{ asset('images/s-icon01.png') }}" class="card-img-top mx-auto my-3" alt="Best Quality Food" style="max-width: 50px;">
                        <div class="card-body">
                            <h5 class="card-title">BEST QUALITY FOOD</h5>
                            <p class="card-text">Experience top-notch quality food made with the freshest ingredients and utmost care, designed to tantalize your taste buds.</p>
                            <a href="about.html" class="btn sbtn_bttn">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card cad1 h-100 text-center border-0 shadow">
                        <img src="{{ asset('images/s-icon02.png') }}" class="card-img-top mx-auto my-3" alt="24/7 On Hotel" style="max-width: 50px;">
                        <div class="card-body">
                            <h5 class="card-title">24/7 ON HOTEL</h5>
                            <p class="card-text">We are open around the clock to serve you with our delightful dishes, whenever you crave.</p>
                            <a href="about.html" class="btn sbtn_bttn">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card cad1 h-100 text-center border-0 shadow">
                        <img src="{{ asset('images/s-icon03.png') }}" class="card-img-top mx-auto my-3" alt="Easy to Order" style="max-width: 50px;">
                        <div class="card-body">
                            <h5 class="card-title">EASY TO ORDER</h5>
                            <p class="card-text">Order your favorite food in just a few clicks and get it delivered straight to your doorstep.</p>
                            <a href="about.html" class="btn sbtn_bttn">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
 

    <!-- Swiper -->
      <div class="swiper_head">
        <h2 class="text-center mb-5">MENU ITEMS</h2>
     </div>
     
  <div class="swiper mySwiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <img src="{{ asset('images/23-10g.png') }}" alt="">
      </div>
      <div class="swiper-slide">
        <img src="{{ asset('images/23-11g.png') }}" alt="">
      </div>
      <div class="swiper-slide">
        <img src="{{ asset('images/23-13g.png') }}" alt="">
      </div>
      <div class="swiper-slide">
        <img src="{{ asset('images/23-9g.png') }}" alt="">
      </div>
      <div class="swiper-slide">
        <img src="{{ asset('images/23-1g.png') }}" alt="">
      </div>
      <div class="swiper-slide">
        <img src="{{ asset('images/23-2g.png') }}" alt="">
      </div>
      <div class="swiper-slide">
        <img src="{{ asset('images/23-3g.png') }}" alt="">
      </div>
      <div class="swiper-slide">
        <img src="{{ asset('images/23-6g.png') }}" alt="">
      </div>
      <div class="swiper-slide">
        <img src="{{ asset('images/23-7g.png') }}" alt="">
      </div>
      <div class="swiper-slide">
        <img src="{{ asset('images/23-4g.png') }}" alt="">
      </div>
      <div class="swiper-slide">
        <img src="{{ asset('images/23-5g.png') }}" alt="">
      </div>
      <div class="swiper-slide">
        <img src="{{ asset('images/23-8g.png') }}" alt="">
      </div>
      <div class="swiper-slide">
        <img src="{{ asset('images/23-12g.png') }}" alt="">
      </div>
    
    </div>
  </div> 
  


  <!-- FOOD SECTION  -->

   <div class="enjoy-our-food" style="--background-image: url('{{ asset('images/enjoye.png') }}');">

    <div class="food-main-content">
        <h1>enjoy our food</h1>
        <p>
            Delicious, freshly prepared dishes served with passion. Experience flavors that bring joy to every bite.
        </p>
    </div>

</div> 

@endsection

  
        


   
    
    
