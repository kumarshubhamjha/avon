<div class="prods-wrapper">
    <div class="heading-top">Products</div>
    <ul class="items">
        @foreach($cartItem as $item)
                  @php
                      $n = (isset($n)?$n:0);
                      $n++;
                      // Check product in cart
                      $product = $modelProduct->start()->getDetail($item->id, null, $item->storeId);
                      if(!$product) {
                          continue;
                      }
                      // End check product in cart
                  @endphp
        <li class="item  {{ session('arrErrorQty')[$product->id] ?? '' }}{{ (session('arrErrorQty')[$product->id] ?? 0) ? ' has-error' : '' }}">
            <a href="{{$product->getUrl() }}" class="img-wrapper">
                <img src="{{sc_file($product->getImage())}}" class="img-fluid" alt="{{ $product->name }}">
            </a>
            <div class="center-section">
                <div class="top-wrapper">
                    <p><a href="{{$product->getUrl() }}" class="row_cart-name prod-name">{{ $product->name }}</a></p>
                    <p class="small">SKU: {{ $product->sku }}
                        {!! $product->displayVendor() !!}<br>
                        {{-- Process attributes --}}
                        @if ($item->options->count())
                        @foreach ($item->options as $groupAtt => $att)
                        <b>{{ $attributesGroup[$groupAtt] }}</b>: {!! sc_render_option_price($att) !!}
                        @endforeach
                        @endif
                        {{-- //end Process attributes --}}
                    </p>
                </div>
                <div class="bottom-wrapper">
                    <div class="text">Color</div>
                    <div class="color-img"><img src="img/color-img/green.jpg" alt=""></div>
                </div>
            </div>

            <div class="right-section">
                <div class="top-wrapper">
                    <div class="new-price">{{sc_currency_render($item->subtotal)}}</div>
                    <div class="old-price">{!! $product->showPrice() !!}</div>
                </div>
                <div class="bottom-wrapper">
                    <div class="text">Quantity:
                        <span class="text-danger item-qty-{{$item->id}}" style="display: none;"></span>
                        @if (session('arrErrorQty')[$product->id] ?? 0)
                        <span class="help-block">
                          {{ sc_language_render('cart.minimum_value', ['value' => session('arrErrorQty')[$product->id]]) }}
                        </span>
                        @endif
                    </div>
                    <ul class="qty">
                        <li><div class="cart-qty-minus"><img src="img/icon/checkout/minus.svg" alt="minus"></div></li>
                        <li>
                            <input type="text" data-id="{{ $item->id }}"
                              data-rowid="{{$item->rowId}}" data-store_id="{{$product->store_id}}" 
                              class="item-qty form-control" name="qty-{{$item->rowId}}" value="{{$item->qty}}">
                        </li>
                        <li><div class="cart-qty-plus"><img src="img/icon/checkout/plus.svg" alt="plus"></a></li>
                    </ul>
                </div>
            </div>

            <div class="remove-item">
                <a onClick="return confirm('Confirm?')" title="Remove Item" alt="Remove Item"
                          class="cart_quantity_delete"
                          href="{{ sc_route("cart.remove", ['id'=>$item->rowId, 'instance' => 'cart']) }}">
                          <img src="img/icon/checkout/remove.svg" alt="remove-{{ $product->sku }}">
                </a>
            </div>
        </li>
        @endforeach
    </ul>
</div>


@push('scripts')
<script type="text/javascript">
    function updateCart(obj){
        let new_qty = obj.val();
        let storeId = obj.data('store_id');
        let rowid = obj.data('rowid');
        let id = obj.data('id');
        $.ajax({
            url: '{{ sc_route('cart.update') }}',
            type: 'POST',
            dataType: 'json',
            async: false,
            cache: false,
            data: {
                id: id,
                rowId: rowid,
                new_qty: new_qty,
                storeId: storeId,
                _token:'{{ csrf_token() }}'},
            success: function(data){
                error= parseInt(data.error);
                if(error ===0)
                {
                    window.location.replace(location.href);
                }else{
                    $('.item-qty-'+id).css('display','block').html(data.msg);
                }

                }
        });
    }

    function buttonQty(obj, action){
        var parent = obj.parent();
        var input = parent.find(".item-qty");
        if(action === 'reduce'){
            input.val(parseInt(input.val()) - 1);
        }else{
            input.val(parseInt(input.val()) + 1);
        }
        updateCart(input)
    }
    
    var incrementPlus;
    var incrementMinus;
    var buttonPlus  = $(".cart-qty-plus");
    var buttonMinus = $(".cart-qty-minus");
    
    var incrementPlus = buttonPlus.click(function() {
    	var $n = $(this).parent("li").parent(".qty").find("input");
    	$n.val(Number($n.val())+1 );
    });
    
    var incrementMinus = buttonMinus.click(function() {
		console.log('minus');
		var $n = $(this).parent("li").parent(".qty").find("input");
    	var amount = Number($n.val());
    	if (amount > 1) {
    		$n.val(amount-1);
    	}
    });
</script>
@endpush