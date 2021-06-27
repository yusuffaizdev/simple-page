 <!--========  header area =========-->
 <header class="header header-three">

     <div class="header-bottom-area">
         <div class="container">
             <div class="header-style-center">
                 <div class="logo">
                     <a href="{{ route('home') }}">
                         <img src="assets/images/logo/logo-3.png" alt="" />
                     </a>
                 </div>
                 <div class="main-menu-area text-center">
                     <nav class="navigation-menu">
                         <ul>
                             <li><a href="{{ route('home') }}"><span>Home</span></a></li>
                             <li><a href="{{ route('post.index') }}"><span>Write Post</span></a> </li>
                         </ul>
                     </nav>
                 </div>
                 <div class="header-three-right-side">
                     @auth
                         <a href="#" class="sign-up-action-button btn-medium btn"
                             onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                             Logout
                             <form id="logout-form" action="{{ route('logout') }} " method="POST">
                                 @csrf
                             </form>
                         </a>
                     @endauth
                     @guest
                         <a href="{{ route('login') }}" class="sign-up-action-button btn-medium btn">
                             Login
                         </a>
                     @endguest
                     <!-- mobile menu -->
                     <div class="mobile-navigation-icon d-block d-lg-none" id="mobile-menu-trigger">
                         <i></i>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </header>
 <!--======== End of header area  =========-->
