@php
/*
$layout_page = shop_checkout
**Variables:**
- $cartItem: collection
- $storeCheckout: int
- $shippingMethod: string
- $paymentMethod: string
- $totalMethod: array
- $dataTotal: array
- $shippingAddress: array
- $countries: array
- $attributesGroup: array
*/
@endphp

@extends($sc_templatePath.'.layout')

@section('block_main')
<section class="checkout-wrapper">
    <div class="container">
        <div class="row">
           
            @if (count($cartItem) ==0)
            <div class="col-md-12 text-danger min-height-37vh">
                {!! sc_language_render('cart.cart_empty') !!}!
            </div>
             @else


            
            <div class="col-lg-8 checkout-left-section mb-4 mb-lg-0">
                <div class="inner-section">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item address active" >
                            <a class="nav-link" href="javascript:void();" data-tag="address">
                                <span>1</span><span class="text">Address</span>
                            </a>
                        </li>
                        <li class="nav-item payment" >
                            <a class="nav-link" href="javascript:void();" data-tag="payment">
                                <span>2</span><span class="text">Payment</span>
                            </a>
                        </li>
                      
                    </ul>
                    <form class="sc-shipping-address" id="sc_form-process" role="form" method="POST" action="{{ sc_route('checkout.process') }}">
                        
                    @csrf
                    <div class="tab-content outer-wrapper">
                        <div class="content-box active" id="address">
                            <div class="heading-wrapper">
                                <p class="large">Select Address</p>
                                <p>Choose an Address to continue checking out.</p>
                            </div>
                            <div class="inner-content">


                             {{-- Select address if customer login --}}
                        @if (auth()->user())
                            <div class="select-wrapper">
                                <select class="form-control" name="address_process" style="width: 100%;" id="addressList">
                                    <option value="">{{ sc_language_render('cart.change_address') }}</option>
                                    @foreach ($addressList as $k => $address)
                                    <option value="{{ $address->id }}" {{ (old('address_process') ==  $address->id) ? 'selected':''}}>- {{ $address->first_name. ' '.$address->last_name.', '.$address->address1.' '.$address->address2.' '.$address->address3 }}</option>
                                    @endforeach
                                    <option value="new" {{ (old('address_process') ==  'new') ? 'selected':''}}>{{ sc_language_render('cart.add_new_address') }}</option>
                                </select>
                            </div>
                        @endif
                        {{--// Select address if customer login --}}
                           
                        {{-- Render address shipping --}}
                        <table class="table table-borderless table-responsive address-form">
                            <tr width=100%>
                                @if (sc_config('customer_lastname'))
                                    <td class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                                     
                                        <input class="form-control required" name="first_name" type="text"
                                            placeholder="{{ sc_language_render('order.first_name') }}"
                                            value="{{old('first_name', $shippingAddress['first_name'])}}">
                                            <!--<span class="error">Field Is Required</span>-->
                                        @if($errors->has('first_name'))
                                        <span class="help-block">{{ $errors->first('first_name') }}</span>
                                        @endif
                                    </td>
                                    <td class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                                        
                                        <input class="form-control required" name="last_name" type="text" placeholder="{{ sc_language_render('order.last_name') }}"
                                            value="{{old('last_name',$shippingAddress['last_name'])}}">
                                        @if($errors->has('last_name'))
                                        <span class="help-block">{{ $errors->first('last_name') }}</span>
                                        @endif
                                    </td>
                                @else
                                    <td colspan="2"
                                        class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                                      
                                        <input class="form-control required" name="first_name" type="text" placeholder="{{ sc_language_render('order.name') }}"
                                            value="{{old('first_name',$shippingAddress['first_name'])}}">
                                        @if($errors->has('first_name'))
                                        <span class="help-block">{{ $errors->first('first_name') }}</span>
                                        @endif
                                    </td>
                                @endif
                            </tr>

                            @if (sc_config('customer_name_kana'))
                                <tr>
                                <td class="form-group{{ $errors->has('first_name_kana') ? ' has-error' : '' }}">
                                   
                                    <input class="form-control required" name="first_name_kana" type="text"
                                        placeholder="{{ sc_language_render('order.first_name_kana') }}"
                                        value="{{old('first_name_kana', $shippingAddress['first_name_kana'])}}">
                                    @if($errors->has('first_name_kana'))
                                    <span class="help-block">{{ $errors->first('first_name_kana') }}</span>
                                    @endif
                                </td>
                                <td class="form-group{{ $errors->has('last_name_kana') ? ' has-error' : '' }}">
                                    
                                    <input class="form-control required" name="last_name_kana" type="text" placeholder="{{ sc_language_render('order.last_name_kana') }}"
                                        value="{{old('last_name_kana',$shippingAddress['last_name_kana'])}}">
                                    @if($errors->has('last_name_kana'))
                                    <span class="help-block">{{ $errors->first('last_name_kana') }}</span>
                                    @endif
                                </td>
                                </tr>
                            @endif

                            <tr>
                                @if (sc_config('customer_phone'))
                                    <td class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                      
                                        <input class="form-control required" name="email" type="email" placeholder="{{ sc_language_render('order.email') }}"
                                            value="{{old('email', $shippingAddress['email'])}}">
                                        @if($errors->has('email'))
                                            <span class="help-block">{{ $errors->first('email') }}</span>
                                        @endif
                                    </td>
                                    <td class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                                       
                                        <input class="form-control required" name="phone" type="tel" placeholder="{{ sc_language_render('order.phone') }}"
                                            value="{{old('phone',$shippingAddress['phone'])}}">
                                        @if($errors->has('phone'))
                                            <span class="help-block">{{ $errors->first('phone') }}</span>
                                        @endif
                                    </td>
                                @else
                                    <td colspan="2" class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                      
                                        <input class="form-control required" name="email" type="email" placeholder="{{ sc_language_render('order.email') }}"
                                            value="{{old('email',$shippingAddress['email'])}}">
                                        @if($errors->has('email'))
                                            <span class="help-block">{{ $errors->first('email') }}</span>
                                        @endif
                                    </td>
                                @endif
                            </tr>


                            @if (sc_config('customer_country'))
                            <tr>
                                <td colspan="2" class="form-group{{ $errors->has('country') ? ' has-error' : '' }}">
                                    <label for="country" class="control-label"><i class="fas fa-globe"></i>
                                        {{ sc_language_render('order.country') }}:</label>
                                    @php
                                        $ct = old('country',$shippingAddress['country']);
                                    @endphp
                                    <select class="form-control country " style="width: 100%;" name="country">
                                        <option value="">__{{ sc_language_render('order.country') }}__</option>
                                        @foreach ($countries as $k => $v)
                                        <option value="{{ $k }}" {{ ($ct ==$k) ? 'selected':'' }}>{{ $v }}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('country'))
                                        <span class="help-block">
                                            {{ $errors->first('country') }}
                                        </span>
                                    @endif
                                </td>
                            </tr>
                            @endif

                            <tr>
                                @if (sc_config('customer_postcode'))
                                    <td class="form-group {{ $errors->has('postcode') ? ' has-error' : '' }}">
                                       
                                        <input class="form-control" name="postcode" type="text" placeholder="{{ sc_language_render('order.postcode') }}"
                                            value="{{ old('postcode',$shippingAddress['postcode'])}}">
                                        @if($errors->has('postcode'))
                                            <span class="help-block">{{ $errors->first('postcode') }}</span>
                                        @endif
                                    </td>
                                @endif

                                @if (sc_config('customer_company'))
                                    <td class="form-group{{ $errors->has('company') ? ' has-error' : '' }}">
                                        <label for="company" class="control-label"><i class="fa fa-university"></i>
                                            {{ sc_language_render('order.company') }}</label>
                                        <input class="form-control" name="company" type="text" placeholder="{{ sc_language_render('order.company') }}"
                                            value="{{ old('company',$shippingAddress['company'])}}">
                                        @if($errors->has('company'))
                                            <span class="help-block">{{ $errors->first('company') }}</span>
                                        @endif
                                    </td>
                                @endif
                            </tr>

                            @if (sc_config('customer_address1'))
                            <tr>
                                    <td colspan="2"
                                        class="form-group {{ $errors->has('address1') ? ' has-error' : '' }}">
                                       
                                        <input class="form-control" name="address1" type="text" placeholder="State"
                                            value="{{ old('address1',$shippingAddress['address1'])}}">
                                        @if($errors->has('address1'))
                                            <span class="help-block">{{ $errors->first('address1') }}</span>
                                        @endif
                                    </td>
                            </tr>
                            @endif

                            @if (sc_config('customer_address2'))
                            <tr>
                                    <td colspan="2"
                                        class="form-group {{ $errors->has('address2') ? ' has-error' : '' }}">
                                       
                                        <input class="form-control" name="address2" type="text" placeholder="City"
                                            value="{{ old('address2',$shippingAddress['address2'])}}">
                                        @if($errors->has('address2'))
                                            <span class="help-block">{{ $errors->first('address2') }}</span>
                                        @endif
                                    </td>
                            </tr>
                            @endif

                            @if (sc_config('customer_address3'))
                            <tr>
                                    <td colspan="2"
                                        class="form-group {{ $errors->has('address3') ? ' has-error' : '' }}">
                                        
                                        <input class="form-control" name="address3" type="text" placeholder="Address"
                                            value="{{ old('address3',$shippingAddress['address3'])}}">
                                        @if($errors->has('address3'))
                                            <span class="help-block">{{ $errors->first('address3') }}</span>
                                        @endif
                                    </td>
                            </tr>
                            @endif

                        </table>
                        {{-- //Render address shipping --}}

                        <div class="bottom-btns">
                            <button type="submit" class="continue-btn default-btn" data-tag="payment">Proceed To Payment</button>    
                        </div>
                        
                            </div>
                        </div>


                        <div class="content-box" id="payment-sec">
                            <div class="heading-wrapper">
                                <p class="large">Select Payment Method</p>
                                <p>Choose an Payment Method to continue checking out.</p>
                            </div>
                            <div class="inner-content">
                            @if (!sc_config('shipping_off'))
                                {{-- Shipping method --}}
                                <div class="row">
                                    <div class="col-md-12">
                                        <div
                                            class="form-group {{ $errors->has('shippingMethod') ? ' has-error' : '' }}">
                                            <div class="heading text-capitalize">{{ sc_language_render('order.shipping_method') }}:</div>
                                            
                                            @if($errors->has('shippingMethod'))
                                            <span class="help-block">{{ $errors->first('shippingMethod') }}</span>
                                            @endif
                                        </div>

                                        <div class="form-group">
                                            @foreach ($shippingMethod as $key => $shipping)
                                            <div>
                                                <label class="radio-inline">
                                                    <input type="radio" name="shippingMethod"
                                                        value="{{ $shipping['key'] }}"
                                                        {{ (old('shippingMethod') == $key)?'checked':'' }}
                                                        style="position: relative;"
                                                        {{ ($shipping['permission'])?'':'disabled' }}>
                                                    <span for="shippingMethod">{{ $shipping['title'] }}</span>
                                                </label>
                                            </div>

                                            {{-- Render view --}}
                                            @includeIf($shipping['pathPlugin'].'::render')
                                            {{-- //Render view --}}

                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                {{-- //Shipping method --}}
                            @endif

                            @if (!sc_config('payment_off'))
                                {{-- Payment method --}}
                                <div class="row">
                                    <div class="col-md-12">
                                        <div
                                            class="form-group {{ $errors->has('paymentMethod') ? ' has-error' : '' }}">
                                            <div class="heading text-capitalize">{{ sc_language_render('order.payment_method') }}:</div>
                                            
                                            @if($errors->has('paymentMethod'))
                                            <span class="help-block">{{ $errors->first('paymentMethod') }}</span>
                                            @endif
                                        </div>
                                        <div class="form-group cart-payment-method">
                                            @foreach ($paymentMethod as $key => $payment)
                                            <div>
                                                <label class="radio-inline">
                                                    <input type="radio" name="paymentMethod"
                                                        value="{{ $payment['key'] }}"
                                                        {{ (old('paymentMethod') == $key)?'checked':'' }}
                                                        style="position: relative;"
                                                        {{ ($payment['permission'])?'':'disabled' }}>
                                                        <span class="radio-inline" for="paymentMethod">
                                                            <img title="{{ $payment['title'] }}"
                                                                alt="{{ $payment['title'] }}"
                                                                src="{{ sc_file($payment['image']) }}">
                                                        </span>
                                                </label>
                                            </div>

                                            {{-- Render view --}}
                                            @includeIf($payment['pathPlugin'].'::render')
                                            {{-- //Render view --}}

                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                {{-- //Payment method --}}
                            @endif
                            </div>
                            <div class="bottom-btns">
                                <a href="javascript:void();" class="back-btn default-btn">Back To Address</a>
                            </div>
                        </div>


                    </div>
                    
                    
                    
                    
                      </form>
                </div>
            </div>
            <div class="col-lg-4 checkout-right-section">
                <div class="inner-content">
                    <div class="heading">Price Details</div>
                    {{-- Data total --}}
                                @include($sc_templatePath.'.common.render_total')
                                {{-- Data total --}}

                                {{-- Total method --}}
                                <div class="row">
                                    <div class="col-md-12">
                                        <div
                                            class="form-group {{ $errors->has('totalMethod') ? ' has-error' : '' }}">
                                            @if($errors->has('totalMethod'))
                                                <span class="help-block">{{ $errors->first('totalMethod') }}</span>
                                            @endif
                                        </div>

                                        <div class="form-group">
                                            @foreach ($totalMethod as $key => $plugin)
                                                @includeIf($plugin['pathPlugin'].'::render')
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                {{-- //Total method --}}
                                
                                <div class="free-del">
                                    <p><span>Free Delivery</span> in 6-7days to 110052<br>Expected by Friday, 11 Nov</p>
                                </div>
                                
                                 {{-- Button checkout --}}
                        <div class="row">
                            <div class="col-md-12 text-center">
                                
                                    {!! $viewCaptcha ?? ''!!}
                                    @php
                                    $dataButton = [
                                            'class' => 'order-btn', 
                                            'id' =>  'sc_button-form-process',
                                            'type_w' => '',
                                            'type_t' => 'buy',
                                            'type_a' => '',
                                            'type' => 'submit',
                                            'name' => ''.sc_language_render('cart.checkout'),
                                            'html' => 'onClick="location.href=\' '.sc_route('cart').' \'"'
                                        ];
                                    @endphp
                                    @include($sc_templatePath.'.common.button.button', $dataButton)
                                
                            </div>
                        </div>
                        {{-- Button checkout --}}

                </div>
            </div>
           
      
        @endif
        </div>
    </div>
</section>

@endsection




@push('scripts')

{{-- Render script from total method --}}
@foreach ($totalMethod as $key => $plugin)
    @includeIf($plugin['pathPlugin'].'::script')
@endforeach
{{--// Render script from total method --}}

{{-- Render script from shipping method --}}
@foreach ($shippingMethod as $key => $plugin)
    @includeIf($plugin['pathPlugin'].'::script')
@endforeach
{{--// Render script from shipping method --}}

{{-- Render script from payment method --}}
@foreach ($paymentMethod as $key => $plugin)
    @includeIf($plugin['pathPlugin'].'::script')
@endforeach
{{--// Render script from payment method --}}

<script type="text/javascript">

    $('#sc_button-form-process').click(function(){
        $('#sc_form-process').submit();
        $(this).prop('disabled',true);
    });

    $('#addressList').change(function(){
        var id = $('#addressList').val();
        if(!id) {
            return;   
        } else if(id == 'new') {
            $('#sc_form-process [name="first_name"]').val('');
            $('#sc_form-process [name="last_name"]').val('');
            $('#sc_form-process [name="phone"]').val('');
            $('#sc_form-process [name="postcode"]').val('');
            $('#sc_form-process [name="company"]').val('');
            $('#sc_form-process [name="country"]').val('');
            $('#sc_form-process [name="address1"]').val('');
            $('#sc_form-process [name="address2"]').val('');
            $('#sc_form-process [name="address3"]').val('');
        } else {
            $.ajax({
            url: '{{ sc_route('customer.address_detail') }}',
            type: 'GET',
            dataType: 'json',
            async: false,
            cache: false,
            data: {
                id: id,
            },
            success: function(data){
                error= parseInt(data.error);
                if(error === 1)
                {
                    alert(data.msg);
                }else{
                    $('#sc_form-process [name="first_name"]').val(data.first_name);
                    $('#sc_form-process [name="last_name"]').val(data.last_name);
                    $('#sc_form-process [name="phone"]').val(data.phone);
                    $('#sc_form-process [name="postcode"]').val(data.postcode);
                    $('#sc_form-process [name="company"]').val(data.company);
                    $('#sc_form-process [name="country"]').val(data.country);
                    $('#sc_form-process [name="address1"]').val(data.address1);
                    $('#sc_form-process [name="address2"]').val(data.address2);
                    $('#sc_form-process [name="address3"]').val(data.address3);
                }

                }
        });
        }
    });

</script>

@endpush

@push('styles')
{{-- Your css style --}}
@endpush