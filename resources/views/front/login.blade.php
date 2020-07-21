@extends('front.index')


@section('title')
    ورود به سامانه
@endsection

@section('content')


<!-- Start Log In Area -->
<div class="user-area-all-style log-in-area ptb-100">
    <div class="container">
        <div class="contact-form-action">
            @include('front.layouts.messages')
            <form action="{{ route('login') }}" method="post">
                @csrf
                <div class="row">


                    <div class="col-lg-4 col-md-4 col-sm-12">

                    </div>



                    <div class="col-lg-4 col-md-4 col-sm-12">

                    </div>



                    <div class="col-12">
                        <div class="form-group">
                            <input class="form-control" type="text"
                             name="email" placeholder="Email">
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group">
                            <input class="form-control" type="password"
                             name="password" placeholder="Password">
                        </div>
                    </div>


                    <div class="col-12">
                        <button class="default-btn btn-two" type="submit">
                            ورود
                        </button>
                    </div>


                </div>
            </form>
        </div>
    </div>
</div>
<!-- End Log In Area -->

@endsection









