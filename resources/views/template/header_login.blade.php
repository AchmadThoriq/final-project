{{-- <style>
    div.sticky {
      position: -webkit-sticky;
      position: sticky;
      top: 0;
      background-color: yellow;
      padding: 50px;
      font-size: 20px;
    }
</style> --}}
<header>
    <div class="container-fluid position-relative no-side-padding" >

        <a href="#" class="logo"><img src="{{asset('images/logo.png')}}" alt="Logo Image"></a>

        <div class="menu-nav-icon" data-nav-menu="#main-menu"><i class="ion-navicon"></i></div>

        <ul class="main-menu visible-on-click" id="main-menu">
            <li><a href="/pertanyaan">Home</a></li>
            <li><a href="/pertanyaan/create">Create Question</a></li>
            <li>
                    <!-- <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown"> -->
                        <a class="dropdown-item"  style="background-color: red" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    <!-- </div> -->
                </li>
        </ul><!-- main-menu -->
        <div class="src-area">
            <form>
                <button class="src-btn" type="submit"><i class="ion-ios-search-strong"></i></button>
                <input class="src-input" type="text" placeholder="Type of search">
            </form>
        </div>
        
    </div><!-- conatiner -->
</header>