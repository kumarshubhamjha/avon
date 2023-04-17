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
                            <div class="form-group  row {{ $errors->has('banner_title') ? ' text-red' : '' }}">
                                <label for="name" class="col-sm-2 col-form-label">Banner Title</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-pencil-alt"></i></span>
                                            </div>
                                        </div>
                                        <input type="text" id="banner_title" name="banner_title"
                                            value="{{ old() ? old('banner_title') : $data['banner_title'] ?? '' }}" class="form-control"
                                            placeholder="" />
                                    </div>
                                    @if ($errors->has('banner_title'))
                                        <span class="form-text">
                                                                
                                        </span>
                                    @endif
                                </div>
                            </div>
                            
                             <div class="form-group  row {{ $errors->has('button') ? ' text-red' : '' }}">
                                <label for="image" class="col-sm-2 col-form-label">Banner button file</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <input type="text" id="button" name="button"
                                            value="{{ old('button', $data['button'] ?? '') }}" class="form-control image"
                                            placeholder="" />
                                        <div class="input-group-append">
                                            <a data-input="file" data-preview="preview_image" data-type="banner"
                                                class="btn btn-primary lfm">
                                                <i class="fa fa-file"></i>
                                                {{ sc_language_render('product.admin.choose_image') }}
                                            </a>
                                        </div>
                                    </div>
                                    @if ($errors->has('button'))
                                        <span class="form-text">
                                            <i class="fa fa-info-circle"></i> {{ $errors->first('button') }}
                                        </span>
                                    @endif
                                    <div id="preview_image" class="img_holder">
                                        @if (old('button', $data['button'] ?? ''))
                                            <img src="{{ sc_file(old('button', $data['button'] ?? '')) }}">
                                        @endif
                                    </div>
                                </div>
                            </div>
                            
                            
                            
                            
                            <hr class="kind ">
                            
                            
                            
                             <div class="form-group  row {{ $errors->has('pride_banner') ? ' text-red' : '' }}">
                                <label for="image" class="col-sm-2 col-form-label"> History of Pride Banner Image</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <input type="text" id="pride_banner" name="pride_banner"
                                            value="{{ old('pride_banner', $data['pride_banner'] ?? '') }}" class="form-control image"
                                            placeholder="" />
                                        <div class="input-group-append">
                                            <a data-input="pride_banner" data-preview="preview_image" data-type="banner"
                                                class="btn btn-primary lfm">
                                                <i class="fa fa-image"></i>
                                                {{ sc_language_render('product.admin.choose_image') }}
                                            </a>
                                        </div>
                                    </div>
                                    @if ($errors->has('pride_banner'))
                                        <span class="form-text">
                                            <i class="fa fa-info-circle"></i> {{ $errors->first('pride_banner') }}
                                        </span>
                                    @endif
                                    <div id="preview_image" class="img_holder">
                                        @if (old('pride_banner', $data['pride_banner'] ?? ''))
                                            <img src="{{ sc_file(old('pride_banner', $data['pride_banner'] ?? '')) }}">
                                        @endif
                                    </div>
                                </div>
                            </div>
                            
                            
                            
                              {{-- images --}}
                              
                              
                              
                              
                              
                      <div class="form-group  row {{ $errors->has('image') ? ' text-red' : '' }}">
                                <label for="image" class="col-sm-2 col-form-label"> History of Pride First Image</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <input type="text" id="image" name="image"
                                            value="{{ old('image', $data['image'] ?? '') }}" class="form-control image"
                                            placeholder="" />
                                        <div class="input-group-append">
                                            <a data-input="image" data-preview="preview_image" data-type="banner"
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
                            
                            
                            
                             <div class="form-group  row {{ $errors->has('imagetwo') ? ' text-red' : '' }}">
                                <label for="image" class="col-sm-2 col-form-label"> History of Pride Second Image</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <input type="text" id="imagetwo" name="imagetwo"
                                            value="{{ old('imagetwo', $data['imagetwo'] ?? '') }}" class="form-control image"
                                            placeholder="" />
                                        <div class="input-group-append">
                                            <a data-input="imagetwo" data-preview="preview_image" data-type="banner"
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
                          
                        {{-- //images --}}
                            
                            
                             <div class="form-group  row {{ $errors->has('pride_title') ? ' text-red' : '' }}">
                                <label for="name" class="col-sm-2 col-form-label"> History of Pride Heading</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-pencil-alt"></i></span>
                                            </div>
                                        </div>
                                        
                                        
                                        <input type="text" id="pride_title" name="pride_title"
                                            value="{{ old() ? old('pride_title') : $data['pride_title'] ?? '' }}" class="form-control"
                                            placeholder="" />
                                    </div>
                                    @if ($errors->has('pride_title'))
                                        <span class="form-text">
                              
                                        </span>
                                    @endif
                                </div>
                            </div>
                            
                              <div class="form-group  row {{ $errors->has('pride_subtitle') ? ' text-red' : '' }}">
                                <label for="name" class="col-sm-2 col-form-label"> History of Pride Sub Heading</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-pencil-alt"></i></span>
                                            </div>
                                        </div>
                                        
                                        
                                        <input type="text" id="pride_subtitle" name="pride_subtitle"
                                            value="{{ old() ? old('pride_subtitle') : $data['pride_subtitle'] ?? '' }}" class="form-control"
                                            placeholder="" />
                                    </div>
                                    @if ($errors->has('pride_subtitle'))
                                        <span class="form-text">
                              
                                        </span>
                                    @endif
                                </div>
                            </div>
                            
                            
                             <div class="form-group  row {{ $errors->has('pride_subtitle') ? ' text-red' : '' }}">
                                <label for="name" class="col-sm-2 col-form-label"> History of Pride Content One</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        </div>
                                        
                                        
                                        <textarea id="pride_content" class="editor"
                                    name="pride_content">
                                        {{ old() ? old('pride_content') : $data['pride_content'] ?? '' }}
                                    </textarea>
                                    </div>
                                    @if ($errors->has('pride_content'))
                                        <span class="form-text">
                              
                                        </span>
                                    @endif
                                </div>
                            </div>
                            
                            
                            
                             <div class="form-group  row {{ $errors->has('pride_contenttwo') ? ' text-red' : '' }}">
                                <label for="name" class="col-sm-2 col-form-label"> History of Pride Content Two</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        </div>
                                        
                                        
                                        <textarea id="pride_contenttwo" class="editor"
                                    name="pride_contenttwo">
                                        {{ old() ? old('pride_contenttwo') : $data['pride_contenttwo'] ?? '' }}
                                    </textarea>
                                    </div>
                                    @if ($errors->has('pride_contenttwo'))
                                        <span class="form-text">
                              
                                        </span>
                                    @endif
                                </div>
                            </div>
                            
                            
                            <div class="form-group  row {{ $errors->has('pride_contentthree') ? ' text-red' : '' }}">
                                <label for="name" class="col-sm-2 col-form-label"> History of Pride Content Three</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        </div>
                                        
                                        
                                        <textarea id="pride_contentthree" class="editor"
                                    name="pride_contentthree">
                                        {{ old() ? old('pride_contentthree') : $data['pride_contentthree'] ?? '' }}
                                    </textarea>
                                    </div>
                                    @if ($errors->has('pride_contentthree'))
                                        <span class="form-text">
                              
                                        </span>
                                    @endif
                                </div>
                            </div>
                            
                            
                            
                            <hr class="kind ">
                            
                            
                             <div class="form-group  row {{ $errors->has('production_banner') ? ' text-red' : '' }}">
                                <label for="image" class="col-sm-2 col-form-label"> Production Banner Image</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <input type="text" id="production_banner" name="production_banner"
                                            value="{{ old('production_banner', $data['production_banner'] ?? '') }}" class="form-control image"
                                            placeholder="" />
                                        <div class="input-group-append">
                                            <a data-input="production_banner" data-preview="preview_image" data-type="banner"
                                                class="btn btn-primary lfm">
                                                <i class="fa fa-image"></i>
                                                {{ sc_language_render('product.admin.choose_image') }}
                                            </a>
                                        </div>
                                    </div>
                                    @if ($errors->has('production_banner'))
                                        <span class="form-text">
                                            <i class="fa fa-info-circle"></i> {{ $errors->first('production_banner') }}
                                        </span>
                                    @endif
                                    <div id="preview_image" class="img_holder">
                                        @if (old('production_banner', $data['production_banner'] ?? ''))
                                            <img src="{{ sc_file(old('production_banner', $data['production_banner'] ?? '')) }}">
                                        @endif
                                    </div>
                                </div>
                            </div>
                            
                            
                            
                             {{-- images --}}
                       <div class="form-group  row {{ $errors->has('productionimage') ? ' text-red' : '' }}">
                                <label for="image" class="col-sm-2 col-form-label"> Production Top Image</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <input type="text" id="productionimage" name="productionimage"
                                            value="{{ old('productionimage', $data['productionimage'] ?? '') }}" class="form-control image"
                                            placeholder="" />
                                        <div class="input-group-append">
                                            <a data-input="productionimage" data-preview="preview_image" data-type="banner"
                                                class="btn btn-primary lfm">
                                                <i class="fa fa-image"></i>
                                                {{ sc_language_render('product.admin.choose_image') }}
                                            </a>
                                        </div>
                                    </div>
                                    @if ($errors->has('productionimage'))
                                        <span class="form-text">
                                            <i class="fa fa-info-circle"></i> {{ $errors->first('productionimage') }}
                                        </span>
                                    @endif
                                    <div id="preview_image" class="img_holder">
                                        @if (old('productionimage', $data['productionimage'] ?? ''))
                                            <img src="{{ sc_file(old('productionimage', $data['productionimage'] ?? '')) }}">
                                        @endif
                                    </div>
                                </div>
                            </div>
                            
                              <div class="form-group  row {{ $errors->has('productionimageleft') ? ' text-red' : '' }}">
                                <label for="image" class="col-sm-2 col-form-label"> Production Left Image</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <input type="text" id="productionimageleft" name="productionimageleft"
                                            value="{{ old('productionimageleft', $data['productionimageleft'] ?? '') }}" class="form-control image"
                                            placeholder="" />
                                        <div class="input-group-append">
                                            <a data-input="productionimageleft" data-preview="preview_image" data-type="banner"
                                                class="btn btn-primary lfm">
                                                <i class="fa fa-image"></i>
                                                {{ sc_language_render('product.admin.choose_image') }}
                                            </a>
                                        </div>
                                    </div>
                                    @if ($errors->has('productionimageleft'))
                                        <span class="form-text">
                                            <i class="fa fa-info-circle"></i> {{ $errors->first('productionimageleft') }}
                                        </span>
                                    @endif
                                    <div id="preview_image" class="img_holder">
                                        @if (old('productionimageleft', $data['productionimageleft'] ?? ''))
                                            <img src="{{ sc_file(old('productionimageleft', $data['productionimageleft'] ?? '')) }}">
                                        @endif
                                    </div>
                                </div>
                            </div>
                            
                            
                             <div class="form-group  row {{ $errors->has('productionimageright') ? ' text-red' : '' }}">
                                <label for="image" class="col-sm-2 col-form-label"> Production Right Image</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <input type="text" id="productionimageright" name="productionimageright"
                                            value="{{ old('productionimageright', $data['productionimageright'] ?? '') }}" class="form-control image"
                                            placeholder="" />
                                        <div class="input-group-append">
                                            <a data-input="productionimageright" data-preview="preview_image" data-type="banner"
                                                class="btn btn-primary lfm">
                                                <i class="fa fa-image"></i>
                                                {{ sc_language_render('product.admin.choose_image') }}
                                            </a>
                                        </div>
                                    </div>
                                    @if ($errors->has('productionimageright'))
                                        <span class="form-text">
                                            <i class="fa fa-info-circle"></i> {{ $errors->first('productionimageright') }}
                                        </span>
                                    @endif
                                    <div id="preview_image" class="img_holder">
                                        @if (old('productionimageright', $data['productionimageright'] ?? ''))
                                            <img src="{{ sc_file(old('productionimageright', $data['productionimageright'] ?? '')) }}">
                                        @endif
                                    </div>
                                </div>
                            </div>
                        {{-- //images --}}
                            
                             <div class="form-group  row {{ $errors->has('production_title') ? ' text-red' : '' }}">
                                <label for="production_title" class="col-sm-2 col-form-label"> Production Heading</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-pencil-alt"></i></span>
                                            </div>
                                        </div>
                                        <input type="text" id="production_title" name="production_title"
                                            value="{{ old() ? old('production_title') : $data['production_title'] ?? '' }}" class="form-control"
                                            placeholder="" />
                                    </div>
                                    @if ($errors->has('production_title'))
                                        <span class="form-text">
                                        </span>
                                    @endif
                                </div>
                            </div>
                            
                              <div class="form-group  row {{ $errors->has('production_subtitle') ? ' text-red' : '' }}">
                                <label for="name" class="col-sm-2 col-form-label">Production Sub Heading</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-pencil-alt"></i></span>
                                            </div>
                                        </div>
                                        <input type="text" id="production_subtitle" name="production_subtitle"
                                            value="{{ old() ? old('production_subtitle') : $data['production_subtitle'] ?? '' }}" class="form-control"
                                            placeholder="" />
                                    </div>
                                    @if ($errors->has('production_subtitle'))
                                        <span class="form-text">
                              
                                        </span>
                                    @endif
                                </div>
                            </div>
                            
                            
                             <div class="form-group  row {{ $errors->has('production_subtitle') ? ' text-red' : '' }}">
                                <label for="name" class="col-sm-2 col-form-label"> Production Content One</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            
                                        </div>
                                        
                                        
                                        <textarea id="production_content" class="editor"
                                    name="production_content">
                                        {{ old() ? old('production_content') : $data['production_content'] ?? '' }}
                                    </textarea>
                                    </div>
                                    @if ($errors->has('production_content'))
                                        <span class="form-text">
                              
                                        </span>
                                    @endif
                                </div>
                            </div>
                            
                            
                             <div class="form-group  row {{ $errors->has('production_contenttwo') ? ' text-red' : '' }}">
                                <label for="name" class="col-sm-2 col-form-label"> Production Content Two</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            
                                        </div>
                                        
                                        
                                        <textarea id="production_contenttwo" class="editor"
                                    name="production_contenttwo">
                                        {{ old() ? old('production_contenttwo') : $data['production_contenttwo'] ?? '' }}
                                    </textarea>
                                    </div>
                                    @if ($errors->has('production_contenttwo'))
                                        <span class="form-text">
                              
                                        </span>
                                    @endif
                                </div>
                            </div>
                            
                            
                             <div class="form-group  row {{ $errors->has('production_contentthree') ? ' text-red' : '' }}">
                                <label for="name" class="col-sm-2 col-form-label"> Production Content Three</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            
                                        </div>
                                        
                                        
                                        <textarea id="production_contentthree" class="editor"
                                    name="production_contentthree">
                                        {{ old() ? old('production_contentthree') : $data['production_contentthree'] ?? '' }}
                                    </textarea>
                                    </div>
                                    @if ($errors->has('production_contentthree'))
                                        <span class="form-text">
                              
                                        </span>
                                    @endif
                                </div>
                            </div>
                            
                            <hr class="kind ">
                            
                            
                            <!--<div class="form-group  row {{ $errors->has('sort') ? ' text-red' : '' }}">-->
                            <!--    <label for="sort"-->
                            <!--        class="col-sm-2 col-form-label">{{ sc_language_render('admin.banner.sort') }}</label>-->
                            <!--    <div class="col-sm-8">-->
                            <!--        <div class="input-group">-->
                            <!--            <div class="input-group-prepend">-->
                            <!--                <span class="input-group-text"><i class="fas fa-pencil-alt"></i></span>-->
                            <!--            </div>-->
                            <!--            <input type="number" style="width: 100px;" min=0 id="sort" name="sort"-->
                            <!--                value="{{ old() ? old('sort') : $data['sort'] ?? 0 }}"-->
                            <!--                class="form-control sort" placeholder="" />-->
                            <!--        </div>-->
                            <!--        @if ($errors->has('sort'))-->
                            <!--            <span class="form-text">-->
                            <!--                <i class="fa fa-info-circle"></i> {{ $errors->first('sort') }}-->
                            <!--            </span>-->
                            <!--        @endif-->
                            <!--    </div>-->
                            <!--</div>-->
                            <!--<div class="form-group row ">-->
                            <!--    <label for="status"-->
                            <!--        class="col-sm-2 col-form-label">{{ sc_language_render('admin.banner.status') }}</label>-->
                            <!--    <div class="col-sm-8">-->
                            <!--        <input class="checkbox" type="checkbox" name="status"-->
                            <!--            {{ old('status', empty($data['status']) ? 0 : 1) ? 'checked' : '' }}>-->
                            <!--    </div>-->
                            <!--</div>-->
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