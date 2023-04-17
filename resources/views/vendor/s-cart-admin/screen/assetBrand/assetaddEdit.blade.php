@extends($templatePathAdmin . 'layout')

@section('main')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header with-border">
                    <h2 class="card-title">{{ $title_description ?? '' }}</h2>

                    <div class="card-tools">
                        <div class="btn-group float-right mr-5">
                            <a href="{{ sc_route_admin('asset') }}" class="btn  btn-flat btn-default" title="List"><i
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






                  <div class="form-group  row {{ $errors->has('title') ? ' text-red' : '' }}">
                                <label for="name" class="col-sm-2 col-form-label">Title</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-pencil-alt"></i></span>
                                            </div>
                                        </div>
                                        
                                        
                                        <input type="text" id="title" name="title"
                                            value="{{ old() ? old('title') : $data['title'] ?? '' }}" class="form-control"
                                            placeholder="" />
                                    </div>
                                    @if ($errors->has('title'))
                                        <span class="form-text">
                              
                                        </span>
                                    @endif
                                </div>
                            </div>



                            
                                {{-- select category --}}
                        <div class="form-group row kind  {{ $errors->has('category') ? ' text-red' : '' }}">
                            @php
                            $listCate =  App\Admin\Models\AssectBrandCategory::where('status','!=', 2)->get();
                           
                            @endphp
                            <label for="category" class="col-sm-2 col-form-label">
                                {{ sc_language_render('product.admin.select_category') }}
                            </label>
                            <div class="col-sm-8">
                                <div class="input-group">
                                <select class="form-control input-sm category select"
                                    data-placeholder="{{ sc_language_render('product.admin.select_category') }}"
                                    name="category">
                                    <option value="">Select Category</option>
                                    @foreach ($listCate as $v)
                                    @if(isset($data['category']))
                                    <option value="{{ $v->id }}" {{ $data['category'] == $v->id ?'selected':''  }}>
                                        {{ $v->title }}
                                    </option>
                                    @else
                                     <option value="{{ $v->id }}">
                                        {{ $v->title }}
                                    </option>
                                    @endif
                                    @endforeach
                                </select>
                               
                                </div>
                                @if ($errors->has('category'))
                                <span class="form-text">
                                    <i class="fa fa-info-circle"></i> {{ $errors->first('category') }}
                                </span>
                                @endif
                            </div>
                        </div>
                        {{-- //select category --}}
                            
                            
                            
                            
                            
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
                            
                            
                             <div class="form-group  row {{ $errors->has('pdf') ? ' text-red' : '' }}">
                                <label for="image" class="col-sm-2 col-form-label">Pdf file</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <div class="custom-file">
                                      <input type="file"  class="custom-file-input" name="pdf" value="{{ old('pdf', $data['pdf'] ?? '') }}">
                                      <label class="custom-file-label" for="input-file">{{ old('pdf', $data['pdf'] ?? 'Choose file') }}</label>
                                    </div>
                                      
                                    </div>
                                    @if ($errors->has('pdf'))
                                        <span class="form-text">
                                            <i class="fa fa-info-circle"></i> {{ $errors->first('pdf') }}
                                        </span>
                                    @endif
                                     <div id="preview_image" class="img_holder">
                                        @if (old('pdf', $data['pdf'] ?? ''))
                                        
                                             <embed src="{{ url('file/file/'.$data['pdf']) }}" type="application/pdf"   height="200px" width="300">
                                        @endif
                                    </div>
                                  
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
