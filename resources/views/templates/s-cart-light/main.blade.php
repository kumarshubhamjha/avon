<!DOCTYPE html>
<html class="wide wow-animation" lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css"
        href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700%7CLato%7CKalam:300,400,700">
    <link rel="canonical" href="{{ request()->url() }}" />
    <meta name="description" content="{{ $description??sc_store('description') }}">
    <meta name="keywords" content="{{ $keyword??sc_store('keyword') }}">
    <title>{{$title??sc_store('title')}}</title>
    <link rel="icon" href="{{ sc_file(sc_store('icon', null, 'images/icon.png')) }}" type="image/png" sizes="16x16">
    <meta property="og:image" content="{{ !empty($og_image)?sc_file($og_image):sc_file('images/org.jpg') }}" />
    <meta property="og:url" content="{{ \Request::fullUrl() }}" />
    <meta property="og:type" content="Website" />
    <meta property="og:title" content="{{ $title??sc_store('title') }}" />
    <meta property="og:description" content="{{ $description??sc_store('description') }}" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- css default for item s-cart -->
    @include($sc_templatePath.'.common.css')
    <!--//end css defaut -->

    <!--Module header -->
    @includeIf($sc_templatePath.'.common.render_block', ['positionBlock' => 'header'])
    <!--//Module header -->
    
    
    <link rel="preload" href="{{ sc_file($sc_templateFile.'/css/bootstrap.min.css')}}" as="style" onload="this.onload=null;this.rel='stylesheet'"></link>
    <link rel="preload" href="{{ sc_file($sc_templateFile.'/css/font-awesome.min.css')}}" as="style" onload="this.onload=null;this.rel='stylesheet'"></link>
    <link rel="stylesheet" type="text/css" href="{{ sc_file($sc_templateFile.'/css/slick/slick.css')}}"/>
    
    <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'"></link>
    <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'"></link>
    <link rel="preload" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta3/dist/css/bootstrap-select.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'"></link>
    <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css" as="style" onload="this.onload=null;this.rel='stylesheet'"></link>
    <link rel="preload" href="{{ sc_file($sc_templateFile.'/css/main.css')}}" as="style" onload="this.onload=null;this.rel='stylesheet'"></link>
    <link rel="preload" href="{{ sc_file($sc_templateFile.'/css/responsive.css')}}" as="style" onload="this.onload=null;this.rel='stylesheet'"></link>

    <style>
        .ie-panel {
            display: none;
            background: #212121;
            padding: 10px 0;
            box-shadow: 3px 3px 5px 0 rgba(0, 0, 0, .3);
            clear: both;
            text-align: center;
            position: relative;
            z-index: 1;
        }

        html.ie-10 .ie-panel,
        html.lt-ie-10 .ie-panel {
            display: block;
        }
    </style>

    @stack('styles')
</head>


@if (\Request::is('/'))  
    <body class="home-pg">
@else
   <body>
@endif


    <div class="ie-panel">
        <a href="http://windows.microsoft.com/en-US/internet-explorer/">
            <img src="{{ sc_file($sc_templateFile.'/images/ie8-panel/warning_bar_0000_us.jpg')}}" height="42"
                width="820"
                alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today.">
        </a>
    </div>

    <div class="page">
        {{-- Block header --}}
        @section('block_header')
        @include($sc_templatePath.'.block_header')
        @show
        {{--// Block header --}}

        {{-- Block top --}}
        @section('block_top')
        @include($sc_templatePath.'.block_top')

        <!--Breadcrumb -->
        @section('breadcrumb')
        @include($sc_templatePath.'.common.breadcrumb')
        @show
        <!--//Breadcrumb -->

        <!--Notice -->
        @include($sc_templatePath.'.common.notice')
        <!--//Notice -->
        @show
        {{-- //Block top --}}

        {{-- Block main --}}
        @section('block_main')
        <section class="section section-xxl bg-default text-md-left listing-wrapper">
            <div class="container">
                <div class="row row-50">
                    @section('block_main_content')

                    @if (empty($hiddenBlockLeft))
                    <!--Block left-->
                    <div class="col-lg-4 col-xl-3">
                        @section('block_main_content_left')
                        @include($sc_templatePath.'.block_main_content_left')
                        @show
                    </div>
                    <!--//Block left-->

                    <!--Block center-->
                    <div class="col-lg-8 col-xl-9">
                        @section('block_main_content_center')
                        @include($sc_templatePath.'.block_main_content_center')
                        @show
                    </div>
                    <!--//Block center-->
                    @else
                    <!--Block center-->
                    @section('block_main_content_center')
                    @include($sc_templatePath.'.block_main_content_center')
                    @show
                    <!--//Block center-->
                    @endif

                    @if (empty($hiddenBlockRight))
                    <!--Block right -->
                    @section('block_main_content_right')
                    @include($sc_templatePath.'.block_main_content_right')
                    @show
                    <!--//Block right -->
                    @endif

                    @show
                </div>
            </div>
            <div class="compare-btn">
                <a href="#" title="Compare Now"><img src="{{url('img/icon/flip-product.png')}}" alt="compare Product"></a>
            </div>
        </section>
        @show
        {{-- //Block main --}}

        <!-- Render include view -->
        @include($sc_templatePath.'.common.include_view')
        <!--// Render include view -->


        {{-- Block bottom --}}
        @section('block_bottom')
        @include($sc_templatePath.'.block_bottom')
        @show
        {{-- //Block bottom --}}

        {{-- Block footer --}}
        @section('block_footer')
        @include($sc_templatePath.'.block_footer')
        @show
        {{-- //Block footer --}}

    </div>

    <div id="sc-loading">
        <div class="sc-overlay"><i class="fa fa-spinner fa-pulse fa-5x fa-fw "></i></div>
    </div>

    <script src="{{ sc_file($sc_templateFile.'/js/core.min.js')}}"></script>
    <!--<script src="{{ sc_file($sc_templateFile.'/js/script.js')}}"></script>-->
    <script src="{{ sc_file($sc_templateFile.'/js/bootstrap.min.js')}}"></script>
    <script src="{{ sc_file($sc_templateFile.'/js/popper.min.js')}}"></script>
   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta3/dist/js/bootstrap-select.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js" integrity="sha512-uURl+ZXMBrF4AwGaWmEetzrd+J5/8NRkWAvJx5sbPSSuOb0bZLqf+tOzniObO00BjHa/dD7gub9oCGMLPQHtQA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ sc_file($sc_templateFile.'/css/slick/slick.min.js')}}"></script>
    <script src="{{ sc_file($sc_templateFile.'/js/custom.js')}}"></script>
     

    <!-- js default for item s-cart -->
    @include($sc_templatePath.'.common.js')
    <!--//end js defaut -->
    @stack('scripts')

</body>
</html>