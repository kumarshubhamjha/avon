@extends($templatePathAdmin . 'layout')

@section('main')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header with-border">
                    <h2 class="card-title">{{ $title_description ?? '' }}</h2>

                    <div class="card-tools">
                        <div class="btn-group float-right mr-5">
                            <a href="{{ sc_route_admin('presscategory') }}" class="btn  btn-flat btn-default" title="List"><i
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



                      <div class="form-group  row {{ $errors->has('keyword') ? ' text-red' : '' }}">
                                <label for="name" class="col-sm-2 col-form-label">KeyWord</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-pencil-alt"></i></span>
                                            </div>
                                        </div>
                                        
                                        
                                        <input type="text" id="keyword" name="keyword"
                                            value="{{ old() ? old('keyword') : $data['keyword'] ?? '' }}" class="form-control"
                                            placeholder="" />
                                    </div>
                                    @if ($errors->has('keyword'))
                                        <span class="form-text">
                              
                                        </span>
                                    @endif
                                </div>
                            </div>
                            
                            
                            


                            
                            
                          
                            
                            
                            
                         
                            
                            <div class="form-group  row {{ $errors->has('date') ? ' text-red' : '' }}">
                                <label for="name" class="col-sm-2 col-form-label">Date</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-pencil-alt"></i></span>
                                            </div>
                                        </div>
                                        
                                        
                                        <input type="date" id="date" name="date"
                                            value="{{ old() ? old('date') : $data['date'] ?? '' }}" class="form-control"
                                            placeholder="" />
                                    </div>
                                    @if ($errors->has('date'))
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
