@php
/*
$layout_page = shop_home
**Variables:**
- $products: paginate
Use paginate: $products->appends(request()->except(['page','_token']))->links()
*/ 
@endphp

@extends($sc_templatePath.'.layout')

{{--  block_main_content_center  --}}
@section('block_main_content_center')
@if (count($products))
   <div class="right-section">
        <div class="top-wrapper">
            <!--// Render pagination result -->
            <!-- Render include filter sort -->
            @include($sc_templatePath.'.common.product_filter_sort', ['filterSort' => $filter_sort])
            <!--// Render include filter sort -->
        </div>
    </div>

    <!-- Product list -->
    <div class="trending-product common-slider-btn">
        <div class="row products">
            <!--Product Item-->
             @foreach ($products as $key => $product)
            <div class="col-md-6 col-lg-6 col-xl-4">
                @include($sc_templatePath.'.common.product_single', ['product' => $product])
            </div>
            @endforeach
            <!--Product Item-->
        </div>
    </div>
    <!-- //Product list -->

    <!-- Render pagination -->
    @include($sc_templatePath.'.common.pagination', ['items' => $products])
    <!--// Render pagination -->
@else
    <div class="product-top-panel group-md">
        <p style="text-align:center">{!! sc_language_render('front.no_item') !!}</p>
    </div>
@endif

@endsection
{{--  //block_main_content_center  --}}


@push('styles')
@endpush

@push('scripts')
<!-- //script here -->
@endpush