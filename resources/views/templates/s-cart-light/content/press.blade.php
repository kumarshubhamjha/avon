@extends($sc_templatePath.'.layout')
@section('block_main')


<div class="breadcrumb">
    <div class="container">
        <ul class="flex-wrap">
            <li>
                <a class="link" href="{{url('')}}">Home</a>
            </li>
            <li>Press Coverage</li>
        </ul>
    </div>
</div>

<section class="listing-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-4 left-section">
                <!--<div class="top-wrapper">-->
                <!--    <div class="filters d-flex flex-wrap">-->
                <!--        <a href="#" class="filter">Dainik Bhaskar</a>-->
                <!--        <a href="#" class="filter clear">Clear All Filters</a>-->
                <!--    </div>-->
                <!--</div>-->
                <div id="accordion" class="accordion-container filter-accordion">
                    <div class="item">
                        <div class="accordion-title js-accordion-title open">
                            <div class="img-wrapper">
                                <img class="img-fluid" src="img/icon/listing/bicycle.svg" alt="bicycle-icon">
                            </div>
                            <p>Media</p>
                        </div>
                        <div class="accordion-content active">
                            <ul>
                                <li>
                                    <a href="#" class="active">All</a>
                                </li>
                                @foreach($data1 as $val)
                                <li>
                                    <a href="#" class="">{{$val->title}}</a>
                                </li>
                               @endforeach
                            </ul>
                        </div>
                    </div>
                    <!--/.accordion-content-->
                    
                  
                    <!--/.accordion-content-->

                    <!--/.accordion-content-->
                </div>
            </div>
            <div class="col-md-8 right-section press-conf">
                <div class="heading-wrapper">
                    <div class="heading">Press Coverage</div>
                    <p>Hour every recap prioritize lot</p>
                </div>
                <div class="row items">
                    @foreach($data as $val)
                    <div class="col-md-6 item active">
                        <div class="img-wrapper">
                            <img src="{{sc_file($val->image)}}" alt="press" class="img-fluid">
                        </div>
                        <div class="text-wrapper">
                            <!-- <div class="left">
                                <div class="name">{{$val->title}}</div>
                                <div class="date">{{$val->date}}</div>
                            </div> -->
                            <!-- <div class="right">
                                <a href="#" class="viewall">view</a>
                            </div> -->
                        </div>
                    </div>
                  @endforeach
                   
                  
                    
                
                   
                </div>
            </div>
        </div>
    </div>
</section>

@endsection