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

        <a href="#" class="logo"><img src="images/logo.png" alt="Logo Image"></a>

        <div class="menu-nav-icon" data-nav-menu="#main-menu"><i class="ion-navicon"></i></div>

        <ul class="main-menu visible-on-click" id="main-menu">
            <li><a href="#">Home</a></li>
            <li><a href="#">Create Question</a></li>
            <li><a href="/profile" style="background-color: aqua">My Profile</a></li>
            <li><a href="#" style="background-color: rgb(219, 0, 0)">Logout</a></li>
        </ul><!-- main-menu -->
        <div class="src-area">
            <form>
                <button class="src-btn" type="submit"><i class="ion-ios-search-strong"></i></button>
                <input class="src-input" type="text" placeholder="Type of search">
            </form>
        </div>
        
    </div><!-- conatiner -->
</header>