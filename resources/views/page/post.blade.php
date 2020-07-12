@extends('template.master_login')
@push('style')
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">


	<!-- Stylesheets -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="{{asset('common-css/bootstrap.css')}}" rel="stylesheet">

	<link href="{{asset('common-css/ionicons.css')}}" rel="stylesheet">


	<link href="{{asset('single-post-1/css/styles.css')}}" rel="stylesheet">

	<link href="{{asset('single-post-1/css/responsive.css')}}" rel="stylesheet">
@endpush
@section('content')
<head>
	{{-- <title>TITLE</title> --}}
	{{-- <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8"> --}}


	<!-- Font -->

	{{-- <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">
	<!-- Stylesheets -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="common-css/bootstrap.css" rel="stylesheet">
	<link href="common-css/ionicons.css" rel="stylesheet">
	<link href="single-post-1/css/styles.css" rel="stylesheet">
	<link href="single-post-1/css/responsive.css" rel="stylesheet"> --}}

</head>
<body >
    <section class="post-area section">
        <div class="container">

            <div class="row">
                
                <div class="col-lg-8 col-md-12 no-right-padding">
                    
                    <div class="main-post">
                        {{-- @foreach ($pertanyaan as $item => $value ) --}}
                            
                        <div class="blog-post-inner">
                            
                            <div class="post-info">
                                
                                {{-- <div class="left-area">
                                    <a class="avatar" href="#"><img src="images/avatar-1-120x120.jpg" alt="Profile Image"></a>
                                </div> --}}
                                
                                <div class="">
            
                                    <a class="name" href="#"><b>{{$user->name}}</b></a>
                                    @php
                          $date = explode(' ',$pertanyaan->created_at);
                          $dated = explode('-', $date[0]);
                             @endphp
                             <br>
                                    <h6 class="date">Created On {{$dated[2]}}/{{$dated[1]}}/{{$dated[0]}}</h6>
                                </div>
                                
                            </div><!-- post-info -->
                            
                            <h3 class="title"><a href="#"><b>{{$pertanyaan->judul}}</b></a></h3>
                            
                            <p class="para">{{$pertanyaan->isi}}</p>                    
                                    <ul class="tags">
                                    <li><a>{{$tag->tag_name}}</a></li>
                                    </ul>
                                </div><!-- blog-post-inner -->
                                
                                <div class="post-icons-area">
                                    <ul class="post-icons">
                                        <li><a href="#"><i class="fa fa-thumbs-up"></i>57</a></li>
                                        <li><a href="#"><i class="fa fa-thumbs-down"></i>138</a></li>
                                    </ul>

                        </div>
    
                    </div><!-- main-post -->
                </div><!-- col-lg-8 col-md-12 -->
                <div class="col-lg-4 col-md-12 no-left-padding">
                    
                    <div class="single-post info-area">
                        
    
                        <div class="tag-area">
    
                            <h4 class="title"><b>TAG CLOUD</b></h4>
                            <ul>
                                @foreach ($tag_all as $item)
                            <li><a href="#">{{$item->tag_name}}</a></li>
                                @endforeach
                            </ul>
    
                        </div><!-- subscribe-area -->
    
                    </div><!-- info-area -->
    
                </div><!-- col-lg-4 col-md-12 -->
    
            </div><!-- row -->
    
        </div><!-- container -->
    </section><!-- post-area -->
    {{-- <section class="recomended-area section">
        <div class="container">
            <div class="row">
    
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100">
                        <div class="single-post post-style-1">
    
                            <div class="blog-image"><img src="images/alex-lambley-205711.jpg" alt="Blog Image"></div>
    
                            <a class="avatar" href="#"><img src="images/icons8-team-355979.jpg" alt="Profile Image"></a>
    
                            <div class="blog-info">
    
                                <h4 class="title"><a href="#"><b>How Did Van Gogh's Turbulent Mind Depict One of the Most Complex
                                Concepts in Physics?</b></a></h4>
    
                                <ul class="post-footer">
                                    <li><a href="#"><i class="ion-heart"></i>57</a></li>
                                    <li><a href="#"><i class="ion-chatbubble"></i>6</a></li>
                                    <li><a href="#"><i class="ion-eye"></i>138</a></li>
                                </ul>
    
                            </div><!-- blog-info -->
                        </div><!-- single-post -->
                    </div><!-- card -->
                </div><!-- col-md-6 col-sm-12 -->
    
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100">
                        <div class="single-post post-style-1">
    
                            <div class="blog-image"><img src="images/caroline-veronez-165944.jpg" alt="Blog Image"></div>
    
                            <a class="avatar" href="#"><img src="images/icons8-team-355979.jpg" alt="Profile Image"></a>
    
                            <div class="blog-info">
                                <h4 class="title"><a href="#"><b>How Did Van Gogh's Turbulent Mind Depict One of the Most Complex
                                    Concepts in Physics?</b></a></h4>
    
                                <ul class="post-footer">
                                    <li><a href="#"><i class="ion-heart"></i>57</a></li>
                                    <li><a href="#"><i class="ion-chatbubble"></i>6</a></li>
                                    <li><a href="#"><i class="ion-eye"></i>138</a></li>
                                </ul>
                            </div><!-- blog-info -->
    
                        </div><!-- single-post -->
    
                    </div><!-- card -->
                </div><!-- col-md-6 col-sm-12 -->
    
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100">
                        <div class="single-post post-style-1">
    
                            <div class="blog-image"><img src="images/marion-michele-330691.jpg" alt="Blog Image"></div>
    
                            <a class="avatar" href="#"><img src="images/icons8-team-355979.jpg" alt="Profile Image"></a>
    
                            <div class="blog-info">
                                <h4 class="title"><a href="#"><b>How Did Van Gogh's Turbulent Mind Depict One of the Most Complex
                                    Concepts in Physics?</b></a></h4>
    
                                <ul class="post-footer">
                                    <li><a href="#"><i class="ion-heart"></i>57</a></li>
                                    <li><a href="#"><i class="ion-chatbubble"></i>6</a></li>
                                    <li><a href="#"><i class="ion-eye"></i>138</a></li>
                                </ul>
                            </div><!-- blog-info -->
    
                        </div><!-- single-post -->
    
                    </div><!-- card -->
                </div><!-- col-md-6 col-sm-12 -->
    
            </div><!-- row -->
    
        </div><!-- container -->
    </section> --}}
    
    <section class="comment-section">
        <div class="container">
            <h4><b>Add Your Answer</b></h4>
            <div class="row">
    
                <div class="col-lg-8 col-md-12">
                    <div class="comment-form">
                    <form method="post" action="/jawaban">
                        @csrf
                            <div class="row">
                                <div class="col-sm-12">
                                    <textarea name="isi" rows="2" class="text-area-messge form-control"
                                        placeholder="Enter your Answer" maxlength="255" required></textarea >
                                <input name="question_id" id="question_id" value="{{$pertanyaan->id}}" hidden >
                                </div><!-- col-sm-12 -->
                                <div class="col-sm-12">
                                    <button class="submit-btn" type="submit" id="form-submit"><b>Post Answer</b></button>
                                </div><!-- col-sm-12 -->
    
                            </div><!-- row -->
                        </form>
                    </div><!-- comment-form -->
    
                    <h4><b>Answer</b></h4>
    
                        @if (is_array($jawaban) || is_object($jawaban))
                        
                        @foreach ($jawaban as $data)
                        @foreach ($user_all as $usr)
                        @if ($usr->id == $data->users_id)
                        <div class="commnets-area ">
                            
                            <div class="comment">
                                
                                
                                <div class="post-info">
                                    
                                    <a class="name" href="#"><b>{{$usr->name}}</b></a>
                                    <div class="right-area">
                                        {{-- <h5 class="reply-btn" ><a href="#" data-toggle="modal" data-item="{{$data->id}}"  data-target="#exampleModal"><b>REPLY</b></a></h5> --}}
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-id="{{ $data->id }}" data-target="#exampleModal" >REPLY</button>
                                    </div>
                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">New Comment</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="/comment/answer/create" method="POST">
                                                    @csrf
                                                    <div class="form-group">
                                                        <textarea class="form-control" id="comment" name="comment"
                                                        required></textarea>
                                                    </div>
                                                    <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Close</button>
                                                    {{-- <button type="button" class="btn btn-primary">Submit Comment</button> --}}
                                                    {{-- <input type="text" name="answer_id" id="answer_id"
                                                    value="" hidden> --}}
                                                    <input type="text" name="answer_id" id="answer_id"
                                                    hidden>
                                                    {{-- <h1>{{$data->id}}</h1> --}}
                                                    <input type="text" name="question_id" id="question_id"
                                                    value="{{$pertanyaan->id}}" hidden>
                                                    <button class="submit-btn" type="submit" id="form-submit">Submit
                                                        Comment</button>
                                                    </form>
                                                </div>
                                            </div>
                                            {{-- <p>{{$data->id}}</p> --}}
                                        </div>
                                    </div>
                                @php
                                $date = explode(' ',$data->created_at);
                                $dated = explode('-', $date[0]);
                                   @endphp
                                <h6 class="date">{{$dated[2]}}/{{$dated[1]}}/{{$dated[0]}}</h6>
                                        
                                        </div><!-- post-info -->
                                        
                                        
                                        <p>{{$data->isi}}</p>
                                        
                                        </div>
                                        
                                        <div class="post-icons-area">
                                            <ul class="post-icons">
                                                <li><a href="#"><i class="fa fa-thumbs-up"></i>57</a></li>
                                                <li><a href="#"><i class="fa fa-thumbs-down"></i>138</a></li>
                                                </ul>
                                        </div>
                                        <hr>
                                        @if (is_array($ans_comment) || is_object($ans_comment))
                    @foreach ($ans_comment as $comment_ans => $val)
                    @if ($val->answer_id == $data->id)
                    <div class="comment">
                        <h5 class="reply-for">Reply for <a href="#"><b>{{$usr->name}}</b></a></h5>
                        @php
                        $dateanskom = explode(' ',$val->created_at);
                        $datedanskom = explode('-', $dateanskom[0]);
                        @endphp
                        @foreach ($user_all as $usre)
                        @if ($usre->id == $val->users_id)
                        <div class="post-info">
                            <a class="name" href="#"><b>{{$usre->name}}</b></a>
                            <h6 class="date">{{$datedanskom[2]}}/{{$datedanskom[1]}}/{{$datedanskom[0]}}</h6>
                        </div><!-- post-info -->
                        @endif
                        @endforeach
                        <p>{{$val->isi}}</p>

                    </div>
                    @endif
                    @endforeach
                    @endif
                                        </div><!-- commnets-area -->
                                        @endif
                                        @endforeach
                                                @endforeach  
                                                @endif    
                                        
                        
                        {{-- <a class="more-comment-btn" href="#"><b>VIEW MORE COMMENTS</a> --}}
                            
                        </div><!-- col-lg-8 col-md-12 -->
                        
                    </div><!-- row -->
                    
                </div><!-- container -->
            </section>
</body>
    @endsection
    @push('scripts')
	<script src="common-js/jquery-3.1.1.min.js"></script>

	<script src="common-js/tether.min.js"></script>

	<script src="common-js/bootstrap.js"></script>

    <script src="common-js/scripts.js"></script>
  
      <script>
        $('#exampleModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var id = button.data('id') // Extract info from data-* attributes
  var modal = $(this)
  modal.find('.modal-body input[name="answer_id"]').val(id);
})
        </script>
    @endpush
