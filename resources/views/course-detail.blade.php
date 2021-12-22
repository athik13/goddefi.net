@extends('layouts.app')

@section('content')

<!-- section begin -->
<section id="subheader" class="text-light" data-bgimage="url(/images/background/subheader.jpg) top">
    <div class="center-y relative text-center">
        <div class="container">
            <div class="row">
                
                <div class="col-md-12 text-center">
                    <h1>Course</h1>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</section>
<!-- section close -->

<section aria-label="section" class="mt90 sm-mt-0">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="{{ $course->video_url }}" width="100%" height="500px" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-md-6">
                <div class="item_info">
                    <h2>{{ $course->name }}</h2>
                    <div class="item_info_counts">
                        <div class="item_info_type"><i class="fa fa-image"></i>{{ $course->category->name }}</div>
                    </div>
                    <p>{{ $course->description }}</p>

                    <div class="spacer-10"></div>
                    
                </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>

@endsection