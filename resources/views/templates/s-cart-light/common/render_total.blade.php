@if (!empty($dataTotal) && count($dataTotal))
<ul class="details">
    @foreach ($dataTotal as $key => $element)
        @if ($element['code']=='total')
            <li>
                <div class="text">{!! $element['title'] !!}</div>
                <div class="num">{{$element['text'] }}</div>
            </li>
        @elseif($element['value'] !=0)
            <li>
                <div class="text">{!! $element['title'] !!}</div>
                <div class="num dark">{{$element['text'] }}</div>
            </li>
        @endif
    @endforeach
</ul>
@endif