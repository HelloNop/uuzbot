            <header class="header has-header-main-s1 bg-dark" id="home">
                <div class="header-main header-main-s1 is-sticky is-transparent on-dark">
                    <div class="container header-container">
                        <div class="header-wrap">
                            <div class="header-logo">
                                <a href="/" class="logo-link">
                                    <img class="logo-light logo-img" src="/images/uuzbot.png"
                                        srcset="/images/uuzbot.png 2x" alt="logo">
                                    <img class="logo-dark logo-img" src="/images/uuzbot-dark.png"
                                        srcset="/images/uuzbot-dark.png 2x" alt="logo-dark">
                                </a>
                            </div>
                            <div class="header-toggle">
                                <button class="menu-toggler" data-target="mainNav">
                                    <em class="menu-on icon ni ni-menu"></em>
                                    <em class="menu-off icon ni ni-cross"></em>
                                </button>
                            </div><!-- .header-nav-toggle -->
                            <nav class="header-menu" data-content="mainNav">
                                <ul class="menu-list ml-lg-auto">
                                    <li class="menu-item">
                                        <a href="#carakerja" class="menu-link menu-toggle">Cara Kerja</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="#harga" class="menu-link menu-toggle">Harga</a>
                                    </li>
                                </ul>
                                <ul class="menu-btns">
                                    @guest
                                    <li>
                                        <a href="{{ route('login') }}" class="btn btn-primary btn-lg">Login</a>
                                    </li>
                                    @else
                                    <li>
                                        <a href="{{ route('dashboard') }}" class="btn btn-primary btn-lg">Dashboard</a>
                                    </li>
                                    @endguest
                                </ul>
                            </nav><!-- .nk-nav-menu -->
                        </div><!-- .header-warp-->
                    </div><!-- .container-->
                </div><!-- .header-main-->
