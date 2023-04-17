
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4 item left-section">
                <div class="logo-wrapper">
                    <a href="#">
                        <img src="{{  sc_file(sc_store('logo', ($storeId ?? null))) }}" class="img-fluid" alt="logo">
                    </a>
                </div>
                <ul class="address">
                    <li>
                        <p>{{ sc_store('address', ($storeId ?? null)) }}</p>
                        <p class="small">Office</p>
                    </li>
                    <li>
                        <a class="tel" href="tel:{{ sc_store('long_phone', ($storeId ?? null)) }}">{{ sc_store('long_phone', ($storeId ?? null)) }}</a>
                        <p class="small">Phone</p>
                    </li>
                    <li>
                        <a class="email" href="mailto:{{ sc_store('email', ($storeId ?? null)) }}">{{ sc_store('email', ($storeId ?? null)) }}</a>
                        <p class="small">Email</p>
                    </li>
                    
                    <li>
                        <p>{{ sc_store('time_active', ($storeId ?? null)) }}</p>
                        <p class="small">Timings</p>
                    </li>
                </ul>
                <ul class="social-link">
                    
                     @if (sc_config('facebook_url'))
                    <li>
                        <a class="link" href="{{ sc_config('facebook_url') }}"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    </li>
                    @endif
                    @if (sc_config('twitter_url'))
                    <li>
                        <a class="link" href="{{ sc_config('twitter_url') }}"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    </li>
                    @endif
                    @if (sc_config('instagram_url'))
                    <li>
                        <a class="link" href="{{ sc_config('instagram_url') }}"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    </li>
                    @endif
                    @if (sc_config('youtube_url'))
                     <li>
                        <a class="link" href="{{ sc_config('youtube_url') }}"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                    </li>
                    @endif
                     @if (sc_config('linkedin_url'))
                     <li>
                        <a class="link" href="{{ sc_config('linkedin_url') }}"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                    </li>
                    @endif
                </ul>
            </div>
            <div class="col-md-2 item">
                <div class="title">By Type</div>
                <ul class="links">
                    <li><a href="#" class="link">Boys Bikes</a></li>
                    <li><a href="#" class="link">Girls Bikes</a></li>
                    <li><a href="#" class="link">Men Bikes</a></li>
                    <li><a href="#" class="link">Women Bikes</a></li>
                    <li><a href="#" class="link">Kids Bikes</a></li>
                </ul>
            </div>
            <div class="col-md-2 item">
                <div class="title">By Categories</div>
                <ul class="links">
                    <li><a href="#" class="link">All Terrain Bikes</a></li>
                    <li><a href="#" class="link">Electric Bikes</a></li>
                    <li><a href="#" class="link">Mountain Bikes</a></li>
                    <li><a href="#" class="link">Fat Tire Bikes</a></li>
                    <li><a href="#" class="link">Road Bikes</a></li>
                    <li><a href="#" class="link">Geared Bikes</a></li>
                </ul>
            </div>
            <div class="col-md-2 item">
                <div class="title">Company</div>
                <ul class="links">
                    <li><a href="#" class="link">About</a></li>
                    <li><a href="#" class="link">History</a></li>
                    <li><a href="#" class="link">Store Locator</a></li>
                    <li><a href="#" class="link">Contact Us</a></li>
                    <li><a href="#" class="link">Become A Dealer</a></li>
                    <li><a href="#" class="link">Careers</a></li>
                    <li><a href="#" class="link">Investors</a></li>
                </ul>
            </div>
            <div class="col-md-2 item">
                <div class="title">Useful Links</div>
                <ul class="links">
                    <li><a href="#" class="link">Bike Finder</a></li>
                    <li><a href="{{url('blog')}}" class="link">Blogs</a></li>
                    <li><a href="#" class="link">Press Coverage</a></li>
                    <li><a href="{{url('brandassets')}}" class="link">Brand Assets</a></li>
                    <li><a href="{{url('refund')}}" class="link">Returns & Refunds</a></li>
                    <li><a href="{{url('shiping')}}" class="link">Shipping & Policy</a></li>
                    <li><a href="{{url('termcondition')}}" class="link">Terms & Conditions</a></li>
                    <li><a href="{{url('warranty')}}" class="link">Warranty Policy</a></li>
                </ul>
            </div>
        </div>
        <div class="copyright">
            <p>©2021–2025 Avon | All Rights Reserved</p>
        </div>
    </div>
</footer>

