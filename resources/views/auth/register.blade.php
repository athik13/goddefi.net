@extends('layouts.app')

@section('content')

<!-- section begin -->
<section id="subheader" class="text-light" data-bgimage="url(images/background/subheader.jpg) top">
    <div class="center-y relative text-center">
        <div class="container">
            <div class="row">
                
                <div class="col-md-12 text-center">
                    <h1>Register</h1>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</section>
<!-- section close -->


<section aria-label="section">
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h3>Don't have an account? Register now.</h3>
            <p>Exclusive premium content for a list of enthusiasts and market participants. Join now to learn about everything cryptocurrency.</p>
            
            <div class="spacer-10"></div>
            
            <form name="contactForm" id='contact_form' class="form-border" method="post" action='{{ route('register') }}'>

                <div class="row">

                    <div class="col-md-6">
                        <div class="field-set">
                            <label>Name:</label>
                            <input type='text' name='name' id='name' class="form-control">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="field-set">
                            <label>Email Address:</label>
                            <input type='text' name='email' id='email' class="form-control">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="field-set">
                            <label>Password:</label>
                            <input type='text' name='password' id='password' class="form-control">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="field-set">
                            <label>Re-enter Password:</label>
                            <input type='text' name='password_confirmation' id='re-password' class="form-control">
                        </div>
                    </div>


                    <div class="col-md-12">

                        <div id='submit' class="pull-left">
                            <button type="submit" class="btn btn-main color-2">
                                {{ __('Register') }}
                            </button>
                        </div>
                        <div class="clearfix"></div>

                    </div>

                </div>
            </form>
            
        </div>
    </div>
</div>
</section>

@endsection
