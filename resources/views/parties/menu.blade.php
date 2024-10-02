 <!-- main header -->
 <header class="main-header header-style-one">
    <!-- logo-box -->
    <div class="logo-box">
        <div class="shape" style="background-image: url(assets/images/shape/shape-1.png);"></div>
        <figure class="logo"  width="500"><a href="#"><img src="{{ asset('assets/images/3.png') }}" alt=""></a></figure>
    </div>
    <!-- header-top -->
    <div class="header-top">
        <div class="outer-container">
            <div class="top-inner clearfix">
                <div class="left-column pull-left">
                    <ul class="info-list clearfix">
                        <li>
                            <i class="icon-chat"></i>
                            <span>Ligne d'assistance :</span>
                            <a href="tel:23345678901">+243 857 000 908 </a>
                        </li>
                        <li>
                            <a href="mailto:example@info.com">info@fik-rdc.com</a>
                        </li>
                        <li>
                            Av/Kwango 3 Q/ Jolie parc C/Ngaliema
                        </li>
                    </ul>
                </div>
                <div class="right-column pull-right">
                    <div class="update-news">
                        <p><i class="icon-megaphone"></i><span>Info :</span> Delivers Personal Protective Equipments to North Macedonia . . .</p>
                    </div>
                    {{-- <div class="language-box">
                        <span>En</span>
                        <ul class="language-list clearfix">
                            <li><a href="index.html">Français</a></li>
                            <li><a href="index.html">Spanish</a></li>
                            <li><a href="index.html">Chines</a></li>
                        </ul>
                    </div> --}}
                </div>
            </div>
        </div>
        <!-- donate-btn -->
        <div class="donate-btn">
            <button class="donate-box-btn theme-btn btn-one">Faire un don</button>
        </div>
    </div>
    <!-- header-lower -->
    <div class="header-lower">
        <div class="outer-container">
            <div class="outer-box">
                <div class="text">
                    <figure class="icon-box"><img src="assets/images/icons/heart-1.png" alt=""></figure>
                    <span>Devenir volontaire</span>
                </div>
                <div class="menu-area clearfix">
                    <!--Mobile Navigation Toggler-->
                    <div class="mobile-nav-toggler">
                        <i class="icon-bar"></i>
                        <i class="icon-bar"></i>
                        <i class="icon-bar"></i>
                    </div>
                    <nav class="main-menu navbar-expand-md navbar-light">
                        <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                            <ul class="navigation clearfix">
                                <li class="{{active('home')}}"><a href="{{ route('home') }}">Accueil</a></li>
                                <li class="{{active('apropos')}}"><a href="{{ route('apropos') }}">Aprpopos</a></li>
                                <li class="{{active('activites')}} {{ active('detailActivite') }}"><a href="{{ route('activites') }}">Nos activités</a> </li>
                                <li class="{{active('team')}} {{ active('detailArchive') }}"><a href="{{ route('team') }}">Notre équipe</a></li>
                                <li class="{{active('contact')}}"><a href="{{ route('contact') }}">Contact</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <div class="nav-right-content clearfix">
                    <ul class="social-style-one clearfix">
                        <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href=""><i class="fab fa-twitter"></i></a></li>
                        <li><a href=""><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href=""><i class="fab fa-youtube"></i></a></li>
                    </ul>
                    <div class="search-box-outer">
                        <div class="dropdown">
                            <button class="search-box-btn" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="icon-search"></i>
                            </button>
                            <div class="dropdown-menu search-panel" aria-labelledby="dropdownMenu3">
                                {{-- <div class="form-container">
                                    <form method="post" action="blog.html">
                                        <div class="form-group">
                                            <input type="search" name="search-field" value="" placeholder="Search...." required="">
                                            <button type="submit" class="search-btn"><span class="fas fa-search"></span></button>
                                        </div>
                                    </form>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    <div class="cart-box">
                        <a href="products.html"><i class="icon-shopping-bag"></i></a>
                    </div>
                    <div class="nav-btn nav-toggler navSidebar-button clearfix">
                        <i class="icon-menu"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--sticky Header-->
    <div class="sticky-header">
        <div class="auto-container">
            <div class="outer-box">
                <div class="menu-area clearfix">
                    <nav class="main-menu clearfix">
                        <!--Keep This Empty / Menu will come through Javascript-->
                    </nav>
                </div>
                <div class="nav-right-content clearfix">
                    <ul class="social-style-one clearfix">
                        <li><a href="index.html"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="index.html"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="index.html"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="index.html"><i class="fab fa-youtube"></i></a></li>
                    </ul>
                    <div class="search-box-outer">
                        <div class="dropdown">
                            <button class="search-box-btn" type="button" id="dropdownMenu4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon-search"></i></button>
                            <div class="dropdown-menu search-panel" aria-labelledby="dropdownMenu4">
                                <div class="form-container">
                                    <form method="post" action="blog.html">
                                        <div class="form-group">
                                            <input type="search" name="search-field" value="" placeholder="Search...." required="">
                                            <button type="submit" class="search-btn"><span class="fas fa-search"></span></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cart-box">
                        <a href="products.html"><i class="icon-shopping-bag"></i></a>
                    </div>
                    <div class="nav-btn nav-toggler navSidebar-button clearfix">
                        <i class="icon-menu"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- main-header end -->

<!-- Mobile Menu  -->
<div class="mobile-menu">
    <div class="menu-backdrop"></div>
    <div class="close-btn"><i class="fas fa-times"></i></div>

    <nav class="menu-box">
        <div class="nav-logo"><a href="index.html"><img src="assets/images/logo-2.png" alt="" title=""></a></div>
        <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
        <div class="contact-info">
            <h4>Contact Info</h4>
            <ul>
                <li>Chicago 12, Melborne City, USA</li>
                <li><a href="tel:+8801682648101">+88 01682648101</a></li>
                <li><a href="mailto:info@example.com">info@example.com</a></li>
            </ul>
        </div>
        <div class="social-links">
            <ul class="clearfix">
                <li><a href="index.html"><span class="fab fa-twitter"></span></a></li>
                <li><a href="index.html"><span class="fab fa-facebook-square"></span></a></li>
                <li><a href="index.html"><span class="fab fa-pinterest-p"></span></a></li>
                <li><a href="index.html"><span class="fab fa-instagram"></span></a></li>
                <li><a href="index.html"><span class="fab fa-youtube"></span></a></li>
            </ul>
        </div>
    </nav>
</div><!-- End Mobile Menu -->
