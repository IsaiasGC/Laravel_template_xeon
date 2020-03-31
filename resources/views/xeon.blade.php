<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Xeon | Page from Practica1</title>
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('css/main.css')}}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="{{asset('images/ico/favicon.ico')}}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('images/ico/apple-touch-icon-144-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('images/ico/apple-touch-icon-114-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('images/ico/apple-touch-icon-72-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{asset('images/ico/apple-touch-icon-57-precomposed.png')}}">
</head><!--/head-->

<body data-spy="scroll" data-target="#navbar" data-offset="0">
    <header id="header" role="banner">
        <div class="container">
            <div id="navbar" class="navbar navbar-default">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{route('home')}}"></a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-nav-primary">
                        <li class="active"><a href="#main-slider"><i class="icon-home"></i></a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#portfolio">Portfolio</a></li>
                        <li><a href="#about-us">About Us</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header><!--/#header-->

    <section id="main-slider" class="carousel">
        <div class="carousel-inner">
            <div class="item active">
                <div class="container">
                    <div class="carousel-content">
                        <h1>Free Onepage Theme</h1>
                        <p class="lead">Xeon is the best free onepage responsive theme available arround the globe<br>Download it right now for free</p>
                    </div>
                </div>
            </div><!--/.item-->
            <div class="item">
                <div class="container">
                    <div class="carousel-content">
                        <h1>ShapeBootstrap.net</h1>
                        <p class="lead">Download free but 100% premium quaility twitter Bootstrap based WordPress and HTML themes <br>from shapebootstrap.net</p>
                    </div>
                </div>
            </div><!--/.item-->
        </div><!--/.carousel-inner-->
        <a class="prev" href="#main-slider" data-slide="prev"><i class="icon-angle-left"></i></a>
        <a class="next" href="#main-slider" data-slide="next"><i class="icon-angle-right"></i></a>
    </section><!--/#main-slider-->

    <section id="services">
        <div class="container">
            <div class="box first">
                <div class="row">
                    @foreach ($services as $service)
                        <div class="col-md-4 col-sm-6">
                            <div class="center">
                                <i class="{{$service->icon}}"></i>
                                <h4>{{$service->name}}</h4>
                                <p>{{$service->description}}</p>
                            </div>
                        </div><!--/.col-md-4-->
                    @endforeach
                </div><!--/.row-->
            </div><!--/.box-->
        </div><!--/.container-->
    </section><!--/#services-->

    <section id="portfolio">
        <div class="container">
            <div class="box">
                <div class="center gap">
                    <h2>Portfolio</h2>
                    <p class="lead">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac<br>turpis egestas. Vestibulum tortor quam, feugiat vitae.</p>
                </div><!--/.center-->
                <ul class="portfolio-filter">
                    <li><a class="btn btn-primary active" href="#" data-filter="*">All</a></li>
                    <li><a class="btn btn-primary" href="#" data-filter=".bootstrap">Bootstrap</a></li>
                    <li><a class="btn btn-primary" href="#" data-filter=".html">HTML</a></li>
                    <li><a class="btn btn-primary" href="#" data-filter=".wordpress">Wordpress</a></li>
                </ul><!--/#portfolio-filter-->
                <ul class="portfolio-items col-4">

                    @foreach ($portafolio as $item)

                        <li class="portfolio-item {{$item->type}}">
                            <div class="item-inner">
                                <div class="portfolio-image">
                                    <img src="{{asset('images/portfolio/thumb/'.$item->foto)}}" alt="">
                                    <div class="overlay">
                                        <a class="preview btn btn-danger" title="{{$item->client_name}}" href="{{asset('images/portfolio/full/'.$item->foto)}}"><i class="icon-eye-open"></i></a>             
                                    </div>
                                </div>
                                <h5><b>{{$item->client_name}}</b></h5>
                                <p>{{$item->description}}</p>
                                <p>{{$item->made_date}}</p>
                            </div>
                        </li><!--/.portfolio-item-->

                    @endforeach

                </ul>   
            </div><!--/.box-->
        </div><!--/.container-->
    </section><!--/#portfolio-->

    <section id="about-us">
        <div class="container">
            <div class="box">
                <div class="center">
                    <h2>Meet the Team</h2>
                    <p class="lead">Pellentesque habitant morbi tristique senectus et netus et<br>malesuada fames ac turpis egestas.</p>
                </div>
                <div class="gap"></div>
                <div id="team-scroller" class="carousel scale">
                    <div class="carousel-inner">
                       
                        @foreach ($team as $index => $member)
                            @if ($index==0)

                                <div class="item active">
                                    <div class="row">

                            @else @if ($index%3==0)

                                <div class="item">
                                    <div class="row">

                            @endif @endif

                                        <div class="col-sm-4">
                                            <div class="member">
                                                <p><img class="img-responsive img-thumbnail img-circle" src="{{asset('images/'.$member->foto)}}" alt="" ></p>
                                                <h3>{{$member->name}}<small class="designation">{{$member->jop}}</small></h3>
                                            </div>
                                        </div><!--col_sm-4/member-->

                            @if ($index%3==2)

                                    </div>
                                </div>

                            @endif
                        @endforeach
                        @if ($index%3!=2)

                                    </div>
                                </div>

                        @endif
                        
                    </div>
                    <a class="left-arrow" href="#team-scroller" data-slide="prev">
                        <i class="icon-angle-left icon-4x"></i>
                    </a>
                    <a class="right-arrow" href="#team-scroller" data-slide="next">
                        <i class="icon-angle-right icon-4x"></i>
                    </a>
                </div><!--/.carousel-->
            </div><!--/.box-->
        </div><!--/.container-->
    </section><!--/#about-us-->

    <section id="contact">
        <div class="container">
            <div class="box last">
                <div class="row">
                    <div class="col-sm-6">
                        <h1>Contact Form</h1>
                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                        <div class="status alert alert-success" style="display: none"></div>
                        @if(session()->get('success'))
                            <div class="alert alert-success text-center">
                                {{ session()->get('success') }}
                            </div>
                        @endif
                        @if(session()->get('danger'))
                            <div class="alert alert-danger text-center">
                                {{ session()->get('danger') }}
                            </div>
                        @endif
                        {!! Form::open(['url' => '/send/mail/store', 'method' => 'post']) !!}
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        {{Form::text('name', null, ['class'=>'form-control', 'required', 'placeholder'=>'Name'])}}
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        {{Form::text('email', null, ['class'=>'form-control', 'required', 'placeholder'=>'Email Address'])}}
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        {{Form::textarea('message', null, ['class'=>'form-control', 'required', 'placeholder'=>'Message'])}}
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-danger btn-lg">Send Message</button>
                                    </div>
                                </div>
                            </div>
                        {!! Form::close() !!}
                    </div><!--/.col-sm-6-->
                    <div class="col-sm-6">
                        <h1>Our Address</h1>
                        <div class="row">
                            <div class="col-md-6">
                                <address>
                                    <strong>Twitter, Inc.</strong><br>
                                    795 Folsom Ave, Suite 600<br>
                                    San Francisco, CA 94107<br>
                                    <abbr title="Phone">P:</abbr> (123) 456-7890
                                </address>
                            </div>
                            <div class="col-md-6">
                                <address>
                                    <strong>Twitter, Inc.</strong><br>
                                    795 Folsom Ave, Suite 600<br>
                                    San Francisco, CA 94107<br>
                                    <abbr title="Phone">P:</abbr> (123) 456-7890
                                </address>
                            </div>
                        </div>
                        <h1>Connect with us</h1>
                        <div class="row">
                            <div class="col-md-6">
                                <ul class="social">
                                    <li><a href="#"><i class="icon-facebook icon-social"></i> Facebook</a></li>
                                    <li><a href="#"><i class="icon-youtube icon-social"></i> Youtube</a></li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul class="social">
                                    <li><a href="#"><i class="icon-linkedin icon-social"></i> Linkedin</a></li>
                                    <li><a href="#"><i class="icon-twitter icon-social"></i> Twitter</a></li>
                                </ul>
                            </div>
                        </div>
                    </div><!--/.col-sm-6-->
                </div><!--/.row-->
            </div><!--/.box-->
        </div><!--/.container-->
    </section><!--/#contact-->

    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2013 <a target="_blank" href="http://shapebootstrap.net/" title="Free Twitter Bootstrap WordPress Themes and HTML templates">ShapeBootstrap</a>. All Rights Reserved.
                </div>
                <div class="col-sm-6">
                    <img class="pull-right" src="{{asset('images/shapebootstrap.png')}}" alt="ShapeBootstrap" title="ShapeBootstrap">
                </div>
            </div>
        </div>
    </footer><!--/#footer-->

    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/jquery.isotope.min.js')}}"></script>
    <script src="{{asset('js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
</body>
</html>