@php
/*
$layout_page = shop_profile
** Variables:**
- $addresses
*/ 
@endphp

@extends($sc_templatePath.'.account.layout')

@section('block_main_profile')

<div class="heading">{{ $title }}</div>
    @if (count($addresses) ==0)
        <div class="text-danger">
        {{ sc_language_render('front.no_item') }}
        </div>
        @else
        @foreach($addresses as $address)
            <div class="list">
                <ul class="profile-detail">
                @if (sc_config('customer_lastname'))
                <li class="item">
                    <div class="label">{{ sc_language_render('customer.first_name') }}:</div>
                    <div class="text">{{ $address['first_name'] }}</div>
                </li>
                <li class="item">
                    <div class="label">{{ sc_language_render('customer.last_name') }}:</div>
                    <div class="text">{{ $address['last_name'] }}</div>
                </li>
                @else
                <li class="item">
                    <div class="label">{{ sc_language_render('customer.name') }}:</div>
                    <div class="text">{{ $address['first_name'] }}</div>
                </li>
                @endif
                
                @if (sc_config('customer_phone'))
                <li class="item">
                    <div class="label">{{ sc_language_render('customer.phone') }}:</div>
                    <div class="text">{{ $address['phone'] }}</div>
                </li>
                @endif
                
                @if (sc_config('customer_postcode'))
                <li class="item">
                    <div class="label">{{ sc_language_render('customer.postcode') }}:</div>
                    <div class="text">{{ $address['postcode'] }}</div>
                </li>
                @endif
                
                <li class="item">
                    <div class="label">{{ sc_language_render('customer.address1') }}:</div>
                    <div class="text">{{ $address['address1'] }}</div>
                </li>
            
                @if (sc_config('customer_address2'))
                <li class="item">
                    <div class="label">{{ sc_language_render('customer.address2') }}:</div>
                    <div class="text">{{ $address['address2'] }}</div>
                </li>
                @endif
            
                @if (sc_config('customer_address3'))
                <li class="item">
                    <div class="label">{{ sc_language_render('customer.address3') }}:</div>
                    <div class="text">{{ $address['address3'] }}</div>
                </li>
                @endif
            
                @if (sc_config('customer_country'))
                <li class="item">
                    <div class="label">{{ sc_language_render('customer.country') }}:</div>
                    <div class="text">{{ $countries[$address['country']] ?? $address['country'] }}</div>
                </li>
                @endif
            </ul>
                <div class="btns">
                    <span class="btn">
                      <a title="{{ sc_language_render('action.edit') }}" class="edit" href="{{ sc_route('customer.update_address', ['id' => $address->id]) }}">Edit Address</a>
                    </span>
                    <span class="btn">
                      <a href="#" title="{{ sc_language_render('action.delete') }}" class="edit" data-id="{{ $address->id }}">Delete Address</a>
                    </span>
                    @if ($address->id == auth()->user()->address_id)
                    <span  class="default-edit" title="{{ sc_language_render('customer.address_default') }}">Default Address</span>
                    @endif
                </div>
            </div>
      @endforeach
    @endif
@endsection



@push('scripts')
<script>
  $('.delete-address').click(function(){
    var r = confirm("{{ sc_language_render('action.delete_confirm') }}");
    if(!r) {
      return;
    }
    var id = $(this).data('id');
    $.ajax({
            url:'{{ sc_route("member.delete_address") }}',
            type:'POST',
            dataType:'json',
            data:{id:id,"_token": "{{ csrf_token() }}"},
                beforeSend: function(){
                $('#loading').show();
            },
            success: function(data){
              if(data.error == 0) {
                location.reload();
              }
            }
        });
  });
</script>
@endpush