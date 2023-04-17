@extends($templatePathAdmin . 'layout')

@section('main')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header with-border">
                    <h2 class="card-title">{{ $title_description ?? '' }}</h2>

                    <div class="card-tools">
                        <div class="btn-group float-right mr-5">
                            <a href="{{ sc_route_admin('brand') }}" class="btn  btn-flat btn-default" title="List"><i
                                    class="fa fa-list"></i><span class="hidden-xs">
                                    {{ sc_language_render('admin.back_list') }}</span></a>
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{ $url_action }}" method="post" accept-charset="UTF-8" class="form-horizontal"
                    id="form-main" enctype="multipart/form-data">
                    <div class="card-body">
                        <div class="fields-group">
                            <input type="text" id="id" name="id" value="{{ old('id', $data['id'] ?? '') }}"
                                hidden />

                            <div class="form-group  row {{ $errors->has('image') ? ' text-red' : '' }}">
                                <label for="image" class="col-sm-2 col-form-label">Image</label>
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
                            
                            
                            <div class="form-group  row {{ $errors->has('logo') ? ' text-red' : '' }}">
                                <label for="image" class="col-sm-2 col-form-label">Logo</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <input type="text" id="logo" name="logo"
                                            value="{{ old('logo', $data['logo'] ?? '') }}" class="form-control image"
                                            placeholder="" />
                                        <div class="input-group-append">
                                            <a data-input="logo" data-preview="preview_image" data-type="banner"
                                                class="btn btn-primary lfm">
                                                <i class="fa fa-image"></i>
                                                {{ sc_language_render('product.admin.choose_image') }}
                                            </a>
                                        </div>
                                    </div>
                                    @if ($errors->has('image'))
                                        <span class="form-text">
                                            <i class="fa fa-info-circle"></i> {{ $errors->first('logo') }}
                                        </span>
                                    @endif
                                    <div id="preview_image" class="img_holder">
                                        @if (old('logo', $data['logo'] ?? ''))
                                            <img src="{{ sc_file(old('logo', $data['logo'] ?? '')) }}">
                                        @endif
                                    </div>
                                </div>
                            </div>
                            
                            
                             <div class="form-group  row {{ $errors->has('content') ? ' text-red' : '' }}">
                                <label for="name" class="col-sm-2 col-form-label">Content</label>
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
                            
                            
                            
                            
                            
                            
                            
                            <div class="form-group  row {{ $errors->has('web_link') ? ' text-red' : '' }}">
                                <label for="name" class="col-sm-2 col-form-label">Website Link</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-pencil-alt"></i></span>
                                            </div>
                                        </div>
                                        
                                        
                                        <input type="text" id="web_link" name="web_link"
                                            value="{{ old() ? old('web_link') : $data['web_link'] ?? '' }}" class="form-control"
                                            placeholder="" />
                                    </div>
                                    @if ($errors->has('web_link'))
                                        <span class="form-text">
                              
                                        </span>
                                    @endif
                                </div>
                            </div>
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            <div class="form-group  row {{ $errors->has('sort') ? ' text-red' : '' }}">
                                <label for="sort"
                                    class="col-sm-2 col-form-label">{{ sc_language_render('admin.banner.sort') }}</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-pencil-alt"></i></span>
                                        </div>
                                        <input type="number" style="width: 100px;" min=0 id="sort" name="sort"
                                            value="{{ old() ? old('sort') : $data['sort'] ?? 0 }}"
                                            class="form-control sort" placeholder="" />
                                    </div>
                                    @if ($errors->has('sort'))
                                        <span class="form-text">
                                            <i class="fa fa-info-circle"></i> {{ $errors->first('sort') }}
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row ">
                                <label for="status"
                                    class="col-sm-2 col-form-label">{{ sc_language_render('admin.banner.status') }}</label>
                                <div class="col-sm-8">
                                    <input class="checkbox" type="checkbox" name="status"
                                        {{ old('status', empty($data['status']) ? 0 : 1) ? 'checked' : '' }}>
                                </div>
                            </div>
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
 </script>
@endpush
