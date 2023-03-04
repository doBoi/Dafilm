@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="page-content">

        <!-- ***** Featured Start ***** -->
        <div class="row">
          <div class="col-md-12">
            <div class="feature-banner header-text">
              <div class="row">
                <div class="col-md-4">
                  <img src="https://image.tmdb.org/t/p/w500/{{ $results['data']->poster_path }}" alt=""
                    style="border-radius: 23px;">
                </div>
                <div class="col-md-8">
                  <div class="game-details -mt-2">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="content">
                          <div class="row">
                            <div class="col-md-12">
                              <div class="left-info">
                                <div class="col-md-6">
                                  <div class="left">
                                    <h4>{{ $results['data']->title }}</h4>
                                    <span>{{ $results['data']->release_date }}</span>
                                  </div>
                                </div>
                                <div class="col">
                                  <ul>
                                    <li><i class="fa fa-star"></i> {{ $results['data']->vote_average }}</li>
                                    <li><i class="fa fa-eye"></i> {{ $results['data']->popularity }}</li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-12">
                              <div class="right-info">
                                <p class="text-white">{{ $results['data']->overview }}</p>
                                <span class="text-white-50 fs-6">
                                  Genre:
                                  @foreach ( $results['data']->genres as $genre )
                                  {{ $genre->name }}
                                  @if (!$loop->last)
                                  ,
                                  @endif

                                  @endforeach
                                  .
                                </span>
                              </div>
                            </div>

                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- ***** Featured End ***** -->

          {{--
          <!-- ***** Details Start ***** -->
          <div class="game-details">
            <div class="row">
              <div class="col-md-12">
                <h2>{{ $results['data']->title }} Details</h2>
              </div>
              <div class="col-md-12">
                <div class="content">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="left-info">
                        <div class="left">
                          <h4>{{ $results['data']->title }}</h4>
                          <span>{{ $results['data']->release_date }}</span>
                        </div>
                        <ul>
                          <li><i class="fa fa-star"></i> {{ $results['data']->vote_average }}</li>
                          <li><i class="fa fa-download"></i> {{ $results['data']->popularity }}</li>
                        </ul>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="right-info">
                        <ul>
                          @foreach ( $results['data']->genres as $genre )
                          <li><i class="fa fa-star"></i>{{ $genre->name }}</li>
                          @endforeach

                        </ul>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <img src="assets/images/details-01.jpg" alt="" style="border-radius: 23px; margin-bottom: 30px;">
                    </div>
                    <div class="col-lg-4">
                      <img src="assets/images/details-02.jpg" alt="" style="border-radius: 23px; margin-bottom: 30px;">
                    </div>
                    <div class="col-lg-4">
                      <img src="assets/images/details-03.jpg" alt="" style="border-radius: 23px; margin-bottom: 30px;">
                    </div>
                    <div class="col-lg-12">
                      <p>{{ $results['data']->overview }}</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- ***** Details End ***** --> --}}


        </div>
      </div>
    </div>
  </div>

  @endsection
