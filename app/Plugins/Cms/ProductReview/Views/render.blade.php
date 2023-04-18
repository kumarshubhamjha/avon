{{-- review --}}
@php
$points = (new App\Plugins\Cms\ProductReview\Models\PluginModel)->getPointProduct($product->id);
$pathPlugin = (new App\Plugins\Cms\ProductReview\AppConfig)->pathPlugin;
@endphp
<section class="section section-sm bg-default pdp-review py-60">
    <div class="container" id="review">
        <div class="top-wrapper">
            <div class="inner-content">
                <div class="left">
                    <div class="heading">Customer Reviews</div>
                    <div class="rating">
                        <div class="stars">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                        </div>
                        Based on 4 reviews
                    </div>
                </div>
                <div class="right">
                    <div class="writeReview" id="writeReview">Write A Review</div>
                </div>
            </div>
        </div>

        <div class="form-wrapper" id="reviewForm">
            <div class="heading">{{ trans($pathPlugin.'::lang.write_review') }}</div>
            <form class="form-horizontal" id="form-review" method="POST"
                action="{{ sc_route('product_review.postReview') }}">
                @csrf
                <input type="hidden" name="product_id" value="{{ $product->id }}">
                <div class="form-group required">
                    <label class="control-label" for="input-name">{{ trans($pathPlugin.'::lang.your_name') }}</label>
                    <input disabled type="text"
                        value="{{ auth()->user()?auth()->user()->name:trans($pathPlugin.'::lang.guest') }}"
                        id="input-name" class="form-control">
                </div>
                <div class="form-group required {{ $errors->has('comment') ? ' has-error' : '' }}">
                    <label class="control-label"
                            for="input-review">{{ trans($pathPlugin.'::lang.your_review') }}</label>
                    <textarea {{  auth()->user()?'':'disabled' }} name="comment" rows="5" id="input-review"
                            class="form-control">{!! old('comment') !!}</textarea>

                    @if ($errors->has('comment'))
                    <span class="help-block">
                        <i class="fa fa-info-circle" aria-hidden="true"></i> {{ $errors->first('comment') }}
                    </span>
                    @endif
                </div>
                <div class="form-group required {{ $errors->has('point') ? ' has-error' : '' }}">
                    <label class="control-label">{{ trans($pathPlugin.'::lang.rating') }}</label>

                    <div class="ratingStars">
                        <div class="stars">
                            <input type="radio" {{ (old('point') == 1)?'checked':'' }} name="point" value="1"
                                {{  auth()->user()?'':'disabled' }}>
                        </div>

                        <div class="stars">
                            <input type="radio" {{ (old('point') == 2)?'checked':'' }} name="point" value="2"
                            {{  auth()->user()?'':'disabled' }}>
                        </div>
                        
                        <div class="stars">
                            <input type="radio" {{ (old('point') == 3)?'checked':'' }} name="point" value="3"
                            {{  auth()->user()?'':'disabled' }}>
                        </div>
                                                
                        <div class="stars">
                            <input type="radio" {{ (old('point') == 4)?'checked':'' }} name="point" value="4"
                            {{  auth()->user()?'':'disabled' }}>
                        </div>
                            
                        
                        <div class="stars">
                            <input type="radio" {{ (old('point') == 5)?'checked':'' }} name="point" value="5"
                            {{  auth()->user()?'':'disabled' }}>
                        </div>
                    </div>
                    
                    
                    @if ($errors->has('point'))
                    <span class="help-block">
                        <i class="fa fa-info-circle" aria-hidden="true"></i> {{ $errors->first('point') }}
                    </span>
                    @endif
                </div>
                @if (sc_captcha_method() && in_array('review', sc_captcha_page()) &&
                view()->exists(sc_captcha_method()->pathPlugin.'::render'))
                @php
                $titleButton = trans($pathPlugin.'::lang.submit');
                $idForm = 'form-review';
                $idButtonForm = 'button-review';
                @endphp
                @include(sc_captcha_method()->pathPlugin.'::render')
                @endif
                <div class="buttons clearfix">
                    <button type="button" id="button-review" data-loading-text="Loading..."
                        class="default-btn">{{ trans($pathPlugin.'::lang.submit') }}
                    </button>
                </div>
            </form>
        </div>

        <div id="review-detail">
            @if ($points->count())
            @foreach ($points as $k => $point)
            <div class="review-detail">
                <div class="ratings">
                    @for ($i = 1; $i <= $point->point; $i++)
                        <i class="fa fa-star" aria-hidden="true"></i>
                    @endfor
                    @for ($k = 1; $k <= (5- $point->point); $k++)
                        <i class="fa fa-star disable" aria-hidden="true"></i>
                    @endfor
                </div>
                <div class="r-name">
                    <strong>{{ $point->name }}</strong><span class="on">on</span><span class="date">{{ $point->created_at }}</span>
                    
                    @if (auth()->user() && $point->customer_id == auth()->user()->id)
                    <span class="r-remove text-danger text-right btn" data-id="{{ $point->id }}"><i
                            class="fa fa-trash-o" aria-hidden="true"></i></span>
                    @endif
                </div>
                <div class="r-comment">{!! sc_html_render($point->comment) !!}</div>
            </div>
            @endforeach
            @else
            <p> {{ trans($pathPlugin.'::lang.no_review') }}</p>
            @endif

        </div>
        
    </div>
</section>
{{-- //end review --}}