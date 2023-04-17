@php
/*
$layout_page = shop_auth
*/
@endphp

@extends($sc_templatePath.'.layout')

@section('block_main')
<section class="login-pg py-60">
    <div class="container">
    <div class="row">
        <div class="col-12 col-sm-12">
            <div class="heading mb-4">{{ sc_language_render('customer.password_forgot') }}</div>
            
            <div class="form-wrapper">
                <form class="form-horizontal" method="POST" action="{{ sc_route('password.email') }}" id="sc_form-process">
                    {{ csrf_field() }}
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <!--<label for="email" class="col-md-12 control-label"><i class="fas fa-envelope"></i>-->
                        <!--    {{ sc_language_render('customer.email') }}</label>-->
                        <div class="input-wrapper">
                            <input id="email" type="email" class="form-control mb-3" placeholder="Enter You Email" name="email" value="{{ old('email') }}"
                                required>
                            @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            <br />
                            @endif
                            {!! $viewCaptcha ?? ''!!}
                            @php
                            $dataButton = [
                                    'class' => 'default-btn mb-0', 
                                    'id' =>  'sc_button-form-process',
                                    'type_w' => '',
                                    'type_t' => 'buy',
                                    'type_a' => '',
                                    'type' => 'submit',
                                    'name' => ''.sc_language_render('action.submit'),
                                    'html' => ''
                                ];
                            @endphp
                            @include($sc_templatePath.'.common.button.button', $dataButton)
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</section>

@endsection