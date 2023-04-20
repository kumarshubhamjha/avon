@extends($sc_templatePath.'.layout')
@section('block_main')

<section class="breadcrumb">
    <div class="container">
        <ul class="flex-wrap">
            <li>
                <a class="link" href="#">Home</a>
            </li>
            <li>Shipping & Policy</li>
        </ul>
    </div>
</section>
<section class="shipping-policy content-pg py-60">
    <div class="container">
       {!! $data->content !!}
    </div>
</section>

@endsection