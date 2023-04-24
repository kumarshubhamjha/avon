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
            @php
            $data = DB::table('sc_blog')->where('status',1)->get();
            @endphp
            @foreach ($data as $blog)
            {{-- Render product single --}}
            @include($sc_templatePath.'.common.blog_single', ['blog' => $blog])
            {{-- //Render product single --}}
            @endforeach
        </div>
        <div class="viewall-link text-center mt-5">
            <a href="{{url('blog')}}">View All</a>
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
        <?php $allBrand = App\Helper\Helpers::getHomeBrand(); ?>
        @if(count($allBrand))
        <div class="w-100 owl-carousel" id="press-coverage">
            @foreach($allBrand as $brand)
                <div class="item">
                    <div class="image">
                        <img src="{{sc_file($brand->image)}}" alt="">
                    </div>
                </div>
            @endforeach
        </div>
        @endif
    </div>
</section>