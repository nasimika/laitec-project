@extends('front.index')

@section('content')
<section class="blog_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog_left_sidebar">
                        @foreach ($articles as $item)
                            

                        <article class="row blog_item">
                           <div class="col-md-3">
                               <div class="blog_info text-right">
                                    <div class="post_tag">
                                        <a class="active" href="#">
                                            {{ $item->category->name }}
                                        </a>
                                    </div>
                                    <ul class="blog_meta list" dir="ltr">
                                            <li><a href="#" >
                                                {{ $item->user->name }}
                                            <i class="lnr lnr-user"></i></a></li>
                                            <li><a href="#" >
                                                {{ $item->created_at }}
                                            <i class="lnr lnr-calendar-full"></i></a></li>
                                     </ul>
                                </div>
                           </div>
                            <div class="col-md-9">
                                <div class="blog_post">
                                    <img src="{{ $item->image ?? asset('front/assets/img/blog/main-blog/m-blog-1.jpg') }}" alt="">
                                    <div class="blog_details">
                                        <a href="{{ route('article', $item->id) }}"><h2>
                                        {{ $item->name }}    
                                        </h2></a>
                                        <p>
                                            @php
                                            $convertedStr = str_replace("&nbsp;", ' ', $item->description);    
                                            @endphp
                                                {!! $convertedStr !!}   
                                        </p>
                                        <a href="{{ route('article', $item->id) }}" class="white_bg_btn">View More</a>
                                    </div>
                                </div>
                            </div>
                        </article>
                        @endforeach
                        
                        
                        
                        <nav class="blog-pagination justify-content-center d-flex">
                            {{ $articles->links() }}
                                </nav>
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