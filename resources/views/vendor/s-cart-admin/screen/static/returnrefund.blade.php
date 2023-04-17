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
                            
                            
                            <hr class="kind ">
<div class="form-group kind  row">
    <label for="image" class="col-sm-2 col-form-label">
        <label>FAQ</label>
    </label>
    <div class="col-sm-8">
        <div class="input-group">
            <input type="text" id="faq_question" name="faq_question" value="{!! old('faq_question',$data->faq_question ?? '')  !!}"
                class="form-control" placeholder="FAQ Question" />
            <input type="text" id="faq_answer" name="faq_answer" value="{!! old('faq_answer', $data->faq_answer ?? '') !!}"
                class="form-control" placeholder="FAQ Answer" />
        </div>
        @if ($errors->has('faq_question'))
        <span class="form-text">
            <i class="fa fa-info-circle"></i> {{ $errors->first('faq_question') }}
        </span>
        @endif
        <div id="preview_faq_question" class="img_holder"></div>
    
        @foreach ($data1 as $key => $sub_faq_question)
        
        @if ($sub_faq_question)
        <div class="group-image group-faq">
            <div class="input-group">
                <input type="text" id="sub_faq_question_{{ $key }}" name="sub_faq_question[]" value="{{ old('sub_faq_question', $sub_faq_question->faq_question ?? '') }}"
                class="form-control" placeholder="Feature Heading" />
                <input type="text" id="sub_faq_answer_{{ $key }}" name="sub_faq_answer[]" value="{!! old('sub_faq_answer', $sub_faq_question->faq_answer) !!}"
                class="form-control" placeholder="Feature Sub Heading" />
                <span class="input-group-btn">
                    <span title="Remove" class="btn btn-flat btn-danger removeFeature"><i class="fa fa-times"></i></span>
                </span>
            </div>
            <div id="preview_sub_faq_question_{{ $key }}" class="img_holder"></div>
        </div>
    
        @endif
        @endforeach
      
    
        <button type="button" id="add_sub_faq" class="btn btn-flat btn-success">
            <i class="fa fa-plus" aria-hidden="true"></i>
            Add More FAQ
        </button>
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


// Add sub faq
var id_sub_faq = {{ old('sub_faq_question')?count(old('sub_faq_question')):0 }};
$('#add_sub_faq').click(function(event) {
    id_sub_faq +=1;
    $(this).before(
    '<div class="group-image group-faq">'
    +'<div class="input-group">'
    +'  <input type="text" id="sub_faq_question_'+id_sub_faq+'" name="sub_faq_question[]" value="" class="form-control" placeholder="FAQ Question"  />'
    +'  <input type="text" id="sub_faq_answer_'+id_sub_faq+'" name="sub_faq_answer[]" value="" class="form-control" placeholder="FAQ Answer"  />'
    +'  <span title="Remove" class="btn btn-flat btn-danger removeFeature"><i class="fa fa-times"></i></span>'
    +'</div>'
    +'<div id="preview_sub_faq_question_'+id_sub_faq+'" class="img_holder"></div>'
    +'</div>');
    $('.removeFeature').click(function(event) {
        $(this).closest('div').remove();
    });
    $('.lfm').filemanager();
});
    $('.removeFeature').click(function(event) {
        $(this).closest('.group-image.group-faq').remove();
    });
//end sub faq

    </script>
@endpush