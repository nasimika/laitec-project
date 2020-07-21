@extends('back.index')
@section('title')
مدیریت وبلاگ
    @endsection

@section('content')

    <div class="content">

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    @include('front.layouts.messages')
                </div>
            </div>


            
           
            <div class="row">


                <div class="col-lg-12 col-md-12">
                    <div class="card card-profile">
                        <div class="card-avatar">
                            <a href="#pablo">
                                <img class="img" src="{{ Auth::user()->image ?? '/back/assets/img/faces/user.png' }}" />
                            </a>
                        </div>
                        <div class="card-body">
                            <h6 class="card-category text-gray">به پنل مدیریت خوش‌آمدید</h6>
                            <h4 class="card-title">{{ Auth::user()->name }}</h4>
                            <p class="card-description">
Bio
</p>
                            <a href="#pablo" class="btn btn-primary btn-round">دنبال‌کردن</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    @endsection



