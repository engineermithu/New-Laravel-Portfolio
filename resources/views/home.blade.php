@extends('partials.master')

@section('title')
    Portfolio -Home Page
@endsection

@section('content')
    <!--====== Start Main Section ======-->
    <main>
        <section class="header-content sticky-top py-5 wow fadeInLeft">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="content-description text-lg-center text-sm-center">
{{--                            <h1 class="h1">{{__('Welcome To ')}}<span>{{__('Engineer Mithu!')}}</span></h1>--}}

                                @foreach($topSections as $topSection)
                                    <h1>{{$topSection->title_one}} <span>{{$topSection->title_two}}</span></h1>
                                @endforeach


                            {{--                                <p class="text-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aperiam beatae--}}
                            {{--                                    deserunt dignissimos eveniet exercitationem illum inventore iure modi nulla odio--}}
                            {{--                                    officiis, placeat quasi qui sed sequi sunt ullam. Explicabo.</p>--}}
                            <div class="py-2 shear-btn">
                                <a href="#" class="ml-5 " id="hireBtn" onclick="audio.play()" target="_blank"> {{__('Hire Me ')}}<i
                                        class="fa fa-share"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--====== About Section ======-->
        <section class="py-5 about" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-header text-center">
                            <h2 class="text-uppercase">{{__('About')}} <span>{{__('Me')}}</span></h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container mt-5">
                <div class="row">
                    <div class="col-md-4">
                        <div class="about-left">
                            <img src="{{asset('assets/img/mithuhasan.jpg')}}" class="img-fluid w-100" alt="Not Found!">
                            <div class="about-left-details">
                                <h4 class="text-uppercase">{{__('Md. Mithu Hasan')}}</h4>
                                <ul>
                                    <li><a href="https://www.facebook.com/engineermithuofficial" onclick="audio.play()"
                                           target="_blank"><i
                                                class="bx bxl-facebook"></i></a></li>
                                    <li><a href="https://twitter.com/mithu_engineer" onclick="audio.play()" target="_blank"><i
                                                class="bx bxl-twitter"></i></a></li>
                                    <li><a href="https://www.linkedin.com/in/md-mithu-hasan-aaba83167/"
                                           onclick="audio.play()" target="_blank"><i
                                                class="bx bxl-linkedin"></i></a></li>
                                    <li><a href="https://github.com/EngineerMithu" onclick="audio.play()" target="_blank"><i
                                                class="bx bxl-github"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="about-right">
                            <h3 class="py-5">I'm a freelance Web Developer</h3>
                            <p>{{__('I’m an independent web developer with more than 3 years experience of front
                                    end and back end web development. I also experience in Graphics design. I think that "A
                                    creationist in every sense of the world". I love to do web programming, learning new things.
                                    I’m a very hard worker like to getting risks and challenges.')}} </p>
                            <p class="py-3">{{__('I’m strongly experienced in HTML5, CSS3, Bootstrap5, convert PSD /JPEG to
                                        HTML,')}}{{__(' JavaScript, jQuery, PHP(Laravel), MySQL, as well as Adobe Photoshop and
                                    Illustrator. I have experienced in a responsive design that supports any device. I always work
                                    on clients satisfaction.')}}</p>
                            <a href="https://drive.google.com/file/d/15MAyIwXQSLeDoi2ICdNGXZkPcqaK0wwc/view?usp=sharing"
                               target="_blank" onclick="audio.play()">Resume / Cv <i
                                    class="bx bx-download wow bounceOutDown"
                                    data-wow-duration="1s" data-wow-delay="2s"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--====== End About Section ======-->
        <!--====== Video Area Section Start ======-->
        <section class="py-5 video-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="video-section-header">
                            <h2>{{__('Want to know More About Me ?')}}</h2>
                        </div>
                        <div class="video-icon">
                            <a id="youtube-video"
                               href="https://www.youtube.com/watch?v=i4laq6e_B6U&list=PLdZgtDJATfC_6SJp16QA1kfFXZOrrcMzM"
                               target="_blank" onclick="audio.play()"><i class="bx bx-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--====== End Video Area Section ======-->


        <!--====== Services Area Start ======-->
        <section class="py-5 services" id="services">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-header text-center">
                            <h2 class="text-uppercase">{{__('My')}} <span>{{__('Services')}}</span></h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="services-box text-center">
                            <i class="bx bx-desktop" aria-hidden="true"></i>
                            <h4>Web Design</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore ab odio quas ipsam sed quo
                                minima suscipit vero, voluptate aspernatur!</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="services-box text-center">
                            <i class="bx bx-code" aria-hidden="true"></i>
                            <h4>Web Development</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore ab odio quas ipsam sed quo
                                minima suscipit vero, voluptate aspernatur!</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="services-box text-center">
                            <i class="bx bx-photo-album"></i>
                            <h4>Graphics Design</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore ab odio quas ipsam sed quo
                                minima suscipit vero, voluptate aspernatur!</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="services-box text-center">
                            <i class="bx bx-comment" aria-hidden="true"></i>
                            <h4>Live Support</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore ab odio quas ipsam sed quo
                                minima suscipit vero, voluptate aspernatur!</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="services-box text-center">
                            <i class="bx bx-support" aria-hidden="true"></i>
                            <h4>Friendly Support</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore ab odio quas ipsam sed quo
                                minima suscipit vero, voluptate aspernatur!</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="services-box text-center">
                            <i class="bx bx-tachometer"></i>
                            <!-- <i class="fa fa-first-order"></i> -->
                            <h4>Super First Web</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore ab odio quas ipsam sed quo
                                minima suscipit vero, voluptate aspernatur!</p>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!--====== End Services Area Start ======-->

        <!--====== Skill Area Start ======-->
        <section class="py-5 skill" id="skill">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-12 col-xl-12">
                        <div class="skill-section-header text-center">
                            <h2 class="text-uppercase">{{__('My')}} <span>{{__('Skills')}}</span></h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="skill-menu">
                            <ul class="nav nav-pills justify-content-center">
                                <li class="nav-item ms-1">
                                    <a href="#frontend" data-bs-toggle="pill" data-bs-target="#frontend"
                                       class="nav-link rounded-15" onclick="audio.play()">Frontend</a>
                                </li>
                                <li class="nav-item ms-1">
                                    <a class="nav-link rounded-15 " href="#backend" data-bs-toggle="pill"
                                       onclick="audio.play()">Backend</a>
                                </li>
                                <li class="nav-item ms-1">
                                    <a class="nav-link rounded-15  active" aria-current="page" href="#all"
                                       data-bs-toggle="pill" onclick="audio.play()">All</a>
                                </li>
                                <li class="nav-item ms-1">
                                    <a class="nav-link rounded-15 " href="#programming"
                                       data-bs-toggle="pill" onclick="audio.play()">Programming</a>
                                </li>
                                <li class="nav-item ms-1">
                                    <a class="nav-link rounded-15" href="#tools" data-bs-toggle="pill"
                                       onclick="audio.play()">Tools</a>
                                </li>
                            </ul>
                            <div class="tab-content mt-5">
                                <div id="frontend" class="tab-pane fade show ">
                                    <div class="row">
                                        <div class="col-md-6 offset-3">
                                            <div class="frontend-skill">
                                                <div class="skills-set ms-5">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <img src="{{asset('assets/img/skill/html.png')}}" alt="Not Found!">
                                                            <h6 class="h6 mt-3 text-uppercase">html5</h6>
                                                        </div>
                                                        <div class="col-md-4 css-skill">
                                                            <img src="{{asset('assets/img/skill/css.png')}}" height="40"
                                                                 width="50" alt="Not Found!">
                                                            <h6 class="h6 mt-3 text-uppercase">css3</h6>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="bootstrap-css">
                                                                <img src="{{asset('assets/img/skill/bootstrap.png')}}"
                                                                     alt="Not Found!">
                                                                <h6 class="h6 mt-3 ">Bootstrap</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-4">
                                                        <div class="col-md-4">
                                                            <img src="{{asset('assets/img/skill/ajax.png')}}" alt="Not Found!">
                                                            <h6 class="h6 mt-3 ml-5">Ajax</h6>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <img src="{{asset('assets/img/skill/vuejs.png')}}" alt="Not Found!">
                                                            <h6 class="h6 mt-3 ml-5">Vue js3</h6>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <img
                                                                src="{{asset('assets/img/skill/jquery.png')}}"
                                                                alt="Not Found!">
                                                            <h6 class="h6 mt-3 ml-5">jquery</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="backend" class="tab-pane fade show ">
                                    <div class="row">
                                        <div class="col-md-6 offset-3">
                                            <div class="frontend-skill">
                                                <div class="skills-set ms-5">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="laravel-css">
                                                                <img src="{{asset('assets/img/skill/laravel.png')}}"
                                                                     alt="Not Found!">
                                                                <h6 class="h6 mt-3">Laravel</h6>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 css-skill">
                                                            <div class="mysql-css">
                                                                <img src="{{asset('assets/img/skill/mysql.png')}}" height="40"
                                                                     width="50" alt="Not Found!">
                                                                <h6 class="h6 mt-3 ">MySql</h6>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="bootstrap-css">
                                                                <img src="{{asset('assets/img/skill/api.png')}}" alt="Not Found!">
                                                                <h6 class="h6 mt-3 ">Rest API</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="all" class="tab-pane fade show">
                                    <div class="row">
                                        <div class="col-md-6 offset-3">
                                            <div class="frontend-skill">
                                                <div class="skills-set ms-5">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <img src="{{asset('assets/img/skill/html.png')}}" alt="Not Found!">
                                                            <h6 class="h6 mt-3 text-uppercase">html5</h6>
                                                        </div>
                                                        <div class="col-md-4 css-skill">
                                                            <img src="{{asset('assets/img/skill/css.png')}}" height="40"
                                                                 width="50" alt="Not Found!">
                                                            <h6 class="h6 mt-3 text-uppercase">css3</h6>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="bootstrap-css">
                                                                <img src="{{asset('assets/img/skill/bootstrap.png')}}"
                                                                     alt="Not Found!">
                                                                <h6 class="h6 mt-3 ">Bootstrap</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-4">
                                                        <div class="col-md-4">
                                                            <img src="{{asset('assets/img/skill/ajax.png')}}" alt="Not Found!">
                                                            <h6 class="h6 mt-3 ml-5">Ajax</h6>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <img src="{{asset('assets/img/skill/vuejs.png')}}" alt="Not Found!">
                                                            <h6 class="h6 mt-3 ml-5">Vue js3</h6>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <img
                                                                src="{{asset('assets/img/skill/jquery.png')}}"
                                                                alt="Not Found!">
                                                            <h6 class="h6 mt-3 ml-5">jquery</h6>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-4">
                                                        <div class="col-md-4">
                                                            <div class="laravel-css">
                                                                <img src="{{asset('assets/img/skill/laravel.png')}}"
                                                                     alt="Not Found!">
                                                                <h6 class="h6 mt-3">Laravel</h6>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 css-skill">
                                                            <div class="mysql-css">
                                                                <img src="{{asset('assets/img/skill/mysql.png')}}" height="40"
                                                                     width="50" alt="Not Found!">
                                                                <h6 class="h6 mt-3 ">MySql</h6>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="bootstrap-css">
                                                                <img src="{{asset('assets/img/skill/api.png')}}" alt="Not Found!">
                                                                <h6 class="h6 mt-3 ">Rest API</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-5">
                                                        <div class="col-md-4">
                                                            <img src="{{asset('assets/img/skill/php.png')}}" alt="Not Found!">
                                                            <h6 class="h6 mt-3 text-uppercase">PHP</h6>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="javaScript-css">
                                                                <img src="{{asset('assets/img/skill/js.png')}}" height="40"
                                                                     width="50" alt="Not Found!">
                                                                <h6 class="h6 mt-3 ">JavaScript</h6>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="c-css">
                                                                <img src="{{asset('assets/img/skill/c.png')}}" alt="Not Found!">
                                                                <h6 class="h6 mt-3">C</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-5">
                                                        <div class="col-md-4">
                                                            <div class="ca-css">
                                                                <img src="{{asset('assets/img/skill/cc.png')}}" alt="Not Found!">
                                                                <h6 class="h6 mt-3">C#</h6>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <img src="{{asset('assets/img/skill/java.png')}}" alt="Not Found!">
                                                            <h6 class="h6 mt-3 ">Java</h6>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="python-css">
                                                                <img src="{{asset('assets/img/skill/python.png')}}"  alt="Not Found!">
                                                                <h6 class="h6 mt-3 ">Python</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-5">
                                                        <div class="col-md-4">
                                                            <div class="github-css">
                                                                <img src="{{asset('assets/img/skill/github.png')}}"
                                                                     alt="Not Found!">
                                                                <h6 class="mt-3">Github</h6>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="">
                                                                <img src="{{asset('assets/img/skill/slack.png')}}"
                                                                     alt="Not Found!">
                                                                <h6 class="h6 mt-3 ">Slack</h6>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="postman-css">
                                                                <img src="{{asset('assets/img/skill/postman.png')}}"
                                                                     alt="Not Found!">
                                                                <h6 class="h6 mt-3">Postman</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="programming" class="tab-pane fade show ">
                                    <div class="row">
                                        <div class="col-md-6 offset-3">
                                            <div class="frontend-skill">
                                                <div class="skills-set ms-5">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="php-css">
                                                                <img src="{{asset('assets/img/skill/php.png')}}" alt="Not Found!">
                                                                <h6 class="mt-3 ">PHP</h6>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="javaScript-css">
                                                                <img src="{{asset('assets/img/skill/js.png')}}"  alt="Not Found!">
                                                                <h6 class="h6 mt-3 ">JavaScript</h6>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="c-css">
                                                                <img src="{{asset('assets/img/skill/c.png')}}" alt="Not Found!">
                                                                <h6 class="h6 mt-3">C</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-5">
                                                        <div class="col-md-4">
                                                            <img src="{{asset('assets/img/skill/java.png')}}" alt="Not Found!">
                                                            <h6 class="h6 mt-3 ">Java</h6>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="ca-css">
                                                                <img src="{{asset('assets/img/skill/cc.png')}}" alt="Not Found!">
                                                                <h6 class="h6 mt-3">C#</h6>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="python-css">
                                                                <img src="{{asset('assets/img/skill/python.png')}}" height="40"
                                                                     width="50" alt="Not Found!">
                                                                <h6 class="h6 mt-3 ">Python</h6>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="tools" class="tab-pane fade show ">
                                    <div class="row">
                                        <div class="col-md-6 offset-3">
                                            <div class="frontend-skill">
                                                <div class="skills-set ms-5">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="github-css">
                                                                <img src="{{asset('assets/img/skill/github.png')}}"
                                                                     alt="Not Found!">
                                                                <h6 class="mt-3">Github</h6>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="">
                                                                <img src="{{asset('assets/img/skill/slack.png')}}"
                                                                     alt="Not Found!">
                                                                <h6 class="h6 mt-3 ">Slack</h6>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="postman-css">
                                                                <img src="{{asset('assets/img/skill/postman.png')}}"
                                                                     alt="Not Found!">
                                                                <h6 class="h6 mt-3">Postman</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--====== End Skill Area Start ======-->


        <!--====== Counter Area Start ======-->
        <section class="py-5 counter">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 text-center mt-3">
                        <div class="counter-box">
                            <p><i class="fa fa-american-sign-language-interpreting" aria-hidden="true"></i></p>
                            <span class="counter-number">128</span>
                            <p class="counter-name">happy client</p>
                        </div>
                    </div>
                    <div class="col-md-3 text-center mt-3">
                        <div class="counter-box">
                            <p><i class="bx bxs-check-circle"></i></p>
                            <span class="counter-number">400</span>
                            <p class="counter-name">Work Complete</p>
                        </div>
                    </div>
                    <div class="col-md-3 text-center mt-3">
                        <div class="counter-box">
                            <p><i class="bx bxs-watch" aria-hidden="true"></i></p>
                            <span class="counter-number">560</span>
                            <p class="counter-name">total hours</p>
                        </div>
                    </div>
                    <div class="col-md-3 text-center mt-3">
                        <div class="counter-box">
                            <p><i class="bx bx-coffee"></i></p>
                            <span class="counter-number">600</span>
                            <p class="counter-name">coffe we drink</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--====== Counter Area End ======-->


        <!--====== Portfolio Area Start ======-->
        <section class="py-5 portfolio" id="portfolio">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-xl-12">
                        <div class="section-header text-center">
                            <h2 class="text-uppercase">{{__('My')}} <span>{{__('Portfolio')}}</span></h2>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-4">
                        <div class="card-deck mt-3">
                            <div class="card">
                                <figure>
                                    <img src="{{asset('assets/img/portfolio/r4.jpg')}}" class="card-img-top w-100" alt="...">
                                </figure>
                                <div class="card-body bg-secondary card-content">
                                    <h2 class="card-title fw-normal text-light">Renter App</h2>
                                    <p class="card-text fw-normal text-light mt-4">This is a single page service provider
                                        web application. Customer can order a services if he/she is logged in using google
                                        authentication. The administrator can add and delete the services and change the
                                        customer's order status. After taking service customer can review.</p>
                                    <div class="technology mb-2 mt-3">
                                        <span>HTML</span>
                                        <span>CSS</span>
                                        <span>Bootstrap</span>
                                        <span>JavaScript</span>
                                        <span>PHP (Laravel)</span>
                                        <span>MySql</span>
                                    </div>
                                </div>
                                <div class="card-footer bg-dark footer-icon">
                                    <a href="#" onclick="audio.play()" target="_blank" class="site-link"><i
                                            class="bx bxl-github"></i></a>
                                    <a href="#" onclick="audio.play()" target="_blank"
                                       class="site-link"><i class="bx bx-link-external"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card-deck mt-3">
                            <div class="card">
                                <div class="card">
                                    <figure>
                                        <img src="{{asset('assets/img/portfolio/ecommerce.jpg')}}" class="card-img-top w-100"
                                             alt="...">
                                    </figure>
                                    <div class="card-body bg-secondary card-content">
                                        <h2 class="card-title fw-normal text-light">Urdan</h2>
                                        <p class="card-text fw-normal text-light mt-4">This is a single page service
                                            provider web application. Customer can order a services if he/she is logged in
                                            using google authentication. The administrator can add and delete the services
                                            and change the customer's order status. After taking service customer can
                                            review.</p>
                                        <div class="technology mb-2 mt-3">
                                            <span>HTML</span>
                                            <span>CSS</span>
                                            <span>Bootstrap</span>
                                            <span>JavaScript</span>
                                            <span>jQuery</span>
                                            <span>Ajax</span>
                                            <span>PHP (Laravel)</span>
                                            <span>MySql</span>
                                        </div>
                                    </div>
                                    <div class="card-footer bg-dark footer-icon">
                                        <a href="#" onclick="audio.play()" target="_blank"
                                           class="site-link"><i class="bx bxl-github"></i></a>
                                        <a href="#" onclick="audio.play()" target="_blank"
                                           class="site-link"><i class="bx bx-link-external"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card-deck mt-3">
                            <div class="card">
                                <div class="card">
                                    <figure>
                                        <img src="{{asset('assets/img/portfolio/ms-icon-144x144.png')}}"
                                             class="card-img-top w-100" alt="...">
                                    </figure>
                                    <div class="card-body bg-secondary card-content">
                                        <h2 class="card-title fw-normal text-light">ibiaTV</h2>
                                        <p class="card-text fw-normal text-light mt-4">This is a single page service
                                            provider web application. Customer can order a services if he/she is logged in
                                            using google authentication. The administrator can add and delete the services
                                            and change the customer's order status. After taking service customer can
                                            review.</p>
                                        <div class="technology mb-2 mt-3">
                                            <span>HTML</span>
                                            <span>CSS</span>
                                            <span>Bootstrap</span>
                                            <span>JavaScript</span>
                                            <span>jQuery</span>
                                            <span>Ajax</span>
                                            <span>PHP (Laravel)</span>
                                            <span>MySql</span>
                                            <span>API</span>
                                        </div>
                                    </div>
                                    <div class="card-footer bg-dark footer-icon">
                                        <a href="#"  onclick="audio.play()" target="_blank"
                                           class="site-link"><i class="bx bxl-github"></i></a>
                                        <a href="#"  onclick="audio.play()" target="_blank"
                                           class="site-link"><i class="bx bx-link-external"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--====== End Portfolio Area Start ======-->


        <!--====== Team Area Start ======-->
        <section class="py-5 team" id="team">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 ">
                        <div class="team-section-header text-center">
                            <h2 class="text-uppercase">{{__('My')}} <span>{{__('Team')}}</span></h2>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Section Content -->
            <div class="container py-5">
                <div class="owl-carousel owl-carousel-team owl-theme">
                    <div class="team-item">
                        <img src="{{asset('assets/img/Team/1.jpg')}}" alt="team" class="w-100" />
                        <div class="team-item-hover">
                            <div class="team-hover-content">
                                <h4 class="team-name">Md. Mithu Hasan</h4>
                                <ul>
                                    <li><a href="#" onclick="audio.play()"><i class="bx bxl-facebook"></i></a></li>
                                    <li><a href="#" onclick="audio.play()"><i class="bx bxl-twitter"></i></a></li>
                                    <li><a href="#" onclick="audio.play()"><i class="bx bxl-linkedin"></i></a></li>
                                    <li><a href="#" onclick="audio.play()"><i class="bx bxl-github"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="team-item">
                        <img src="{{asset('assets/img/Team/2.jpg')}}" alt="team" class="w-100" />
                        <div class="team-item-hover">
                            <div class="team-hover-content">
                                <h4 class="team-name">Adity Toma</h4>
                                <ul>
                                    <li><a href="#" onclick="audio.play()"><i class="bx bxl-facebook"></i></a></li>
                                    <li><a href="#" onclick="audio.play()"><i class="bx bxl-twitter"></i></a></li>
                                    <li><a href="#" onclick="audio.play()"><i class="bx bxl-linkedin"></i></a></li>
                                    <li><a href="#" onclick="audio.play()"><i class="bx bxl-github"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="team-item">
                        <img src="{{asset('assets/img/Team/03.jpg')}}" alt="team" class="w-100" />
                        <div class="team-item-hover">
                            <div class="team-hover-content">
                                <h4 class="team-name">Subroto Karmoker</h4>
                                <ul>
                                    <li><a href="#" onclick="audio.play()"><i class="bx bxl-facebook"></i></a></li>
                                    <li><a href="#" onclick="audio.play()"><i class="bx bxl-twitter"></i></a></li>
                                    <li><a href="#" onclick="audio.play()"><i class="bx bxl-linkedin"></i></a></li>
                                    <li><a href="#" onclick="audio.play()"><i class="bx bxl-github"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="team-item">
                        <img src="{{asset('assets/img/Team/4.jpg')}}" alt="team" class="w-100" />
                        <div class="team-item-hover">
                            <div class="team-hover-content">
                                <h4 class="team-name">Farhat Dustu</h4>
                                <ul>
                                    <li><a href="#" onclick="audio.play()"><i class="bx bxl-facebook"></i></a></li>
                                    <li><a href="#" onclick="audio.play()"><i class="bx bxl-twitter"></i></a></li>
                                    <li><a href="#" onclick="audio.play()"><i class="bx bxl-linkedin"></i></a></li>
                                    <li><a href="#" onclick="audio.play()"><i class="bx bxl-github"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="team-item">
                        <img src="{{asset('assets/img/Team/5.jpg')}}" alt="team" class="w-100" />
                        <div class="team-item-hover">
                            <div class="team-hover-content">
                                <h4 class="team-name">Md. Mithu Hasan</h4>
                                <ul>
                                    <li><a href="#" onclick="audio.play()"><i class="bx bxl-facebook"></i></a></li>
                                    <li><a href="#" onclick="audio.play()"><i class="bx bxl-twitter"></i></a></li>
                                    <li><a href="#" onclick="audio.play()"><i class="bx bxl-linkedin"></i></a></li>
                                    <li><a href="#" onclick="audio.play()"><i class="bx bxl-github"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="team-item">
                        <img src="{{asset('assets/img/Team/06.jpg')}}" alt="team" class="w-100" />
                        <div class="team-item-hover">
                            <div class="team-hover-content">
                                <h4 class="team-name">Tamanna</h4>
                                <ul>
                                    <li><a href="#" onclick="audio.play()"><i class="bx bxl-facebook"></i></a></li>
                                    <li><a href="#" onclick="audio.play()"><i class="bx bxl-twitter"></i></a></li>
                                    <li><a href="#" onclick="audio.play()"><i class="bx bxl-linkedin"></i></a></li>
                                    <li><a href="#" onclick="audio.play()"><i class="bx bxl-github"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--====== End Team Area Start ======-->

        <!--====== Testimonial Area Start ======-->
        <section class="testimonial py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <div class="owl-carousel owl-carousel-testimonial owl-theme">
                            <div class="item text-center">
                                <img src="{{asset('assets/img/mithu.jpg')}}" alt="testimonial" class="w-100" />
                                <h4 class="testimonial-name">Engineer Mithu </h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                                    dolor </p>
                            </div>
                            <div class="item text-center">
                                <img src="{{asset('assets/img/mithu.jpg')}}" alt="testimonial" class="w-100" />
                                <h4 class="testimonial-name">Md. Mithu Hasan</h4>
                                <p class="testimonial-para">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                                    aute irure dolor </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--======  Testimonial Area End ======-->

        <!--====== Blog Area Start ======-->
        <section class="py-5 blog" id="blog">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center wow zoomIn">
                        <div class="section-header">
                            <h2>Latest <span>Blog</span></h2>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Section Content -->
            <div class="container py-5">
                <div class="row">
                    <div class="col-md-4 mt-3">
                        <div class="blog-item">
                            <img src="{{asset('assets/img/blog/blog-4-360x230.jpg')}}" alt="blog" class="w-100" />
                        </div>
                        <article class="blog-details">
                            <h2 class="blog-title">Web Design Course</h2>
                            <p class="date"><i class="bx bx-calendar"></i> 11 june 2017</p>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                            </p>
                            <a class="mt-3  btn btn-outline-primary" href="#" onclick="audio.play()"><i class="bx bx-book-reader"></i> Read More.... </a>
                        </article>
                    </div>
                    <div class="col-md-4 mt-3">
                        <div class="blog-item">
                            <img src="{{asset('assets/img/blog/blog-5-360x230.jpg')}}" alt="blog" class="w-100" />
                        </div>
                        <article class="blog-details">
                            <h2 class="blog-title">Web Development Course</h2>
                            <p class="date"><i class="bx bx-calendar"></i> 11 March 2018</p>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                            </p>
                            <a class="mt-3  btn btn-outline-primary" href="#" onclick="audio.play()"><i class="bx bx-book-reader"></i> Read More.... </a>
                        </article>
                    </div>
                    <div class="col-md-4 mt-3">
                        <div class="blog-item">
                            <img src="{{asset('assets/img/blog/blog-1-360x230.jpg')}}" alt="blog" class="w-100"/>
                        </div>
                        <article class="blog-details">
                            <h2 class="blog-title">Graphics Design Course</h2>
                            <p class="date"><i class="bx bx-calendar"></i> 11 August 2017</p>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                            </p>
                            <a class="mt-3  btn btn-outline-primary" href="#" onclick="audio.play()"><i class="bx bx-book-reader"></i> Read More.... </a>
                        </article>
                    </div>
                </div>
            </div>
        </section>
        <!--====== End Blog Area  ======-->

        <!--====== FAQ Area Start ======-->
        <section class="py-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center wow zoomIn">
                        <div class="section-header">
                            <h2>FAQ <span>ME</span></h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 py-5">
                        <div class="accordion" id="myAccordion">
                            <div class="card">
                                <div class="card-header faq-css">
                                    <a href="#link1" data-bs-toggle="collapse" class="btn btn-link btn-block" onclick="audio.play()" >What is your strongest programming language?</a>
                                </div>
                                <div id="link1" class="collapse ans-css" data-bs-parent="#myAccordion">
                                    <div class="card-body">
                                        <p>My strongest programming languages are PHP and JavaScript</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header faq-css">
                                    <a href="#link2" data-bs-toggle="collapse" class="btn btn-link btn-block" onclick="audio.play()" >What is your strongest programming language framework?</a>
                                </div>
                                <div id="link2" class="collapse ans-css" data-parent="#myAccordion">
                                    <div class="card-body">
                                        <p>My strongest programming language framework is Laravel. I also have knowledge ASP.NET </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header faq-css">
                                    <a href="#link3" data-bs-toggle="collapse"
                                       class="btn btn-link btn-block" onclick="audio.play()"> Why are you want to switch your current company?</a>
                                </div>
                                <div id="link3" class="collapse ans-css" data-parent="#myAccordion">
                                    <div class="card-body">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero vel odio veniam</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header faq-css">
                                    <a href="#link4" data-bs-toggle="collapse"
                                       class="btn btn-link btn-block" onclick="audio.play()">What is your expected salary?</a>
                                </div>
                                <div id="link4" class="collapse ans-css" data-parent="#myAccordion">
                                    <div class="card-body">
                                        <p>My expected salary range is now 20k-30k</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--====== FAQ Area Area End ======-->

        <!--====== Contact Area Start ======-->
        <section class="py-5" id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center wow zoomIn">
                        <div class="section-header">
                            <h2>Contact <span>Us</span></h2>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Section Content -->
            <div class="container contract mt-5">
                <form action="">
                    <div class="row">
                        <div class="col-md-10 offset-md-1">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Your Name" required/>
                                </div>
                                <div class="col-md-6">
                                    <input type="email" class="form-control" placeholder="Your Email" required/>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <textarea  class="form-control" placeholder="Your Message...." required ></textarea>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" onclick="audio.play()">Send Message <i class="bx bx-paper-plane wow backOutRight" data-wow-duration="1s" data-wow-delay="2s"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
        <!--====== End Contact Area  ======-->
    </main>
    <!--====== End Main Section ======-->

@endsection

@section('modal')
    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
         aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <!-- Close -->
                <div class="modal-header">
                    <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="input-group">
                        <input type="search" class="form-control" placeholder="Search" aria-label="Search"
                               aria-describedby="search-addon"/>
                        <button type="button" class="btn btn-primary text-uppercase">search</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('front-js')
    <script type="text/javascript">
        const audio = new Audio();
        audio.src = "{{asset('assets/audio/click.mp3')}}";
    </script>
@endsection
