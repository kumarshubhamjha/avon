@extends($templatePathAdmin . 'layout')

@section('main')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header with-border">
                    <h2 class="card-title">{{ $title_description ?? '' }}</h2>

                    <!--<div class="card-tools">-->
                    <!--    <div class="btn-group float-right mr-5">-->
                    <!--        <a href="{{ sc_route_admin('offers') }}" class="btn  btn-flat btn-default" title="List"><i-->
                    <!--                class="fa fa-list"></i><span class="hidden-xs">-->
                    <!--                {{ sc_language_render('admin.back_list') }}</span></a>-->
                    <!--    </div>-->
                    <!--</div>-->
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{ $url_action }}" method="post" accept-charset="UTF-8" class="form-horizontal"
                    id="form-main" enctype="multipart/form-data">
                    <div class="card-body">
                        <div class="fields-group">
                            <input type="text" id="id" name="id" value="{{ old('id', $data['id'] ?? '') }}"
                                hidden />

                           
                            <div class="form-group  row {{ $errors->has('heading') ? ' text-red' : '' }}">
                                <label for="name" class="col-sm-2 col-form-label">Heading</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-pencil-alt"></i></span>
                                            </div>
                                        </div>
                                        <input type="text" id="heading" name="heading"
                                            value="{{ old() ? old('heading') : $data['heading'] ?? '' }}" class="form-control"
                                            placeholder="" />
                                    </div>
                                    @if ($errors->has('heading'))
                                        <span class="form-text">
                                                                
                                        </span>
                                    @endif
                                </div>
                            </div>
                            
                             <div class="form-group  row {{ $errors->has('content') ? ' text-red' : '' }}">
                                <label for="content" class="col-sm-2 col-form-label">Content</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        </div>
                                        
                                        
                                        <textarea id="content" class="editor"
                                    name="content">
                                        {{ old() ? old('content') : $data['content'] ?? '' }}
                                    </textarea>
                                    </div>
                                    @if ($errors->has('content'))
                                        <span class="form-text">
                              
                                        </span>
                                    @endif
                                </div>
                            </div>
                              <div class="form-group  row {{ $errors->has('heading') ? ' text-red' : '' }}">
                                <label for="headingnew" class="col-sm-2 col-form-label">Heading two</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-pencil-alt"></i></span>
                                            </div>
                                        </div>
                                        <input type="text" id="headingnew" name="headingnew"
                                            value="{{ old() ? old('headingnew') : $data['headingnew'] ?? '' }}" class="form-control"
                                            placeholder="" />
                                    </div>
                                    @if ($errors->has('headingnew'))
                                        <span class="form-text">
                                                                
                                        </span>
                                    @endif
                                </div>
                            </div>
                            
                             <div class="form-group  row {{ $errors->has('contenttwo') ? ' text-red' : '' }}">
                                <label for="contenttwo" class="col-sm-2 col-form-label">Content two</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        </div>
                                        
                                        
                                        <textarea id="contenttwo" class="editor"
                                    name="contenttwo">
                                        {{ old() ? old('contenttwo') : $data['contenttwo'] ?? '' }}
                                    </textarea>
                                    </div>
                                    @if ($errors->has('contenttwo'))
                                        <span class="form-text">
                              
                                        </span>
                                    @endif
                                </div>
                            </div>
                          
                            
                            
                            
                            
                            <hr class="kind ">
                            
                             <div class="form-group  row {{ $errors->has('headingone') ? ' text-red' : '' }}">
                                <label for="name" class="col-sm-2 col-form-label">Section one heading</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-pencil-alt"></i></span>
                                            </div>
                                        </div>
                                        <input type="text" id="headingone" name="headingone"
                                            value="{{ old() ? old('headingone') : $data['headingone'] ?? '' }}" class="form-control"
                                            placeholder="" />
                                    </div>
                                    @if ($errors->has('headingone'))
                                        <span class="form-text">
                                                                
                                        </span>
                                    @endif
                                </div>
                            </div>
                            
                             <div class="form-group  row {{ $errors->has('image') ? ' text-red' : '' }}">
                                <label for="image" class="col-sm-2 col-form-label">Image</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <input type="text" id="image" name="image"
                                            value="{{ old('image', $data['image'] ?? '') }}" class="form-control image"
                                            placeholder="" />
                                        <div class="input-group-append">
                                            <a data-input="image" data-preview="image" data-type="banner"
                                                class="btn btn-primary lfm">
                                                <i class="fa fa-image"></i>
                                                {{ sc_language_render('product.admin.choose_image') }}
                                            </a>
                                        </div>
                                    </div>
                                    @if ($errors->has('image'))
                                        <span class="form-text">
                                            <i class="fa fa-info-circle"></i> {{ $errors->first('image') }}
                                        </span>
                                    @endif
                                    <div id="preview_image" class="img_holder">
                                        @if (old('image', $data['image'] ?? ''))
                                            <img src="{{ sc_file(old('image', $data['image'] ?? '')) }}">
                                        @endif
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group  row {{ $errors->has('contentthree') ? ' text-red' : '' }}">
                                <label for="content" class="col-sm-2 col-form-label">Section one content</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        </div>
                                        
                                        
                                        <textarea id="contentthree" class="editor"
                                    name="contentthree">
                                        {{ old() ? old('contentthree') : $data['contentthree'] ?? '' }}
                                    </textarea>
                                    </div>
                                    @if ($errors->has('contentthree'))
                                        <span class="form-text">
                              
                                        </span>
                                    @endif
                                </div>
                            </div>
                            
                            
                             
                              
                               <hr class="kind ">
                            
                             <div class="form-group  row {{ $errors->has('headingtwo') ? ' text-red' : '' }}">
                                <label for="name" class="col-sm-2 col-form-label">Section two heading</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-pencil-alt"></i></span>
                                            </div>
                                        </div>
                                        <input type="text" id="headingtwo" name="headingtwo"
                                            value="{{ old() ? old('headingtwo') : $data['headingtwo'] ?? '' }}" class="form-control"
                                            placeholder="" />
                                    </div>
                                    @if ($errors->has('headingtwo'))
                                        <span class="form-text">
                                                                
                                        </span>
                                    @endif
                                </div>
                            </div>
                            
                             <div class="form-group  row {{ $errors->has('imagetwo') ? ' text-red' : '' }}">
                                <label for="imagetwo" class="col-sm-2 col-form-label">Image</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <input type="text" id="imagetwo" name="imagetwo"
                                            value="{{ old('imagetwo', $data['imagetwo'] ?? '') }}" class="form-control image"
                                            placeholder="" />
                                        <div class="input-group-append">
                                            <a data-input="imagetwo" data-preview="imagetwo" data-type="banner"
                                                class="btn btn-primary lfm">
                                                <i class="fa fa-image"></i>
                                                {{ sc_language_render('product.admin.choose_image') }}
                                            </a>
                                        </div>
                                    </div>
                                    @if ($errors->has('imagetwo'))
                                        <span class="form-text">
                                            <i class="fa fa-info-circle"></i> {{ $errors->first('imagetwo') }}
                                        </span>
                                    @endif
                                    <div id="preview_image" class="img_holder">
                                        @if (old('imagetwo', $data['imagetwo'] ?? ''))
                                            <img src="{{ sc_file(old('imagetwo', $data['imagetwo'] ?? '')) }}">
                                        @endif
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group  row {{ $errors->has('contentfour') ? ' text-red' : '' }}">
                                
                                <label for="content" class="col-sm-2 col-form-label">Section two content</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        </div>
                                        
                                        
                                        <textarea id="contentfour" class="editor"
                                    name="contentfour">
                                        {{ old() ? old('contentfour') : $data['contentfour'] ?? '' }}
                                    </textarea>
                                    </div>
                                    @if ($errors->has('contentfour'))
                                        <span class="form-text">
                              
                                        </span>
                                    @endif
                                </div>
                            </div>
                              
                              
                               <hr class="kind ">
                            
                             <div class="form-group  row {{ $errors->has('headingthree') ? ' text-red' : '' }}">
                                <label for="name" class="col-sm-2 col-form-label">Section three heading</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-pencil-alt"></i></span>
                                            </div>
                                        </div>
                                        <input type="text" id="headingthree" name="headingthree"
                                            value="{{ old() ? old('headingthree') : $data['headingthree'] ?? '' }}" class="form-control"
                                            placeholder="" />
                                    </div>
                                    @if ($errors->has('headingthree'))
                                        <span class="form-text">
                                                                
                                        </span>
                                    @endif
                                </div>
                            </div>
                            
                             <div class="form-group  row {{ $errors->has('imagethree') ? ' text-red' : '' }}">
                                <label for="image" class="col-sm-2 col-form-label">Image</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <input type="text" id="imagethree" name="imagethree"
                                            value="{{ old('imagethree', $data['imagethree'] ?? '') }}" class="form-control image"
                                            placeholder="" />
                                        <div class="input-group-append">
                                            <a data-input="imagethree" data-preview="imagethree" data-type="banner"
                                                class="btn btn-primary lfm">
                                                <i class="fa fa-image"></i>
                                                {{ sc_language_render('product.admin.choose_image') }}
                                            </a>
                                        </div>
                                    </div>
                                    @if ($errors->has('imagethree'))
                                        <span class="form-text">
                                            <i class="fa fa-info-circle"></i> {{ $errors->first('imagethree') }}
                                        </span>
                                    @endif
                                    <div id="preview_image" class="img_holder">
                                        @if (old('imagethree', $data['imagethree'] ?? ''))
                                            <img src="{{ sc_file(old('imagethree', $data['imagethree'] ?? '')) }}">
                                        @endif
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group  row {{ $errors->has('contentfive') ? ' text-red' : '' }}">
                                <label for="content" class="col-sm-2 col-form-label">Section three content</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        </div>
                                        
                                        
                                        <textarea id="contentfive" class="editor"
                                    name="contentfive">
                                        {{ old() ? old('contentfive') : $data['contentfive'] ?? '' }}
                                    </textarea>
                                    </div>
                                    @if ($errors->has('contentfive'))
                                        <span class="form-text">
                              
                                        </span>
                                    @endif
                                </div>
                            </div>
                              
                              
                     
                           <hr class="kind ">
                            
                        
                            
                            
                         
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
$('#add_pride_sub_image').click(function(event) {
    id_sub_image +=1;
    $(this).before(
    '<div class="group-image">'
    +'<div class="input-group">'
    +'  <input type="text" id="sub_image_'+id_sub_image+'" name="pride_sub_image[]" value="" class="form-control input-sm sub_image" placeholder=""  />'
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
    
    
    
    var id_sub_image1 = {{ old('production_sub_image')?count(old('production_sub_image')):0 }};
$('#add_production_sub_image').click(function(event) {
    id_sub_image1 +=1;
    $(this).before(
    '<div class="group-image">'
    +'<div class="input-group">'
    +'  <input type="text" id="sub_image_'+id_sub_image1+'" name="production_sub_image[]" value="" class="form-control input-sm sub_image" placeholder=""  />'
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