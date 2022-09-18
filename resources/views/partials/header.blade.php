<!--====== Header ======-->
<header class="header-main">
    <nav class="navbar navbar-expand-lg main-menu">
        <div class="container-fluid">
            <a class="navbar-brand" href="#" onclick="audio.play()"><img src="{{asset('assets/img/weblogo.png')}}"
                                                                         alt="Not Found!"></a>
            <button type="button" class="navbar-toggler text-bg-secondary " data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0  ml-5 mr-5 pe-3">
                    <li class="nav-item-menu">
                        <a class="nav-link  text-light fs-6 text-uppercase" onclick="audio.play()" aria-current="page"
                           href="{{ route('/') }}">{{__('Home')}}</a>
                    </li>
                    <li class="nav-item-menu">
                        <a class="nav-link text-light  fs-6 text-uppercase" onclick="audio.play()"
                           href="#about">{{__('About')}}</a>
                    </li>
                    <li class="nav-item-menu">
                        <a class="nav-link text-light  fs-6 text-uppercase" onclick="audio.play()"
                           href="#services">{{__('Services')}}</a>
                    </li>
                    <li class="nav-item-menu">
                        <a class="nav-link text-light fs-6 text-uppercase" onclick="audio.play()"
                           href="#skill">{{__('Skill')}}</a>
                    </li>
                    <li class="nav-item-menu">
                        <a class="nav-link text-light fs-6 text-uppercase" onclick="audio.play()"
                           href="#portfolio">{{__('Portfolio')}}</a>
                    </li>
                    <li class="nav-item-menu">
                        <a class="nav-link text-light fs-6 text-uppercase" onclick="audio.play()"
                           href="#team">{{__('Team')}}</a>
                    </li>
                    <li class="nav-item-menu">
                        <a class="nav-link text-light fs-6 text-uppercase" onclick="audio.play()"
                           href="#blog">{{__('Blog')}}</a>
                    </li>
                    <li class="nav-item-menu">
                        <a class="nav-link text-light fs-6 text-uppercase" onclick="audio.play()"
                           href="#contact">{{__('Contact')}}</a>
                    </li>
                </ul>
                <div class="search-icon btn-outline-danger text-light fs-5  pe-5 mt-2 " data-bs-toggle="modal"
                     data-bs-target="#staticBackdrop" onclick="audio.play()"><i class="bx bx-search"></i></div>
            </div>
        </div>
    </nav>
</header>
<!--====== End Header ======-->
