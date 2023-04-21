@extends($sc_templatePath.'.layout')
@section('block_main')





<div class="breadcrumb">
    <div class="container">
        <ul class="flex-wrap">
            <li>
                <a class="link" href="{{url('')}}">Home</a>
            </li>
            <li>Dealer Locator</li>
        </ul>
    </div>
</div>

<section class="avon-sq-banner">
    <div class="container">
        <div class="slider-wrapper">
            <div class="owl-carousel" id="avon-sq-banner-slider">
                <div class="item">
                    <img src="img/avonsquare/slider-1.png" alt="" class="img-fluid">
                </div>
                <div class="item">
                    <img src="img/avonsquare/slider-2.png" alt="" class="img-fluid">
                </div>
                <div class="item">
                    <img src="img/avonsquare/slider-3.png" alt="" class="img-fluid">
                </div>
                <div class="item">
                    <img src="img/avonsquare/slider-4.png" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="avon-about py-80">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 left-section">
                <div class="row align-items-center">
                    <div class="col-md-4 item">
                        <div class="img-wrapper logo">
                            <img src="img/logo.svg" alt="avon-logo" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-md-8 item">
                        <div class="img-box">
                            <div class="img-wrapper">
                                <img src="img/brands-avon.jpg" alt="avon-fitness" class="img-fluid">
                            </div>
                            <div class="img-wrapper">
                                <img src="img/brands-e-world.jpg" alt="eworld-avon" class="img-fluid">
                            </div>
                            <div class="img-wrapper">
                                <img src="img/brands-cyeiux.jpg" alt="cycleelc" class="img-fluid">
                            </div>
                            <div class="img-wrapper">
                                <img src="img/brands-cyeiux.jpg" alt="cyciux" class="img-fluid">
                            </div>
                            <div class="img-wrapper">
                                <img src="img/brands-cambio.png" alt="cambio" class="img-fluid">
                            </div>
                            <div class="img-wrapper">
                                <img src="img/brands-avon.jpg" alt="avon-fitness" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 right-section">
                <div class="heading-wrapper">
                    <div class="heading">All In One Store</div>
                    <p>We have combined our all offerings in one place</p>
                </div>
                <p class="inner-text">The Flagship store, AVON SQUARE is the brand new launch by Avon Cycles. This store houses the holy Avon trinity- high-end cycle brand Cambio, the premium brand Cyclux along with the popular cycle brand, Avon.
                <br><br>
                Discover an enriching customer experience with a wide array of products ranging from high-end cycles to fitness equipment, from E-scooters to E- rickshaws, all under one roof. Whether it is satisfying your hunger for adventure or fulfilling your fitness goals or even moving toward a sustainable tomorrow, Avon Square takes care of it all.
                <br><br>
                The flagship store, Avon Square is now open in your city. Visit the store today and explore the diverse product range with world-class mobility solutions at competitive</p>
            </div>
        </div>
    </div>
</section>

<section class="avon-brands py-80">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="inner-wrapper">
                    <div class="heading-wrapper text-center">
                        <div class="heading">Brands</div>
                    </div>

                    <div class="items">
                        
                        @foreach($data1 as $val)
                        <div class="row item  align-items-center">
                            <div class="col-lg-6 left-section">
                                <div class="img-wrapper">
                                    <img src="img/avonsquare/combio.png" alt="cambio" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-lg-6 right-section">
                                <div class="inner-content">
                                    <div class="img-wrapper">
                                        <img src="img/brands-cambio.png" alt="cambio" class="img-fluid">
                                    </div>
                                    <p>The flagship store, Avon Square is now open in your city. Visit the store today and explore the diverse product range with world-class mobility solutions at competitive.</p>
                                    <div class="viewall-link">
                                        <a href="#">Visit Website</a>
                                    </div>
                                </div>
                            </div>
                        
                        </div>
                        @endforeach
                    </div>

                    <div class="join-hand text-center">
                        <div class="img-wrapper">
                            <img src="img/avonsquare/hand.svg" alt="join-hand" class="img-fluid">
                            <p>Be A Part</p>
                        </div>
                        <div class="heading-wrapper text-center">
                            <div class="heading">Join Our Hands</div>
                        </div>
                        <p>Wanted muted but existing requirements submit.</p>
                        <div class="btn-wrapper">
                            <a href="#" class="default-btn">Become A Partner</a>    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="contactus-wrapper join-now py-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 left-section">
                <div class="heading-wrapper">
                    <div class="heading">Ask now to join</div>
                    <p>Reach move previous seat beforehand</p>
                </div>
                <form>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Full Name</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="eg. Jaswinder Randhawa">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Phone Number</label>
                        <input type="tel" class="form-control" id="exampleFormControlInput1" placeholder="+91 XXXX XXX XXX">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Email ID</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="username@email.com">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Message</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Write your message here..."></textarea>
                    </div>
                    <button type="submit" class="btn default-btn">Submit</button>
                </form>
            </div>
            <div class="col-lg-6 right-section">
                <div class="heading-wrapper">
                    <div class="heading">Store Presence</div>
                    <p>Our stores are present in 5 cities right now</p>
                </div>

                <div class="row">
                    <div class="col-6 col-md-4 item">
                        <div class="img-wrapper">
                            <img src="img/avonsquare/store.jpg" alt="store" class="img-fluid">
                            <div class="city-name">
                                jaipur <img src="img/avonsquare/store-jaipur.svg" alt="Jaipur" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 item">
                        <div class="img-wrapper">
                            <img src="img/avonsquare/store.jpg" alt="store" class="img-fluid">
                            <div class="city-name">
                                Mumbai <img src="img/avonsquare/store-mumbai.svg" alt="Mumbai" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 item">
                        <div class="img-wrapper">
                            <img src="img/avonsquare/store.jpg" alt="store" class="img-fluid">
                            <div class="city-name">
                                Kozhikode <img src="img/avonsquare/store-kozhi.svg" alt="Kozhikode" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 item">
                        <div class="img-wrapper">
                            <img src="img/avonsquare/store.jpg" alt="store" class="img-fluid">
                            <div class="city-name">
                                Kannur <img src="img/avonsquare/store-kannur.svg" alt="Kannur" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 item">
                        <div class="img-wrapper">
                            <img src="img/avonsquare/store.jpg" alt="store" class="img-fluid">
                            <div class="city-name">
                                Kangra <img src="img/avonsquare/store-kangra.svg" alt="Kangra" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 item">
                        <div class="viewall-link">
                            <a href="#">View All</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>








@endsection