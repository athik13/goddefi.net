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
            <div class="col-lg-12 mb-3">
                <div class="float-start">
                    <h2>Course Management</h2>
                </div>
                <div class="float-end">
                    <a class="btn btn-success" href="{{ route('course.create') }}"> Create New Course</a>
                </div>
            </div>
            <table class="table table-hover">
                <thead>
                    <th>Name</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    @foreach ($courses as $course)
                        <tr>
                            <td>{{ $course->name }}</td>
                            <td>
                                <a href="{{ route('course.edit', $course->id) }}">Edit / View</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
</section>

@endsection