@extends($templatePathAdmin . 'layout')

@section('main')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header with-border">
                    <h2 class="card-title">{{ $title_description ?? '' }}</h2>

                    <div class="card-tools">
                        <div class="btn-group float-right mr-5">
                            <a href="{{ sc_route_admin('career') }}" class="btn  btn-flat btn-default" title="List"><i
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






                  <div class="form-group  row {{ $errors->has('name') ? ' text-red' : '' }}">
                                <label for="name" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-pencil-alt"></i></span>
                                            </div>
                                        </div>
                                        
                                        
                                        <input type="text" id="name" name="name"
                                            value="{{ old() ? old('name') : $data['name'] ?? '' }}" class="form-control"
                                            placeholder="" />
                                    </div>
                                    @if ($errors->has('name'))
                                        <span class="form-text">
                              
                                        </span>
                                    @endif
                                </div>
                            </div>



                      <div class="form-group  row {{ $errors->has('location') ? ' text-red' : '' }}">
                                <label for="location" class="col-sm-2 col-form-label">Location</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-pencil-alt"></i></span>
                                            </div>
                                        </div>
                                        
                                        
                                        <input type="text" id="location" name="location"
                                            value="{{ old() ? old('location') : $data['location'] ?? '' }}" class="form-control"
                                            placeholder="" />
                                    </div>
                                    @if ($errors->has('location'))
                                        <span class="form-text">
                              
                                        </span>
                                    @endif
                                </div>
                            </div>
                            
                            
                            <div class="form-group  row {{ $errors->has('exp') ? ' text-red' : '' }}">
                                <label for="exp" class="col-sm-2 col-form-label">Experience</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-pencil-alt"></i></span>
                                            </div>
                                        </div>
                                        
                                        
                                        <input type="text" id="exp" name="exp"
                                            value="{{ old() ? old('exp') : $data['exp'] ?? '' }}" class="form-control"
                                            placeholder="" />
                                    </div>
                                    @if ($errors->has('exp'))
                                        <span class="form-text">
                              
                                        </span>
                                    @endif
                                </div>
                            </div>
                            
                            
                                {{-- select category --}}
                        <div class="form-group row kind  {{ $errors->has('category') ? ' text-red' : '' }}">
                            @php
                            $listCate =  App\Admin\Models\CareerCategory::where('status','!=', 2)->get();
                           
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
                            
                            
                             <div class="form-group  row {{ $errors->has('role') ? ' text-red' : '' }}">
                                <label for="role" class="col-sm-2 col-form-label">Role & Responsibilities</label>

                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            
                                        </div>
                                        
                                        
                                        <textarea type="textarea" id="role" name="role"
                                            value="{{ old() ? old('role') : $data['role'] ?? '' }}" class="editor"
                                            placeholder="" />
                                             {{ old() ? old('role') : $data['role'] ?? '' }}
                                            </textarea>
                                    </div>
                                    @if ($errors->has('role'))
                                        <span class="form-text">
                              
                                        </span>
                                    @endif
                                </div>
                            </div>


                            
                            
                             <div class="form-group  row {{ $errors->has('qualification') ? ' text-red' : '' }}">
                                <label for="qualification" class="col-sm-2 col-form-label">Qualification</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        </div>
                                        
                                        
                                        <textarea id="qualification" class="editor"
                                    name="qualification">
                                        {{ old() ? old('qualification') : $data['qualification'] ?? '' }}
                                    </textarea>
                                    </div>
                                    @if ($errors->has('qualification'))
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
