@extends($sc_templatePath.'.layout')
@section('block_main')


<div class="breadcrumb">
    <div class="container">
        <ul class="flex-wrap">
            <li>
                <a class="link" href="{{url('')}}">Home</a>
            </li>
            <li>
                <a class="link" href="{{url('blog')}}">Blogs</a>
            </li>
            <li><span>{{$data->title}}<span></li>
        </ul>
    </div>
</div>

<section class="listing-wrapper blog-detail">
    <div class="container">
        <div class="row">
            <div class="col-md-8 left-section blog py-0">
                <div class="heading-wrapper">
                    <div class="heading">{{$data->title}}</div>
                    <div class="img-wrapper">
                        <a href="#" class="icon">
                            <img src="{{sc_file($data->image)}}" alt="share" class="img-fluid">
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="inner-content">
                        <div class="img-wrapper">
                            <img src="{{sc_file($data->image)}}" class="img-fluid" alt="blog-1">
                            <span class="label">{{$data->date}}</span>
                        </div>
                        <p class="small">{{$data->reading_time}} Read</p>
                        <p class="large">
                            {!! $data->content !!}
                            </p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 right-section blog py-0">
                <div class="related-blogs">
                    <div class="heading-wrapper">
                        <div class="heading">Related Blogs</div>
                    </div>
                    @foreach($data1 as $val)
                    <div class="item">
                        <div class="inner-content">
                            <div class="left">
                                <div class="img-wrapper">
                                    <img src="{{sc_file($val->image)}}" class="img-fluid" alt="blog-1">
                                    <span class="label">{{$val->date}}</span>
                                </div>
                            </div>
                            <div class="right">
                                <p class="small">{{$val->reading_time}} Read</p>
                                <div class="name">
                                   {{$val->description}}
                                </div>
                                <a class="viewall-link" href="{{url('blog/'.$val->url)}}">Read</a>
                            </div>
                        </div>
                    </div>
                  @endforeach
                </div>

                <div class="related-bikes">
                    <div class="heading-wrapper">
                        <div class="heading">Related Bikes</div>
                    </div>
                    <div class="items">
                        <div class="item">
                            <div class="inner-content">
                                <div class="left">
                                    <div class="img-wrapper">
                                        <img src="img/icon/pdp/prod-thumb-1.png" class="img-fluid" alt="blog-1">
                                    </div>
                                </div>
                                <div class="right">
                                    <div class="name">ATTENTION 26T</div>
                                    <div class="sku">SKU: 84646 bs</div>
                                    <a class="viewall-link" href="#">View</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="inner-content">
                                <div class="left">
                                    <div class="img-wrapper">
                                        <img src="img/icon/pdp/prod-thumb-1.png" class="img-fluid" alt="blog-1">
                                    </div>
                                </div>
                                <div class="right">
                                    <div class="name">ATTENTION 26T</div>
                                    <div class="sku">SKU: 84646 bs</div>
                                    <a class="viewall-link" href="#">View</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="inner-content">
                                <div class="left">
                                    <div class="img-wrapper">
                                        <img src="img/icon/pdp/prod-thumb-1.png" class="img-fluid" alt="blog-1">
                                    </div>
                                </div>
                                <div class="right">
                                    <div class="name">ATTENTION 26T</div>
                                    <div class="sku">SKU: 84646 bs</div>
                                    <a class="viewall-link" href="#">View</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
