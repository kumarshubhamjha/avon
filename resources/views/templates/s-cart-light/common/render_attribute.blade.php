@if (!empty($details) && count($details))
<div class="prod-detail">
    @foreach ($details as $groupId => $detailsGroup)
     <ul>
        <li>{!! $groups[$groupId]??'Not found' !!}</li>
        @foreach ($detailsGroup as $k => $detail)
        @php
           $valueOption = $detail->name.'__'.$detail->add_price;
           $valueOption1 = $detail->name;
        @endphp
            <li class="item"><input  type="radio" price="{{ $detail->add_price }}"  name="form_attr[{{ $groupId }}]" value="{{ $valueOption }}">{!! sc_render_option_price($valueOption1) !!}</li>
        @endforeach
          </ul>
    @endforeach
</div>               
@endif
@push('scripts')
@endpush

 

 