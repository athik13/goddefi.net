@extends('layouts.app')

@section('content')

<!-- section begin -->
<section id="subheader" class="text-light" data-bgimage="url(/images/background/subheader.jpg) top">
    <div class="center-y relative text-center">
        <div class="container">
            <div class="row">
                
                <div class="col-md-12 text-center">
                    <h1>Explore all courses</h1>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</section>
<!-- section close -->


<!-- section begin -->
<section aria-label="section">
<div class="container">
    <div class="row wow fadeIn">
        <div class="col-lg-12">

            <div class="items_filter">
                <form action="#" class="row form-dark" id="form_quick_search" method="post" name="form_quick_search">
                    <div class="col text-center">
                        <input class="form-control" id="name_1" name="name_1" placeholder="search item here..." type="text" /> <a href="#" id="btn-submit"><i class="fa fa-search bg-color-secondary"></i></a>
                        <div class="clearfix"></div>
                    </div>
                </form>
                <div id="item_category" class="dropdown">
                    <a href="#" class="btn-selector">All categories</a>
                    <ul>
                        <li class="active"><span>All categories</span></li>
                        @foreach ($categories as $category)
                        <li><span>{{ $category->name }}</span></li>  
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>                     
        
        <hr>

        @foreach ($courses as $course)
            <!-- nft item begin -->
            <div class="d-item col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="nft__item">
                    <div class="author_list_pp">
                        <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Creator: James">                                    
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
                            <img src="{{ url(str_replace("public", "storage", $course->banner_url)) }}" class="lazy nft__item_preview" alt="">
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

@endsection