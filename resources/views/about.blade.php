@extends('layouts.main')

@section('content')


<div class="bgimg" style="--background-image: url('{{ asset('images/res11.jpg') }}');">

<!-- ABOUT HEADING SECTION -->

<div class="container-fluid ab_divs">
        <div class="ab_title">
            <h1>ABOUT US</h1>
        </div>
        <div class="ab_content">
            <p>A company’s goals are best achieved by helping workers or customers fulfill their goals</p>
        </div>
</div>

    <!-- ABOUT US SECTION -->

    <div class="container-fluid abt_us">
        <div class="about_us row">
            <div class="ab_image col-md-4">
                <img src="{{ asset ('images/chef.png') }}" alt="Who We Are">
            </div>
            <div class="ab_text col-md-8">
                <h2 class="ab_heading text-center">Who We Are</h2>
                <p class="description">
                    At CHEF FOOD, we’re passionate about providing an exceptional dining experience. Our team of skilled chefs crafts each dish with care, using only the freshest, locally-sourced ingredients.
                    We blend traditional recipes with modern techniques to create a menu that delights the senses.
                    Our inviting atmosphere and attentive service make every visit memorable, whether you’re here for a casual meal or a special celebration.
                    Join us and experience the heart of culinary excellence.
                </p>
                <p class="description">
                    Discover the essence of fine dining, where every meal is a masterpiece. Join us for an unforgettable 
                    experience that nourishes both body and soul.
                </p>
            </div>
        </div>
    </div>

      <!-- ABOUT FEATURES -->
   
      <div class="abt_crd">
        <div class="abt_hed1">
            <h3 class="text-center mb-5">Our Qualities</h3>
        </div>
        <div class="card__container">
           <article class="card__article">
              <img src="{{ asset ('images/fd14.jpeg') }}" alt="image" class="card__img">

              <div class="card__data">
                 <span class="card__description">BEST QUALITY FOOD</span>
                 <p class="card__title">Experience the finest quality food crafted with passion and precision, using only the freshest ingredients for a truly exceptional dining experience.</p>
              </div>
           </article>

           <article class="card__article">
              <img src="{{ asset ('images/ab1.jpg') }}" alt="image" class="card__img">

              <div class="card__data">
                 <span class="card__description">24/7 ON HOTEL</span>
                 <p class="card__title">Open 24/7 to serve you anytime, day or night, with our exceptional quality food and service.</p>
              </div>
           </article>

           <article class="card__article">
              <img src="{{ asset ('images/ab2.jpg') }}" alt="image" class="card__img">

              <div class="card__data">
                 <span class="card__description">EASY TO ORDER</span>
                 <p class="card__title">Enjoy hassle-free ordering with our easy and convenient service, available at your fingertips</p>
              </div>
           </article>
        </div>
     </div>

     <!-- our chef SECTION -->
     <div class="ftco-section" id="chef">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-2">
                <div class="col-md-12 text-center heading-section ftco-animate">
                    <h3 class="text-center mb-5">Our Master Chef</h3>
                </div>
            </div>
            <div class="row">
                <!-- Chef 1 -->
                <div class="col-md-4 col-lg-4 ftco-animate"> 
                    <div class="staff">
                        <div class="img" style="--background-image: url('{{ asset('images/chef3.png') }}');"></div>
                        <div class="text pt-4">
                            <h3>Priya Sharma</h3>
                            <span class="position mb-2">Head Chef</span>
                            <p class="description">With years of experience, Priya specializes in creating innovative and delicious dishes that bring a modern twist to classic cuisines.</p>
                            <div class="social-icons">
                                <a href="#"><i class="fa-brands fa-facebook"></i></a>
                                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
    
                <!-- Chef 2 -->
                <div class="col-md-4 col-lg-4 ftco-animate">
                    <div class="staff">
                        <div class="img" style="--background-image: url('{{ asset('images/chef1.png') }}');"></div>
                        <div class="text pt-4">
                            <h3>Nilay Hirpara</h3>
                            <span class="position mb-2">Co-Chef</span>
                            <p class="description">Nilay brings his visionary approach to the kitchen, blending tradition with creativity to craft unforgettable culinary experiences.</p>
                            <div class="social-icons">
                                <a href="#"><i class="fa-brands fa-facebook"></i></a>
                                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
    
                <!-- Chef 3 -->
                <div class="col-md-4 col-lg-4 ftco-animate">
                    <div class="staff">
                        <div class="img" style="--background-image: url('{{ asset('images/chef2.png') }}');"></div>
                        <div class="text pt-4">
                            <h3>Ravi Kumawat</h3>
                            <span class="position mb-2">Head Chef</span>
                            <p class="description">Ravi is passionate about baking and crafting dishes that are not only delicious but also visually stunning, with attention to detail and flavor.</p>
                            <div class="social-icons">
                                <a href="#"><i class="fa-brands fa-facebook"></i></a>
                                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection