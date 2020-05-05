@extends('layout.app')
@section('content')
<div class="container">
    <!-- hello about start -->
    <div class="home-hello-info">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="f-title text-center">
                        <h3 class="title text-uppercase">About Us</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-7 col-sm-12 col-xs-12">
                    <div class="about-page-cntent">
                        <h3>The standard lorem ipsum passage</h3>
                        <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?</p>
                        <blockquote>
                            <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur</p>
                        </blockquote>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eu nisi ac mi malesuada vestibulum. Phasellus tempor nunc eleifend cursus molestie. Mauris lectus arcu, pellentesque at sodales sit amet, condimentum id nunc. Donec ornare mattis suscipit. Praesent fermentum accumsan vulputate.</p>
                    </div>
                </div>
                <div class="col-md-5 col-sm-12 col-xs-12">
                    <div class="img-element">
                        <img src="{{asset('theme_client/img/about/about.jpg')}}" alt="banner1">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- hello about end -->
    <!-- service about start -->
    <div class="our-services-info">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="f-title text-center">
                        <h3 class="title text-headss">Our services</h3>
                    </div>
                </div>
            </div><!-- End .row -->
            <div class="row text-center">
                <div class="our-services-inner">
                    <div class="col-sm-4">
                        <div class="single-service">
                            <p><i class="fa fa-star"></i></p>
                            <h4>Branding</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                        </div><!-- End .single-service -->
                    </div><!-- End .col-sm-4 -->
                    <div class="col-sm-4">
                        <div class="single-service">
                            <p><i class="fa fa-heart"></i></p>
                            <h4>Awesome Design</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                        </div><!-- End .single-service -->
                    </div><!-- End .col-sm-4 -->
                    <div class="col-sm-4">
                        <div class="single-service">
                            <p><i class="fa fa-camera-retro"></i></p>
                            <h4>Photography</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                        </div><!-- End .single-service -->
                    </div><!-- End .col-sm-4 -->
                </div>
                <div class="clearfix"></div>
                <div class="our-services-inner">
                    <div class="col-sm-4">
                        <div class="single-service">
                            <p><i class="fa fa-cog"></i></p>
                            <h4>Reponsive</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                        </div><!-- End .single-service -->
                    </div><!-- End .col-sm-4 -->
                    <div class="col-sm-4">
                        <div class="single-service">
                            <p><i class="fa fa-eye"></i></p>
                            <h4>Retina ready</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                        </div><!-- End .single-service -->
                    </div><!-- End .col-sm-4 -->
                    <div class="col-sm-4">
                        <div class="single-service">
                            <p><i class="fa fa-comments-o"></i></p>
                            <h4>Online Support</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                        </div><!-- End .single-service -->
                    </div><!-- End .col-sm-4 -->
                </div><!-- End .our-services-inner -->
            </div><!-- End .row -->
        </div><!-- End .container -->
    </div>
    <!-- service about end -->
    <!-- meet about start -->
    <div class="home-our-team">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="f-title text-center">
                        <h3 class="title text-uppercase">Meet the team</h3>
                    </div>
                </div><!-- End .col-md-12 -->
            </div><!-- End .row -->
            <div class="row">
                <div class="col-md-3 col-sm-4">
                    <div class="item-team text-center">
                        <div class="team-info">
                            <div class="team-img">
                                <img src="{{asset('theme_client/img/about/ab-team1.jpg')}}" class="img-responsive" alt="team1" height="250" width="250">
                                <div class="mask">
                                    <div class="mask-inner">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h4>Havier Macherano</h4>
                        <h5>Developer</h5>
                    </div><!-- End .item-team -->
                </div><!-- End .col-sm-3 -->
                <div class="col-md-3 col-sm-4">
                    <div class="item-team text-center">
                        <div class="team-info">
                            <div class="team-img">
                                <img src="{{asset('theme_client/img/about/ab-team2.jpg')}}" class="img-responsive" alt="team2" height="250" width="250">
                                <div class="mask">
                                    <div class="mask-inner">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h4>Luka Biglia</h4>
                        <h5>Programmer</h5>
                    </div><!-- End .item-team -->
                </div><!-- End .col-sm-3 -->
                <div class="col-md-3 col-sm-4">
                    <div class="item-team text-center">
                        <div class="team-info">
                            <div class="team-img">
                                <img src="{{asset('theme_client/img/about/ab-team3.jpg')}}" class="img-responsive" alt="team3" height="250" width="250">
                                <div class="mask">
                                    <div class="mask-inner">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h4>Anzo Perez</h4>
                        <h5>Designer</h5>
                    </div><!-- End .item-team -->
                </div><!-- End .col-sm-3 -->
                <div class="col-md-3 hidden-sm">
                    <div class="item-team text-center">
                        <div class="team-info">
                            <div class="team-img">
                                <img src="{{asset('theme_client/img/about/ab-team4.jpg')}}" class="img-responsive" alt="team4" height="250" width="250">
                                <div class="mask">
                                    <div class="mask-inner">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h4>Martin Demichelis</h4>
                        <h5>PHP Developer</h5>
                    </div><!-- End .item-team -->
                </div><!-- End .col-sm-3 -->
            </div><!-- End .row -->
        </div><!-- End .container -->
    </div>
    <!-- meet about end -->
</div>
@endsection
