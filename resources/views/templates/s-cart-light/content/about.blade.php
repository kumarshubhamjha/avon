@extends($sc_templatePath.'.layout')
@section('block_main')
<div class="breadcrumb">
    <div class="container">
        <ul class="flex-wrap">
            <li>
                <a class="link" href="{{url('')}}">Home</a>
            </li>
            <li>About Us</li>
        </ul>
    </div>
</div>

<section class="about-banner mb-80">
    <img src="img/new/about/about-banner.webp" alt="about-banner" class="img-fluid">
    <div class="content-box">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-7 inner-content">
                    <h1>{!! $data->banner_title !!}</h1>
                    
                    <div class="text-wrapper">
                        <a href="{{$data->button}}"><img src="img/about/play.svg" class="img-fluid" alt="play-icon">Corporate Presentation</a>    
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="about-history mb-80">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 left-section">
                <div class="bgleft-img">
                    <img src="{{sc_file($data->image)}}" class="img-fluid" alt="history">
                </div>
                <div class="img-wrapper">
                    <img src="{{sc_file($data->imagetwo)}}" class="img-fluid" alt="history">
                </div>
            </div>
            <div class="col-md-6 right-section">
                <div class="heading-wrapper">
                    <div class="heading">{{$data->pride_title}}</div>
                    <p>{{$data->pride_subtitle}}</p>
                </div>
                <p class="inner-text">
              {!! $data->pride_content !!}
              </p>
                <div class="abtpg-btn">
                    <a href="{{url('pride')}}" class="default-btn">Read more</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="about-legacy light-bg py-60">
    <div class="container">
        <div class="heading-wrapper text-center">
            <div class="heading">Legacy of Decades</div>
            <p>We have combined our all offerings in one place</p>
        </div>

        <div class="slider-wrapper">
            <div class="owl-carousel" id="legacy-slider">
                <div class="item">
                    <div class="inner-content">
                        <div class="left-section">
                            <p>1965</p>
                        </div>
                        <div class="right-section">
                            <div class="left">
                                <div class="img-wrapper">
                                    <img src="img/about/legacy-1.jpg" class="img-fluid" alt="legacy">
                                </div>
                                <div class="content-wrapper">
                                    <p class="large">Presence in <img src="img/about/afhganistan-flag.svg" class="img-fluid" alt="afganistan"> Afghanistan & <img src="img/about/afhganistan-flag.svg" class="img-fluid" alt="afganistan"> iran</p>

                                    <p class="inner-text">Marks overseas presence with the export of its bicycles to Afghanistan and IRAN.
                                        <br><br>They started with a bicycle saddles and brakes manufacturing unit in 1948 and set off on a long and arduous journey.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="inner-content">
                        <div class="left-section">
                            <p>1965</p>
                        </div>
                        <div class="right-section">
                            <div class="left">
                                <div class="img-wrapper">
                                    <img src="img/about/legacy-1.jpg" class="img-fluid" alt="legacy">
                                </div>
                                <div class="content-wrapper">
                                    <p class="large">Presence in <img src="img/about/afhganistan-flag.svg" class="img-fluid" alt="afganistan"> Afghanistan & <img src="img/about/afhganistan-flag.svg" class="img-fluid" alt="afganistan"> iran</p>

                                    <p class="inner-text">Marks overseas presence with the export of its bicycles to Afghanistan and IRAN.
                                        <br><br>They started with a bicycle saddles and brakes manufacturing unit in 1948 and set off on a long and arduous journey.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="inner-content">
                        <div class="left-section">
                            <p>1965</p>
                        </div>
                        <div class="right-section">
                            <div class="left">
                                <div class="img-wrapper">
                                    <img src="img/about/legacy-1.jpg" class="img-fluid" alt="legacy">
                                </div>
                                <div class="content-wrapper">
                                    <p class="large">Presence in <img src="img/about/afhganistan-flag.svg" class="img-fluid" alt="afganistan"> Afghanistan & <img src="img/about/afhganistan-flag.svg" class="img-fluid" alt="afganistan"> iran</p>

                                    <p class="inner-text">Marks overseas presence with the export of its bicycles to Afghanistan and IRAN.
                                        <br><br>They started with a bicycle saddles and brakes manufacturing unit in 1948 and set off on a long and arduous journey.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="inner-content">
                        <div class="left-section">
                            <p>1965</p>
                        </div>
                        <div class="right-section">
                            <div class="left">
                                <div class="img-wrapper">
                                    <img src="img/about/legacy-1.jpg" class="img-fluid" alt="legacy">
                                </div>
                                <div class="content-wrapper">
                                    <p class="large">Presence in <img src="img/about/afhganistan-flag.svg" class="img-fluid" alt="afganistan"> Afghanistan & <img src="img/about/afhganistan-flag.svg" class="img-fluid" alt="afganistan"> iran</p>

                                    <p class="inner-text">Marks overseas presence with the export of its bicycles to Afghanistan and IRAN.
                                        <br><br>They started with a bicycle saddles and brakes manufacturing unit in 1948 and set off on a long and arduous journey.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="inner-content">
                        <div class="left-section">
                            <p>1965</p>
                        </div>
                        <div class="right-section">
                            <div class="left">
                                <div class="img-wrapper">
                                    <img src="img/about/legacy-1.jpg" class="img-fluid" alt="legacy">
                                </div>
                                <div class="content-wrapper">
                                    <p class="large">Presence in <img src="img/about/afhganistan-flag.svg" class="img-fluid" alt="afganistan"> Afghanistan & <img src="img/about/afhganistan-flag.svg" class="img-fluid" alt="afganistan"> iran</p>

                                    <p class="inner-text">Marks overseas presence with the export of its bicycles to Afghanistan and IRAN.
                                        <br><br>They started with a bicycle saddles and brakes manufacturing unit in 1948 and set off on a long and arduous journey.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="about-production py-80">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 left-section mb-4 mb-lg-0">
                <div class="heading-wrapper">
                    <div class="heading">{{$data->production_title}}</div>
                    <p>{{$data->production_subtitle}}</p>
                </div>
                <p class="inner-text">{!! $data->production_content !!}</p>
                <div class="abtpg-btn">
                    <a href="{{url('production')}}" class="default-btn">Learn More</a>
                </div>
            </div>
            <div class="col-lg-6 right-section">
                <div class="top-wrapper">
                    <div class="img-wrapper">
                        <img src="{{sc_file($data->productionimage)}}" class="img-fluid" alt="top-img">
                    </div>
                </div>
                <div class="bottom-wrapper">
                    <div class="left">
                        <div class="img-wrapper">
                            <img src="{{sc_file($data->productionimageleft)}}" class="img-fluid" alt="bottom-left">
                        </div>
                    </div>
                    <div class="right">
                        <div class="img-wrapper">
                            <img src="{{sc_file($data->productionimageright)}}" class="img-fluid" alt="bottom-right">
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</section>

<section class="about-management light-bg py-60">
    <div class="container">
        <div class="heading-wrapper text-center">
            <div class="heading">Management</div>
            <p>We have combined our all offerings in one place</p>
        </div>
        <div class="bottom-section">
            <div class="row">
                <div class="col-md-6 col-lg-4 col-xl-4 mb-4 mb-lg-0">
                    <div class="inner-content">
                        <div class="img-wrapper">
                            <img src="img/about/team-01.jpg" alt="Onkar Singh Pahwa" class="img-fluid">
                        </div>
                        <div class="content">
                            <a href="#" class="large">Rishi Pahwa</a>
                             <a href="#" class="icon"><img src="img/about/linkedin.svg" alt="linkedin" class="img-fluid"></a> 
                            <p class="small">Jt. Managing Director</p>
                        </div>
                        
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-4 mb-4 mb-lg-0">
                    <div class="inner-content">
                        <div class="img-wrapper">
                            <img src="img/about/team-02.jpg" alt="Rishi" class="img-fluid">
                        </div>
                        <div class="content">
                            <a href="#" class="large">Onkar Singh Pahwa</a>
                            <p class="small">CMD</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4 col-xl-4 mb-4 mb-lg-0">
                    <div class="inner-content">
                        <div class="img-wrapper">
                            <img src="img/about/team-03.jpg" alt="Mandeep Pahwa" class="img-fluid">
                        </div>
                        <div class="content">
                            <a href="#" class="large">Mandeep Pahwa</a>
                            <p class="small">Executive Director</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
        
    </div>
</section>

<section class="about-csr">
    <div class="container">
        <div class="heading-wrapper text-center">
            <div class="heading">CSR</div>
            <p>We have combined our all offerings in one place</p>
        </div>
        <p class="inner-text">The Company’s CSR initiatives are inspired by the opportunity to contribute towards sustainable future and its nourishment. The Company’s Corporate Strategy ensures inculcating social developments as an integral part of its business enterprise and to contribute to make substantial improvements in the social framework of the nearby community.</p>
        <ul>
            <li class="item">
                <a href="#">Implementation Process</a>
            </li>
            <li class="item">
                <a href="#">CSR Expenditure</a>
            </li>
            <li class="item">
                <a href="#">Monitoring Mechanism</a>
            </li>
        </ul>
        <div class="btn-wrapper abtpg-btn">
            <a href="{{url('csr')}}" class="default-btn">Learn More</a>
        </div>
    </div>
</section>

<section class="about-awards py-80">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 left-section mb-4 mb-lg-0">
                <div class="img-wrapper">
                    <img src="img/about/awards.png" class="img-fluid" alt="history">
                </div>
            </div>
            <div class="col-md-6 right-section">
                <div class="inner-content">
                    <div class="heading-wrapper">
                        <div class="heading">Awards</div>
                        <p>We have combined our all offerings in one place</p>
                    </div>
                    <p class="inner-text">The Company’s Head Office and two manufacturing units are conveniently located on the G.T. Road at Ludhiana, a buzzing industrial city in the northern state of Punjab.</p>
                    <div class="abtpg-btn">
                        <a href="#" class="default-btn">View Certificates</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection