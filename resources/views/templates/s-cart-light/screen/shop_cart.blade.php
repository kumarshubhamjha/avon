@php
/*
$layout_page = shop_cart
**Variables:**
- $cart: no paginate
- $countries: array
- $attributesGroup: array
*/
@endphp

@extends($sc_templatePath.'.layout')

@section('block_main')
<section class="cart-pg py-60 cart11">
    <div class="container">
        <div class="row">
            @if (count($cart) ==0)

            <div class="col-md-10">
                {!! sc_language_render('cart.cart_empty') !!}!
            </div>

            @else
            @php
                $cartTmp = $cart->groupBy('storeId');
            @endphp

            {{-- Render cart item for earch shop --}}
            @foreach ($cartTmp as $sId => $cartItem)
          
            <div class="col-md-10">
                <div class="heading mb-4">{{ sc_store('title', $sId) }}</div>
                <!--<h5><i class="fa fa-shopping-bag" aria-hidden="true"></i>  {{ sc_store('title', $sId) }}</h5>-->
            </div>

            <div class="col-md-10">
                <form action="{{ sc_route('checkout.prepare') }}" method="POST">
                    <input type="hidden" name="store_id" value="{{ $sId }}">
                    @csrf

                    {{-- Item cart detail --}}
                    @include($sc_templatePath.'.common.cart_list', ['cartItem' => $cartItem])
                    {{-- //Item cart detail --}}
                    
                    {{-- Button checkout --}}
                    <div class="checkout-btn-wrapper text-center">
                        <div class="pull-right">
                            @php
                                $dataButton = [
                                    'class' => '', 
                                    'id' =>  '',
                                    'type_w' => '',
                                    'type_t' => 'buy',
                                    'type_a' => '',
                                    'type' => 'submit',
                                    'name' => ''.sc_language_render('cart.checkout'),
                                    'html' => ''
                                ];
                            @endphp
                            @include($sc_templatePath.'.common.button.button', $dataButton)
                        </div>
                    </div>
                    {{-- Button checkout --}}
                </form>
            </div>
            @endforeach
            {{--// Render cart item for earch shop --}}
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