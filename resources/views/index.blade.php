@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <div class="page-content py-3">

        <!-- ***** Banner Start ***** -->
        <div class="main-banner ">
          <div class="row">
            <div class="col-lg-7">
              <div class="header-text">
                <h6>Welcome To Dafilm</h6>
                <h4><em>Browse</em> Most Popular Film Here</h4>
              </div>
            </div>
          </div>
        </div>
        <!-- ***** Banner End ***** -->

        <!-- ***** Most Popular Start ***** -->
        <div class="most-popular">
          <div class="row">
            <div class="col-lg-12">
              <div class="heading-section">
                <h4><em>Most Popular</em> Right Now</h4>
              </div>
              <div class="row">
                @foreach ( $results['data'] as $result )
                <div class="col-lg-3 col-sm-6">
                  <div class="item">
                    <img src="https://image.tmdb.org/t/p/w500/{{ $result->poster_path }}" alt="">
                    <h4>{{ $result->original_title }}<br>
                    </h4>
                    <div>
                      <p><i class="fa fa-star"></i> {{ $result->vote_average }}</p>
                      <p><i class="fa fa-calendar"></i> {{ $result->release_date }}</p>
                    </div>
                    <a href="{{ route('detail', $result->id ) }}">Detail Movie</a>
                  </div>
                </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>
        <!-- ***** Most Popular End ***** -->
      </div>
    </div>
  </div>
</div>

@endsection
