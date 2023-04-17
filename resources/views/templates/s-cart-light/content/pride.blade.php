@extends($sc_templatePath.'.layout')
@section('block_main')


<section class="breadcrumb">
    <div class="container">
        <ul class="flex-wrap">
            <li>
                <a class="link" href="{{url('')}}">Home</a>
            </li>
            <li>Pride</li>
        </ul>
    </div>
</section>

<section class="history-banner">
    <div class="img-wrapper">
        <img src="{{sc_file($data->pride_banner)}}" class="img-fluid"></img>
    </div>
</section>

<section class="production-pg">
    <div class="container">
        <div class="row item">
            <!--<div class="col-lg-6 img-box">-->
            <!--    <div class="img-wrapper">-->
            <!--        <img src="{{sc_file($data->image)}}" alt="" class="img-fluid">-->
            <!--    </div>-->
            <!--</div>-->
            <div class="col-lg-12 text-box">
                <div class="heading-wrapper">
                    <div class="heading">History of Pride</div>
                    <p>We have combined our all offerings in one place</p>
                </div>
                <div class="text-wrapper">
                  <p>  {!! $data->pride_content !!}</p>
                   </div>
            </div>
        </div>
        <div class="row item">
            <div class="col-lg-6 img-box">
                <div class="img-wrapper">
                    <img src="{{sc_file($data->image)}}" alt="" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-6 text-box">
               <div class="text-wrapper">
                   <p> {!! $data->pride_contenttwo !!}</p>
                   </div>
            </div>
        </div>
        <div class="row item">
            <div class="col-lg-6 img-box">
                <div class="img-wrapper">
                    <img src="{{sc_file($data->imagetwo)}}" alt="" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-6 text-box">
               <div class="text-wrapper">
                   <p> {!! $data->pride_contentthree !!}</p>
                   </div>
            </div>
        </div>
    </div>
</section>


@endsection