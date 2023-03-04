<header class="absolute header-area header-sticky">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <nav class="main-nav">
          <!-- ***** Logo Start ***** -->
          <div class="text-center mt-2 logo">
            <h4>
              <em>
                <a class="text-danger" href="{{ route('home') }}">
                  DAFILM
                </a>
              </em>
              <h4>
          </div>
          <!-- ***** Logo End ***** -->
          <!-- ***** Search End ***** -->
          {{-- <div class="search-input">
            <form id="search" action="#">
              <input type="text" placeholder="Type Something" id='searchText' name="searchKeyword"
                onkeypress="handle" />
              <i class="fa fa-search"></i>
            </form>
          </div> --}}
          <!-- ***** Search End ***** -->
          <!-- ***** Menu Start ***** -->
          <ul class="nav">
            <li>
              <a @if ($results['title']=='Home' ) class="active" @endif href="{{ route('home') }}">Home</a>
            </li>
            <li>
              <a @if ($results['title']=='Top Rated' ) class="active" @endif href="{{ route('toprated') }}">Top
                Rated</a>
            </li>
            <li>
              <a @if ($results['title']=='Up Coming' ) class="active" @endif href="{{ route('upcoming') }}">Upcoming</a>
            </li>
            <li>
              <a @if ($results['title']=='Now Playing' ) class="active" @endif href="{{ route('nowplaying') }}">Now
                Playing</a>
            </li>
          </ul>
          <a class='menu-trigger'>
            <span>Menu</span>
          </a>
          <!-- ***** Menu End ***** -->
        </nav>
      </div>
    </div>
  </div>
</header>
