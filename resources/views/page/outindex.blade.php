@extends('template.master')

@section('content')
<section class="blog-area section">
    <div class="container">
        <div class="row">
        @foreach($pertanyaan as $key => $pertanyaan)

            <div class="col-lg-4 col-md-6">
              <div class="card h-100" >

                <div class="single-post post-style-1">

                  <div class="blog-image"><img src="images/brooke-lark-194251.jpg" alt="Blog Image"></div>
                  <div class="blog-info">

                    <h4 class="title">
                      {{-- <a href="/pertanyaan/{{$pertanyaan->id}}"> --}}
                      
                        <b> {{ $pertanyaan->judul }}</b>
                      {{-- </a> --}}
                    </h4>
                    @php
                          $date = explode(' ',$pertanyaan->created_at);
                          $dated = explode('-', $date[0]);
                          @endphp
                      <div class="avatar-area">
                        <div class="right-area">
                          <br>
                          @foreach ($user as $data => $value)
                            @if ($value->id == $pertanyaan->users_id)
                            <a class="name" href="#"><b>by: {{$value->name}}</b></a>
                            @endif
                            @endforeach
                          <h6 class="date" href="#">{{$dated[2]}}/{{$dated[1]}}/{{$dated[0]}} </h6>
                        </div>
                      </div>

                    <ul class="post-footer">
                      <li><a href="#"><i class="ion-heart"></i>57</a></li>
                      <li><a href="#"><i class="ion-chatbubble"></i>6</a></li>
                      <li><a href="#"><i class="ion-eye"></i>138</a></li>
                    </ul>
                  <a href = "/post/{{$pertanyaan->id}}" class = "btn load-more-btn mb-4"> 
                          <b>Answer</b>
                      </a>
                  </div><!-- blog-right -->

                </div><!-- single-post extra-blog -->

              </div><!-- card -->
            </div><!-- col-lg-4 col-md-6 -->

        @endforeach


        </div><!-- row -->

        <a class="btn load-more-btn" href="#"><b>Lihat Lebih Banyak</b></a>

    </div><!-- container -->
</section><!-- section -->
@endsection

