<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Zealous It solution</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
              <!--animated css for animation------>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
             <!--owl carousel for slides------>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha256-kksNxjDRxd/5+jGurZUJd1sdR2v+ClrCl3svESBaJqw=" crossorigin="anonymous" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha256-UhQQ4fxEeABh4JrcmAJ1+16id/1dnlOEVCFOxDef9Lw=" crossorigin="anonymous" />


        <!-- font awesome -->
        <script src="https://kit.fontawesome.com/2e5f65967e.js" crossorigin="anonymous"></script>

        <script type="text/javascript">
            function changeText(cont1,cont2,speed){
                var Otext=cont1.text();
                var Ocontent=Otext.split("");
                var i=0;
                function show(){
                    if(i<Ocontent.length)
                    {
                        cont2.append(Ocontent[i]);
                        i=i+1;
                    };
                };
                    var Otimer=setInterval(show,speed);
            };
            $(document).ready(function(){
                changeText($("p"),$(".p2"),150);
                clearInterval(Otimer);
            });
            </script>
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <!-- Styles -->

    </head>
    <body data-spy="scroll" data-target="#navbar" data-offset="10">


    <header>

        <nav class="navbar navbar-expand-md navbar-light fixed-top " id="nav-bar" data-spy="affix">
        <a href="#" class="navbar-brand" style="color:#fff"><img class="logo"  src="{{asset('images/logo3.png')}}"></a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <i class="fas fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav animated slideInRight" >
                    <a href="#home" class="nav-links smooth-scroll">Home</a>
                    <a href="#about" class="nav-links smooth-scroll">About us</a>
                    <div class="nav-links dropdown">
                        <a href="#" class="nav-links smooth-scroll" data-toggle="dropdown">What we offer</a>
                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item">Service</a>
                            <a href="#" class="dropdown-item">Technologies</a>
                            <a href="#" class="dropdown-item">industries</a>
                        </div>
                    </div>
                    <a href="#our-work" class="nav-links smooth-scroll">Our works</a>
                    <a href="#testimonial" class="nav-links smooth-scroll">Testimonials</a>
                    <a href="#team" class="nav-links smooth-scroll">Team</a>
                    <a href="#clients" class="nav-links smooth-scroll">Clients</a>
                    <a href="#contact" class="nav-links smooth-scroll">free enquire</a>
                    <div class="nav-links dropdown">
                        <a href="#" class="nav-links smooth-scroll" data-toggle="dropdown">support</a>
                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item">Faq</a>
                            <a href="#" class="dropdown-item">forums</a>
                            <a href="#" class="dropdown-item">help desk</a>
                            <a href="#" class="dropdown-item">blog</a>
                        </div>
                    </div>
                <a href="{{route('login')}}" class="nav-links smooth-scroll">Login</a>

                </div>

            </div>
        </nav>

    </header>
    <section id="home">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="4"></li> <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <div id="home-content-box">
                        <div id="home-content-box-inner">
                            <div id="home-heading" class="animated zoomIn">
                                <h3>WEB DESIGN & WEB SYSTEM DEVELOPMENT</h3>
                                <p class="banner-desc"> </p>
                            </div>
                            <div id="home-btn" class="animated zoomIn">
                                <div class="talk"><a class="talk-button"  href="">Talk to our team</a></div>   </div>
                        </div>
                    </div>
                </div>
                <div id="target" class="carousel-item slider-two">
                    <div id="home-content-box">
                        <div id="home-content-box-inner">
                            <div id="home-heading" class="animated zoomIn">
                                <h3>MOBILE DEVELOPMENT</h3>
                                <p style=""> </p>
                            </div>
                            <div id="home-btn" class="animated zoomIn">
                                <div class="talk"><a class="talk-button"  href="">Talk to our team</a></div>   </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item slider-three">
                    <div id="home-content-box">
                        <div id="home-content-box-inner">
                            <div id="home-heading" class="animated zoomIn">
                                <h3>NETWORK CONFIGURATION & NETWORK TROUBLESHOOT</h3>
                                <p style=""> </p>
                            </div>
                            <div id="home-btn" class="animated zoomIn">
                                <div class="talk"><a class="talk-button"  href="">Talk to our team</a></div>   </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item slider-four">
                    <div id="home-content-box">
                        <div id="home-content-box-inner">
                            <div id="home-heading" class="animated zoomIn">
                                <h3>WEB DESIGN & WEB SYSTEM DEVELOPMENT</h3>
                                <p style=""> </p>
                            </div>
                            <div id="home-btn" class="animated zoomIn">
                                <div class="talk"><a class="talk-button"  href="">Talk to our team</a></div>   </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div id="home-content-box">
                        <div id="home-content-box-inner">
                            <div id="home-heading" class="animated zoomIn">
                                <h3>DEVICE MAINTAINANCE AND REPAIRE</h3>
                                <p style=""> </p>
                            </div>
                            <div id="home-btn" class="animated zoomIn">
                                <div class="talk"><a class="talk-button"  href="">Talk to our team</a></div>   </div>
                        </div>
                    </div>
                </div>

            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
        <section id="about">
            <div class="about-content">
                <div class="contents-title wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                    <h1  class="sect-tittle">who <span style="color:#2ec4b6">we are</span></h1>
                    </div>
                    <div class="content-title-underline wow slideInRight" data-wow-duration="1s" data-wow-delay=".5s">
                    </div>
                <p class="description wow slideInLeft">We are a boutique digital transformation consultancy and software development company
                    that provides cutting edge engineering solutions, helping Fortune 500 companies and
                    enterprise clients untangle complex issues that always emerge during their digital
                    evolution journey. Since 2007 we have been a visionary and a reliable software engineering
                     partner for world-class brands.</p>



            </div>
            <div class="container">
                <div class="contents-title wow fadeInDown" data-wow-duration="1s" data-wow-delay=".5s">
                    <h1  class="sect-tittle">why <span style="color:#2ec4b6">choose us</span></h1>
                    </div>
                    <div class="content-title-underline wow slideInRight" data-wow-duration="1s" data-wow-delay=".5s">
                    </div>
                    <p class="description wow slideInRight">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        Eum corrupti cupiditate tenetur expedita nisi, hic voluptatum officiis atque modi sit veritatis,
                         tempora nostrum voluptates! Accusamus sequi excepturi quisquam rem debitis.</p>
                         <div class="why-us">
                         <div class="row wow slideInDown">
                             <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                 <div class="why-card">
                                     <div class="row">
                                         <div class="col-lg-3 col-md-3 col-sm-6">
                                         <img  src="{{ asset('images/dedicate.png') }}" class="">
                                         </div>
                                         <div class="col-lg-9 col-md-9 col-sm-8">
                                             <h3 class="why-header">Dedicated Support</h3>
                                            </div>
                                            <p class="why-desc">
                                                Our technical support and maintenance services are fully equipped to maintain.
                                            </p>
                                     </div>


                                 </div>
                             </div>
                             <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <div class="why-card">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 col-sm-6">
                                        <img  src="{{ asset('images/team_.png') }}" class="">
                                        </div>
                                        <div class="col-lg-9 col-md-9 col-sm-8">
                                            <h3 class="why-header">Expert Team</h3>
                                           </div>
                                           <p class="why-desc">
                                           Zelous IT solution has the perfect blend of talented and experienced teams to provide the best service.
                                        </p>
                                    </div>
                                </div>
                             </div>
                             <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <div class="why-card">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 col-sm-6">
                                        <img  src="{{ asset('images/cost.png') }}" class="">
                                        </div>
                                        <div class="col-lg-9 col-md-9 col-sm-8">
                                            <h3 class="why-header">Cost Efficient</h3>
                                           </div>
                                           <p class="why-desc">
                                            We cater to our client's needs and offer our them services in a cost effective.
                                           </p>
                                    </div>
                                </div>
                             </div>
                         </div>
                         <div class="row wow slideInUp" style="margin-top:20px">
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <div class="why-card">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 col-sm-6">
                                        <img  src="{{ asset('images/trust.png') }}" class="">
                                        </div>
                                        <div class="col-lg-9 col-md-9 col-sm-8">
                                            <h3 class="why-header">Reliable & Trustworthy</h3>
                                           </div>
                                           <p class="why-desc">
                                            We work on our client's requirements and develop a solution that is reliable & Trustworthy.
                                           </p>
                                    </div>


                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                               <div class="why-card">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-6">
                                    <img  src="{{ asset('images/free-quote.png') }}" class="">
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-8">
                                        <h3 class="why-header">Free Quote</h3>
                                       </div>
                                       <p class="why-desc">
                                        Enquire about your new website or software or need help on your existing one, we are happy to assist you.
                                       </p>
                                </div>
                               </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                               <div class="why-card">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-6">
                                    <img  src="{{ asset('images/one-roof.png') }}" class="">
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-8">
                                        <h3 class="why-header">One Roof Solution</h3>
                                       </div>
                                       <p class="why-desc">
                                        Complete IT solutions under one roof, because we care.
                                       </p>
                                </div>
                               </div>
                            </div>
                        </div>

                         </div>
            </div>
        </section>


        <section id="service" >
            <div class="container">
                <div class="contents-title wow fadeInDown" data-wow-duration="1s" data-wow-delay=".5s">
                <h1 class="sect-tittle" style="padding-top:60px;">WHAT <span style="color:#2ec4b6">WE OFFER</span></h1>
                </div>
                <div class="content-title-underline wow slideInRight" data-wow-duration="1s" data-wow-delay=".5s">
                </div>
                <p class="description wow slideInLeft">
                    The exciting part of what we do is delivering creative strategies, tactics and approaches
                        that help our clients grow their business. Take a look at some examples below:
                </p>
                <div class="wow slideInRight">
            <nav>
                <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-service-tab" data-toggle="tab" href="#nav-service" role="tab" aria-controls="nav-service" aria-selected="true">SERVICES</a>
                    <a class="nav-item nav-link" id="nav-technology-tab" data-toggle="tab" href="#nav-technology" role="tab" aria-controls="nav-technology" aria-selected="false">TECHNOLOGIES</a>
                    <a class="nav-item nav-link" id="nav-industry-tab" data-toggle="tab" href="#nav-industry" role="tab" aria-controls="nav-industry" aria-selected="false">INDUSTRIES</a>
                </div>
            </nav>
            <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-service" role="tabpanel" aria-labelledby="nav-service-tab">
                    <div class="owl-carousel service-slider owl-theme">
                        <div class="service-content">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <img class="serv-image" src="{{ asset('images/web.png') }}">
                                </div>

                                <div class="col-lg-8 col-md-8 col-sm-8">
                                    <h6>Web and web system development</h6>

                                </div>
                            </div>
                        </div>
                        <div class="service-content">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <img class="serv-image" src="{{ asset('images/mobile.png') }}">
                                </div>

                                <div class="col-lg-8 col-md-8 col-sm-8">
                                    <h6>Mobile development Android & Ios</h6>
                                <P class="service-desc">
                                    Create an impactful mobile app that fits your brand
                                     and industry within a shorter time frame.

                                     </P>

                                </div>
                            </div>
                        </div>
                        <div class="service-content">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    bdhs
                                </div>

                                <div class="col-lg-8 col-md-8 col-sm-8">
                                    <h6>Network configuration & troubleshoot</h6>
                                </div>
                            </div>
                        </div>
                        <a href="">
                        <div class="service-content">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <img class="serv-image" src="{{ asset('images/consultant.png') }}">
                                </div>

                                <div class="col-lg-8 col-md-8 col-sm-8">
                                    <h6>IT Cosulting</h6>
                                    <P class="service-desc">
                                        We offer IT consulting services that will help you improve your
                                         software architecture, create a tech-driven digital strategy,
                                          and improve operations by optimising your software portfolio.

                                         </P>

                                </div>
                            </div>
                        </div>
                        </a>
                        <div class="service-content">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    bdhs
                                </div>

                                <div class="col-lg-8 col-md-8 col-sm-8">
                                    <h6>DEVICE MAINTAINANCE & REPAIRE</h6>
                                    <P class="service-desc">
                                        Zealous Company’s computer repair services can breathe life into even the most troublesome
                                         machines and save alot of money over purchasing new computers.
                                         </P>

                                </div>
                            </div>
                        </div>
                        <div class="service-content">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <img class="serv-image" src="{{ asset('images/logos.png') }}">
                                </div>

                                <div class="col-lg-8 col-md-8 col-sm-8">
                                    <h6>PROFESSIONAL LOGOS</h6>
                                    <P class="service-desc">
                                    A logo is the building block of your company’s brand identity.
                                     With its use on various parts of your business such as printed materials,
                                      your website, packaging, social media and more, your brand gets visibility.

                                    </P>

                                </div>
                            </div>
                        </div>
                        <div class="service-content">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    bdhs
                                </div>

                                <div class="col-lg-8 col-md-8 col-sm-8">
                                    <h6>POSTERS, BROCHURES & FLYERS</h6>
                                </div>
                            </div>
                        </div>
                        <div class="service-content">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    bdhs
                                </div>

                                <div class="col-lg-8 col-md-8 col-sm-8">
                                    <h6>BUSINESS PROFILE</h6>
                                    <P class="service-desc">
                                    Company profile is considered as a vital tool for any type of business or company
                                    and can be used as a powerful marketing tool to attract new customers and investors

                                </P>

                                </div>
                            </div>
                        </div>
                        <div class="service-content">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    bdhs
                                </div>

                                <div class="col-lg-8 col-md-8 col-sm-8">
                                    <h6>BUSINESS CARDS & ID CARDS</h6>
                                </div>
                            </div>
                        </div>
                        <div class="service-content">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    bdhs
                                </div>

                                <div class="col-lg-8 col-md-8 col-sm-8">
                                    <h6>BANNERS & STICKERS</h6>
                                </div>
                            </div>
                        </div>
                        <div class="service-content">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <img class="serv-image" src="{{ asset('images/security.jpg') }}">
                                </div>

                                <div class="col-lg-8 col-md-8 col-sm-8">
                                    <h6>DATA SECURITY & RECOVERY</h6>
                                </div>
                            </div>
                        </div>
                      </div>

                </div>
                <div class="tab-pane fade" id="nav-technology" role="tabpanel" aria-labelledby="nav-technology-tab">
                onsectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit dolor anim. Velit non irure adipisicing aliqua ullamco irure incididunt irure non esse consectetur nostrud minim non minim occaecat. Amet duis do nisi duis veniam non est eiusmod tempor incididunt tempor dolor ipsum in qui sit. Exercitation mollit sit culpa nisi culpa non adipisicing reprehenderit do dolore. Duis reprehenderit occaecat anim ullamco ad duis occaecat ex.
                </div>
                <div class="tab-pane fade" id="nav-industry" role="tabpanel" aria-labelledby="nav-industry-tab">
                    Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit dolor anim. Velit non irure adipisicing aliqua ullamco irure incididunt irure non esse consectetur nostrud minim non minim occaecat. Amet duis do nisi duis veniam non est eiusmod tempor incididunt tempor dolor ipsum in qui sit. Exercitation mollit sit culpa nisi culpa non adipisicing reprehenderit do dolore. Duis reprehenderit occaecat anim ullamco ad duis occaecat ex.
                </div>
             </div>
                </div>
            </div>
        </section>

        <section id="our-work">
            <div class="container">
                <div class="contents-title wow fadeInDown" data-wow-duration="1s" data-wow-delay=".5s">
                    <h1 class="sect-tittle" style="padding-top:60px;">our <span style="color:#2ec4b6">Work</span></h1>
                    </div>
                    <div class="content-title-underline wow slideInRight" data-wow-duration="1s" data-wow-delay=".5s">
                    </div>
        <div class="row">

            <div class="col-lg-6 col-md-6 col-sm-12" style="margin-top:35px">
                <div class="work-card">

                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12" style="margin-top:35px">
                <div class="work-card">

                </div>
            </div>
        </div>
        <div class="row" >

            <div class="col-lg-6 col-md-6 col-sm-12" style="margin-top:35px">
                <div class="work-card">

                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12" style="margin-top:35px">
                <div class="work-card">

                </div>
            </div>
        </div>
        <div class="load-more"><a href="">Load more</a></div>
            </div>
        </section>

        <section  id="testimonial" class="bg-parallax wow fadeIn" data-wow-duration="1s" data-wow-delay=".2s">

            <div class="content-box">
                <div class="content-title content-title-white wow fadeInDown" data-wow-duration="1s" data-wow-delay=".5s">
                    <h4 class="sect-tittle">What customers say</h4>
                </div>
                <div class="content-title-underline wow slideInRight" data-wow-duration="1s" data-wow-delay=".5s">
                </div>
                <div class="container">

                    <div class="row  wow bounceInDown" data-wow-duration="2s" data-wow-delay=".7s">
                        <div class="col-md-12 col-lg-12 col-sm-12">
                            <div id="customers-testimonials" class="text-center owl-carousel owl-theme">
                                <div class="testimonial">
                                    <div class="testimg">
                                        <img src="{{ asset('images/humud.jpg') }}" class="img-responsive img-circle test" alt="testimonial">
                                    </div>
                                    <div class="testdesc">
                                        <blockquote>
                                            <p>It has been such a pleasure working wth you.You always manage to follow up at all times and we
                                                relly apreciate it.Your company has shown such professionalism and it comes highly recommendable
                                                to anyone interested
                                            </p>
                                        </blockquote>
                                        <div class="testimonial-author">
                                            <p>
                                                <strong>
                                                    Humudi abdulhussein
                                                </strong>
                                                <span>
                                                    C.E.O & co-founder Huper tanzania
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial">
                                    <div class="testimg ">
                                        <img src="{{ asset('images/humud.jpg') }}" class="img-responsive img-circle test" alt="testimonial">
                                    </div>
                                    <div class="testdesc">
                                        <blockquote>
                                            <p> Thank you for the services. I had a lifetime experience.
                                            </p>
                                        </blockquote>
                                        <div class="testimonial-author">
                                            <p>
                                                <strong>
                                                    Humudi abdulhussein
                                                </strong>
                                                <span>
                                                    C.E.O & co-founder Huper tanzania
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="testimonial">
                                    <div class="testimg">
                                        <img src="{{ asset('images/humud.jpg') }}" class="img-responsive img-circle test" alt="testimonial">
                                    </div>
                                    <div class="testdesc">
                                        <blockquote>
                                            <p>Asanteni kwa huduma nzuri, nimefurahi kutumia huduma zetu.
                                            </p>
                                        </blockquote>
                                        <div class="testimonial-author">
                                            <p>
                                                <strong>
                                                    Humudi abdulhussein
                                                </strong>
                                                <span>
                                                    C.E.O & co-founder Huper tanzania
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

</section>
  <!-- Stats -->
  <!--
  <section id="stats">

    <div id="stats-cover" class="bg-parallax wow fadeIn" data-wow-duration="1s" data-wow-delay=".2s">

        <div class="content-box">
            <div class="content-title content-title-white wow animated fadeInDown" data-wow-duration="1s" data-wow-delay=".5s">
                <h4 class="sect-tittle" style="color:white"> We Never Stop Improving </h4>
                <div class="content-title-underline wow slideInRight" data-wow-duration="1s" data-wow-delay=".5s">
                </div>
            </div>

            <div class="container">

                <div class="row text-center wow animated bounceInLeft" data-wow-duration="1s" data-wow-delay=".5s">
                    <div class="col-md-3 col-sm-6">
                        <div class="stats-item">
                            <i class="fa fa-user fa-5x"></i>
                            <h2><span class="counter">  </span><span>+</span></h2>
                            <p>Visitors</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="stats-item">
                            <i class="fa fa-handshake-o fa-5x"></i>
                            <h2><span class="counter"> </span> <span>+</span></h2>
                            <p>clients</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="stats-item">
                            <i class="fa fa-heart-o fa-5x"></i>
                            <h2><span class="counter"> 1199 </span><span>+</span></h2>
                            <p>Project</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="stats-item">
                            <i class="fa fa-check fa-5x"></i>
                            <h2><span class="counter"> </span><span>+</span></h2>
                            <p>Award</p>
                        </div>
                    </div>

                </div>

            </div>
        </div>
         End Content Box
    </div>
</section>-->
<section id="team" class="bg-parallax">
    <div class="content-box">
        <div class="content-title  wow animated fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
            <h4 class="sect-tittle" style="color:#fff">Meet our amaizing team</h4>
            <div class="content-title-underline"></div>
        </div>
            <div class="container wow slideInRight" data-wow-duration="2s" data-wow-delay=".7s">

                <div class="row">
                    <div class="col-md-12">
                        <div id="team-members" class="owl-carousel owl-theme">
                            <div class="team-member">
                            <div class="team_pic">
                                <img src="{{ asset('images/mase.jpeg') }}"  alt="team-member">
                                </div>
                                <div class="team-member-info text-center">
                                    <h4 class="team-member-name">Masenu K Msuya</h4>
                                    <h4 class="team-member-designation"> developer & technician </h4>
                                    <ul class="social-list">
                                        <li><a class="social-icon icon-orange" href=""><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a class="social-icon icon-orange" href=""><i class="fab fa-twitter"></i></a></li>
                                        <li><a class="social-icon icon-orange" href=""><i class="fab fa-linkedin"></i></a></li>
                                        <li><a class="social-icon icon-orange" href=""><i class="fab fa-instagram"></i></a></li>
                                        </ul>
                                </div>
                            </div>
                            <div class="team-member">
                                <img src="{{ asset('images/user.png') }}" alt="team-member">
                                <div class="team-member-info text-center">
                                    <h4 class="team-member-name">Richard Mmari</h4>
                                    <h4 class="team-member-designation">developer & graphics designer</h4>
                                    <ul class="social-list">
                                        <li><a class="social-icon icon-orange" href=""><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a class="social-icon icon-orange" href=""><i class="fab fa-twitter"></i></a></li>
                                        <li><a class="social-icon icon-orange" href=""><i class="fab fa-linkedin"></i></a></li>
                                        <li><a class="social-icon icon-orange" href=""><i class="fab fa-instagram"></i></a></li>
                                        </ul>
                                </div>
                            </div>



                            <div class="team-member">
                                <img src="{{ asset('images/user.png') }}" alt="team-member">
                                <div class="team-member-info text-center">
                                    <h4 class="team-member-name">Emmanuel Lema</h4>
                                    <h4 class="team-member-designation">Mobile developer & Graphic designer</h4>
                                    <ul class="social-list">
                                        <li><a class="social-icon icon-orange" href=""><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a class="social-icon icon-orange" href=""><i class="fab fa-twitter"></i></a></li>
                                        <li><a class="social-icon icon-orange" href=""><i class="fab fa-linkedin"></i></a></li>
                                        <li><a class="social-icon icon-orange" href=""><i class="fab fa-instagram"></i></a></li>
                                        </ul>
                                </div>
                            </div>
                            <div class="team-member">
                                <img src="{{ asset('images/user.png') }}" alt="team-member">
                                <div class="team-member-info text-center">
                                    <h4 class="team-member-name">Godfrey Shekidere</h4>
                                    <h4 class="team-member-designation">System Admin & technician</h4>
                                    <ul class="social-list">
                                        <li><a class="social-icon icon-orange" href=""><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a class="social-icon icon-orange" href=""><i class="fab fa-twitter"></i></a></li>
                                        <li><a class="social-icon icon-orange" href=""><i class="fab fa-linkedin"></i></a></li>
                                        <li><a class="social-icon icon-orange" href=""><i class="fab fa-instagram"></i></a></li>
                                        </ul>
                                </div>
                            </div>

                        </div>

                        </div>
                    </div>
                </div>
            </div>
</section>
    <!--Clients-->
    <section id="clients">
        <div class="content-box">
            <div class="content-title  wow animated fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                <h3>Clients</h3>
                <div class="content-title-underline"></div>
            </div>

            <div class="container">
                <div class="row  wow animated bounceInLeft" data-wow-duration="1s" data-wow-delay=".5s">
                    <div class="
                    col-md-12">
                        <div id="clients-list" class="owl-carousel owl-theme">
                            <div class="client">
                                <img src="{{ asset('images/huper.png') }}" class="img-responsive" alt="client">
                            </div>
                            <div class="client">
                                <img src="{{ asset('images/savanna.png') }}" class="img-responsive" alt="client">
                            </div>
                            <div class="client">
                                <img src="{{ asset('images/bustz.png') }}" class="img-responsive" alt="client">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Content Box-->
    </section>

            <!--footer starts from here-->
            <footer>
                <div id="contact">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div id="contact-left">
                                    <h3>zealous</h3>
                                    <p>We believe in <strong>Simple</strong>, <strong>Clean</strong> & <strong>Modern </strong>Design
                                        Standards with Responsive Approach. Browse the amazing work of our company</p>
                                    <div id="contact-info">
                                        <address>
                                            <strong>Headquarters:</strong><br>
                                            <p>Shabaan robert st<br>
                                                Kurasini,Dar-es-salaam Tanzania</p>
                                        </address>
                                        <div id="phone-fax-email">
                                            <p>
                                                <strong>Phone:</strong><span> (255)-784-843-475</span><br>
                                                <strong>Fax:</strong><span> (234)-66-5754-8978</span><br>
                                                <strong>Email:</strong><span> info@Zelous.co.tz</span><br>
                                            </p>
                                        </div>
                                    </div>
                                    <ul class="social-list">
                                        <li><a href="#" class="social-icon icon-white"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#" class="social-icon icon-white"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#" class="social-icon icon-white"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="#" class="social-icon icon-white"><i class="fab fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div id="contact-right">
                                    @if (session('status'))
                                         <div class="alert alert-success">
                                            {{ session('status') }}
                                         </div>
                                    @endif
                                    <h3>FREE ENQUIRE</h3>
                                    <form action="{{ route('enquire.store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <input type="text" name="full-name" placeholder="Full Name" class="form-control">
                                        <input type="text" name="email" placeholder="Email Address" class="form-control">
                                        <textarea rows="5" name="message" placeholder="Message..." class="form-control"></textarea>
                                        <input type="file" name="file" id="file" class="inputfile" data-multiple-caption="{count} files selected" multiple />
                                        <label for="file"><i class=" icon-download fas fa-cloud-upload-alt"></i>upload a file</label>
                                        <div id="send-btn" style="margin-top:10px;">
                                            <input type="submit" class="btn btn-general bton-white" role="button" value="SEND"/>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div id="footer-bottom">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div id="footer-copyrights">
                                    <p>Copyrights &copy; <span id="year"></span> All Rights Reserved by Zealous It solution.</p>
                                </div>
                                <script>
                                    document.getElementById("year").innerHTML = new Date().getFullYear();
                                </script>
                            </div>
                            <div class="col-md-6 hidden-sm hidden-xs">
                                <div id="footer-menu">
                                    <ul>
                                        <li><a class="smooth-scroll" href="#home">Home</a>/</li>
                                        <li><a class="smooth-scroll" href="#services">Services</a>/</li>
                                        <li><a class="smooth-scroll" href="#work">Work</a>/</li>
                                        <li><a class="smooth-scroll" href="#team">Team</a>/</li>
                                        <li><a class="smooth-scroll" href="#testimonials">Testimonials</a>/</li>
                                        <li><a class="smooth-scroll" href="#pricing">Pricing</a>/</li>
                                        <li><a class="smooth-scroll" href="#stats">Stats</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="#home" id="back-to-top" class="btn btn-sm btn-red btn-back-to-top smooth-scroll hidden-sm hidden-xs"
                    title="home" role="button"><i class="fas fa-angle-up"></i></a>
            </footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="{{ asset('js/counter.js') }}" defer></script>

<!--backstretch js-->
<script src="{{ asset('js/backstretch.js') }}" defer></script>
<!--ease js-->
<script src="{{ asset('js/ease.js') }}" defer></script>

<!-- Scripts -->
<script src="{{ asset('js/script.js') }}" defer></script>
    </body>
</html>
