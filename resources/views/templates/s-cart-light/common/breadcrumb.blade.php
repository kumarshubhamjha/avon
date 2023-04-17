{{-- breadcrumb --}}
@if (!empty($breadcrumbs) && count($breadcrumbs))
<section class="breadcrumbs-custom">
    @if (!empty($layout_page))
        @php
            $bannerBreadcrumbImage = '';
            $bannerBreadcrumbTmp = [];
            $arrBreadcrumbPage = [
                'shop_product_list',
                'shop_contact', 
                'shop_page', 
                'shop_news',
                'shop_news_detail', 
                'shop_item_list',
                
                'shop_search'
            ];
            $arrBreadcrumbHome = [
                'shop_home',
                'vendor_home',
                'vendor_product_list'
            ];
            if (in_array($layout_page, $arrBreadcrumbPage)) {
                $bannerBreadcrumbTmp = $modelBanner->start()->getBreadcrumb()->getData()->first();
                $brPosition = 'bg-br-page';
            } elseif (in_array($layout_page, $arrBreadcrumbHome)) {
                if (isset($storeId)) {
                    $bannerBreadcrumbTmp = $modelBanner->start()->setStore($storeId)->getBannerStore()->getData()->first();
                } else {
                    $bannerBreadcrumbTmp = $modelBanner->start()->getBannerStore()->getData()->first();
                }
                $brPosition = 'bg-br-home';
            }
            if ($bannerBreadcrumbTmp) {
                $bannerBreadcrumbImage = sc_file($bannerBreadcrumbTmp['image'] ?? '');
            }
        @endphp

        
    @endif


    
    
    <div class="breadcrumb">
        <div class="container">
            <ul class="flex-wrap">
                <li><a href="{{ sc_route('home') }}" class="link">{{ sc_language_render('front.home') }}</a></li>
                @foreach ($breadcrumbs as $key => $item)
                @if (($key + 1) == count($breadcrumbs))
                    <li class="active">{{ $item['title'] }}</li>
                @else
                    <li><a href="{{ $item['url'] }}" class="link">{{ $item['title'] }}</a></li>
                @endif
                @endforeach
            </ul>
        </div>
    </div>
    
    @if ($bannerBreadcrumbImage)
    <section class="main-banner top-banner">
        <div class="owl-carousel" id="bannerslider">
       
            <div class="item">
                <div class="inner-content">
                    <img src="{{ $bannerBreadcrumbImage }}" alt="banner-img">
                    <div class="content-wrapper">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6 left-section">
                                    <div class="inner-content">
                                       <div class="heading-wrapper mb-0">
                                            <h1 class="heading">{{ $title ?? '' }}</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
           
           
        </div>
    </section>
    @endif
    
</section>
@endif
{{-- //breadcrumb --}}