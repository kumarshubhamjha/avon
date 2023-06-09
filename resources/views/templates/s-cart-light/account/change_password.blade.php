@php
/*
$layout_page = shop_profile
**Variables:**
- $customer
*/ 
@endphp

@extends($sc_templatePath.'.account.layout')

@section('block_main_profile')
    <div class="heading">{{ $title }}</div>
    <div class="form-wrapper">
        <form method="POST" action="{{ sc_route('customer.post_change_password') }}">
            @csrf
    
            <div class="form-group row {{ Session::has('password_old_error') ? ' has-error' : '' }}">
                <div class="col-md-6">
                    <input id="password" type="password" class="form-control" placeholder="{{ sc_language_render('customer.password_old') }}" name="password_old" required>
    
                    @if(Session::has('password_old_error'))
                    <span class="help-block">{{ Session::get('password_old_error') }}</span>
                    @endif
    
                </div>
            </div>
    
            <div class="form-group row {{ $errors->has('password') ? ' has-error' : '' }}">
                <div class="col-md-6">
                    <input id="password" type="password" class="form-control" placeholder="{{ sc_language_render('customer.password_new') }}" name="password" required>
    
                    @if($errors->has('password'))
                    <span class="help-block">{{ $errors->first('password') }}</span>
                    @endif
    
                </div>
            </div>
    
            <div class="form-group row">
                <div class="col-md-6">
                    <input id="password-confirm" type="password" class="form-control" placeholder="{{ sc_language_render('customer.password_confirm') }}" name="password_confirmation" required>
                </div>
            </div>
    
            <div class="form-group row mb-0">
                <div class="col-md-6">
                    @php
                    $dataButton = [
                            'class' => 'default-btn', 
                            'id' =>  '',
                            'type_w' => '',
                            'type_t' => 'buy',
                            'type_a' => '',
                            'type' => 'submit',
                            'name' => ''.sc_language_render('customer.update_infomation'),
                            'html' => ''
                        ];
                    @endphp
                    @include($sc_templatePath.'.common.button.button', $dataButton)
                </div>
            </div>
        </form>
    </div>
    
@endsection