@php
/*
$layout_page = shop_order_success
**Variables:**
- $orderInfo
*/
@endphp

@extends($sc_templatePath.'.layoutnew')

@section('block_main_content_center')
<!--<h6 class="aside-title">{{ $title }}</h6>-->

<div class="thankyou-wrapper">
    <div class="inner-content text-center">
        <div class="img-wrapper">
            <img src="{{url('img/thankyou.svg')}}" class="img-fluid" alt="thank-you">
        </div>
        <p>Your order has been placed succesfully.</p>
        <h1>Thank You!</h1>
        <p>For your purchase.</p>
    </div>
</div>
@endsection


@push('styles')
{{-- Your css style --}}
@endpush

@push('scripts')
{{-- //script here --}}
@endpush
