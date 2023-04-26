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

<section class="group-history-pg">
    <div class="container">
        <div class="row py-60">
            <div class="col-md-6">
                <div class="heading-wrapper">
                    <div class="heading">History of Pride</div>
                    <p>We have combined our all offerings in one place</p>
                </div>
                <div class="text-wrapper">
                    <p>{!! $data->pride_content !!}</p>
                    <p>{!! $data->pride_contenttwo !!}</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="img-wrapper">
                    <img src="img/about/group-history-1.jpg" alt="top-img" class="img-fluid">
                    <img src="img/about/group-history-2.jpg" alt="bottom-img" class="img-fluid">
                </div>
            </div>
            <div class="col-md-12 text-wrapper">
                <p>{!! $data->pride_contentthree !!}</p>
            </div>
        </div>
    </div>
</section>


@endsection