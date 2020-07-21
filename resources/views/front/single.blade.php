@extends('front.index')

@section('content')
  <!--================Home Banner Area =================-->
  <section class="banner_area">
        <div class="box_1620">
                            <div class="banner_inner d-flex align-items-center">
                                    <div class="container">
                                            <div class="banner_content text-center">
                                                    <h2>جزییات نوشته</h2>
                                                    <div class="page_link">
                                                            <a href="{{ route('home') }}">خانه</a>
                                                            <a href="#" style="margin-left:30px ;">{{ $article->name }}</a>
                                                    </div>
                                            </div>
                                    </div>
                            </div>
        </div>
    </section>
    <!--================End Home Banner Area =================-->
    
    <!--================Blog Area =================-->
    <section class="blog_area single-post-area p_120">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 posts-list">
                    <div class="single-post row">
                        <div class="col-lg-12">
                            <div class="feature-img">
                                <img class="img-fluid" src="
                                {{ $article->image ?? asset('front/assets/img/blog/main-blog/m-blog-1.jpg') }}" alt="">
                            </div>									
                        </div>
                        <div class="col-lg-3  col-md-3">
                            <div class="blog_info text-right">
                                <div class="post_tag">
                                        <a class="active" href="#">
                                            {{ $article->category->name }}
                                        </a>
                                    </div>
                                <ul class="blog_meta list" dir="ltr">
                                        <li><a href="#" >
                                            {{ $article->user->name }}
                                        <i class="lnr lnr-user"></i></a></li>
                                        <li><a href="#" >
                                            {{ $article->created_at }}
                                        <i class="lnr lnr-calendar-full"></i></a></li>
                                 </ul>

                            </div>
                        </div>
                        <div class="col-lg-9 col-md-9 blog_details">
                            <h2>زیبایی های طبیعت در یک تصویر از زندگی</h2>
                            <p class="excert">
                                @php
                                $convertedStr = str_replace("&nbsp;", ' ', $article->description);    
                                @endphp
                                    {!! $convertedStr !!}
                                
                        </p>
                        </div>
                        
                    </div>

                    
                    
                </div>
                

                <div class="col-lg-4">
                        <div class="blog_right_sidebar">
                            
                            
                            <aside class="single_sidebar_widget post_category_widget">
                                <h4 class="widget_title">دسته بندی پست ها</h4>
                                <ul class="list cat-list">

                                    @foreach ($categories as $item)
                                    <li>
                                        <a href="{{ route('category', 'cat_id='.$item->id) }}"
                                         class="d-flex justify-content-between">
                                            <p>{{ $item->name }}</p>
                                        </a>
                                    </li>
                                        
                                    @endforeach
                                    										
                                </ul>
                            </aside>
                            
                        </div>
                    </div>
            </div>
        </div>
    </section>
    
@endsection