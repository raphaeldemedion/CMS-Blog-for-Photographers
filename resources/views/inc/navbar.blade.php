            <!-- Wrapper Site -->
            <div id="main-content">
        
                <!-- Preload -->
                <div id="preload">
                    <div class="kd-bounce">
                        <div></div>
                        <div></div>
                    </div>
                </div>
                <!-- Preload -->
        
                <!-- Mobile Menu -->
                <div class="mobile">
                    <div class="container">
                        <!-- Mobile -->
                        <div class="menu-mobile">
                            <span class="item item-1"></span>
                            <span class="item item-2"></span>
                            <span class="item item-3"></span>
                        </div>
                        <!-- End Mobile -->
        
                        <!-- Logo -->
                        <div class="logo">
                            <a href="/">
                                <img src="{{asset('images/logo-mobile.png')}}" alt="Logo">
                            </a>
                        </div>
                        <!-- End Logo -->
                    </div>
                </div>
                <div class="hide-menu"></div>
                <!-- End Mobile Menu -->
        
                <div class="container">
                    <div class="row">
        
                        <div class="col-md-3">
                            <div class="header affix">
                                <div class="table">
                                    <div class="table-cell">
                                        <!-- Logo -->
                                        <div class="logo">
                                            <a href="/">
                                                <img src="{{asset('images/logo-light.png')}}" alt="Logo" class="logo-light">
                                                <img src="{{asset('images/logo.png')}}" alt="Logo">
                                            </a>
                                        </div>
                                        <!-- End Logo -->
        
                                        <!-- Navigation -->
                                        <div class="main-menu">
                                            <nav>
                                                <ul class="menu-list">
                                                    <li class="menu-item-has-children">
                                                        <a href="/">Home</a>
                                                    </li>
                                                    @guest
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            @if (Route::has('register'))
                                                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                                            @endif
                                                        </li>
                                                    @else
                                                        <li class="nav-item dropdown">
                                                                <a class="dropdown-item" href="{{ route('logout') }}"
                                                                onclick="event.preventDefault();
                                                                              document.getElementById('logout-form').submit();">
                                                                 {{ __('Logout') }}
                                                             </a>
                            
                                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                                                <a class="dropdown-item" href="{{ route('logout') }}"
                                                                   onclick="event.preventDefault();
                                                                                 document.getElementById('logout-form').submit();">
                                                                    {{ __('Logout') }}
                                                                </a>
                            
                                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                                    @csrf
                                                                </form>
                                                            </div>
                                                        </li>
                                                    @endguest
                                                        <a href="/about">About</a>
                                                    </li>
                                                    <li>
                                                        <a href="/single">Lifestyle</a>
                                                    </li>
                                                    <li>
                                                        <a href="/single">Travel</a>
                                                    </li>
                                                    <li class="menu-item-has-children">
                                                        <a href="/single">Single</a>
                                                    </li>
                                                    <li>
                                                        <a href="/contact">Contact</a>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </div>
                                        <!-- End Navigation -->
        
                                        <!-- Socials -->
                                        <div class="socials">
                                            <a href="#" title="Behance">
                                                <i class="fa fa-behance"></i>
                                            </a>
                                            <a href="#" title="Dribbble">
                                                <i class="fa fa-dribbble"></i>
                                            </a>
                                            <a href="#" title="Facebook">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                            <a href="#" title="Google Plus">
                                                <i class="fa fa-google-plus"></i>
                                            </a>
                                            <a href="#" title="Instagram">
                                                <i class="fa fa-instagram"></i>
                                            </a>
                                            <a href="#" title="Search this site">
                                                <i class="fa fa-search"></i>
                                            </a>
                                        </div>
                                        <!-- End Socials -->
        
                                        <div class="box-search">
                                            <form role="search" method="get" action="#">
                                                <input type="text" placeholder="Search ..." name="s" />
                                            </form>
                                        </div>
        
                                        <div class="copyright">
                                            <p>
                                                Tancho @ 2018. Design by <a href="#">Kendy</a>
                                            </p>
                                        </div>
        
                                    </div>
                                </div>
                            </div>
                        </div>
        
