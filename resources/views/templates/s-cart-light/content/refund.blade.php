@extends($sc_templatePath.'.layout')
@section('block_main')
<section class="breadcrumb">
    <div class="container">
        <ul class="flex-wrap">
            <li>
                <a class="link" href="{{url('')}}">Home</a>
            </li>
            <li>Returns & Refunds</li>
        </ul>
    </div>
</section>
<section class="returns-refunds content-pg py-60">
<div class="container">
    {!! $data->content !!}
    <div class="heading-wrapper ">
        <div class="heading mb-3">Faqs</div>
        <div class="faq-section">
            <ul>
                <li class="active">
                    <div class="que">
                        {{$data->faq_question}}
                    </div>
                    <div class="ans">
                    {{$data->faq_answer}}
                    </div>
                </li>
                @foreach($data1 as $val)
                <li>
                    <div class="que">
                            {{$val->faq_question}}
                    </div>
                    <div class="ans">
                    {{$val->faq_answer}}
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>  
</section>
@endsection