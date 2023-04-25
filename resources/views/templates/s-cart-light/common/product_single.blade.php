<div class="item">
   
    <div class="top">
        <div class="product-name-rating d-flex flex-wrap justify-content-between align-items-center">
            <div class="label">
                <span>FTB</span>
            </div>
            <div class="product-name">
               <a href="{{ $product->getUrl() }}">{{ $product->name }}</a>
                <span>SKU: {!! $product->sku !!}</span>
            </div>
            <div class="rating">4.7</div>
        </div>
    </div>
    <div class="image">
        <div class="inner-image freeway-01 active"><a href="{{ $product->getUrl() }}"><img src="{{ sc_file($product->getThumb()) }}" alt="{{ $product->name }}" class="img-fluid"></a></div>
    </div>
    <div class="color-selection d-flex flex-wrap justify-content-between align-items-center">
        <div class="color-availbilty">5 Colors Available</div>
        <div class="color-image">
            <a class="active" href="JavaScript:void(0);" data-href="freeway-01"><img src="{{url('img/color-img/color.jpg')}}" alt="color"></a>
        </div>
    </div>
    <div class="price-sec-fav d-flex flex-wrap justify-content-between">
        <div class="price d-flex flex-wrap justify-content-start align-items-center">
            <span class="new-price">
                <i class="fa fa-inr" aria-hidden="true"></i> {!! $product->price !!}
            </span>
            <span class="old-price">
                <i class="fa fa-inr" aria-hidden="true"></i> {!! $product->cost !!}
            </span>
            <div class="w-100">EMI starts @ 2775* / month</div>
        </div>
        @if (!sc_config('product_wishlist_off'))
        <div class="fav d-flex flex-wrap justify-content-center align-items-center">
            <!--<a href="#"><img src="{{url('img/icon/pdp/wishlist.svg')}}" alt="wishlist"></a>-->
            @php
            $data= DB::table('sc_shop_shoppingcart')->get();
            @endphp
            <button class="button button-secondary button-zakaria" onClick="addToCartAjax('{{ $product->id }}','wishlist','{{ $product->store_id }}')">
                <img src="{{url('img/icon/pdp/wishlist.svg')}}" alt="wishlist">
            </button>
        </div>
        @endif
    </div>
    <div class="cart-buy-links d-flex flex-wrap justify-content-center">
        <div class="cart d-flex flex-wrap justify-content-center">
            <a class="d-flex flex-wrap justify-content-center align-items-center" href="=">
                <img src="{{url('img/icon/flip-product.png')}}" alt="Flip Product">
            </a>
            @if (empty($hiddenStore))
            {!! $product->displayVendor() !!}
            @endif

            @if ($product->allowSale() && !sc_config('product_cart_off'))
            @php
              $dataLink = [
                  'class' => '', 
                  'id' =>  '',
                  'type_w' => '',
                  'type_t' => 'cart',
                  'type_a' => '',
                  'name' => '<i ></i> '.sc_language_render('action.add_to_cart'),
                  'html' => 'onClick="addToCartAjax(\''.$product->id.'\',\'default\',\''.$product->store_id.'\')" href="JavaScript:void(0);"'
              ];
            @endphp
            @include($sc_templatePath.'.common.button.link', $dataLink)
            @endif
        </div>
        <div class="buy-links">
            <a class="default-btn" href="{{ $product->getUrl() }}">Buy Now</a>
        </div>
    </div>
</div>