@php
    $type_w = $type_w ?? ''; //weight
    $type_t = $type_t ?? ''; //type
    $type_a = $type_a ?? ''; //arrow
    $class ?? '';
@endphp

@if ($type_w == 'auto')
    @php
        $class = $class.' ';
    @endphp
@endif

@if ($type_t == 'cart')
    @php
        $class = $class.' button-zakaria add-to-cart-list';
    @endphp
@elseif ($type_t == 'buy')
    @php
    $class = $class.' button-zakaria';
    @endphp
@endif

@if ($type_a == 'back')
    @php
        $class = $class.' ';
    @endphp
@elseif ($type_a == 'next')
    @php
    $class = $class.' ';
    @endphp
@endif

@php
    $class = "button button-secondary ".$class;
@endphp



 <a {!! $html ?? '' !!} class="d-flex flex-wrap justify-content-center align-items-center" {!! $html ?? '' !!}  {!! !empty($href) ? 'href= "'.$href.'"' : '' !!} {!! !empty($id) ? 'id= "'.$id.'"' : '' !!}><img
                        src="{{url('img/icon/cart-product.png')}}" alt=""></a>