<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>sinopsis.com</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('mamba/assets/img/favicon.png')}}" rel="icon">
  <link href="{{asset('mamba/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i,900" rel="stylesheet">

  <!-- Vendor CSS Files -->

  <link href="{{asset('mamba/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('mamba/assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
  <link href="{{asset('mamba/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('mamba/assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('mamba/assets/vendor/venobox/venobox.css')}}" rel="stylesheet">
  <link href="{{asset('mamba/assets/vendor/aos/aos.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('mamba/assets/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Mamba - v2.0.1
  * Template URL: https://bootstrapmade.com/mamba-one-page-bootstrap-template-free/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container">

      <div class="logo float-left">
        <h1 class="text-light"><a href="index.html"><span>SINOPSIS</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu float-right d-none d-lg-block">
        <ul>
          <li class="active"><a href="#header">Home</a></li>
          <li><a href="#about">About Us</a></li>
          

          <li><a href="#contact">Contact Us</a></li>
         

          <li><a href="/login">Login Admin</a></li>
           <form class="form-inline my-2 my-lg-0" method="GET" action="/">
      <input name="cari" class="form-control mr-sm-2" type="Search" placeholder="Cari judul novel" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-image: url('{{asset('mamba/assets/img/slide/1.jpg')}}');">
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animated fadeInDown">Welcome to <span>Sinopsis.com</span></h2>
                <p class="animated fadeInUp">Cari dan Baca sinopsis dari novel kesukaanmu disini</p>
                <a href="#about" class="btn-get-started animated fadeInUp scrollto">Read More</a>
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item" style="background-image: url('{{asset('mamba/assets/img/slide/2.jpg')}}');">
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animated fadeInDown">Tersedia Banyak pilihan novel</h2>
                <a href="#about" class="btn-get-started animated fadeInUp scrollto">Read More</a>
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="carousel-item" style="background-image: url('{{asset('mamba/assets/img/slide/3.jpg')}}');">
            <div class="carousel-container">
              <div class="carousel-content container">
                  <h2 class="animated fadeInDown">Baca sinopsis novel favoritmu disini</h2>
              
               
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon icofont-rounded-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon icofont-rounded-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Us Section ======= -->
    @foreach($data_novel as $novel)
    <section id="about" class="about">
      <div class="container">

        <div class="row no-gutters">
          <div class="col-lg-6 video-box">
            <img src="{{asset('images/'.$novel->gambar)}}" class="img-fluid" alt="">
          
          </div>

          <div class="col-lg-6 d-flex flex-column justify-content-center about-content">

            <div class="section-title">
              <h2>{{$novel->judul}}</h2>
              <p>{{$novel->sinopsis}}</p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bx bx-fingerprint"></i></div>
              <h4 class="title"><a href="">Description</a></h4>
              <p class="description">{{$novel->penerbit}}</p>
               <p class="description">{{$novel->thn_terbit}}</p>
                <p class="description">
                                    @foreach($penulis as $penu)
                                        @if($penu->id == $novel->penulis)
                                            {{ $penu->penulis }}
                                        @endif
                                    @endforeach
                </p>
                 <p class="description">{{$novel->kategori}}</p>
                  <p class="description">{{$novel->harga}}</p>
            </div>


          </div>
        </div>

      </div>
    </section>
        @endforeach<!-- End About Us Section -->

    <!-- ======= About Lists Section ======= -->
 
    <!-- ======= Counts Section ======= -->
    <section class="counts section-bg">
      <div class="container">

        <div class="row">

          <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up">
            <div class="count-box">
              <i class="icofont-simple-smile" style="color: #20b38e;"></i>
              <span data-toggle="counter-up">232</span>
              <p>Pengunjung Web Hari ini</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up" data-aos-delay="200">
            <div class="count-box">
              <i class="icofont-document-folder" style="color: #c042ff;"></i>
              <span data-toggle="counter-up">2018</span>
              <p>Telah Berdiri 2 Tahun</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up" data-aos-delay="400">
            <div class="count-box">
              <i class="icofont-live-support" style="color: #46d1ff;"></i>
              <span data-toggle="counter-up">1,463</span>
              <p>Hours Of Support</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up" data-aos-delay="600">
            <div class="count-box">
              <i class="icofont-users-alt-5" style="color: #ffb459;"></i>
              <span data-toggle="counter-up">5</span>
              <p>Penulis Terkenal</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Services Section ======= -->
   <!-- End Services Section -->

    <!-- ======= Our Portfolio Section ======= -->
   <!-- End Our Portfolio Section -->

    <!-- ======= Our Team Section ======= -->
<!-- End Our Team Section -->

<!-- End Frequently Asked Questions Section -->

    <!-- ======= Contact Us Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact Us</h2>
        </div>

        <div class="row">

          <div class="col-lg-6 d-flex align-items-stretch" data-aos="fade-up">
            <div class="info-box">
              <i class="bx bx-map"></i>
              <h3>Our Address</h3>
              <p>JL. Nusa indah 53, Lowokwaru, Malang</p>
            </div>
          </div>

          <div class="col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="info-box">
              <i class="bx bx-envelope"></i>
              <h3>Email Us</h3>
              <p>sinopsis@example.com<br>contact@example.com</p>
            </div>
          </div>

          <div class="col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="info-box ">
              <i class="bx bx-phone-call"></i>
              <h3>Call Us</h3>
              <p>085589 55488 55<br>+086678 254445 41</p>
            </div>
          </div>


        </div>

      </div>
    </section><!-- End Contact Us Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>Sinopsis.com</h3>
            <p>
              jl. Nusa Indah 53 <br>
              Lowokwaru, Malang<br><br>
              <strong>Phone:</strong> 085589 55488 55<br>
              <strong>Email:</strong> sinopsis@example.com<br>
            </p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

  
        </div>
      </div>
    </div>

  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('mamba/assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('mamba/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('mamba/assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
  <script src="{{asset('mamba/assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('mamba/assets/vendor/jquery-sticky/jquery.sticky.js')}}"></script>
  <script src="{{asset('mamba/assets/vendor/venobox/venobox.min.js')}}"></script>
  <script src="{{asset('mamba/assets/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('mamba/assets/vendor/counterup/counterup.min.js')}}"></script>
  <script src="{{asset('mamba/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('mamba/assets/vendor/aos/aos.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('mamba/assets/js/main.js')}}"></script>

</body>

</html>