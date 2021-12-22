@extends('layouts.admin')

@section('content')

<!-- section begin -->
<section id="subheader" class="text-light" data-bgimage="url(/images/background/subheader.jpg) top">
    <div class="center-y relative text-center">
        <div class="container">
            <div class="row">                                
                <div class="col-md-12 text-center">
                    <h1>Categories</h1>
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
                        <h2>Create new Category</h2>
                    </div>
                    <div class="float-end">
                        <a class="btn btn-info" href="{{ route('category.index') }}"> Go Back</a>
                    </div>
                </div>
                <div class="col-12">
                    <form action="{{ route('category.store') }}" method="POST" enctype=multipart/form-data>
                        @csrf
        
                        <h5>Title</h5>
                        <input type="text" name="name" id="item_title" class="form-control" placeholder="" />
        
                        <h5>Banner Image</h5>
                        <div class="d-create-file">
                            <p id="file_name">PNG, JPG, GIF.</p>
                            <input type="button" id="get_file" class="btn-main" value="Browse">
                            <input type="file" name="banner_url" id="upload_file">
                        </div>

                        <h5>Icon Image</h5>
                        <div class="">
                            <input type="file" name="icon_url" id="">
                        </div>
        
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