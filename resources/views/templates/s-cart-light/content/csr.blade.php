@extends($sc_templatePath.'.layout')
@section('block_main')

<div class="breadcrumb">
    <div class="container">
        <ul class="flex-wrap">
            <li>
                <a class="link" href="{{url('')}}">Home</a>
            </li>
            <li>CSR</li>
        </ul>
    </div>
</div>


<section class="csr py-60">
    <div class="container">
        <div class="heading">{{$data->heading}}</div>
        <p class="mb-3">{!! $data->content !!}</p>
        <div class="heading">{{$data->headingnew}}</div>
        {!! $data->contenttwo !!}
    </div>
</section>

<section class="csr-expeniture py-80 light-bg">
    <div class="container">
        <div class="row item">
            <div class="col-md-6 img-box">
                <div class="img-wrapper">
                    <img src="{{sc_file($data->image)}}" class="img-fluid" alt="image">
                </div>
            </div>
            <div class="col-md-6 text-box">
                <div class="heading">{{$data->headingone}}</div>
                {!! $data->contentthree !!}
            </div>
        </div>
        <div class="row item">
            <div class="col-md-6 img-box">
                <div class="img-wrapper">
                    <img src="{{sc_file($data->imagetwo)}}" class="img-fluid" alt="image">
                </div>
            </div>
            <div class="col-md-6 text-box">
                <div class="heading">{{$data->headingtwo}}</div>
               {!! $data->contentfour !!}
                
            </div>            
        </div>
        <div class="row item">
            <div class="col-md-6 img-box">
                <div class="img-wrapper">
                    <img src="{{sc_file($data->imagethree)}}" class="img-fluid" alt="image">
                </div>
            </div>
            <div class="col-md-6 text-box">
                <div class="heading">{{$data->headingthree}}</div>
               {!! $data->contentfive !!}
            </div>
        </div>
    </div>
</section>



@endsection