@php
/*
$layout_page = shop_checkout
**Variables:**
- $cart: no paginate
- $shippingMethod: string
- $paymentMethod: string
- $dataTotal: array
- $shippingAddress: array
- $attributesGroup: array
- $products: paginate
Use paginate: $products->appends(request()->except(['page','_token']))->links()
*/
@endphp

@extends($sc_templatePath.'.layout')

@section('block_main')
<section class="checkout-confirm-pg py-60">
    <div class="container">
        <div class="row">
            @if (count($cart) ==0)
            <div class="col-md-12 text-danger min-height-37vh">
                {!! sc_language_render('cart.cart_empty') !!}
            </div>
            @else
            <div class="col-12">
                <div class="table-responsive">
                    <div class="prods-wrapper">
                        <div class="heading-top">Products</div>
                        <ul class="items">
                            @foreach($cart as $item)
                            @php
                                $n = (isset($n)?$n:0);
                                $n++;
                                $product = $modelProduct->start()->getDetail($item->id, null, $item->storeId);
                            @endphp

                            {{-- Render product in cart --}}
                            <li class="item">
                                <a href="{{$product->getUrl() }}" class="img-wrapper">
                                    <img src="{{sc_file($product->getImage())}}" class="img-fluid" alt="img-{{ $product->name }}">
                                </a>
                                <div class="center-section">
                                    <div class="top-wrapper">
                                        <p>
                                            {{ $product->name }}<br>
                                            {{-- Process attributes --}}
                                            @if ($item->options->count())
                                            (
                                            @foreach ($item->options as $keyAtt => $att)
                                            <b>{{ $attributesGroup[$keyAtt] }}</b>: {!! sc_render_option_price($att) !!}
                                            @endforeach
                                            )<br>
                                            @endif
                                            {{-- //end Process attributes --}}
                                        </p>
                                        <p class="small">SKU: {{ $product->sku }}</p>
                                    </div>
                                </div>

                                <div class="right-section">
                                    <div class="top-wrapper">
                                        <div class="new-price">{{sc_currency_render($item->subtotal)}}</div>
                                        <div class="old-price">{!! $product->showPrice() !!}</div>
                                    </div>
                                    <!--<div class="bottom-wrapper">-->
                                    <!--    <div class="text">Quantity: {{$item->qty}}</div>-->
                                    <!--</div>-->
                                </div>
                                
                                <div class="remove-item">
                                    <div class="text">Quantity: {{$item->qty}}</div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    
                    
                    
                </div>
            </div>

            <div class="col-12">
                <form class="sc-shipping-address" id="form-order" role="form" method="POST" action="{{ sc_route('order.add') }}">
                    {{-- Required csrf for secirity --}}
                    @csrf
                    {{--// Required csrf for secirity --}}
                    <div class="row">
                        {{-- Display address --}}
                        <div class="col-12 col-sm-12 col-md-6 col-lg-8">
                            <div class="heading">{{ sc_language_render('cart.shipping_address') }}:</div>
                            <table class="table box table-bordered" id="showTotal">
                                <tr>
                                    <th>{{ sc_language_render('order.name') }}:</td>
                                    <td>{{ $shippingAddress['first_name'] }} {{ $shippingAddress['last_name'] }}</td>
                                </tr>
                                @if (sc_config('customer_name_kana'))
                                    <tr>
                                        <th>{{ sc_language_render('order.name_kana') }}:</td>
                                        <td>{{ $shippingAddress['first_name_kana'].$shippingAddress['last_name_kana'] }}</td>
                                    </tr>
                                @endif

                                @if (sc_config('customer_phone'))
                                    <tr>
                                        <th>{{ sc_language_render('order.phone') }}:</td>
                                        <td>{{ $shippingAddress['phone'] }}</td>
                                    </tr>
                                @endif
                                <tr>
                                    <th>{{ sc_language_render('order.email') }}:</td>
                                    <td>{{ $shippingAddress['email'] }}</td>
                                </tr>
                                <tr>
                                    <th>{{ sc_language_render('order.address') }}:</td>
                                    <td>{{ $shippingAddress['address1'].' '.$shippingAddress['address2'].' '.$shippingAddress['address3'].','.$shippingAddress['country'] }}
                                    </td>
                                </tr>
                                @if (sc_config('customer_postcode'))
                                    <tr>
                                        <th>{{ sc_language_render('order.postcode') }}:</td>
                                        <td>{{ $shippingAddress['postcode']}}</td>
                                    </tr>
                                @endif

                                @if (sc_config('customer_company'))
                                    <tr>
                                        <th>{{ sc_language_render('order.company') }}:</td>
                                        <td>{{ $shippingAddress['company']}}</td>
                                    </tr>
                                @endif

                                <!--<tr>-->
                                <!--    <th>{{ sc_language_render('cart.note') }}:</td>-->
                                <!--    <td>{{ $shippingAddress['comment'] }}</td>-->
                                <!--</tr>-->
                            </table>
                            
                            @if (!sc_config('payment_off'))
                                {{-- Payment method --}}
                                <div class="row">
                                    <div class="col-md-12 d-flex align-items-center">
                                        <div class="form-group mb-0">
                                            <div class="heading mb-0 mr-4">{{ sc_language_render('order.payment_method') }}:</div>
                                        </div>
                                        <div class="form-group mb-0">
                                            <div>
                                                <label class="radio-inline">
                                                    <img title="{{ $paymentMethodData['title'] }}"
                                                        alt="{{ $paymentMethodData['title'] }}"
                                                        src="{{ sc_file($paymentMethodData['image']) }}"
                                                        style="width: 120px;">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- //Payment method --}}
                            @endif
                        </div>
                        {{--// Display address --}}

                        <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                            {{-- Total --}}
                            
                            <div class="row">
                                <div class="col-md-12">
                                    <table class="table box table-bordered total-box" id="showTotal">
                                        @foreach ($dataTotal as $key => $element)
                                        @if ($element['code']=='total')
                                        <tr class="showTotal" style="background:#f5f3f3;font-weight: bold;">
                                            <th>{!! $element['title'] !!}</th>
                                            <td style="text-align: right" id="{{ $element['code'] }}">
                                                {{$element['text'] }}
                                            </td>
                                        </tr>
                                        @elseif($element['value'] !=0)
                                        <tr class="showTotal">
                                            <th>{!! $element['title'] !!}</th>
                                            <td style="text-align: right" id="{{ $element['code'] }}">
                                                {{$element['text'] }}
                                            </td>
                                        </tr>
                                        @elseif($element['code'] =='shipping')
                                        <tr class="showTotal">
                                            <th>{!! $element['title'] !!}</th>
                                            <td style="text-align: right" id="{{ $element['code'] }}">
                                                {{$element['text'] }}
                                            </td>
                                        </tr>
                                        @endif
                                        @endforeach
                                    </table>
                                    <div class="confirm-btn">
                                        @php
                                        $dataButton = [
                                                'class' => 'default-btn', 
                                                'id' =>  '',
                                                'type_w' => '',
                                                'type_t' => 'buy',
                                                'type_a' => '',
                                                'type' => 'submit',
                                                'name' => ''.sc_language_render('cart.confirm'),
                                                'html' => ''
                                            ];
                                        @endphp
                                        @include($sc_templatePath.'.common.button.button', $dataButton)    
                                    </div>
                                    
                                    
                                    <div class="back-btn">
                                       @php
                                        $dataButton = [
                                                'class' => '', 
                                                'id' =>  '',
                                                'type_w' => '',
                                                'type_t' => '',
                                                'type_a' => '',
                                                'type' => 'button',
                                                'name' => ''.sc_language_render('cart.back_to_cart'),
                                                'html' => 'onClick="location.href=\' '.sc_route('cart').' \'"'
                                            ];
                                        @endphp
                                        @include($sc_templatePath.'.common.button.button', $dataButton)
                                    </div>
                                       

                                </div>
                            </div>
                            {{-- End total --}}

                            

                        </div>
                    </div>
                </form>
            </div>
            @endif
        </div>
    </div>
</section>
@endsection



@push('scripts')
{{-- //script here --}}
@endpush

@push('styles')
{{-- Your css style --}}
@endpush