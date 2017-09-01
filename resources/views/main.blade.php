@extends('layout.index')




@section('content')
    <div class="jumbotron">
        <div class="container">
            <div class="row">
                <div class="col-md-12" style="text-align: center;">
                    <div class="home-title"><h1>Kusini Industrial</h1></div>
                    <div class="home-horizontalLine"></div>
                    <div class="home-slogan"><h3>"Where Creativity meets Technology"</h3></div>
                </div>
            </div>
        </div>
    </div>

    <section id="middle">
        <div class="container firstWell">
            <div class="row">
                <div class="col-md-4">
                    <div class="fa-icon"><i class="fa fa-users fa-3x" aria-hidden="true" style="color:#8CC63E;"></i></div>
                    <h1>Who we are</h1>
                    <p>Kusini gateway industrial park Co.Ltd is based at Mkuranga district of the Pwani Region of Tanzania.</p>
                </div>
                <div class="col-md-4">
                    <div class="fa-icon"><i class="fa fa-diamond fa-3x" aria-hidden="true" style="color:#8CC63E;"></i></div>
                    <h1>What we do</h1>
                    <p>We deal with the provision of different services such as Transportation, Industrial parks and Minerals.</p>
                </div>
                <div class="col-md-4">
                    <div class="fa-icon"><i class="fa fa-cogs fa-3x" aria-hidden="true" style="color:#8CC63E;"></i></div>
                    <h1>How we do it</h1>
                    <p>Time and efficiency is taken into consideration. </p>
                </div>
            </div>
    </section>

    <section id="homeWork">
        <div class="container homeImgWrapper">
            <h2>Our Work</h2>
            <div class="row homeImgRow">
                <div class="col-md-4 homeWorkWrap" data-aos="zoom-in-right">
                    <img src="{{asset('images/transportation1.jpg')}}" alt="" class="home-work-img">
                    <p class="imgDiscription"><a href="{{url('work')}}">View MOre</a></p>
                </div>
                <div class="col-md-4 homeWorkWrap" data-aos="flip-up">
                    <img src="{{asset('images/marble.jpg')}}" alt="" class="home-work-img">
                    <p class="imgDiscription"><a href="{{url('work')}}">View MOre</a></p>
                </div>
                <div class="col-md-4 homeWorkWrap" data-aos="zoom-in-left">
                    <img src="{{asset('images/clay2.jpg')}}" alt="" class="home-work-img">
                    <p class="imgDiscription"><a href="{{url('work')}}">View MOre</a></p>
                </div>

            </div>
            <a href="{{url('work')}}" class="btn btn-default">View more</a>
        </div>
    </section>

    <section id="testimonial">
        <div class="container testimonialWrapper">
            <h2>What our clients say...</h2>
            <div class="row testimonialRow">
                <!--
                <div class="col-md-4" data-aos="zoom-out-right">
                    <div class="testimonial-img">
                        <img src="{{asset('images/one.jpg')}}" alt="" class="client-img">
                    </div>
                    <h2>John</h2>

                    <div class="social_icons">
                        <a href="#"><i class="fa fa-facebook fa-2x" aria-hidden="true" style="color:#8CC63E;"></i></a>
                        <a href="#"><i class="fa fa-instagram fa-2x" aria-hidden="true" style="color:#8CC63E;"></i></a>
                        <a href="#"><i class="fa fa-twitter fa-2x" aria-hidden="true" style="color:#8CC63E;"></i></a>
                        <!--<i class="fa fa-whatsapp fa-2x" aria-hidden="true"></i>
                    </div>

                    <div class="content">
                        <p class="testimonialPara"><i class="fa fa-quote-left" aria-hidden="true" style="color:#8CC63E;"></i>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<i class="fa fa-quote-right" aria-hidden="true" style="color:#8CC63E;"></i></p>
                        <h3 class="testimonialParaName">- Josako</h3>
                    </div>
                </div>
                -->
                <div class="col-md-6">
                    <div class="testimonial-img">
                        <img src="{{asset('images/two.jpg')}}" alt="" class="client-img">
                    </div>
                    <h2>Bryton</h2>

                    <div class="social_icons">
                        <a href="https://www.facebook.com/josakotech/"><i class="fa fa-facebook fa-2x" aria-hidden="true" style="color:#8CC63E;"></i></a>
                        <a href="https://www.instagram.com/josakotech/"><i class="fa fa-instagram fa-2x" aria-hidden="true" style="color:#8CC63E;"></i></a>
                        <a href="https://www.instagram.com/josakotech/"><i class="fa fa-twitter fa-2x" aria-hidden="true" style="color:#8CC63E;"></i></a>
                        <!--<i class="fa fa-whatsapp fa-2x" aria-hidden="true"></i>-->
                    </div>

                    <div class="content">
                        <p class="testimonialPara"><i class="fa fa-quote-left" aria-hidden="true" style="color:#8CC63E;"></i>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<i class="fa fa-quote-right" aria-hidden="true" style="color:#8CC63E;"></i></p>
                        <h3 class="testimonialParaName">- Steven</h3>
                    </div>
                </div>
                <div class="col-md-6" data-aos="zoom-out-left">
                    <div class="testimonial-img">
                        <img src="{{asset('images/three.jpg')}}" alt="" class="client-img">
                    </div>
                    <h2>Walter</h2>

                    <div class="social_icons">
                        <a href="https://www.facebook.com/josakotech/"><i class="fa fa-facebook fa-2x" aria-hidden="true" style="color:#8CC63E;"></i></a>
                        <a href="https://www.instagram.com/josakotech/"><i class="fa fa-instagram fa-2x" aria-hidden="true" style="color:#8CC63E;"></i></a>
                        <a href="https://www.instagram.com/josakotech/"><i class="fa fa-twitter fa-2x" aria-hidden="true" style="color:#8CC63E;"></i></a>
                        <!--<i class="fa fa-whatsapp fa-2x" aria-hidden="true"></i>-->
                    </div>

                    <div class="content">
                        <p class="testimonialPara"><i class="fa fa-quote-left" aria-hidden="true" style="color:#8CC63E;"></i>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<i class="fa fa-quote-right" aria-hidden="true" style="color:#8CC63E;"></i></p>
                        <h3 class="testimonialParaName">- Tandafoko</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection