<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="">
	<meta name="description" content="">

	<!-- Site title
   ================================================== -->
	<title>My Wedding</title>

	<!-- Bootstrap CSS
   ================================================== -->
	<link rel="stylesheet" href="css/bootstrap.min.css">

	<!-- Animate CSS
   ================================================== -->
	<link rel="stylesheet" href="css/animate.min.css">

	<!-- Font Icons CSS
   ================================================== -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/ionicons.min.css">

	<!-- Main CSS
   ================================================== -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Google web font 
   ================================================== -->	
  <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,300' rel='stylesheet' type='text/css'>
  
  
	
</head>
<body>

<!-- Preloader section
================================================== -->
<div class="preloader">

	<div class="sk-spinner sk-spinner-pulse"></div>

</div>


<!-- Navigation section
================================================== -->
<div class="nav-container">
    <nav class="nav-inner transparent">

        <div class="navbar">
            <div class="container">
                <div class="row">
                    <div class="brand">
                        <a href="{{url('/')}}">
                            <img src="images/logo.png">
                        </a>
                    </div>

                    <div class="navicon">
                        <div class="menu-web">
                            <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                         <li>
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
            </li>
                                <li><a href="{{url('home')}}">Home</a></li>
                            </ul>
                        </div>

                        <div class="menu-container">
                            <ul class="navmenu">
                            <div class="circle dark inline">
                                <i class="icon ion-navicon"></i>
                            </div>

                            <div class="list-menu">
                                <i class="icon ion-close-round close-iframe"></i>
                                <div class="intro-inner">
                                    <ul id="nav-menu">
                                        <li><a href="">Home</a></li>
                                        <li><a href="about.html">About</a></li>
                                        <li><a href="blog.html">Blog</a></li>
                                        <li><a href="contact.html">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</div>


<!-- Portfolio section
================================================== -->
<section id="portfolio">
  <div class="container">
    <div class="row">

    <div class="col-md-12 col-sm-12">
            
      <!-- iso section -->
        <div class="iso-section wow fadeInUp" data-wow-delay="2.6s">
          <ul class="filter-wrapper clearfix">
            <li><a href="#" data-filter=".dekorasi" class="selected opc-main-bg">Dekorasi</a></li>
            <li><a href="#" class="opc-main-bg" data-filter=".fotografi">Jasa Fotografi</a></li>
            <li><a href="#" class="opc-main-bg" data-filter=".venue">Venue</a></li>
            <li><a href="#" class="opc-main-bg" data-filter=".catering">Catering</a></li>
            <li><a href="#" class="opc-main-bg" data-filter=".rias-busana">Rias & Busana</a></li>
          </ul>

          <!-- iso box section -->
          <div class="iso-box-section wow fadeInUp" data-wow-delay="1s">
            <div class="iso-box-wrapper col4-iso-box">
              @foreach($datas as $data)
              <div class="iso-box dekorasi branding col-md-4 col-sm-6">
                <div class="portfolio-thumb">
                  <img src="{{ asset('images/'.$data->gambar)}}" class="img-responsive" style="max-width:350px;max-height:350px;" alt="Portfolio">
                  <div class="portfolio-overlay"> 
                    <a href="{{url('readdekor', $data->slug_dekor)}}">
                      <h3>DETAIL LAINNYA</h3>
                    </a>
                    <div class="portfolio-item">
                    </div>
                  </div>
                </div>
              </div>
              @endforeach
                      

              @foreach($ketrings as $ketring)
              <div class="iso-box catering template col-md-4 col-sm-6">
                <div class="portfolio-thumb">
                  <img src="{{ asset('images/'.$ketring->gambar)}}" class="img-responsive" style="max-width:350px;max-height:350px;" alt="Portfolio">
                  <div class="portfolio-overlay">
                    <a href="{{url('readketring', $ketring->slug_ketring)}}">
                      <h3>DETAIL LAINNYA</h3>
                    </a>
                    <div class="portfolio-item">
                      <a href="single-project.html"><i class="fa fa-link"></i></a>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach

              @foreach($venues as $venue)
              <div class="iso-box venue graphic col-md-4 col-sm-6">
                <div class="portfolio-thumb">
                  <img src="{{ asset('images/'.$venue->gambar)}}" class="img-responsive" style="max-width:350px;max-height:350px;" alt="Portfolio">
                  <div class="portfolio-overlay"> 
                    <a href="{{url('readvenue', $venue->slug_venue)}}">
                      <h3>DETAIL LAINNYA</h3>
                    </a>
                    <div class="portfolio-item">
                      <a href="single-project.html"><i class="fa fa-link"></i></a>
                      <h2>Project Three</h2>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach

              @foreach($fotos as $foto)
              <div class="iso-box fotografi branding col-md-4 col-sm-6">
                <div class="portfolio-thumb">
                  <img src="{{ asset('images/'.$foto->gambar)}}" class="img-responsive" style="max-width:350px;max-height:350px;" alt="Portfolio">
                  <div class="portfolio-overlay"> 
                    <a href="{{url('readfoto', $foto->slug_foto)}}">
                      <h3>DETAIL LAINNYA</h3>
                    </a>
                    <div class="portfolio-item">
                      <a href="single-project.html"><i class="fa fa-link"></i></a>
                      <h2>Project Five</h2>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach

              @foreach($riasbs as $rias)
              <div class="iso-box rias-busana col-md-4 col-sm-6">
                <div class="portfolio-thumb">
                  <img src="{{ asset('images/'.$rias->gambar)}}" class="img-responsive" style="max-width:350px;max-height:350px;" alt="Portfolio">
                  <div class="portfolio-overlay"> 
                    <a href="{{url('readrias', $rias->slug_rias)}}">
                      <h3>DETAIL LAINNYA</h3>
                    </a>
                    <div class="portfolio-item">
                      <a href="single-project.html"><i class="fa fa-link"></i></a>
                      <h2>Project Six</h2>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach

            </div>
          </div>
          {{ $datas->render() }}
        </div>
      </div>

              
    </div>
  </div>
</section>

<!-- Footer section
================================================== -->
<footer>
	<div class="container">
	    <div class="row">
            <br><br>
            <div class="nama col-md-12 col-sm-12">
                <p class="developer wow fadeInUp" data-wow-delay="0.3s">
                    Developed by
                </p>
            </div>  

            <div class="nama col-md-3  col-sm-3">
                <p class="credit wow fadeInUp"  data-wow-delay="0.3s">Asep Egi Kurniawan</p>
                <p class="nim wow fadeInUp" data-wow-delay="0.3s ">1167050036</p>
                <ul class="social-icon wow fadeInUp"  data-wow-delay="0.6s">
                    <li><a href="#" class="fa fa-github"></a></li>
                    <li><a href="#" class="fa fa-instagram"></a></li>
                    <li><a href="#" class="fa fa-whatsapp"></a></li>
                </ul>
            </div>    

            <div class="nama col-md-3  col-sm-3">
                <p class="credit wow fadeInUp"  data-wow-delay="0.3s">Fatimah Azzahro Hasni</p>
                <p class="nim wow fadeInUp" data-wow-delay="0.3s ">1167050063</p>
                <ul class="social-icon wow fadeInUp"  data-wow-delay="0.6s">
                    <li><a href="#" class="fa fa-github"></a></li>
                    <li><a href="#" class="fa fa-instagram"></a></li>
                    <li><a href="#" class="fa fa-whatsapp"></a></li>
                </ul>
            </div> 

            <div class="nama col-md-3  col-sm-3">
                <p class="credit wow fadeInUp"  data-wow-delay="0.3s">Muhammad Nur Sidiq S</p>
                <p class="nim wow fadeInUp" data-wow-delay="0.3s ">1167050104</p>
                <ul class="social-icon wow fadeInUp"  data-wow-delay="0.6s">
                    <li><a href="#" class="fa fa-github"></a></li>
                    <li><a href="#" class="fa fa-instagram"></a></li>
                    <li><a href="#" class="fa fa-whatsapp"></a></li>
                </ul>
            </div> 

            <div class="nama col-md-3  col-sm-3">
                <p class="credit wow fadeInUp"  data-wow-delay="0.3s">Tia Aristianti</p>
                <p class="nim wow fadeInUp" data-wow-delay="0.3s ">1167050158</p>
                <ul class="social-icon wow fadeInUp"  data-wow-delay="0.6s">
                    <li><a href="#" class="fa fa-github"></a></li>
                    <li><a href="#" class="fa fa-instagram"></a></li>
                    <li><a href="#" class="fa fa-whatsapp"></a></li>
                </ul>
            </div>  			
            <!--<div class="col-md-12 col-sm-12">
			    <div class="institusi wow fadeInUp"  data-wow-delay="0.6s">
                    <p> Universitas Islam Negeri Sunan Gunung Djati Bandung</p>
				</div>
			</div> -->
		</div>
	</div>
</footer>

<!-- Javascript 
================================================== -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/isotope.js"></script>
<script src="js/imagesloaded.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/custom.js"></script>

</body>
</html>