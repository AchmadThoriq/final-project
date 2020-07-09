@extends('template.master')
@section('content')
<section class="blog-area section">
    <div class="container">

        <div class="row">
        @foreach($pertanyaan as $key => $pertanyaan)

            <div class="col-lg-4 col-md-6">
                <div class="card h-100">
                
                    <div class="single-post post-style-1">

                        <div class="blog-image"><img src="images/marion-michele-330691.jpg" alt="Blog Image"></div>

                        <a class="avatar" href="#"><img src="images/icons8-team-355979.jpg" alt="Profile Image"></a>

                        <div class="blog-info">
                        
                      
                        <p> {!! $pertanyaan->judul !!} </p> <br>
                        <a href = "/pertanyaan/create" class="btn btn-primary">Buat Pertanyaan</a> <br>  <br>

                            <ul class="post-footer">
                                <li><a href="#"><i class="ion-heart"></i>57</a></li>
                                <li><a href="#"><i class="ion-chatbubble"></i>6</a></li>
                                <li><a href="#"><i class="ion-eye"></i>138</a></li>
                            </ul>

                        </div><!-- blog-info -->
                    </div><!-- single-post -->
                </div><!-- card -->
            </div><!-- col-lg-4 col-md-6 -->

        @endforeach


        </div><!-- row -->

        <a class="load-more-btn" href="#"><b>LOAD MORE</b></a>

    </div><!-- container -->
</section><!-- section -->

@endsection