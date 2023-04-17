@php
$productsNew = $modelProduct->start()->getProductLatest()->setlimit(sc_config('product_top'))->getData();
@endphp
 <section class="offers mb-60 py-60">
        <div class="container d-flex flex-wrap justify-content-between align-items-center">
            <div class="heading-wrapper col-12 col-lg-4 pl-lg-0 mb-lg-0">
                <div class="heading">Exciting Offers</div>
                <p>We have offers on all kind of Banks, UPI, Cards</p>
                <div class="viewall-link d-none d-lg-block ">
                    <a href="#">View All Offers</a>
                </div>
            </div>
            <div class="right col-12 col-lg-8">
                <ul class="d-flex flex-wrap justify-content-between">
                    <li>
                        <span>Discount Offer</span>
                        <b>Flat 10% Off* on<br> all UPI Payments</b>
                    </li>
                    <li>
                        <span>No extra charges</span>
                        <b>0% EMIs on<br> UPI & Cards</b>
                    </li>
                    <li>
                        <span>No hidden charges</span>
                        <b>NO Cost<br> Emi</b>
                    </li>
                    <li>
                        <span>Discount Offer</span>
                        <b>Flat 5% off on Axis<br> Bank Credit cards</b>
                    </li>
                </ul>
            </div>
            <div class="col-12 viewall-link d-none d-md-block d-lg-none text-center mt-4">
                <a href="#">View All Offers</a>
            </div>
        </div>
        </section>
      <section class="video-sec">
        <div class="container">
            <div class="col-12 heading-wrapper text-center">
                <div class="heading">About Us</div>
                <p>We have wide variety for your needs.</p>
            </div>
            <div class="video-inner">
                <a href="https://www.youtube.com/embed/itTbYs4bLDQ" data-fancybox="">
                    <img class="w-100" src="img/video-bg.jpg" alt="video-img">
                </a>
            </div>
        </div>
    </section>
      <section class="about-sec">
        <div class="container d-flex flex-wrap justify-content-between align-items-center">
            <div class="left">
                <div class="heading">
                    Since 1942
                    <span>Serving you from decades.</span>
                </div>
                <p>
                    The beginnings were small offering classic example of the enterprising Punjabi spirit. In the early
                    days of the country’s independence post partition in 1947, the legendary Pahwa Brothers dreamt of
                    providing the common man an affordable means of mobility.
                </p>
            </div>
            <div class="right">
                <div class="btn-links"><a class="default-btn" href="#">Read More</a></div>
            </div>
        </div>
    </section>
@if ($productsNew->count())
      <!-- New Products-->
  <section class="trending-product common-slider-btn py-60">
        <div class="container">
            <div class="col-12 heading-wrapper text-center">
                <div class="heading">Trending Products</div>
                <p>We have wide variety for your needs.</p>
            </div>
            <div class="products owl-carousel" id="trending-product">
   
      @foreach ($productsNew as $key => $productNew)
         
       
        <!--<div class="col-sm-6 col-md-4 col-lg-3">-->
            {{-- Render product single --}}
            @include($sc_templatePath.'.common.product_single', ['product' => $productNew])
            {{-- //Render product single --}}
        <!--</div>-->
        @endforeach
    <!--Product Item-->
    
    

</div>
        </div>
    </section>
@endif
 @php
                            $category =  DB::table('sc_shop_category')->where('status',1)->get();
                             $name =  DB::table('sc_shop_category_description')->get();
                           @endphp
  <section class="choices py-60">
        <div class="container">
            <div class="row">
                <div class="col-12 heading-wrapper text-center">
                    <div class="heading">Explore your choices</div>
                    <p>We have offers on all kind of Banks, UPI, Cards</p>
                </div>
                <div class="col-lg-9 tab-content" id="v-pills-tabContent">
                     @foreach ($category as $val)
                    <div class="tab-pane fade" id="v-pills-{{$val->id}}" role="tabpanel" aria-labelledby="v-pills-{{$val->id}}">
                        <div class="inner-content">
                            <img src="{{sc_file($val->image)}}" alt="" class="img-fluid">
                            <div class="content-box">
                                <div class="title">
                                    @foreach ($name as $title)
                                                        @if($val->id == $title->category_id)
                                                        {{$title->title}}
                                                       
                        
                                    </div>
                                <p>{!! $title->description !!}</p>
                                 @endif
                                                         @endforeach
                                <a href="{{url('category/'.$val->alias.'.html')}}" class="btn-order-now">Order Now</a>
                            </div>
                        </div>
                    </div>
                   @endforeach
                    
                </div>
                <div class="col-lg-3 nav flex-column nav-pills" id="v-pills-tab" role="tablist"
                    aria-orientation="vertical">
                    @foreach ($category as $val)
                    <a class="nav-link"  id="v-pills-{{$val->id}}" data-toggle="pill" href="#v-pills-{{$val->id}}" role="tab"
                        aria-controls="v-pills-1" aria-selected="true"><img src="img/icon/mtb.svg" alt="MTB">
                         @foreach ($name as $title)
                                                        @if($val->id == $title->category_id)
                                                        {{$title->title}}
                                                        @endif
                                                         @endforeach
                        
                        </a>
                   @endforeach
                   
                </div>
            </div>
        </div>
    </section>
     <section class="testimonial-sec common-slider-btn py-60">
        <div class="container">
            <div class="col-12 heading-wrapper text-center">
                <div class="heading">Testimonials</div>
                <p>Listen straight from our actual customers</p>
            </div>
            <div class="owl-carousel" id="testimonial-slider">
                <div class="testimonials d-flex flex-wrap justify-content-between">
                    <div class="left">
                        <div class="title">
                            "I've had great success with my NOVIO. Purchasing this fantastic product was the best
                            choice."
                        </div>
                        <div class="description">
                            <p>
                                I placed my order for this bicycle. With the delivery and assembly procedures, I am
                                really happy. The customer service is really helpful and guided me in solving my problem
                                right away. They offer a variety of alternatives during the checkout process, all of
                                which are simple and straightforward to use. I can state with pride that I own a NOVIO.
                                I'd advise everyone to try it.
                            </p>
                        </div>
                        <div class="author-detail d-flex flex-wrap justify-content-start">
                            <div class="image-text">
                                <img src="img/bicycle-image.jpg" alt="">
                                <div class="text">
                                    Novio 16
                                    <span>
                                        <b>Verified Purchase</b>
                                        <em>On 21/01/2022</em>
                                    </span>
                                </div>
                            </div>
                            <div class="rating-view">
                                <div class="rating">4.5</div>
                                <div class="name">
                                    Samriddhi Vashisht
                                    <span>New Delhi</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="right thumb-slider-wrapper">
                        <img class="w-100" src="img/testimonial-image.jpg" alt="">
                    </div>
                </div>
                <div class="testimonials d-flex flex-wrap justify-content-between">
                    <div class="left">
                        <div class="title">
                            "I've had great success with my NOVIO. Purchasing this fantastic product was the best
                            choice."
                        </div>
                        <div class="description">
                            <p>
                                I placed my order for this bicycle. With the delivery and assembly procedures, I am
                                really happy. The customer service is really helpful and guided me in solving my problem
                                right away. They offer a variety of alternatives during the checkout process, all of
                                which are simple and straightforward to use. I can state with pride that I own a NOVIO.
                                I'd advise everyone to try it.
                            </p>
                        </div>
                        <div class="author-detail d-flex flex-wrap justify-content-start">
                            <div class="image-text">
                                <img src="img/bicycle-image.jpg" alt="">
                                <div class="text">
                                    Novio 16
                                    <span>
                                        <b>Verified Purchase</b>
                                        <em>On 21/01/2022</em>
                                    </span>
                                </div>
                            </div>
                            <div class="rating-view">
                                <div class="rating">4.5</div>
                                <div class="name">
                                    Samriddhi Vashisht
                                    <span>New Delhi</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="right">
                        <img class="w-100" src="img/testimonial-image.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
      <section class="press-coverage-sec common-slider-btn py-4">
        <div class="container">
            <div class="col-12 heading-wrapper text-center">
                <div class="heading">Press Coverage</div>
                <p>All eyes are on us.</p>
            </div>
            <div class="w-100 owl-carousel" id="press-coverage">
                <div class="item">
                    <div class="image">
                        <img src="img/press-hindustan.jpg" alt="">
                    </div>
                </div>
                <div class="item">
                    <div class="image">
                        <img src="img/press-the-times.jpg" alt="">
                    </div>
                </div>
                <div class="item">
                    <div class="image">
                        <img src="img/press-the-hindu.jpg" alt="">
                    </div>
                </div>
                <div class="item">
                    <div class="image">
                        <img src="img/press-indian.jpg" alt="">
                    </div>
                </div>
                <div class="item">
                    <div class="image">
                        <img src="img/press-the-times.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="viewall-link text-center mt-5">
                <a href="#">View All</a>
            </div>
        </div>
    </section>