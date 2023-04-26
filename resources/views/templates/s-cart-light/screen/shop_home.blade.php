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
            <div class="filters d-flex flex-wrap">
                
            </div>
            <!-- Render include filter sort -->
            @include($sc_templatePath.'.common.product_filter_sort', ['filterSort' => $filter_sort])
            <!--// Render include filter sort -->
        </div>

        <!-- Product list -->
        <div class="trending-product common-slider-btn">
            <div class="row products" id='productlist'>
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
    </div>

    <div class="pagination-wrap">
    <nav aria-label="Page navigation">
      <ul class="pagination">
        <nav>
        <ul class="pagination">
            
                            <li class="page-item disabled" aria-disabled="true" aria-label="pagination.previous">
                    <span class="page-link" aria-hidden="true">‹</span>
                </li>
            
            
                            
                
                
                                                                                        <li class="page-item active" aria-current="page"><span class="page-link">1</span></li>
                                                                                                <li class="page-item"><a class="page-link" href="https://staging.ibeesmedia.com/avon/public/shop?page=2">2</a></li>
                                                                                                <li class="page-item"><a class="page-link" href="https://staging.ibeesmedia.com/avon/public/shop?page=3">3</a></li>
                                                                                                <li class="page-item"><a class="page-link" href="https://staging.ibeesmedia.com/avon/public/shop?page=4">4</a></li>
                                                                                                <li class="page-item"><a class="page-link" href="https://staging.ibeesmedia.com/avon/public/shop?page=5">5</a></li>
                                                                                                <li class="page-item"><a class="page-link" href="https://staging.ibeesmedia.com/avon/public/shop?page=6">6</a></li>
                                                                                                <li class="page-item"><a class="page-link" href="https://staging.ibeesmedia.com/avon/public/shop?page=7">7</a></li>
                                                                                                <li class="page-item"><a class="page-link" href="https://staging.ibeesmedia.com/avon/public/shop?page=8">8</a></li>
                                                                                                <li class="page-item"><a class="page-link" href="https://staging.ibeesmedia.com/avon/public/shop?page=9">9</a></li>
                                                                                                <li class="page-item"><a class="page-link" href="https://staging.ibeesmedia.com/avon/public/shop?page=10">10</a></li>
                                                                                        
                                    <li class="page-item disabled" aria-disabled="true"><span class="page-link">...</span></li>
                
                
                                            
                
                
                                                                                        <li class="page-item"><a class="page-link" href="https://staging.ibeesmedia.com/avon/public/shop?page=19">19</a></li>
                                                                                                <li class="page-item"><a class="page-link" href="https://staging.ibeesmedia.com/avon/public/shop?page=20">20</a></li>
                                                                        
            
                            <li class="page-item">
                    <a class="page-link" href="https://staging.ibeesmedia.com/avon/public/shop?page=2" rel="next" aria-label="pagination.next">›</a>
                </li>
                    </ul>
    </nav>

      </ul>
    </nav>
</div>

      </ul>
    </nav>

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