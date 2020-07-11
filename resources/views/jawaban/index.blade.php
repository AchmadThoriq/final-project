@extends('template.master')

@section('content')
<section class="blog-area section">
    <div class="container">
      <div class="text-right">
      </div> 
        <div class="row">
        @foreach($jawaban as $key => $jawaban)

            <div class="col-lg-4 col-md-6">
              <div class="card h-100">

                <div class="single-post post-style-2 post-style-3">

                  <div class="blog-info">

                    <h4 class="title">
                      <a href="/jawaban/{{$jawaban->id}}">
                        <b>{!! $jawaban->isi !!}</b>
                      </a>
                    </h4>

                    <div class="avatar-area">
                      <a class="avatar" href="#"><img src="images/icons8-team-355979.jpg" alt="Profile Image"></a><br><br>
                      <div class="right-area">
                        <a class="name" href="#"><b>Lora Plamer</b></a>
                        <h6 class="date" href="#">on Sep 29, 2017 at 9:48am</h6>
                      </div>
                    </div>

                    <ul class="post-footer">
                      <li><a href="#"><i class="ion-heart"></i>57</a></li>
                      <li><a href="#"><i class="ion-chatbubble"></i>6</a></li>
                      <li><a href="#"><i class="ion-eye"></i>138</a></li>
                    </ul>

                  </div><!-- blog-right -->

                </div><!-- single-post extra-blog -->

              </div><!-- card -->
            </div><!-- col-lg-4 col-md-6 -->

        @endforeach


        </div><!-- row -->

        <a class="btn load-more-btn" href="/pertanyaan"><b>Kembali</b></a>

    </div><!-- container -->
</section><!-- section -->
@endsection

