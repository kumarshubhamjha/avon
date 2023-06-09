@php
$banners = $modelBanner->start()->setType('banner')->getData()
@endphp

@if ($banners->count())
<section class="main-banner top-banner qqqq">
    <div class="owl-carousel" id="bannerslider">
     @foreach ($banners as $key => $banner)
        <div class="item">
            <div class="inner-content">
                <picture>
                    <source media="(min-width:768px)" srcset="{{ sc_file($banner->image) }}">
                    <img src="{{url('img/banner-mobile.jpg')}}" alt="banner">
                </picture>
                <div class="content-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-lg-5 left-section">
                                <div class="inner-content">
                                    <div class="cycle-logo">
                                        <img src="{{url('img/sting-logo.png')}}" alt="brand-logo">
                                    </div>
                                    <div class="text-wrapper">
                                        <div class="top">
                                            <div class="flat">
                                                Flat
                                            </div>
                                            <div class="amount">15%</div>
                                        </div>
                                        <div class="bottom">
                                            <div class="offer">Not to Miss Offer</div>
                                            <div class="off">Off</div>
                                        </div>
                                    </div>
                                    <div class="btn-wrapper">
                                        <a href="#" class="default-btn">Order Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>
@endif  
    
    
     