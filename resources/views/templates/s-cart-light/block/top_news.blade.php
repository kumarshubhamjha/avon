@php
$news = $modelNews->start()->setlimit(sc_config('item_top'))->getData();
@endphp

@if ($news->count())
<!-- START SECTION NEWS -->
 <section class="blog py-60">
        <div class="container">
             <div class="col-12 heading-wrapper text-center">
                <div class="heading">Blogs</div>
                <p>Lorem ipsum</p>
            </div> 
            <div class="owl-carousel" id="blog">
                
      @foreach ($news as $blog)
        {{-- Render product single --}}
        @include($sc_templatePath.'.common.blog_single', ['blog' => $blog])
        {{-- //Render product single --}}
      @endforeach
        
            </div>
           
        </div>
    </section>
<!-- END SECTION NEWS -->
@endif

 <section class="we-care-sec">
        <div class="container">
            <div class="row  d-flex justify-content-between align-items-center">
                <div class="col-lg-7 col-xl-6 left">
                    <div class="call-sec">
                        <span>Need Help?</span>
                        <a href="callto:01614684800"><i class="fa fa-phone" aria-hidden="true"></i> 0161 468 4800</a>
                    </div>
                    <div class="image"><img src="{{url('img/cycle-image.png')}}" alt=""></div>
                </div>
                <div class="col-lg-5 col-xl-6 right">
                    <div class="heading-wrapper">
                        <div class="heading">We care</div>
                        <p>Reach move previous seat beforehand</p>
                    </div>
                    <ul>
                        <li class="d-flex justify-content-start align-items-center">
                            <div class="image"><img src="{{url('img/icon/we-care-assembly.png')}}" alt=""></div>
                            <div class="text">
                                <span>Specialized Technician</span>
                                Assembly on your door
                            </div>
                        </li>
                        <li class="d-flex justify-content-start align-items-center">
                            <div class="image"><img src="{{url('img/icon/we-care-guranteed.png')}}" alt=""></div>
                            <div class="text">
                                <span>Shop on ease</span>
                                Guaranteed Satisfaction
                            </div>
                        </li>
                        <li class="d-flex justify-content-start align-items-center">
                            <div class="image"><img src="{{url('img/icon/we-care-availibilty.png')}}" alt=""></div>
                            <div class="text">
                                <span>Mon-Sat</span>
                                24X7 Availability to your need
                            </div>
                        </li>
                    </ul>
                </div>    
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
                        <img src="{{url('img/brands-avon.jpg')}}" alt="">
                    </div>
                </div>
                <div class="item">
                    <div class="image">
                        <img src="{{url('img/brands-e-world.jpg')}}" alt="">
                    </div>
                </div>
                <div class="item">
                    <div class="image">
                        <img src="{{url('img/brands-cyeiux.jpg')}}" alt="">
                    </div>
                </div>
                <div class="item">
                    <div class="image">
                        <img src="{{url('img/brands-connect.jpg')}}" alt="">
                    </div>
                </div>
                <div class="item">
                    <div class="image">
                        <img src="{{url('img/brands-avon.jpg')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>


                
               
              
              
          