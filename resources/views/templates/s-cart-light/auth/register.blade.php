@extends($sc_templatePath.'.layout')

@section('block_main')
<!--form-->
<section class="login-pg py-60">
    <div class="container">
    <div class="row align-items-center">
        <div class="left-section col-lg-7 mb-4 mb-lg-0">
            <div class="img-wrapper">
                <img src="{{url('img/new/register.webp')}}" alt="loginImg" class="img-fluid">
            </div>
        </div>
        <div class="right-section col-lg-5">
            <div class="inner-content">
                <h1 class="heading">{{ sc_language_render('customer.title_register') }}</h1>
                <div class="form-wrapper">
                    <form action="{{sc_route('postRegister')}}" method="post" class="box" id="sc_form-process">
                    {!! csrf_field() !!}
                    <div class="form_content" id="collapseExample">
                
                        @if (sc_config('customer_lastname'))
                        <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                            <input type="text"
                                class="11 is_required validate account_input form-control {{ ($errors->has('first_name'))?"input-error":"" }}"
                                name="first_name" placeholder="{{ sc_language_render('customer.first_name') }}"
                                value="{{ old('first_name') }}">
                            @if ($errors->has('first_name'))
                            <span class="help-block">
                                {{ $errors->first('first_name') }}
                            </span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                            <input type="text"
                                class="22 is_required validate account_input form-control {{ ($errors->has('last_name'))?"input-error":"" }}"
                                name="last_name" placeholder="{{ sc_language_render('customer.last_name') }}" value="{{ old('last_name') }}">
                            @if ($errors->has('last_name'))
                            <span class="help-block">
                                {{ $errors->first('last_name') }}
                            </span>
                            @endif
                        </div>
                        @else
                        <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                            <input type="text"
                                class="33 is_required validate account_input form-control {{ ($errors->has('first_name'))?"input-error":"" }}"
                                name="first_name" placeholder="{{ sc_language_render('customer.name') }}" value="{{ old('first_name') }}">
                            @if ($errors->has('first_name'))
                            <span class="help-block">
                                {{ $errors->first('first_name') }}
                            </span>
                            @endif
                        </div>
                        @endif
                
                       
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <input type="text"
                                class="is_required validate account_input form-control {{ ($errors->has('email'))?"input-error":"" }}"
                                name="email" placeholder="{{ sc_language_render('customer.email') }}" value="{{ old('email') }}">
                            @if ($errors->has('email'))
                            <span class="help-block">
                                {{ $errors->first('email') }}
                            </span>
                            @endif
                        </div>
                
                        @if (sc_config('customer_phone'))
                        <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                            <input type="text"
                                class="is_required validate account_input form-control {{ ($errors->has('phone'))?"input-error":"" }}"
                                name="phone" placeholder="{{ sc_language_render('customer.phone') }}" value="{{ old('phone') }}">
                            @if ($errors->has('phone'))
                            <span class="help-block">
                                {{ $errors->first('phone') }}
                            </span>
                            @endif
                        </div>
                        @endif
                
                       
                
                      
    
                      
                
                        
    
                       
                
                
                       
                
                      
                
                
    
    {{-- Custom fields --}}
    @if ($customFields)
                        @foreach ($customFields as $keyField => $field)
                        <div class="form-group{{ $errors->has('fields.'.$field->code) ? ' has-error' : '' }}">
                        @php
                            $default  = json_decode($field->default, true);
                        @endphp
                                @if ($field->option == 'radio')
                                    @if ($default)
                                        <b>{{ sc_language_render($field->name) }}:</b> 
                                        @foreach ($default as $key => $name)
                                        <div>
                                            <input type="radio" id="{{ $keyField.'__'.$key }}" name="fields[{{ $field->code }}]" value="{{ $key }}" {{ (old('fields.'.$field->code) == $key)?'checked':'' }}>
                                            <label for="{{ $keyField.'__'.$key }}">
                                                {{ $name }}
                                            </label>
                                        </div>
                                        @endforeach
                                    @endif
                                @elseif($field->option == 'select')
                                    @if ($default)
                                    <select class="form-control input-sm {{ $field->code }}" style="width: 100%;"
                                        name="fields[{{ $field->code }}]">
                                        <option value="">{{ sc_language_render($field->name) }}</option>
                                        @foreach ($default as $key => $name)
                                        <option value="{{ $key }}" {{ (old('fields.'.$field->code) == $key) ? 'selected':'' }}>
                                            {{ $name }}
                                        </option>
                                        @endforeach
                                    </select>
                                    @endif
                                @else
                                    <input type="text"
                                        class="is_required validate account_input form-control {{ ($errors->has('fields.'.$field->code))?"input-error":"" }}"
                                        name="fields[{{ $field->code }}]" placeholder="{{ sc_language_render($field->name) }}" value="{{ old('fields.'.$field->code) }}">
                                @endif
    
                                @if ($errors->has('fields.'.$field->code))
                                <span class="help-block">
                                    <i class="fa fa-info-circle"></i> {{ $errors->first('fields.'.$field->code) }}
                                </span>
                                @endif
                        </div>
                        @endforeach
    @endif
    {{-- //Custom fields --}}
    
    
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <input type="password"
                                class="is_required validate account_input form-control {{ ($errors->has('password'))?"input-error":"" }}"
                                name="password" placeholder="{{ sc_language_render('customer.password') }}" value="">
                            @if ($errors->has('password'))
                            <span class="help-block">
                                {{ $errors->first('password') }}
                            </span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <input type="password"
                                class="is_required validate account_input form-control {{ ($errors->has('password_confirmation'))?"input-error":"" }}"
                                placeholder="{{ sc_language_render('customer.password_confirm') }}" name="password_confirmation" value="">
                            @if ($errors->has('password_confirmation'))
                            <span class="help-block">
                                {{ $errors->first('password_confirmation') }}
                            </span>
                            @endif
                        </div>
                        <p class="links">By continuing, you agree to Avon’s &nbsp;<a href="#">Terms of Use</a>&nbsp; and &nbsp;<a href="#">Privacy Policy</a>.</p>
                        {!! $viewCaptcha ?? ''!!}
                        <div class="submit">
                            @php
                            $dataButton = [
                                    'class' => '', 
                                    'id' =>  'sc_button-form-process',
                                    'type_w' => '',
                                    'type_t' => 'buy',
                                    'type_a' => '',
                                    'type' => 'submit',
                                    'name' => ''.sc_language_render('customer.signup'),
                                    'html' => 'name="SubmitCreate"'
                                ];
                            @endphp
                            @include($sc_templatePath.'.common.button.button', $dataButton)
    
                        </div>
                        <p class="links"><a href="{{ sc_route('login') }}" class="link">Already have an account? Log In</a></p>
                    </div>
                
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<!--/form-->
@endsection