@extends('template.master')

@push('style')
  <link href="{{asset('single-post-2/css/styles.css')}}" rel="stylesheet">
  <link href="{{asset('single-post-2/css/responsive.css')}}" rel="stylesheet">
@endpush

@push('scripts-head')
  <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
@endpush

@section('content')

<section class="comment-section">
    <div class="container">
      <div class="row">

        <div class="col-lg-2 col-md-0"></div>

        <div class="col-lg-8 col-md-12">
          <div class="comment-form">
            <form action="/pertanyaan" method="post">
              @csrf
              <div class="row">                  
                <div class="col-sm-12">
                  <label >Judul</label>
                  <input type="text" aria-required="true" name="judul" class="form-control"
                    aria-invalid="true" maxlength = "28" required >
                </div>

                <div class="col-sm-12">
                  <label>Deskripsi</label>
                  <textarea name="isi" class="form-control my-editor"
                         maxlength = "255">
                  </textarea>
                </div><!-- col-sm-12 -->
                <div class="col-sm-12">
                  <label>Tags : </label>
                  <select name="tag_id" id="tag_id" required>
                    @foreach ($tag as $item => $value)
                  <option value="{{$item + 1}}">{{$value->tag_name}}</option>
                  {{-- <option value="">test</option> --}}
                    @endforeach
                  </select>
                </div>
                <div class="col-sm-12 text-right">
                  <button class="submit-btn" type="submit" id="form-submit">
                    <b>Buat Pertanyaan</b>
                  </button>
                </div><!-- col-sm-12 -->

              </div><!-- row -->
            </form>
          </div><!-- comment-form -->

        </div><!-- col-lg-8 col-md-12 -->

      </div><!-- row -->

    </div><!-- container -->
  </section>
@endsection
{{-- 
@push('scripts')
  <script>
    var editor_config = {
      path_absolute : "/",
      selector: "textarea.my-editor",
      plugins: [
        "advlist autolink lists link image charmap print preview hr anchor pagebreak",
        "searchreplace wordcount visualblocks visualchars code fullscreen",
        "insertdatetime media nonbreaking save table contextmenu directionality",
        "emoticons template paste textcolor colorpicker textpattern"
      ],
      toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
      relative_urls: false,
      file_browser_callback : function(field_name, url, type, win) {
        var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
        var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

        var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
        if (type == 'image') {
          cmsURL = cmsURL + "&type=Images";
        } else {
          cmsURL = cmsURL + "&type=Files";
        }

        tinyMCE.activeEditor.windowManager.open({
          file : cmsURL,
          title : 'Filemanager',
          width : x * 0.8,
          height : y * 0.8,
          resizable : "yes",
          close_previous : "no"
        });
      }
    };

    tinymce.init(editor_config);
  </script>
@endpush --}}