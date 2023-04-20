@extends($sc_templatePath.'.layout')
@section('block_main')

<section class="breadcrumb">
    <div class="container">
        <ul class="flex-wrap">
            <li>
                <a class="link" href="#">Home</a>
            </li>
            <li>Product and Pricing Policy</li>
        </ul>
    </div>
</section>
<section class="content-pg py-60">
    <div class="container">
       {!! $data->content !!}
    </div>
</section>

@endsection