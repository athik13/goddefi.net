@extends('layouts.app')

@section('content')

<section class="full-height relative no-top no-bottom vertical-center" data-bgimage="url(/images/background/subheader.jpg) top" data-stellar-background-ratio=".5">
    <div class="overlay-gradient t50">
        <div class="center-y relative">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 text-light wow fadeInRight" data-wow-delay=".5s">
                    <div class="spacer-10"></div>
                    <h1>Quantitative Market analysis designed to give you an edge.</h1>
                    <p class="lead">Join now to learn about everything cryptocurrency.</p>
                </div>
                    
                    <div class="col-lg-4 offset-lg-2 wow fadeIn" data-wow-delay=".5s">
                        <div class="box-rounded padding40" data-bgcolor="#ffffff">
                            <h3 class="mb10">Sign In</h3>
                            <p>Login using an existing account or create a new account <a href="{{ url('register') }}">here<span></span></a>.</p>
                            <form name="contactForm" id='contact_form' class="form-border" method="post" action="{{ route('login') }}">

                                <div class="field-set">
                                    <input type='text' name='email' id='email' class="form-control" placeholder="username">
                                </div>
                                
                                 <div class="field-set">
                                    <input type='password' name='password' id='password' class="form-control" placeholder="password">
                                </div>
                                
                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" style="background-color: #333;" {{ old('remember') ? 'checked' : '' }} >
        
                                            <label class="form-check-label" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="field-set">
                                    <button type="submit" class="btn btn-main btn-fullwidth color-2">
                                        {{ __('Login') }}
                                    </button>
                                </div>
                                
                                <div class="clearfix"></div>
                                
                                <div class="spacer-single"></div>

                            <!-- social icons -->
                            <ul class="list s3">
                                <li>Login with:</li>
                                <li><a href="#">Facebook</a></li>
                                <li><a href="#">Google</a></li>
                            </ul>
                            <!-- social icons close -->
                    </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>	

@endsection