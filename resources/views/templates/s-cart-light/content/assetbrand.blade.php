@extends($sc_templatePath.'.layout')
@section('block_main')


<div class="breadcrumb">
    <div class="container">
        <ul class="flex-wrap">
            <li>
                <a class="link" href="{{url('')}}">Home</a>
            </li>
            <li>Brand Assets</li>
        </ul>
    </div>
</div>

<section class="listing-wrapper press-coverage-pg">
    <div class="container">
        <div class="row">
            <div class="col-md-4 left-section">
                <div class="top-wrapper mb-0">
                    <div class="filters d-flex flex-wrap">
                        <a href="#" class="filter clear">Clear All Filters</a>
                    </div>
                </div>
                <div id="brandsFilter" class="accordion-container filter-accordion">
                    <div class="item">
                        <div class="accordion-title js-accordion-title open">
                            <p>Brand Assets</p>
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
            <div class="col-md-8 right-section press-conf items-wrapper">
                <div class="heading-wrapper">
                    <div class="heading">Brand Assets</div>
                    <p>Hill highlights streamline scope</p>
                </div>
                
                <div class="row item active" id="all">
                    
                     @foreach($data as $all)
                    <div class="col-md-6 inner-item">
                        <div class="img-wrapper">
                            <img src="{{sc_file($all->image)}}" alt="press" class="img-fluid">
                        </div>
                        <div class="text-wrapper align-items-center">
                            <div class="left">
                                <div class="name">{{$all->title}}</div>
                            </div>
                            <div class="right d-flex align-items-center">
                                <a href="{{ url('file/file/'.$all->pdf) }}" class="viewall">view</a>
                            </div>
                        </div>
                    </div>
                   @endforeach
                </div>
                  
                 @foreach($data1 as $val)
                <div class="row item" id="tab{{$val->id}}">
                    @foreach($data as $all)
                    @if($val->id == $all->category)
                  <div class="col-md-6 inner-item">
                        <div class="img-wrapper">
                            <img src="{{sc_file($all->image)}}" alt="press" class="img-fluid">
                        </div>
                        <div class="text-wrapper align-items-center">
                            <div class="left">
                                <div class="name">{{$all->title}}</div>
                            </div>
                            <div class="right d-flex align-items-center">
                                <a href="{{ url('file/file/'.$all->pdf) }}" class="viewall">view</a>
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

@endsection