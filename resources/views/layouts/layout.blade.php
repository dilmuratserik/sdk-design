<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>@yield('title')</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">
<link rel="shortcut icon" href="{{ asset('assets/front/images/favicon.ico') }}" type="image/x-icon" />
<link rel="apple-touch-icon" href="{{ asset('assets/front/images/apple-touch-icon.png') }}">
<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700" rel="stylesheet">

<link rel="stylesheet" href="{{ asset('assets/front/css/front.css') }}">

<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

</head>
<body>

<div id="wrapper">

    @include('layouts.navbar')

    @yield('header')

    <section class="section lb @if(!Request::is('/')) m3rem @endif">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">

                    @yield('content')

                </div><!-- end col -->

                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                    @include('layouts.sidebar')
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section>

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                    <div class="widget">
                        <h2 class="widget-title">Recent Posts</h2>
                        <div class="blog-list-widget">
                            <div class="list-group">
                                <a href="marketing-single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                                    <div class="w-100 justify-content-between">
                                        <img src="/assets/front/upload/make-money-with-blog.jpg" alt="" class="img-fluid float-left">
                                        <h5 class="mb-1">9 Ways To Make Money With Your Website</h5>
                              <small>21 DEC, 2020</small>
                                    </div>
                                </a>

                                <a href="marketing-single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                                    <div class="w-100 justify-content-between">
                                        <img src="/assets/front/upload/digital-marketing-transformation.jpeg" alt="" class="img-fluid float-left">
                                        <h5 class="mb-1">Digital marketing transformation: a revolution ...</h5>
                                        <small>21 DEC, 2020</small>
                                    </div>
                                </a>
                                <a href="marketing-single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                                    <div class="w-100 justify-content-between">
                                        <img src="/assets/front/upload/problemas-de-marketing.png" alt="" class="img-fluid float-left">
                                        <h5 class="mb-1">10 common marketing challenges</h5>
                                        <small>21 DEC, 2020</small>
                                    </div>
                                </a>
                            </div>
                        </div><!-- end blog-list -->
                    </div><!-- end widget -->
                </div><!-- end col -->

                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                    <div class="widget">
                        <h2 class="widget-title">Popular Posts</h2>
                        <div class="blog-list-widget">
                            <div class="list-group">
                                <a href="marketing-single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                                    <div class="w-100 justify-content-between">
                                        <img src="/assets/front/upload/Marketing_mix.jpg" alt="" class="img-fluid float-left">
                                        <h5 class="mb-1">Model- Marketing MIX  is this advantage or disadvatage?</h5>
                                        <span class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </span>
                                    </div>
                                </a>

                            </div>
                        </div><!-- end blog-list -->
                    </div><!-- end widget -->
                </div><!-- end col -->

                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                    <div class="widget">
                        <h2 class="widget-title">Popular Categories</h2>
                        <div class="link-widget">
                            <ul>
                                <li><a href="/">Marketing <span>...</span></a></li>
                                <li><a href="/">SEO Service <span>...</span></a></li>
                                <li><a href="/">Digital Agency <span>...</span></a></li>
                                <li><a href="/">Make Money <span>...</span></a></li>
                                <li><a href="/">Blogging <span>...</span></a></li>
                                <li><a href="/">Entertaintment <span>...</span></a></li>
                                <li><a href="/">Video Tuts <span>...</span></a></li>
                            </ul>
                        </div><!-- end link-widget -->
                    </div><!-- end widget -->
                </div><!-- end col -->
            </div><!-- end row -->

        </div><!-- end container -->
    </footer><!-- end footer -->

    <div class="dmtop">Scroll to Top</div>

</div><!-- end wrapper -->


<script src="{{ asset('assets/front/js/front.js') }}"></script>

</body>
</html>
