@extends('layouts.main')

@section('content')

<div class="menubg" style="--background-image: url('{{ asset('images/cheffood.jpg') }}');">

    <!-- HEADING SECTION -->

    <!-- <div class="container-fluid gallery_divs">
            <div class="gallery_title">
                <h1>OUR COLLECTIONS</h1>
            </div>
            <div class="gallery_content">
                <p>Explore the beauty of the world, Discover the artistry behind every dish in our vibrant gallery</p>
            </div>
    </div> -->

    <div class="container-fluid menu_divsn">
        <div class="menu_title">
            <h1>OUR COLLECTIONS</h1>
        </div>
        <div class="menu_content">
        <p>Explore the beauty of the world, Discover the artistry behind every dish in our vibrant gallery</p>
        </div>
    </div>

    <!-- gallary -->
    <section id="gallary_sec">
      <div class="container">
          <h1>OUR GALLARY</h1>
          <div class="row" style="margin-top: 30px;">
              <div class="col-md-4 py-3 py-md-0">
                  <div class="card">
                      <div class="overlay">
                          <h3 class="text-center">Green Tomatoes and Rocket on Herby French bread</h3>
                      </div>
                      <img src="{{ asset ('images/1galry.png') }}" alt="">
                  </div>
              </div>
              <div class="col-md-4 py-3 py-md-0">
                  <div class="card">
                      <div class="overlay">
                          <h3 class="text-center">Bruschetta with chard spinach poached egg</h3>
                      </div>
                      <img src="{{ asset ('images/2galry.png') }}" alt="">
                  </div>
              </div>
              <div class="col-md-4 py-3 py-md-0">
                  <div class="card">
                      <div class="overlay">
                          <h3 class="text-center">Seafood Paella Dish with Shellfish</h3>
                      </div>
                      <img src="{{ asset('images/3galry.png')}}" alt="">
                  </div>
              </div>
          </div>


          <div class="row" style="margin-top: 30px;"    data-aos="fade-up"
          data-aos-duration="1500">
              <div class="col-md-4 py-3 py-md-0">
                  <div class="card">
                      <div class="overlay">
                          <h3 class="text-center">Grilled Chicken Kebabs</h3>
                      </div>
                      <img src="{{ asset ('images/4galry.png') }}" alt="">
                  </div>
              </div>
              <div class="col-md-4 py-3 py-md-0">
                  <div class="card">
                      <div class="overlay">
                          <h3 class="text-center">Grilled meals and fresh vegetables</h3>
                      </div>
                      <img src="{{ asset ('images/5galry.png') }}" alt="">
                  </div>
              </div>
              <div class="col-md-4 py-3 py-md-0">
                  <div class="card">
                      <div class="overlay">
                          <h3 class="text-center">Jumbo Chicken Sandwich</h3>
                      </div>
                      <img src="{{asset ('images/6galry.png') }}" alt="">
                  </div>
              </div>
          </div>

          <div class="row" style="margin-top: 30px;"    data-aos="fade-up"
          data-aos-duration="1500">
              <div class="col-md-4 py-3 py-md-0">
                  <div class="card">
                      <div class="overlay">
                          <h3 class="text-center">cold chocolate and vanilla ice cream</h3>
                      </div>
                      <img src="{{ asset ('images/icecream.jpg') }}" alt="">
                  </div>
              </div>
              <div class="col-md-4 py-3 py-md-0">
                  <div class="card">
                      <div class="overlay">
                          <h3 class="text-center">Green Tomatoes and Rocket on Herby French bread</h3>
                      </div>
                      <img src="{{ asset ('images/fd9.jpg') }}" alt="">
                  </div>
              </div>
              <div class="col-md-4 py-3 py-md-0">
                  <div class="card">
                      <div class="overlay">
                          <h3 class="text-center">Lemon mojito with mint leaf</h3>
                      </div>
                      <img src="{{ asset ('images/j2.jpg') }}" alt="">
                  </div>
              </div>
          </div>

          <div class="row" style="margin-top: 30px;"    data-aos="fade-up"
          data-aos-duration="1500">
              <div class="col-md-4 py-3 py-md-0">
                  <div class="card">
                      <div class="overlay">
                          <h3 class="text-center">Shell fish on a black plate</h3>
                      </div>
                      <img src="{{ asset ('images/fd22.jpg') }}" alt="">
                  </div>
              </div>
              <div class="col-md-4 py-3 py-md-0">
                  <div class="card">
                      <div class="overlay">
                          <h3 class="text-center">white chocolate and raspberry cake</h3>
                      </div>
                      <img src="{{ asset ('images/cake.jpg') }}" alt="">
                  </div>
              </div>
              <div class="col-md-4 py-3 py-md-0">
                  <div class="card">
                      <div class="overlay">
                          <h3 class="text-center">Delicious Pizza</h3>
                      </div>
                      <img src="{{ asset ('images/pizza.jpg') }}" alt="">
                  </div>
              </div>
          </div>

          <div class="row" style="margin-top: 30px;"    data-aos="fade-up"
          data-aos-duration="1500">
              <div class="col-md-4 py-3 py-md-0">
                  <div class="card">
                      <div class="overlay">
                          <h3 class="text-center">Vegetarian salad with cherry tomato, mozzarella and lettuce</h3>
                      </div>
                      <img src="{{ asset ('images/fd7.jpg') }}" alt="">
                  </div>
              </div>
              <div class="col-md-4 py-3 py-md-0">
                  <div class="card">
                      <div class="overlay">
                          <h3 class="text-center">waffles with berries and ice cream</h3>
                      </div>
                      <img src="{{ asset ('images/icecream4.jpg') }}" alt="">
                  </div>
              </div>
              <div class="col-md-4 py-3 py-md-0">
                  <div class="card">
                      <div class="overlay">
                          <h3 class="text-center">Choco delicious desert</h3>
                      </div>
                      <img src="{{ asset ('images/desert2.jpg') }}" alt="">
                  </div>
              </div>
          </div>

          <div class="row" style="margin-top: 30px;"    data-aos="fade-up"
          data-aos-duration="1500">
              <div class="col-md-4 py-3 py-md-0">
                  <div class="card">
                      <div class="overlay">
                          <h3 class="text-center">Chicken Wrap</h3>
                      </div>
                      <img src="{{ asset ('images/wrap.jpg') }}" alt="">
                  </div>
              </div>
              <div class="col-md-4 py-3 py-md-0">
                  <div class="card">
                      <div class="overlay">
                          <h3 class="text-center">Fresh Fruit Juice</h3>
                      </div>
                      <img src="{{ asset ('images/j1.jpg') }}" alt="">
                  </div>
              </div>
              <div class="col-md-4 py-3 py-md-0">
                  <div class="card">
                      <div class="overlay">
                          <h3 class="text-center">Grilled burger </h3>
                      </div>
                      <img src="{{ asset ('images/fd16.jpg') }}" alt="">
                  </div>
              </div>
          </div>
      </div>
    </section>

     

    <!-- View restaurent -->

    <div class="container-fluid vw_glry" id="gallary1">
        <h1 class="text-center">VIEW RESTAURENT</h1>
        <div class="row">
            <div class="col-md-4 py-3 py-md-0">
                <div class="card">
                    <img src="{{ asset ('images/r1.png') }}" alt="">
                </div>
            </div>
            <div class="col-md-4 py-3 py-md-0">
                <div class="card">
                    <img src="{{ asset ('images/r2.png') }}" alt="">
                </div>
            </div>
            <div class="col-md-4 py-3 py-md-0">
                <div class="card">
                    <img src="{{ asset ('images/r3.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>

</div>


@endsection