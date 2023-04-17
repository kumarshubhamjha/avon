@php
/*
$layout_page = home
*/ 
@endphp

@extends($sc_templatePath.'.layout')

@section('block_main')
   {{-- Render include view --}}
   @include($sc_templatePath.'.common.include_view')
  
   {{--// Render include view --}}
@endsection

@push('styles')


    <!--<link rel="stylesheet" href="css/font-awesome.min.css" />-->
    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">-->
    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">-->
    <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta3/dist/css/bootstrap-select.min.css">-->
    <!--<link rel="stylesheet" type="text/css" href="slick/slick.css"/>-->
    
@endpush


               
           

@push('scripts')
<!--<script src="js/popper.min.js"></script>-->
<!--    <script src="js/bootstrap.min.js"></script>-->

<!--    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" defer></script>-->

<!--    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta3/dist/js/bootstrap-select.min.js"></script>-->

<!--    <script type="text/javascript" src="slick/slick.min.js"></script>-->
    
<!--    <script src="js/script.js"></script>-->
 
@endpush
