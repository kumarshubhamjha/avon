@extends($templatePathAdmin . 'layout')

@section('main')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header with-border">
                    <h2 class="card-title">{{ $title_description ?? '' }}</h2>

                  
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{ $url_action }}" method="post" accept-charset="UTF-8" class="form-horizontal"
                    id="form-main" enctype="multipart/form-data">
                    <div class="card-body">
                        <div class="fields-group">
                            <input type="text" id="id" name="id" value="{{ old('id', $data['id'] ?? '') }}"
                                hidden />

                            <div class="form-group  row {{ $errors->has('banner_image') ? ' text-red' : '' }}">
                                <label for="banner_image" class="col-sm-2 col-form-label">Banner Image</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <input type="text" id="banner_image" name="banner_image"
                                            value="{{ old('banner_image', $data['banner_image'] ?? '') }}" class="form-control image"
                                            placeholder="" />
                                        <div class="input-group-append">
                                            <a data-input="banner_image" data-preview="preview_image" data-type="banner"
                                                class="btn btn-primary lfm">
                                                <i class="fa fa-image"></i>
                                                {{ sc_language_render('product.admin.choose_image') }}
                                            </a>
                                        </div>
                                    </div>
                                    @if ($errors->has('banner_image'))
                                        <span class="form-text">
                                            <i class="fa fa-info-circle"></i> {{ $errors->first('banner_image') }}
                                        </span>
                                    @endif
                                    <div id="preview_image" class="img_holder">
                                        @if (old('banner_image', $data['banner_image'] ?? ''))
                                            <img src="{{ sc_file(old('banner_image', $data['banner_image'] ?? '')) }}">
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="form-group  row {{ $errors->has('banner_heading') ? ' text-red' : '' }}">
                                <label for="name" class="col-sm-2 col-form-label">Banner Title</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-pencil-alt"></i></span>
                                            </div>
                                        </div>
                                        <input type="text" id="banner_title" name="banner_title"
                                            value="{{ old() ? old('banner_heading') : $data['banner_heading'] ?? '' }}" class="form-control"
                                            placeholder="" />
                                    </div>
                                    @if ($errors->has('banner_title'))
                                        <span class="form-text">
                                                                
                                        </span>
                                    @endif
                                </div>
                            </div>
                            
                            
                            
                              {{-- images --}}
                      
                            <div class="form-group row kind  {{ $errors->has('image') ? ' text-red' : '' }}">
                            <label for="image" class="col-sm-2 col-form-label">
                           Banner sub image
                            </label>
                            <div class="col-sm-8">
                                <div class="input-group">
                                    <input type="text" id="image" name="image" value="{!! old('image'), $data['image'] ?? '' !!}"
                                        class="form-control input-sm image" placeholder="" />
                                    <div class="input-group-append">
                                        <span class="btn btn-primary lfm" data-input="image" data-preview="preview_image" data-type="product">
                                            <i class="fas fa-image"></i> {{sc_language_render('product.admin.choose_image')}}
                                        </span>
                                    </div>
                                </div>
                                @if ($errors->has('image'))
                                <span class="form-text">
                                    <i class="fa fa-info-circle"></i> {{ $errors->first('image') }}
                                </span>
                                @endif
                                <div id="preview_image" class="img_holder">
                                    @if ($data['image'])

                                        <img src="{{ sc_file(old('image', $data['image'] ?? '')) }}">
                                    @endif
                                    
                                </div>

                                
                              @if(count($data2)> 0 )
                                @foreach ($data2 as $key => $sub_image)
                                <div class="group-image">
                                    <div class="input-group"><input type="text" id="sub_image"
                                            name="banner_sub_image[]" value="{!! old('banner_sub_image'), $sub_image->image !!}"
                                            class="form-control input-sm sub_image" placeholder="" /><span
                                            class="input-group-btn"><span><a data-input="sub_image"
                                                    data-preview="preview_sub_image" data-type="product"
                                                    class="btn btn-flat btn-primary lfm"><i
                                                        class="fa fa-image"></i>
                                                    {{sc_language_render('product.admin.choose_image')}}</a></span><span
                                                title="Remove" class="btn btn-flat btn-danger removeImage"><i
                                                    class="fa fa-times"></i></span></span></div>
                                                     
                                    <div id="preview_sub_image_{{ $key }}" class="img_holder"><img
                                            src="{{ sc_file($sub_image->image) }}"></div>
                                            
                              
                                </div>
                                 @endforeach
                                 @endif
                               
                             
                                <button type="button" id="add_banner_sub_image" class="btn btn-flat btn-success">
                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                    {{ sc_language_render('product.admin.add_sub_image') }}
                                </button>
                            </div>

                        </div>
                        {{-- //images --}}
            
            
            <hr class="kind ">
            
            
            
            
            
            <div class="form-group  row {{ $errors->has('second_title') ? ' text-red' : '' }}">
                                <label for="name" class="col-sm-2 col-form-label"> Second Section Heading</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-pencil-alt"></i></span>
                                            </div>
                                        </div>
                                        
                                        
                                        <input type="text" id="second_title" name="second_title"
                                            value="{{ old() ? old('second_title') : $data['second_title'] ?? '' }}" class="form-control"
                                            placeholder="" />
                                    </div>
                                    @if ($errors->has('second_title'))
                                        <span class="form-text">
                              
                                        </span>
                                    @endif
                                </div>
                            </div>
                            
                              <div class="form-group  row {{ $errors->has('second_subtitle') ? ' text-red' : '' }}">
                                <label for="name" class="col-sm-2 col-form-label">  Second Section Sub Heading</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-pencil-alt"></i></span>
                                            </div>
                                        </div>
                                        
                                        
                                        <input type="text" id="second_subtitle" name="second_subtitle"
                                            value="{{ old() ? old('second_subtitle') : $data['second_subtitle'] ?? '' }}" class="form-control"
                                            placeholder="" />
                                    </div>
                                    @if ($errors->has('second_subtitle'))
                                        <span class="form-text">
                              
                                        </span>
                                    @endif
                                </div>
                            </div>
                            
                            
                             <div class="form-group  row {{ $errors->has('second_content') ? ' text-red' : '' }}">
                                <label for="name" class="col-sm-2 col-form-label">  Second Section Content</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        </div>
                                        
                                        
                                        <textarea id="second_content" class="editor"
                                    name="second_content">
                                        {{ old() ? old('second_content') : $data['second_content'] ?? '' }}
                                    </textarea>
                                    </div>
                                    @if ($errors->has('second_content'))
                                        <span class="form-text">
                              
                                        </span>
                                    @endif
                                </div>
                            </div>
            
            
            
              {{-- images --}}
                      
                            <div class="form-group row kind  {{ $errors->has('brand_logo') ? ' text-red' : '' }}">
                            <label for="image" class="col-sm-2 col-form-label">
                          Brand Logo
                            </label>
                            <div class="col-sm-8">
                                <div class="input-group">
                                    <input type="text" id="brand_logo" name="brand_logo" value="{!! old('brand_logo'), $data['brand_logo'] ?? '' !!}"
                                        class="form-control input-sm image" placeholder="" />
                                    <div class="input-group-append">
                                        <span class="btn btn-primary lfm" data-input="brand_logo" data-preview="preview_image" data-type="product">
                                            <i class="fas fa-image"></i> {{sc_language_render('product.admin.choose_image')}}
                                        </span>
                                    </div>
                                </div>
                                @if ($errors->has('brand_logo'))
                                <span class="form-text">
                                    <i class="fa fa-info-circle"></i> {{ $errors->first('brand_logo') }}
                                </span>
                                @endif
                                <div id="preview_image" class="img_holder">
                                    @if ($data['brand_logo'])

                                        <img src="{{ sc_file(old('brand_logo', $data['brand_logo'] ?? '')) }}">
                                    @endif
                                    
                                </div>

                                
                              @if(count($data1)> 0 )
                                @foreach ($data1 as $key => $sub_image)
                                <div class="group-image">
                                    <div class="input-group"><input type="text" id="sub_image"
                                            name="brand_sub_image[]" value="{!! old('brand_sub_image'), $sub_image->image !!}"
                                            class="form-control input-sm sub_image" placeholder="" /><span
                                            class="input-group-btn"><span><a data-input="sub_image"
                                                    data-preview="preview_sub_image" data-type="product"
                                                    class="btn btn-flat btn-primary lfm"><i
                                                        class="fa fa-image"></i>
                                                    {{sc_language_render('product.admin.choose_image')}}</a></span><span
                                                title="Remove" class="btn btn-flat btn-danger removeImage1"><i
                                                    class="fa fa-times"></i></span></span></div>
                                                     
                                    <div id="preview_sub_image_{{ $key }}" class="img_holder"><img
                                            src="{{ sc_file($sub_image->image) }}"></div>
                                            
                              
                                </div>
                                 @endforeach
                                 @endif
                               
                             
                                <button type="button" id="add_brand_sub_image" class="btn btn-flat btn-success">
                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                    {{ sc_language_render('product.admin.add_sub_image') }}
                                </button>
                            </div>

                        </div>
                        {{-- //images --}}
            
            
            
            
                          
                            <div class="card-footer row">
                                @csrf
                                <div class="col-md-2">
                                </div>
                                <div class="col-md-8">
                                    <div class="btn-group float-right">
                                        <button type="submit"
                                            class="btn btn-primary">{{ sc_language_render('action.submit') }}</button>
                                    </div>

                                    <div class="btn-group float-left">
                                        <button type="reset"
                                            class="btn btn-warning">{{ sc_language_render('action.reset') }}</button>
                                    </div>
                                </div>
                            </div>
                </form>
            </div>
        </div>
    </div>
    
@endsection


@push('scripts')
@include($templatePathAdmin.'component.ckeditor_js')

<script type="text/javascript">
        $('textarea.editor').ckeditor(
    {
        filebrowserImageBrowseUrl: '{{ sc_route_admin('admin.home').'/'.config('lfm.url_prefix') }}?type=product',
        filebrowserImageUploadUrl: '{{ sc_route_admin('admin.home').'/'.config('lfm.url_prefix') }}/upload?type=product&_token={{csrf_token()}}',
        filebrowserBrowseUrl: '{{ sc_route_admin('admin.home').'/'.config('lfm.url_prefix') }}?type=Files',
        filebrowserUploadUrl: '{{ sc_route_admin('admin.home').'/'.config('lfm.url_prefix') }}/upload?type=file&_token={{csrf_token()}}',
        filebrowserWindowWidth: '900',
        filebrowserWindowHeight: '500'
    }
);



var id_sub_image = {{ old('sub_image1')?count(old('sub_image1')):0 }};
$('#add_banner_sub_image').click(function(event) {
    id_sub_image +=1;
    $(this).before(
    '<div class="group-image">'
    +'<div class="input-group">'
    +'  <input type="text" id="sub_image_'+id_sub_image+'" name="banner_sub_image[]" value="" class="form-control input-sm sub_image" placeholder=""  />'
    +'  <div class="input-group-append">'
    +'  <span data-input="sub_image_'+id_sub_image+'" data-preview="preview_sub_image_'+id_sub_image+'" data-type="product" class="btn btn-flat btn-primary lfm">'
    +'      <i class="fa fa-image"></i> {{sc_language_render('product.admin.choose_image')}}'
    +'  </span>'
    +' </div>'
    +'<span title="Remove" class="btn btn-flat btn-danger removeImage"><i class="fa fa-times"></i></span>'
    +'</div>'
    +'<div id="preview_sub_image_'+id_sub_image+'" class="img_holder"></div>'
    +'</div>');
    $('.removeImage').click(function(event) {
        $(this).closest('div').remove();
    });
    $('.lfm').filemanager();
});
    $('.removeImage').click(function(event) {
        $(this).closest('.group-image').remove();
    });
    
    
    
    var id_sub_image1 = {{ old('sub_image')?count(old('sub_image')):0 }};
$('#add_brand_sub_image').click(function(event) {
    id_sub_image1 +=1;
    $(this).before(
    '<div class="group-image">'
    +'<div class="input-group">'
    +'  <input type="text" id="sub_image_'+id_sub_image1+'" name="brand_sub_image[]" value="" class="form-control input-sm sub_image" placeholder=""  />'
    +'  <div class="input-group-append">'
    +'  <span data-input="sub_image_'+id_sub_image1+'" data-preview="preview_sub_image_'+id_sub_image1+'" data-type="product" class="btn btn-flat btn-primary lfm">'
    +'      <i class="fa fa-image"></i> {{sc_language_render('product.admin.choose_image')}}'
    +'  </span>'
    +' </div>'
    +'<span title="Remove" class="btn btn-flat btn-danger removeImage1"><i class="fa fa-times"></i></span>'
    +'</div>'
    +'<div id="preview_sub_image_'+id_sub_image1+'" class="img_holder"></div>'
    +'</div>');
    $('.removeImage1').click(function(event) {
        $(this).closest('div').remove();
    });
    $('.lfm').filemanager();
});
    $('.removeImage1').click(function(event) {
        $(this).closest('.group-image').remove();
    });
    
    
    
    
    </script>
@endpush