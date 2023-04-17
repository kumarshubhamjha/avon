@extends($sc_templatePath.'.layout')
@section('block_main')


<div class="breadcrumb">
    <div class="container">
        <ul class="flex-wrap">
            <li>
                <a class="link" href="{{url('')}}">Home</a>
            </li>
            <li>Blogs</li>
        </ul>
    </div>
</div>



<section class="listing-wrapper blog-listing">
    <div class="container">
        <div class="row">
            <div class="col-md-4 left-section">
                <div class="top-wrapper">
                    <!--<div class="filters d-flex flex-wrap">-->
                    <!--    <a href="#" class="filter">FTB</a>-->
                    <!--    <a href="#" class="filter">Buying Guide</a>-->
                    <!--    <a href="#" class="filter clear">Clear All Filters</a>-->
                    <!--</div>-->
                </div>
                <div id="accordion" class="accordion-container">
                    <div class="item">
                        <div class="accordion-title js-accordion-title open">
                            <p>Blog Categories</p>
                        </div>
                        <div class="accordion-content active">
                            <ul>
                                <li>
                                    <a href="javascript:void();" data-tag="all" class="active">All</a>
                                </li>
                                @foreach($data1 as $val)
                                <li>
                                    <a href="javascript:void();" data-tag="tab-{{$val->id}}" class="">{{$val->title}}</a>
                                </li>
                               @endforeach
                            </ul>
                        </div>
                    </div>
                    <!--/.accordion-content-->
                    
                </div>
            </div>
            <div class="col-md-8 right-section blog">
                <div class="top-wrapper mb-0 align-items-center">
                    <div class="heading-wrapper">
                        <div class="heading">Blogs</div>
                        <p>Hill highlights streamline scope</p>
                    </div>
                </div>
                
                <div class="items active" id="all">
                    @foreach($data as $val)
                    <div class="item">
                        <div class="inner-content">
                            <div class="img-wrapper">
                                <img src="{{sc_file($val->image)}}" class="img-fluid" alt="blog-1">
                                <span class="label">{{$val->date}}</span>
                            </div>
                            <p class="small">{{$val->reading_time}} Read</p>
                            <div class="name">
                               {{$val->title}}
                            </div>
                            <p class="large">{!! $val->description !!}</p>
                            <a class="readmore-btn" href="{{url('blog/'.$val->url)}}">Read More</a>
                        </div>
                    </div>
                    @endforeach
                </div>
                
                  @foreach($data1 as $val)
                  <div class="items" id="tab-{{$val->id}}">
                    @foreach($data as $val1)
                    @if($val->id == $val1->category)
                    <div class="item">
                        <div class="inner-content">
                            <div class="img-wrapper">
                                <img src="{{sc_file($val1->image)}}" class="img-fluid" alt="blog-1">
                                <span class="label">{{$val1->date}}</span>
                            </div>
                            <p class="small">{{$val1->reading_time}} Read</p>
                            <div class="name">
                               {{$val1->title}}
                            </div>
                            <p class="large">{!! $val1->description !!}</p>
                            <a class="readmore-btn" href="{{url('blog/'.$val1->url)}}">Read More</a>
                        </div>
                    </div>
                    @endif
                    @endforeach
                </div>
                 @endforeach
                <div class="loader active">
                    <img src="img/blog/loader.svg" class="img-fluid" alt="loader">
                </div>
            </div>
        </div>
    </div>
</section>


@endsection