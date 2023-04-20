@extends($sc_templatePath.'.layout')
@section('block_main')


<div class="breadcrumb">
    <div class="container">
        <ul class="flex-wrap">
            <li>
                <a class="link" href="#">Home</a>
            </li>
            <li>Career</li>
        </ul>
    </div>
</div>

<section class="listing-wrapper career-pg">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 left-section">
                <div class="top-wrapper mb-0">
                    <div class="filters d-flex flex-wrap">
                        <a href="#" class="filter clear">Clear All Filters</a>
                    </div>
                </div>
                <div id="career-filter" class="accordion-container filter-accordion">
                    <div class="item">
                        <div class="accordion-title js-accordion-title open">
                            <p>Departments</p>
                        </div>
                        <div class="accordion-content active">
                            <ul>
                                <li>
                                    <a href="javascript:void();" data-tag="all" class="active">All</a>
                                </li>
                                @foreach($data1 as $val)
                                <li>
                                    <a href="javascript:void();" data-tag="tab{{$val->id}}" class="">{{$val->title}}</a>
                                </li>
                               @endforeach
                            </ul>
                        </div>
                    </div>
                    <!--/.accordion-content-->
                </div>
            </div>
            <div class="col-lg-8 right-section open-position items-wrapper">
                <div class="heading-wrapper">
                    <div class="heading">Open Positions</div>
                    <p>Hill highlights streamline scope</p>
                </div>
                
                <div class="item active" id="all">
                    @foreach($data as $val)
                   <div class="inner-item">
                        <div class="accordion-title js-accordion-title open">
                            <div class="row">
                                <div class="col-10 col-md-11 left-section">
                                    <div class="sub-heading-role">{{$val->name}}</div>
                                    <div class="bottom-section">
                                        <div class="detail-wrapper">
                                            <div class="details">
                                                <div class="txt experience">
                                                    <div class="upper">
                                                        {{$val->exp}}
                                                    </div>
                                                    <div class="lower">
                                                        Experience
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="detail-wrapper">
                                            <div class="details">
                                                <div class="txt location">
                                                    <div class="upper">
                                                        {{$val->location}}
                                                    </div>
                                                    <div class="lower">
                                                        Location
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-content active">
                            <div class="job-section">
                                    <div class="sub-heading">Role & Responsibilities</div>
                                    <p>{!! $val->role !!}</p>
                                    <div class="sub-heading">Job Qualifications</div>
                                    <p>{!! $val->qualification !!}</p>
                                    <div class="apply-btn">
                                        <a href="#details" data-fancybox>APPLY NOW</a>
                                    </div>
                                    <div id="details">
                                        <div class="career-inner-popup">
                                            <div class="heading">Upload Your Job Profile</div>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                            <div class="form">
                                                <input type="text" placeholder="Full Name">
                                                <input type="Email" placeholder="Email Address">
                                                <input type="tel" placeholder="Phone Number">
                                                <input type="textarea" placeholder="Message">
                                                <input type="file" placeholder="Upload CV (optional)">
                                                <div class="msg">To upload file size is (Max 5Mb) and allwed file types are (.doc, .docx,.pdf) </div>
                                                <div class="career-btn">
                                                    <button type="submit">Submit</button>
                                                    <button type="Reset">Reset</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="thankyou" style="display: none;">
                                            <img src="img/career/thankyou.jpg" alt="thankyou">
                                            <div class="heading">Thanks You!</div>
                                            <p>Your application was successfully submited.</p>
                                            <div class="title">We'll contact you when a decision is made</div>
                                            <div class="thankyou-btn">
                                                <a href="">Go To Home Page</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                
                @foreach($data1 as $val)
                    <div class="item" id="tab{{$val->id}}">
                      @foreach($data as $itm)
                      @if($val->id  == $itm->category)
                      
                      <div class="inner-item">
                        <div class="accordion-title js-accordion-title open">
                            <div class="row">
                                <div class="col-10 col-md-11 left-section">
                                    <div class="sub-heading-role">{{$itm->name}}</div>
                                    <div class="bottom-section">
                                        <div class="detail-wrapper">
                                            <div class="details">
                                                <div class="txt experience">
                                                    <div class="upper">
                                                        {{$itm->exp}}
                                                    </div>
                                                    <div class="lower">
                                                        Experience
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="detail-wrapper">
                                            <div class="details">
                                                <div class="txt location">
                                                    <div class="upper">
                                                        {{$itm->location}}
                                                    </div>
                                                    <div class="lower">
                                                        Location
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-content active">
                            <div class="job-section">
                                    <div class="sub-heading">Role & Responsibilities</div>
                                    <p>{!! $itm->role !!}</p>
                                    <div class="sub-heading">Job Qualifications</div>
                                    <p>{!! $itm->qualification !!}</p>
                                    <div class="apply-btn">
                                        <a href="#details" data-fancybox>APPLY NOW</a>
                                    </div>
                                    <div id="details">
                                        <div class="career-inner-popup">
                                            <div class="heading">Upload Your Job Profile</div>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                            <div class="form">
                                                <input type="text" placeholder="Full Name">
                                                <input type="Email" placeholder="Email Address">
                                                <input type="tel" placeholder="Phone Number">
                                                <input type="textarea" placeholder="Message">
                                                <input type="file" placeholder="Upload CV (optional)">
                                                <div class="msg">To upload file size is (Max 5Mb) and allwed file types are (.doc, .docx,.pdf) </div>
                                                <div class="career-btn">
                                                    <button type="submit">Submit</button>
                                                    <button type="Reset">Reset</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="thankyou" style="display: none;">
                                            <img src="img/career/thankyou.jpg" alt="thankyou">
                                            <div class="heading">Thanks You!</div>
                                            <p>Your application was successfully submited.</p>
                                            <div class="title">We'll contact you when a decision is made</div>
                                            <div class="thankyou-btn">
                                                <a href="">Go To Home Page</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                    @endif
                   @endforeach
                </div>

               @endforeach
               
                
            </div>
        </div>
    </div>
</section>

<section class="life-avon">
    <div class="container">
        <div class="row">
            <div class="flex-box">
                <div class="col-lg-6">
                    <img src="img/new/career/lifeatavon.webp" alt="life at avon" class="img-fluid">
                </div>
                <div class="col-lg-6">
                    <div class="heading">Life at Avon</div>
                    <div class="title">Fastworks weeks web hit paradigm at jumping.</div>
                    <p>Digital who's intersection were air waste field. Ensure optimal please shift keywords must. Anyway then offline zoom protocol criticality economy. Enable web define back win-win-win marketing boil incentivization customer.</p>
                    <p>Investigation scope mifflin alarming join running engagement including. Synchronise ditching three hard were. Playing needle ourselves skulls unpack driving recap backwards competitors loop. Monday both join policy protocol offline view.</p>
                    <div class="career-btn">
                        <a href="" target="_blank">LEARN MORE</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection