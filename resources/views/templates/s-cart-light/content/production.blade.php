@extends($sc_templatePath.'.layout')
@section('block_main')


<section class="breadcrumb">
    <div class="container">
        <ul class="flex-wrap">
            <li>
                <a class="link" href="{{url('')}}">Home</a>
            </li>
            <li>Production</li>
        </ul>
    </div>
</section>

<section class="production-pg py-60">
    <div class="container">
        <div class="row item">
            <div class="col-md-6 img-box">
                <div class="img-wrapper">
                    <img src="{{sc_file($data->productionimage)}}" alt="" class="img-fluid">
                </div>
            </div>
            <div class="col-md-6 text-box">
                <div class="heading-wrapper">
                    <div class="heading">Production</div>
                    <p>We have combined our all offerings in one place</p>
                </div>
                <div class="text-wrapper">
                  <p>  {!! $data->production_content !!}</p>
                   </div>
            </div>
        </div>
        <div class="row item">
            <div class="col-md-6 img-box">
                <div class="img-wrapper">
                    <img src="{{sc_file($data->productionimageleft)}}" alt="" class="img-fluid">
                </div>
            </div>
            <div class="col-md-6 text-box">
               <div class="text-wrapper">
                   <p> {!! $data->production_contenttwo !!}</p>
                   </div>
            </div>
        </div>
        <div class="row item">
            <div class="col-md-6 img-box">
                <div class="img-wrapper">
                    <img src="{{sc_file($data->productionimageright)}}" alt="" class="img-fluid">
                </div>
            </div>
            <div class="col-md-6 text-box">
               <div class="text-wrapper">
                   <p> {!! $data->production_contentthree !!}</p>
                   </div>
            </div>
        </div>
    </div>
</section>


@endsection