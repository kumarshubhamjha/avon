@extends('avon.layout.master')
@section('content')
    <section class="top-banner">
        
        <div class="owl-carousel" id="bannerslider">
            <div class="item" background="https://1.bp.blogspot.com/-sTxAHAxirGM/WVbAe2098nI/AAAAAAABENs/_I5sYMYgLOUzaIE7FfF4qdGX-hoAkq9SgCLcBGAs/s1600/Blog_20170624_113552.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5"></div>
                        <div class="col-md-7">
                            <div class="img-wrapper">
                                <img src="img/banner-cycle.png" alt="cycle" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="img/banner-home.jpg" class="img-fluid large" alt="banner-1">
                <img src="img/banner-home-small.jpg" class="img-fluid small" alt="banner-1-small">
            </div>
            <div class="item">
                <img src="img/banner-home.jpg" class="img-fluid large" alt="banner-1">
                <img src="img/banner-home-small.jpg" class="img-fluid small" alt="banner-1-small">
            </div>
            <div class="item">
                <img src="img/banner-home.jpg" class="img-fluid large" alt="banner-1">
                <img src="img/banner-home-small.jpg" class="img-fluid small" alt="banner-1-small">
            </div>
        </div>
    </section>
    <section class="offers mb-60 py-60">
        <div class="container d-flex flex-wrap justify-content-between align-items-center">
            <div class="heading-wrapper col-12 col-lg-4 col-md-4 pl-0 mb-0">
                <div class="heading">Exciting Offers</div>
                <p>We have offers on all kind of Banks, UPI, Cards</p>
                <div class="viewall-link">
                    <a href="#">View All Offers</a>
                </div>
            </div>
            <div class="right col-12 col-lg-8 col-md-8">
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
        </div>
    </section>
    
    <section class="video-sec">
        <div class="container">
            <div class="col-12 heading-wrapper text-center">
                <div class="heading">About Us</div>
                <p>We have wide variety for your needs.</p>
            </div>
            <div class="video-inner">
                <a href="">
                    <img class="w-100" src="img/video-bg.jpg" alt="">
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
                <div class="btn-links"><a class="default-btn" href="#">About Us</a></div>
            </div>
        </div>
    </section>
    <section class="trending-product common-slider-btn py-60">
        <div class="container">
            <div class="col-12 heading-wrapper text-center">
                <div class="heading">Trending Products</div>
                <p>We have wide variety for your needs.</p>
            </div>
            
        </div>
    </section>
    <section class="choices py-60">
        <div class="container">
            <div class="row">
                <div class="col-12 heading-wrapper text-center">
                    <div class="heading">Explore your choices</div>
                    <p>We have offers on all kind of Banks, UPI, Cards</p>
                </div>
                <div class="col-md-9 tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade active show" id="v-pills-1" role="tabpanel"
                        aria-labelledby="v-pills-1-tab">
                        <div class="inner-content">
                            <div class="title">MTB</div>
                            <p>Accessories to make cycling more enjoyable. You should checkout our accessories page!</p>
                            <a href="#" class="btn-order-now">Order Now</a>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-2-tab">
                        <div class="inner-content">
                            <div class="title">Clasics</div>
                            <p>Accessories to make cycling more enjoyable. You should checkout our accessories page!</p>
                            <a href="#" class="btn-order-now">Order Now</a>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-3-tab">
                        <div class="inner-content">
                            <div class="title">Men</div>
                            <p>Accessories to make cycling more enjoyable. You should checkout our accessories page!</p>
                            <a href="#" class="btn-order-now">Order Now</a>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-4" role="tabpanel" aria-labelledby="v-pills-4-tab">
                        <div class="inner-content">
                            <div class="title">Women</div>
                            <p>Accessories to make cycling more enjoyable. You should checkout our accessories page!</p>
                            <a href="#" class="btn-order-now">Order Now</a>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-5" role="tabpanel" aria-labelledby="v-pills-5-tab">
                        <div class="inner-content">
                            <div class="title">Kids</div>
                            <p>Accessories to make cycling more enjoyable. You should checkout our accessories page!</p>
                            <a href="#" class="btn-order-now">Order Now</a>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-6" role="tabpanel" aria-labelledby="v-pills-6-tab">
                        <div class="inner-content">
                            <div class="title">Electric Bicycles</div>
                            <p>Accessories to make cycling more enjoyable. You should checkout our accessories page!</p>
                            <a href="#" class="btn-order-now">Order Now</a>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-7" role="tabpanel" aria-labelledby="v-pills-7-tab">
                        <div class="inner-content">
                            <div class="title">Tyre Bikes</div>
                            <p>Accessories to make cycling more enjoyable. You should checkout our accessories page!</p>
                            <a href="#" class="btn-order-now">Order Now</a>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-8" role="tabpanel" aria-labelledby="v-pills-8-tab">
                        <div class="inner-content">
                            <div class="title">Accessories</div>
                            <p>Accessories to make cycling more enjoyable. You should checkout our accessories page!</p>
                            <a href="#" class="btn-order-now">Order Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 nav flex-column nav-pills" id="v-pills-tab" role="tablist"
                    aria-orientation="vertical">
                    <a class="nav-link active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab"
                        aria-controls="v-pills-1" aria-selected="true"><img src="img/icon/mtb.svg" alt="MTB">MTB</a>
                    <a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab"
                        aria-controls="v-pills-2" aria-selected="false"><img src="img/icon/clasics.svg"
                            alt="Clasics">Clasics</a>
                    <a class="nav-link" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab"
                        aria-controls="v-pills-3" aria-selected="false"><img src="img/icon/mtb.svg" alt="Men">Men</a>
                    <a class="nav-link" id="v-pills-4-tab" data-toggle="pill" href="#v-pills-4" role="tab"
                        aria-controls="v-pills-4" aria-selected="false"><img src="img/icon/clasics.svg"
                            alt="Women">Women</a>
                    <a class="nav-link" id="v-pills-5-tab" data-toggle="pill" href="#v-pills-5" role="tab"
                        aria-controls="v-pills-5" aria-selected="false"><img src="img/icon/mtb.svg" alt="Kids">Kids</a>
                    <a class="nav-link" id="v-pills-6-tab" data-toggle="pill" href="#v-pills-6" role="tab"
                        aria-controls="v-pills-6" aria-selected="false"><img src="img/icon/clasics.svg"
                            alt="EB">Electric Bicycle</a>
                    <a class="nav-link" id="v-pills-7-tab" data-toggle="pill" href="#v-pills-7" role="tab"
                        aria-controls="v-pills-7" aria-selected="false"><img src="img/icon/mtb.svg" alt="TB">Tyre
                        Bikes</a>
                    <a class="nav-link" id="v-pills-8-tab" data-toggle="pill" href="#v-pills-8" role="tab"
                        aria-controls="v-pills-8" aria-selected="false"><img src="img/icon/clasics.svg"
                            alt="Accessories">Accessories</a>
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
    <section class="blog py-60">
        <div class="container">
            <div class="col-12 heading-wrapper text-center">
                <div class="heading">Blogs</div>
                <p>We have offers on all kind of Banks, UPI, Cards</p>
            </div>
            <div class="owl-carousel" id="blog">
                <div class="item">
                    <div class="inner-content">
                        <div class="img-wrapper">
                            <img src="img/choices.jpg" class="img-fluid" alt="blog-1">
                            <span class="label">03 OCT</span>
                        </div>
                        <p class="small">5 Min Read</p>
                        <div class="name">
                            Enjoy off-road cycling thrills with Affordable Avon Mountain Cycles.
                        </div>
                        <p class="large">MTB or Mountain bicycles, as the name signifies, are designed to meet the
                            challenges of smooth and hassle-free cycling 0..</p>
                        <a class="readmore-btn" href="#">Read More</a>
                    </div>
                </div>
                <div class="item">
                    <div class="inner-content">
                        <div class="img-wrapper">
                            <img src="img/choices.jpg" class="img-fluid" alt="blog-1">
                            <span class="label">03 OCT</span>
                        </div>
                        <p class="small">5 Min Read</p>
                        <div class="name">
                            Enjoy off-road cycling thrills with Affordable Avon Mountain Cycles.
                        </div>
                        <p class="large">MTB or Mountain bicycles, as the name signifies, are designed to meet the
                            challenges of smooth and hassle-free cycling 0..</p>
                        <a class="readmore-btn" href="#">Read More</a>
                    </div>
                </div>
                <div class="item">
                    <div class="inner-content">
                        <div class="img-wrapper">
                            <img src="img/choices.jpg" class="img-fluid" alt="blog-1">
                            <span class="label">03 OCT</span>
                        </div>
                        <p class="small">5 Min Read</p>
                        <div class="name">
                            Enjoy off-road cycling thrills with Affordable Avon Mountain Cycles.
                        </div>
                        <p class="large">MTB or Mountain bicycles, as the name signifies, are designed to meet the
                            challenges of smooth and hassle-free cycling 0..</p>
                        <a class="readmore-btn" href="#">Read More</a>
                    </div>
                </div>
                <div class="item">
                    <div class="inner-content">
                        <div class="img-wrapper">
                            <img src="img/choices.jpg" class="img-fluid" alt="blog-1">
                            <span class="label">03 OCT</span>
                        </div>
                        <p class="small">5 Min Read</p>
                        <div class="name">
                            Enjoy off-road cycling thrills with Affordable Avon Mountain Cycles.
                        </div>
                        <p class="large">MTB or Mountain bicycles, as the name signifies, are designed to meet the
                            challenges of smooth and hassle-free cycling 0..</p>
                        <a class="readmore-btn" href="#">Read More</a>
                    </div>
                </div>
                <div class="item">
                    <div class="inner-content">
                        <div class="img-wrapper">
                            <img src="img/choices.jpg" class="img-fluid" alt="blog-1">
                            <span class="label">03 OCT</span>
                        </div>
                        <p class="small">5 Min Read</p>
                        <div class="name">
                            Enjoy off-road cycling thrills with Affordable Avon Mountain Cycles.
                        </div>
                        <p class="large">MTB or Mountain bicycles, as the name signifies, are designed to meet the
                            challenges of smooth and hassle-free cycling 0..</p>
                        <a class="readmore-btn" href="#">Read More</a>
                    </div>
                </div>
                <div class="item">
                    <div class="inner-content">
                        <div class="img-wrapper">
                            <img src="img/choices.jpg" class="img-fluid" alt="blog-1">
                            <span class="label">03 OCT</span>
                        </div>
                        <p class="small">5 Min Read</p>
                        <div class="name">
                            Enjoy off-road cycling thrills with Affordable Avon Mountain Cycles.
                        </div>
                        <p class="large">MTB or Mountain bicycles, as the name signifies, are designed to meet the
                            challenges of smooth and hassle-free cycling 0..</p>
                        <a class="readmore-btn" href="#">Read More</a>
                    </div>
                </div>
            </div>
            <div class="viewall-link text-center mt-5">
                <a href="#">View All</a>
            </div>
        </div>
    </section>
    <section class="we-care-sec">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="left">
                <div class="call-sec">
                    <span>Need Help?</span>
                    <a href="callto:01614684800"><i class="fa fa-phone" aria-hidden="true"></i> 0161 468 4800</a>
                </div>
                <div class="image"><img src="img/cycle-image.png" alt=""></div>
            </div>
            <div class="right">
                <div class="heading-wrapper">
                    <div class="heading">We care</div>
                    <p>Reach move previous seat beforehand</p>
                </div>
                <ul>
                    <li class="d-flex justify-content-start align-items-center">
                        <div class="image"><img src="img/icon/we-care-assembly.png" alt=""></div>
                        <div class="text">
                            <span>Specialized Technician</span>
                            Assembly on your door
                        </div>
                    </li>
                    <li class="d-flex justify-content-start align-items-center">
                        <div class="image"><img src="img/icon/we-care-guranteed.png" alt=""></div>
                        <div class="text">
                            <span>Shop on ease</span>
                            Guaranteed Satisfaction
                        </div>
                    </li>
                    <li class="d-flex justify-content-start align-items-center">
                        <div class="image"><img src="img/icon/we-care-availibilty.png" alt=""></div>
                        <div class="text">
                            <span>Mon-Sat</span>
                            24X7 Availability to your need
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section class="press-coverage-sec brands-sec common-slider-btn py-60">
        <div class="container">
            <div class="col-12 heading-wrapper text-center">
                <div class="heading">Our Brands</div>
                <p>Explore our realm</p>
            </div>
            <div class="w-100 owl-carousel" id="brands-sec-slider">
                <div class="item">
                    <div class="image">
                        <img src="img/brands-avon.jpg" alt="">
                    </div>
                </div>
                <div class="item">
                    <div class="image">
                        <img src="img/brands-e-world.jpg" alt="">
                    </div>
                </div>
                <div class="item">
                    <div class="image">
                        <img src="img/brands-cyeiux.jpg" alt="">
                    </div>
                </div>
                <div class="item">
                    <div class="image">
                        <img src="img/brands-connect.jpg" alt="">
                    </div>
                </div>
                <div class="item">
                    <div class="image">
                        <img src="img/brands-avon.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection