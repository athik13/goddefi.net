@extends('layouts.app')

@section('content')

    <!-- section begin -->
    <section id="section-hero" aria-label="section" class="text-light overflow-hidden" data-bgimage="url(images/background/2.jpg) top">
        <div id="particles-js"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="text_top">
                        <div class="spacer-double"></div>
                        <h1>Quantitative Market analysis designed to give you an edge.</h1>
                        <p class="lead">Exclusive premium content for a list of enthusiasts and market participants. <br>Join now to learn about everything cryptocurrency.</p>
                        <div class="spacer-20"></div>
                        <a href="{{ url('courses/all') }}" class="btn-main">Explore</a>&nbsp;&nbsp;
                        <a href="{{ url('register') }}" class="btn-main btn-white">Join Us</a>
                        <div class="spacer-double"></div>
                    </div>
                </div>
            </div>                    
        </div>
    </section>
    <!-- section close -->

    <section id="section-steps" data-bgcolor="#F7F4FD">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <h2>How to start learning</h2>
                        <div class="small-border bg-color-2"></div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-sm-30">
                    <div class="feature-box f-boxed style-3">
                        <i class="wow fadeInUp bg-color-2 i-boxed icon_wallet"></i>
                        <div class="text">
                            <h4 class="wow fadeInUp">Register</h4>
                            <p class="wow fadeInUp" data-wow-delay=".25s">After registering for an account, make payment to the ETH address shown in your home page.</p>
                        </div>
                        <i class="wm icon_wallet"></i>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-sm-30">
                    <div class="feature-box f-boxed style-3">
                        <i class="wow fadeInUp bg-color-2 i-boxed icon_cloud-upload_alt"></i>
                        <div class="text">
                            <h4 class="wow fadeInUp">Verify</h4>
                            <p class="wow fadeInUp" data-wow-delay=".25s">Once you have made your payment wait for one of our staff member to verify your payment and activate your account.</p>
                        </div>
                        <i class="wm icon_cloud-upload_alt"></i>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-sm-30">
                    <div class="feature-box f-boxed style-3">
                        <i class="wow fadeInUp bg-color-2 i-boxed icon_tags_alt"></i>
                        <div class="text">
                            <h4 class="wow fadeInUp">Learn</h4>
                            <p class="wow fadeInUp" data-wow-delay=".25s">Now you can access all our videos and blog posts. We will upload new vidoes and create blog posts very frequently.</p>
                        </div>
                        <i class="wm icon_tags_alt"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="section-nfts">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <h2>Popular Courses</h2>
                        <div class="small-border bg-color-2"></div>
                    </div>
                </div>
            </div>
            <div class="row wow fadeIn">
                @foreach ($courses as $course)
                    <!-- nft item begin -->
                    <div class="d-item col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="nft__item">
                            <div class="author_list_pp">
                                <a href="author.html" data-bs-toggle="tooltip" data-bs-placement="top" title="Creator: James">                                    
                                    <img class="lazy" src="/images/author/author-2.jpg" alt="">
                                    <i class="fa fa-check"></i>
                                </a>
                            </div>
                            <div class="nft__item_wrap">
                                <div class="nft__item_extra">
                                    <div class="nft__item_buttons">
                                        <div class="nft__item_share">
                                            <h4>Share</h4>
                                            <a href="https://www.facebook.com/sharer/sharer.php?u=#" target="_blank"><i class="fa fa-facebook fa-lg"></i></a>
                                            <a href="https://twitter.com/intent/tweet?url=#" target="_blank"><i class="fa fa-twitter fa-lg"></i></a>
                                            <a href="mailto:?subject=I wanted you to see this site&amp;body=Check out this site #"><i class="fa fa-envelope fa-lg"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <a href="#">
                                    <img src="{{ str_replace("public", "storage", $course->banner_url) }}" class="lazy nft__item_preview" alt="">
                                </a>
                            </div>
                            <div class="nft__item_info">
                                <a href="#">
                                    <h4>{{ $course->name }}</h4>
                                </a>
                                <div class="nft__item_click">
                                    <span></span>
                                </div>
                                <div class="nft__item_price">
                                    {{ $course->category->name }}
                                </div>
                                <div class="nft__item_like">
                                    <i class="fa fa-heart"></i><span>{{ rand(50, 200) }}</span>
                                </div>                                 
                            </div> 
                        </div>
                    </div>  
                @endforeach
                <div class="col-md-12 text-center">
                    <a href="#" id="loadmore" class="btn-main wow fadeInUp lead">Load more</a>
                </div>                                              
            </div>
        </div>
    </section>

    <section id="section-collections" data-bgcolor="#F7F4FD">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <h2>Hot Categories</h2>
                        <div class="small-border bg-color-2"></div>
                    </div>
                </div>
                <div id="collection-carousel" class="owl-carousel wow fadeIn">
                        @foreach ($categories as $category)
                            <div class="nft_coll">
                                <div class="nft_wrap">
                                    <a href="#"><img src="{{ str_replace("public", "storage", $category->banner_url) }}" class="lazy img-fluid" alt="" style="height: 200px;"></a>
                                </div>
                                <div class="nft_coll_pp">
                                    <a href="#"><img class="lazy pp-coll" src="{{ str_replace("public", "storage", $category->icon_url) }}" alt=""></a>
                                    <i class="fa fa-check"></i>
                                </div>
                                <div class="nft_coll_info">
                                    <a href="#">
                                        <h4>{{ $category->name }}</h4>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection