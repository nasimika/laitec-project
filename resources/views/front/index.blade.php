<!doctype html>
<html lang="fa">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/favicon.png" type="image/png">
        <title>پروژه لایتک</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('front/assets/css/bootstrap-rtl.min.css') }}">
        <link rel="stylesheet" href="{{ asset('front/assets/vendors/linericon/style.css') }}">
        <link rel="stylesheet" href="{{ asset('front/assets/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('front/assets/vendors/owl-carousel/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('front/assets/vendors/lightbox/simpleLightbox.css') }}">
        <link rel="stylesheet" href="{{ asset('front/assets/vendors/nice-select/css/nice-select.css') }}">
        <link rel="stylesheet" href="{{ asset('front/assets/vendors/animate-css/animate.css') }}">
        <link rel="stylesheet" href="{{ asset('front/assets/vendors/popup/magnific-popup.css') }}">
        <!-- main css -->
        <link rel="stylesheet" href="{{ asset('front/assets/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('front/assets/css/responsive.css') }}">
    </head>
    <body>
        
        <!--================Header Menu Area =================-->
        <header class="header_area">
            <div class="main_menu">
            	<nav class="navbar navbar-expand-lg navbar-light">
					<div class="container box_1620">
						<!-- Brand and toggle get grouped for better mobile display -->
						<b><a class="navbar-brand " href="{{ route('home') }}" style="color: white;">وبلاگ من</a></b>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse offset" id="navbarSupportedContent" >
							<ul class="nav navbar-nav menu_nav mr-auto"  >
								<li class="nav-item"><a class="nav-link" href="about-us.html">درباره ما</a></li> 
								
								<li class="nav-item submenu dropdown">

								</li> 
								<li class="nav-item"><a class="nav-link" href="contact.html"  >تماس با ما</a></li>
                           								
								<li class="nav-item submenu dropdown">

								</li> 

                                @auth
                                <li class="nav-item">
                                    <a href="{{ route('admin.index') }}" class="nav-link btn btn-default" >
                                        پنل مدیریت 
                                    </a>
                                </li>

                            <li class="nav-item">
                                <form action="{{ route('logout') }}" method="post">
                                    @csrf
                                    <button class="btn btn-danger">
                                        <i class="bx bx-exit"></i>
                                        خروج 
                                    </button>
                                </form>
                    
                            </li>
                            <li class="nav-item submenu dropdown">

                            </li> 


                            @else 
                            <li class="nav-item">
                                <a href="{{ route('login') }}" class="nav-link btn btn-default">
                                <i class="bx bx-user"></i>
                                    ورود 
                                </a>
                            </li>
                            @endauth
                            
                            
                            </ul>
						</div> 
					</div>
            	</nav>
            </div>
        </header>
        <!--================Header Menu Area =================-->
        
        <!--================Home Banner Area =================-->
        <section class="home_banner_area blog_banner">
            <div class="banner_inner d-flex align-items-center">
            	<div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
				<div class="container">
					<div class="blog_b_text text-center">
						{{-- <h2>با شما همراهیم</h2>
						<p>از جدیدترین مطالب آموزشی بهره مند شوید</p>
						<a class="white_bg_btn" href="#">بیشتر ببینید</a> --}}
					</div>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
        
        <!--================Blog Categorie Area =================-->
        <section class="blog_categorie_area">
            <div class="container">
                <div class="row">
                    
                </div>
            </div>
        </section>
        <!--================Blog Categorie Area =================-->
        
        <!--================Blog Area =================-->
        
        @yield('content')
        
        <!--================Blog Area =================-->
        
        <!--================Footer Area =================-->
        <footer class="footer_area p_120">
        	<div class="container">
        		<div class="row footer_inner">
        			<div class="col-lg-5 col-sm-6">
        				<aside class="f_widget ab_widget">
        					<div class="f_title">
        						<h3>درباره ما</h3>
        					</div>
        					<p>آیا میخواهید موفق تر باشید؟ یاد بگیرید که یادگرفتن را دوست داشته باشید و رشد کنید ما برایتان پیشنهاد هایی ارایه میدهیم که توانایی های خود را بیشتر کنید.</p>
        					<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
        				</aside>
        			</div>
        			<div class="col-lg-5 col-sm-6">
        				<aside class="f_widget news_widget">
        					<div class="f_title">
        						<h3>خبرنامه</h3>
        					</div>
        					<p>با آخرین فعالیت های ما بروز باشید</p>
        					<div id="mc_embed_signup">
                                <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscribe_form relative">
                                	<div class="input-group d-flex flex-row"  >
                                        <input style="text-align: right!important;" name="EMAIL" placeholder="ایمیل خود را وارد نمایید" onfocus="this.placeholder = ''" onblur="this.placeholder = 'آدرس ایمیل '" required="" type="email">
                                        <button class="btn sub-btn" dir="ltr" ><span class="lnr lnr-arrow-left"></span></button>		
                                    </div>				
                                    <div class="mt-10 info"></div>
                                </form>
                            </div>
        				</aside>
        			</div>
        			<div class="col-lg-2">
        				<aside class="f_widget social_widget">
        					<div class="f_title">
        						<h3>ما را دنبال کنید</h3>
        					</div>
        					<p>شبکه های اجتماعی</p>
        					<ul class="list" dir="ltr" >
        						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
        						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
        						<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
        						<li style="margin-right: 10px!important;"><a href="#"><i class="fa fa-behance"></i></a></li>
        					</ul>
        				</aside>
        			</div>
        		</div>
        	</div>
        </footer>
        <!--================End Footer Area =================-->
        
        
        
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="{{ asset('front/assets/js/jquery-3.3.1.min.js') }}"></script>
        <script src="{{ asset('front/assets/js/popper.js') }}"></script>
        <script src="{{ asset('front/assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('front/assets/js/stellar.js') }}"></script>
        <script src="{{ asset('front/assets/vendors/lightbox/simpleLightbox.min.js') }}"></script>
        <script src="{{ asset('front/assets/vendors/nice-select/js/jquery.nice-select.min.js') }}"></script>
        <script src="{{ asset('front/assets/vendors/isotope/imagesloaded.pkgd.min.js') }}"></script>
        <script src="{{ asset('front/assets/vendors/isotope/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('front/assets/vendors/owl-carousel/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('front/assets/vendors/popup/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('front/assets/js/jquery.ajaxchimp.min.js') }}"></script>
        <script src="{{ asset('front/assets/vendors/counter-up/jquery.waypoints.min.js') }}"></script>
        <script src="{{ asset('front/assets/vendors/counter-up/jquery.counterup.min.js') }}"></script>
        <script src="{{ asset('front/assets/js/mail-script.js') }}"></script>
        <script src="{{ asset('front/assets/js/theme.js') }}"></script>
    </body>
</html>