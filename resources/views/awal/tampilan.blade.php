@extends('layouts.index')
@section('content')
<!-- Portfolio section
================================================== -->
<section id="portfolio">
  <div class="container">
    <div class="row">

      <div class="col-md-12 col-sm-12">    
      <!-- iso section -->
        <div class="iso-section wow fadeInUp" data-wow-delay="2.6s">
          <ul class="filter-wrapper clearfix">      
            <li><a href="#" class="selected opc-main-bg" data-filter="">Dekorasi</a></li>
            <li><a href="#" class="opc-main-bg" data-filter=".asa">Jasa Fotografi</a></li>
            <li><a href="#" class="opc-main-bg" data-filter="" >Venue</a></li>
            <li><a href="#" class="opc-main-bg" >Catering</a></li>
            <li><a href="#" class="opc-main-bg" >Rias & Busana</a></li>
          </ul>

          <!-- iso box section -->            
          <div class="iso-box-section wow fadeInUp" data-wow-delay="1s">
            <div class="iso-box-wrapper col4-iso-box">
            @foreach($datas as $data)
            <div class="iso-box dekorasi branding col-md-4 col-sm-6">
              <div class="portfolio-thumb">
                <img src="{{ asset('images/'.$data->gambar)}}" class="img-responsive" alt="Portfolio" style="">
                <div class="portfolio-overlay">
                  <a href="">
                    <h3>DETAIL LAINNYA</h3>
                  </a>
                  <div class="portfolio-item"> </div>
                </div>
              </div>
            </div>      
            @endforeach
          </div>
        </div>
        {{ $datas->render() }}
      </div>
    </div>
         
  <div class="col-md-12 col-sm-12">
    <div id="clients" class="section wow fadeIn">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="clients-carousel">
              <!-- Single Clients -->
              <div class="single-client">
                <img src="images/client1.png" alt="" class="img-responsive">
              </div>
              <!--/ Single Clients -->
              <!-- Single Clients -->
              <div class="single-client">
                <img src="images/client2.png" alt="" class="img-responsive">
              </div>
              <!--/ Single Clients -->
              <!-- Single Clients -->
              <div class="single-client">
                <img src="images/client3.png" alt="" class="img-responsive">
              </div>
              <!--/ Single Clients -->
              <!-- Single Clients -->
              <div class="single-client">
                <img src="images/client4.png" alt="" class="img-responsive">
              </div>
              <!--/ Single Clients -->
              <!-- Single Clients -->
              <div class="single-client">
                <img src="images/client5.png" alt="" class="img-responsive">
              </div>
              <!--/ Single Clients -->
              <!-- Single Clients -->
              <div class="single-client">
                <img src="images/client6.png" alt="" class="img-responsive">
              </div>    
              <!--/ Single Clients -->
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
    </div>
  </div>
</section>
@stop