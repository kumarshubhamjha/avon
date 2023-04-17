@php
/*
$layout_page = shop_wishlist
**Variables:**
- $wishlist: no paginate
*/
@endphp
@extends($sc_templatePath.'.layout')

@section('block_main_content_center')
<div class="heading mb-4">{{ $title }}</div>
<div class="prods-wrapper">
    <div class="heading-top">Products</div>
    @if (count($wishlist) ==0)
        {{ sc_language_render('front.no_item') }}
    @else
    <ul class="items">
        @foreach($wishlist as $item)
        @php
        $n = (isset($n)?$n:0);
        $n++;
        $product = $modelProduct->start()->getDetail($item->id, null, $item->storeId);
        @endphp
        <li class="item">
            <a href="{{$product->getUrl() }}" class="img-wrapper">
                <img src="{{sc_file($product->getImage())}}" class="img-fluid" alt="{{ $product->name }}">
            </a>
            <div class="center-section">
                <div class="top-wrapper mb-0">
                    <p>{{ $product->name }}
                        <br />
                        {{-- Process attributes --}}
                        @if ($item->options->count())
                        (
                        @foreach ($item->options as $keyAtt => $att)
                        <b>{{ $attributesGroup[$keyAtt] }}</b>: <i>{{ $att }}</i> ;
                        @endforeach
                        )<br>
                        @endif
                        {{-- //end Process attributes --}}
                    </p>
                    <p class="small">SKU: {{ $product->sku }}</p>
                </div>
            </div>

            <div class="right-section">
                <div class="top-wrapper mb-0">
                    <div class="new-price">{!! $product->showPrice() !!}</div>
                    <div class="old-price">{!! $product->showPrice() !!}</div>
                </div>
            </div>

            <div class="remove-item">
                <a onClick="return confirm('Confirm')" title="Remove Item" alt="Remove Item"
                    class="cart_quantity_delete"
                    href="{{ sc_route('cart.remove', ['id'=>$item->rowId, 'instance' => 'wishlist']) }}">
                        <img src="img/icon/checkout/remove.svg" alt="remove-">        
                </a>
                
            </div>


        </li>
        @endforeach
    </ul>
    @endif
</div>
@endsection


@push('styles')
{{-- Your css style --}}
@endpush

@push('scripts')
{{-- //script here --}}
@endpush