<header id="header" class="site-header text-black">
    <nav id="header-nav" class="navbar navbar-expand-lg px-3 mb-3">
        <div class="container-fluid">
            <a class="navbar-brand" >
                TimeTrove
            </a>
            <button class="navbar-toggler d-flex d-lg-none order-3 p-2 border-0 shadow-none" type="button"
                data-bs-toggle="offcanvas" data-bs-target="#bdNavbar" aria-controls="bdNavbar" aria-expanded="false"
                aria-label="Toggle navigation">
                <svg class="navbar-icon" width="50" height="50">
                    <use xlink:href="#navbar-icon"></use>
                </svg>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="bdNavbar" aria-labelledby="bdNavbarOffcanvasLabel">
                <div class="offcanvas-header px-4 pb-0">
                    <a class="navbar-brand" href="index.html">
                        <img src="{{ config('app.url') }}/Frontend/{{ config('app.url') }}/Frontend/images/main-logo.png"
                            class="logo">
                    </a>
                    <button type="button" class="btn-close btn-close-black" data-bs-dismiss="offcanvas"
                        aria-label="Close" data-bs-target="#bdNavbar"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 gap-5 pe-3 botom-borders-out">
                        <li class="nav-item">
                            <a class="nav-link active p-0" href="{{ url('/index') }}">Home</a>
                        </li>
                        @if (Request::segment(2)== 'cart_list' ||Request::segment(2) == 'add_to_cart' ||
                        Request::segment(2) == 'edit_cart' )
                        @else
                        <li class="nav-item">
                            <a class="nav-link p-0" href="#about-us">Overview</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link p-0" href="#video-player">Video</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link p-0" href="{{url('/chatify')}}">chat</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link p-0" href="#testimonials">Testimonial</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link p-0" href="#featured-products">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link p-0" href="#faqs">FAQs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link p-0" href="{{ url('_user/cart_list') }}">Cart List</a>
                        </li>
                        @endif
                        <li class="nav-item">
                            @if (Auth::user())
                            <a class="nav-link p-0 fw-bold text-dark" href="{{ url('/backRoute') }}">Dashboard</a>
                            <a class="nav-link p-0 fw-bold text-dark" href="{{ url('/logout') }}">Logout</a>
                            @else
                            <a class="nav-link p-0 fw-bold text-dark" href="{{ url('/login') }}">Login</a>
                            @endif

                        </li>
                    </ul>
                </div>

                @include('auth.message')
            </div>
        </div>
    </nav>
</header>