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


<section class="csr">
    <div class="container">
        <div class="heading">{{$data->heading}}</div>
        <p class="mb-3">{!! $data->content !!}</p>
        <div class="heading">{{$data->headingnew}}</div>
        {!! $data->contenttwo !!}
    </div>
</section>

<section class="csr-expeniture pb-5">
    <div class="container">
        <div class="row py-3">
            <div class="col-md-6">
                <div class="heading">{{$data->headingone}}</div>
              {!! $data->contentthree !!}
            </div>
            <div class="col-md-6">
                <img src="{{sc_file($data->image)}}" alt="image">
            </div>
        </div>
        <div class="row py-3">
            <div class="col-md-6">
                <img src="{{sc_file($data->imagetwo)}}" alt="image">
            </div>
            <div class="col-md-6">
                <div class="heading">{{$data->headingtwo}}</div>
               {!! $data->contentfour !!}
                
            </div>            
        </div>
        <div class="row py-3">
            <div class="col-md-6">
                <div class="heading">{{$data->headingthree}}</div>
               {!! $data->contentfive !!}
            </div>
            <div class="col-md-6">
                <img src="{{sc_file($data->imagethree)}}" alt="image">
            </div>
        </div>
    </div>
</section>



@endsection