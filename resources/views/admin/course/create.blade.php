@extends('layouts.admin')

@section('content')

<!-- section begin -->
<section id="subheader" class="text-light" data-bgimage="url(/images/background/subheader.jpg) top">
    <div class="center-y relative text-center">
        <div class="container">
            <div class="row">                                
                <div class="col-md-12 text-center">
                    <h1>Courses</h1>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</section>
<!-- section close -->


<!-- section begin -->
<section id="section-main" aria-label="section">
<div class="container">
    <div class="row">
        <div class="col-lg-12 mb-5 d-flex justify-content-center">
            @include('includes.admin-header')
        </div>
        <hr>
        <div class="col-12">
            <div class="row">
                <div class="col-lg-12 mb-3">
                    <div class="float-start">
                        <h2>Create new Course</h2>
                    </div>
                    <div class="float-end">
                        <a class="btn btn-info" href="{{ route('course.index') }}"> Go Back</a>
                    </div>
                </div>
                <div class="col-12">
                    <form action="{{ route('course.store') }}" method="POST" enctype=multipart/form-data>
                        @csrf
                        <h5>Choose Category</h5>
                        <p class="p-info">This is the category where your item will appear.</p>
        
                        <select class="form-select" name="category_id" aria-label="Default select example">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
        
                        <div class="spacer-20"></div>
        
                        <h5>Title</h5>
                        <input type="text" name="name" id="item_title" class="form-control" placeholder="" />
        
                        <h5>Banner Image</h5>
                        <div class="d-create-file">
                            <p id="file_name">PNG, JPG, GIF, WEBP or MP4. Max 200mb.</p>
                            <input type="button" id="get_file" class="btn-main" value="Browse">
                            <input type="file" id="upload_file" name="banner_url">
                        </div>
        
                        <h5>Video URL</h5>
                        <input type="text" name="video_url" id="item_title" class="form-control" placeholder="" />
        
                        <h5>Short Description</h5>
                        <textarea data-autoresize name="short_description" id="item_desc" class="form-control" placeholder=""></textarea>
        
                        <h5>Long Description</h5>
                        <textarea data-autoresize name="long_description" id="item_desc" class="form-control" placeholder=""></textarea>
        
                        <div class="spacer-20"></div>

                        <button class="btn-main" type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

@endsection