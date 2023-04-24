@php
/*
$layout_page = shop_product_detail
**Variables:**
- $product: no paginate
- $productRelation: no paginate
*/
@endphp

@extends($sc_templatePath.'.layoutnew')

{{-- block_main --}}
@section('block_main_content_center')
@php
    $countItem = 0
@endphp
<!-- Single Product-->
<section class="pdp-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-8 pdp-left-section">
                <!-- <div class="pdp-gallery-wrapper">
                    <div class="slider slider-nav">
                        @if ($product->images->count())
                            @php
                                $countItem = 1 + $product->images->count();
                            @endphp
                             @if ($countItem > 1)
                             
                            @foreach ($product->images as $key=>$image)
                                <div class="item">
                                    
                                  
                               
                                    <img class="img-fluid" src="{{ sc_file($image->getImage()) }}" alt="Suspension">
                                </div>
                            @endforeach
                             <img class="img-fluid" src="{{ sc_file($product->image) }}" alt="Suspension">
                             @endif
                        @endif
                    </div>
                    <div class="slider slider-for">
                        @if ($product->images->count())
                            @php
                            $countItem = 1 + $product->images->count();
                            @endphp
                           
                            @foreach ($product->images as $key=>$image)
                                <div class="item">
                                    <div class="img-wrapper"><img class="img-fluid" src="{{ sc_file($image->getImage()) }}" alt="Suspension"></div>
                                </div>
                            @endforeach
                             <div class="item">
                                    <div class="img-wrapper"><img class="img-fluid" src="{{ sc_file($product->image) }}" alt="Suspension"></div>
                                </div>
                        @endif
                         

                    </div>
                </div> -->

                <div class="pdpGalleryWrapper">
                    <div class="galSlider owl-carousel" id="pdpGallerySlider">
                        @if ($product->images->count())
                            @php
                            $countItem = 1 + $product->images->count();
                            @endphp
                           
                            @foreach ($product->images as $key=>$image)
                                <div class="item">
                                    <div class="img-wrapper"><img class="img-fluid" src="{{ sc_file($image->getImage()) }}" alt="Suspension"></div>
                                </div>
                            @endforeach
                            <div class="item">
                                <div class="img-wrapper"><img class="img-fluid" src="{{ sc_file($product->image) }}" alt="Suspension"></div>
                            </div>
                        @endif
                    </div>
                </div>
                 
                 @if($product->feature_heading || $product->feature_sub_heading || $product->feature)
                <section class="pdp-spec py-60">
                    <div class="heading-wrapper">
                        <div class="heading">{{ $product->pre_feature_heading }}</div>
                        <p>{{ $product->pre_feature_second_heading }}</p>
                    </div>
                    <p class="inner-text">{!! $product->pre_feature_content !!}</p>
                   
                    <ul class="items">
                        <li class="item">
                            <div class="inner-content">
                                <div class="img-wrapper">
                                    <img src="{{sc_file($product->feature)}}" class="img-fluid" alt="steel-frame">
                                </div>
                                <div class="text-wrapper">
                                    <p class="large">{{$product->feature_heading}}</p>
                                    <p class="small">{{$product->feature_sub_heading}}</p>
                                </div>
                            </div>
                        </li>
                        @php
                        $feture =  DB::table('sc_shop_product_features')->where('product_id',$product->id)->get();
                        @endphp
                        @foreach($feture as $val)
                        <li class="item">
                            <div class="inner-content">
                                <div class="img-wrapper">
                                    <img src="{{sc_file($val->image)}}" class="img-fluid" alt="steel-frame">
                                </div>
                                <div class="text-wrapper">
                                    <p class="large">{{$val->featureHeading}}</p>
                                    <p class="small">{{$val->featureSubHeading}}</p>
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </section>
                 @endif
                <!--FAQ-->
                @if($product->faq_question)
                <div class="faq pdp-faq py-60">
                    <div class="heading-wrapper">
                        <div class="heading">FAQs</div>
                        <p>We have wide variety for your needs.</p>
                    </div>
                    <div id="accordion" class="faq-wrapper">
                        
                        <div class="card">
                            <div class="card-header" id="heading-1">
                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1">
                                    {{$product->faq_question}}
                                </button>
                            </div>
                
                            <div id="collapse-1" class="collapse show" aria-labelledby="heading-1" data-parent="#accordion">
                                <div class="card-body">
                                    <p class="inner-text">
                                      {!! $product->faq_answer !!}
                                    </p>
                                </div>
                            </div>
                        </div>
                         @php
                        $faq =  DB::table('sc_shop_product_faqs')->where('product_id',$product->id)->get();
                        @endphp
                        @foreach($faq as $val)
                        <div class="card">
                            <div class="card-header" id="heading-1">
                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1">
                                    {{$val->question}}
                                </button>
                            </div>
                
                            <div id="collapse-1" class="collapse" aria-labelledby="heading-1" data-parent="#accordion">
                                <div class="card-body">
                                    <p class="inner-text">
                                      {!! $val->answer !!}
                                    </p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endif
                <!--End Of FAQ-->
            </div>
            <div class="col-md-4 pdp-right-section">
                <div class="inner-section">
                    <div class="top-section">
                        <div class="product-name-rating">
                            <div class="product-name">
                                {{ $product->name }}
                            </div>
                            <div class="rating">4.5</div>
                        </div>
                        <div class="prod-sepcification">
                            <ul>
                                <li class="item">
                                    <div class="img-wrapper">
                                        <img class="img-fluid" src="{{url('img/icon/pdp/height.svg')}}" alt="Suspension">
                                    </div>
                                    <div class="content-wrapper">
                                       
                                        <p class="num">{{ $product->height }}</p>
                                        <p class="text">Height</p>
                                    </div>
                                </li>
                                <li class="item">
                                    <div class="img-wrapper">
                                        <img class="img-fluid" src="{{url('img/icon/pdp/wheel.svg')}}" alt="Suspension">
                                    </div>
                                    <div class="content-wrapper">
                                        <p class="num">{{ $product->width }}</p>
                                        <p class="text">Wheel Base</p>
                                    </div>
                                </li>
                                <li class="item">
                                    <div class="img-wrapper">
                                        <img class="img-fluid" src="{{url('img/icon/pdp/weight.svg')}}" alt="Suspension">
                                    </div>
                                    <div class="content-wrapper">
                                        <p class="num">{{ $product->weight }}</p>
                                        <p class="text">Weight</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <form id="buy_block" class="product-information" action="{{ sc_route('cart.add') }}" method="post">
                            {{ csrf_field() }}
                            <input type="hidden" name="product_id" id="product-detail-id" value="{{ $product->id }}" />
                            <input type="hidden" name="storeId" id="product-detail-storeId" value="{{ $product->store_id }}" />
                            {{-- Show attribute --}}
                            @if (sc_config('product_property'))
                            <div id="product-detail-attr">
                                @if ($product->attributes())
                                
                                {!! $product->renderAttributeDetails() !!}
                                @endif
                            </div>
                            @endif
                            {{--// Show attribute --}}
            
                            {{-- Stock info --}}
                            @if (sc_config('product_stock'))
                            <div class="stock-status">
                                {{ sc_language_render('product.stock_status') }} :
                                <span id="stock_status">
                                    @if($product->stock <=0 && !sc_config('product_buy_out_of_stock'))
                                        {{ sc_language_render('product.out_stock') }} 
                                        @else 
                                        {{ sc_language_render('product.in_stock') }} 
                                        @endif 
                                </span> 
                            </div>
                            @endif
                            {{--// Stock info --}}
                            
                            <div class="avail">
                            {{-- date available --}}
                            @if (sc_config('product_available') && $product->date_available >= date('Y-m-d H:i:s'))
                                {{ sc_language_render('product.date_available') }}:
                                <span id="product-detail-available">
                                    {{ $product->date_available }}
                                </span>
                                @endif
                                    {{--// date available --}}
                                    @if ($product->kind == SC_PRODUCT_BUILD)
                                    <div class="products-group">
                                        @php
                                        $builds = $product->builds
                                        @endphp
                                        <b>{{ sc_language_render('product.kind_bundle') }}</b>:<br>
                                        <span class="sc-product-build">
                                          {!! sc_image_render($product->image) !!} =
                                        </span>
                                        @foreach ($builds as $k => $build)
                                        {!! ($k) ? '<i class="fa fa-plus" aria-hidden="true"></i>':'' !!}
                                        <span class="sc-product-build">{{ $build->quantity }} x
                                          <a target="_new" href="{{ $build->product->getUrl() }}">{!!
                                              sc_image_render($build->product->image) !!}</a>
                                        </span>
                                        @endforeach
                                    </div>
                                @endif
                            </div>
                            <div class="colors">
                                <div class="text-wrapper">
                                    1 Colors Available
                                </div>
                                <ul>
                                    <li class="item">
                                        <a href="#" class=""><img src="{{url('img/color-img/red.jpg')}}" alt=""></a>
                                    </li>
                                   
                                </ul>
                            </div>

                            <div class="price-wrapper">
                                <div class="price">
                                    <span class="new-price" price="{{ $product->price }}"><i class="fa fa-inr" aria-hidden="true"></i>{!! $product->price !!}</span>
                                    <span class="old-price" price="{{ $product->cost }}"><i class="fa fa-inr" aria-hidden="true"></i>{!! $product->price !!}</span>
                                    <p>EMI starts @ 2775* / month</p>
                                </div>
                                <div class="icons-wrapper">
                                    <div class="icon">
                                        <a class="button button-primary button-zakaria" onclick="addToCartAjax('{{ $product->id }}','compare','1')"><img src="{{url('img/icon/flip-product.png')}}" alt="flip-product"></a>
                                    </div>
                                    <div class="icon">
                                        <a href=""><img src="{{url('img/icon/pdp/wishlist.svg')}}" alt="wishlist"></a>
                                    </div>
                                    <div class="icon">
                                        <a href=""><img src="{{url('img/icon/pdp/share.svg')}}" alt="share"></a>
                                    </div>
                                </div>
                            </div>

                            <div class="btns-wrapper">
                                <div class="add-to-cart">
                                    {{-- Button add to cart --}}
                                        @if ($product->kind != SC_PRODUCT_GROUP && $product->allowSale() && !sc_config('product_cart_off'))
                                        <div class="group-xs group-middle">
                                            <div class="product-stepper">
                                                <span class="cart-qty-minus">-</span>
                                                <input class="form-input" class="qty" name="qty" type="text" data-zeros="true" value="1" min="1" max="100">
                                                <span class="cart-qty-plus">+</span>
                                            </div>
                                        </div>
                                        @endif
                                    {{--// Button add to cart --}}
                                    <!--<a href=""><img src="{{url('img/icon/pdp/bucket.svg')}}" alt="add-to-cart"></a> -->
                                </div>
                                <div class="buy-now">
                                    @php
                                    $dataButton = [
                                        'class' => '', 
                                        'id' =>  'sc_button-form-process',
                                        'type_w' => '',
                                        'type_t' => 'buy',
                                        'type_a' => '',
                                        'type' => 'submit',
                                        'name' => ''.sc_language_render('action.add_to_cart'),
                                        'html' => ''
                                    ];
                                    @endphp
                                    @include($sc_templatePath.'.common.button.button', $dataButton)
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="delivery-wrapper">
                        <form class="form-inline">
                            <label for="delivery">Delivery</label>
                            <input class="form-control" type="pin" placeholder="Enter Pin Code" aria-label="pin">
                            <button class="btn" type="submit">Check</button>
                        </form>
                    </div>
                    <div class="fast-delivery">Faster delivery by 2 PM Tomorrow</div>
                </div>
            </div>   
        </div>
    </div>
</section>
@if ($product->kind == SC_PRODUCT_BUILD)
<section class="pdp-upgrade py-60">
    <div class="heading-wrapper">
        <div class="heading">Upgrade your bike</div>
        <p>We have offers on all kind of Banks, UPI, Cards</p>
    </div>
    <div class="center-section">
        <ul class="items">
             @php
                $builds = $product->builds
            @endphp
       
       @foreach ($builds as $k => $build)
        
         @php
           $p_image =  DB::table('sc_shop_product_description')->where('product_id',$build->product->id)->get();
         @endphp
            <li class="item">
                <div class="inner-content">
                    <div class="top">
                        @foreach($p_image as $img)
                        @if($build->product->id == $img->product_id)
                        <p class="large">{{ $img->name }}</p>
                        @endif
                        @endforeach
                        <p>Current Selection</p>
                    </div>
                    <div class="img-wrapper">
                       <a href="{{ $build->product->getUrl() }}">
                        <img src="{{sc_file($build->product->image)}}" class="img-fluid" alt="prod-1">
                         </a>
                    </div>
                    <div class="bottom">
                        <div class="left">₹{{$build->product->price}}</div>
                        <div class="right">
                            <a href="#">
                                <img src="{{url('img/icon/pdp/wishlist.svg')}}" alt="wishlist">
                            </a>
                        </div>
                    </div>
                </div>
            </li>
      @endforeach

        </ul>
    </div>
</section>
@endif

<!-- Related Products-->
@if ($productRelation->count())
<div class="trending-product common-slider-btn py-60 w-100">
    <div class="container">
        <div class="heading-wrapper text-center">
            <div class="heading">Trending Products</div>
            <p>We have wide variety for your needs.</p>
        </div>
        <div  id="pdp-slider" class="products owl-carousel">
            @foreach ($productRelation as $key => $productRel)
                {{-- Render product single --}}
                 @include($sc_templatePath.'.common.product_single', ['product' => $productRel])
                {{-- //Render product single --}}
            @endforeach
            <!--Product Item-->
        </div>
    </div>
</div>
@endif


<!--/product-details-->
@endsection
{{-- block_main --}}


@push('styles')
{{-- Your css style --}}
@endpush

@push('scripts')
{{-- //script here --}}
@endpush
