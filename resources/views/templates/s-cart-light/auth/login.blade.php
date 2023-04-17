@extends($sc_templatePath.'.layout')

@section('block_main')
<!--form-->
<section class="login-pg py-60">
    <div class="container">
        <div class="row align-items-center">
             <div class="left-section col-lg-7 mb-4 mb-lg-0">
                <div class="img-wrapper">
                    <img src="{{url('img/new/login-pg.webp')}}" alt="loginImg" class="img-fluid">
                </div>
            </div>
            <div class="right-section col-lg-5">
                <div class="inner-content">
                    <h1 class="heading">{{ sc_language_render('customer.title_login') }}</h1>
                    <div class="form-wrapper">
                        <form action="{{ sc_route('postLogin') }}" method="post" class="box">
                        {!! csrf_field() !!}
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <input class="is_required validate account_input form-control {{ ($errors->has('email'))?"input-error":"" }}"
                                type="text" name="email" value="{{ old('email') }}" placeholder="{{ sc_language_render('customer.email') }}">
                            @if ($errors->has('email'))
                            <span class="help-block">
                                {{ $errors->first('email') }}
                            </span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <input class="is_required validate account_input form-control {{ ($errors->has('password'))?"input-error":"" }}"
                                type="password" name="password" value="" placeholder="{{ sc_language_render('customer.password') }}">
                            @if ($errors->has('password'))
                            <span class="help-block">
                                {{ $errors->first('password') }}
                            </span>
                            @endif
                    
                        </div>
                        <p class="links">By continuing, you agree to Avon’s &nbsp;<a href="#">Terms of Use</a>&nbsp; and &nbsp;<a href="#">Privacy Policy</a>.</p>
                        @php
                        $dataButton = [
                                'class' => '', 
                                'id' =>  '',
                                'type_w' => '',
                                'type_t' => 'buy',
                                'type_a' => '',
                                'type' => 'submit',
                                'name' => ''.sc_language_render('front.login'),
                                'html' => 'name="SubmitLogin"'
                            ];
                        @endphp
                        @include($sc_templatePath.'.common.button.button', $dataButton)
                        
                        <p class="links">Have trouble logging in? &nbsp;<a href="{{ sc_route('forgot') }}" class="link">Get Help</a></p>
                        <p class="links"><a href="{{ sc_route('register') }}" class="link">New to here? Create an account</a></p>
                        
                        @if (!empty(sc_config('LoginSocialite')))
                            <ul>
                            <li class="rd-dropdown-item">
                              <a class="rd-dropdown-link" href="{{ sc_route('login_socialite.index', ['provider' => 'facebook']) }}"><i class="fab fa-facebook"></i>
                                 {{ sc_language_render('front.login') }} facebook</a>
                            </li>
                            <li class="rd-dropdown-item">
                              <a class="rd-dropdown-link" href="{{ sc_route('login_socialite.index', ['provider' => 'google']) }}"><i class="fab fa-google-plus"></i>
                                 {{ sc_language_render('front.login') }} google</a>
                            </li>
                            <li class="rd-dropdown-item">
                              <a class="rd-dropdown-link" href="{{ sc_route('login_socialite.index', ['provider' => 'github']) }}"><i class="fab fa-github"></i>
                                 {{ sc_language_render('front.login') }} github</a>
                            </li>
                            </ul>
                        @endif
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/form-->
@endsection