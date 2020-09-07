
<header>
    <!--? Header Start -->
    <div class="header-area">
        <div class="main-header header-sticky">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <!-- Logo -->
                    <div class="col-xl-2 col-lg-2 col-md-1">
                        <div class="logo">
                            <a href="index.html"><img src="{{ asset('images/logo/'.$logo)}}" alt="" style="height: 100px; width: auto;"></a>
                        </div>
                    </div>
                    <div class="col-xl-10 col-lg-10 col-md-10">
                        <div class="menu-main d-flex align-items-center justify-content-end">
                            <!-- Main-menu -->
                            <div class="main-menu f-right d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a class="{{ request()->is('home*') || request()->is('index*')  ? 'active' : '' }}" href="{{ url('index') }}">Home</a></li>
                                        <li><a class="{{ request()->is('about*')  ? 'active' : '' }}" href="{{ url('about') }}">About</a></li>
                                        {{-- <li><a href="{{ url('doctors') }}">Doctors</a></li>
                                        <li><a href="{{ url('index') }}">Department</a></li>
                                        <li><a href="blog.html">Blog</a>
                                            <ul class="submenu">
                                                <li><a href="blog.html">Blog</a></li>
                                                <li><a href="blog_details.html">Blog Details</a></li>
                                                <li><a href="elements.html">Element</a></li>
                                            </ul>
                                        </li> --}}
                                        <li><a href="{{ url('contact') }}">Contact</a></li>
                                        <li><a class="{{ request()->is('login*')  ? 'active' : '' }}" href="{{ url('login') }}">Login</a></li>
                                        <li><a class="{{ request()->is('patient-signup*') || request()->is('doctor-signup*')  ? 'active' : '' }}">Register</a>                                        
                                            <ul class="submenu">
                                                <li><a class="{{ request()->is('doctor-signup*')  ? 'active' : '' }}" href="{{ url('doctor-signup') }}">As Doctor</a></li>
                                                <li><a class="{{ request()->is('patient-signup*')  ? 'active' : '' }}" href="{{ url('patient-signup') }}">As Patient</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            {{-- <div class="header-right-btn f-right d-none d-lg-block ml-30">
                                <a href="#" class="btn header-btn">01654.066.456</a>
                            </div> --}}
                        </div>
                    </div>   
                    <!-- Mobile Menu -->
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
</header>