<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    body, html {
      overflow-x: hidden;
    }
    section, header, footer {
      margin: 0;
      padding: 0;
    }
    .container, .container-fluid {
      margin: 0 auto;
      padding: 0;
    }
    .contact_section, .footer_section, .car_section, .request_vip_rental_section {
      margin: 0;
      padding: 0;
    }
  </style>  

  <title>RentCar</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,600,700&display=swap" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
  <!-- responsive style -->
  <link href="{{ asset('css/responsive.css') }}" rel="stylesheet" />
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container">
          <a class="navbar-brand">
            <span>
              Rental Mobil Classic
            </span>
          </a>

          @if (Route::has('login'))
          <div class="navbar-collapse" id="">
            <div class="user_option">
            @auth
            <a href="{{ url('/dashboard') }}" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
              Dashboard
            </a>
            @else
            <a href="{{ route('login') }}" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
              Log in
            </a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
              Register
            </a>
            @endif
            @endauth
          </nav>
          @endif
        </nav>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class="slider_section position-relative">
      <div class="slider_container">
        <div class="img-box">
          <img src="{{ asset('images/hero-img.jpg') }}" alt="">
        </div>
        <div class="detail_container">
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="detail-box">
                  <h1>
                    Rental <br>
                    Selow <br>
                    Santuy
                  </h1>
                  <a href="{{ route('login') }}">
                    Buruan Daftar
                  </a>
                </div>
              </div>
              <div class="carousel-item">
                <div class="detail-box">
                  <h1>
                    Rental <br>
                    Cepat <br>
                    Murah
                  </h1>
                  <a href="{{ route('login') }}">
                    Buruan Daftar
                  </a>
                </div>
              </div>
              <div class="carousel-item">
                <div class="detail-box">
                  <h1>
                    Rental <br>
                    Express <br>
                    Gaskeun
                  </h1>
                  <a href="{{ route('login') }}">
                    Buruan Daftar
                  </a>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>
    </section>
    <!-- end slider section -->
  </div>
  <!-- car section -->

  <section class="car_section layout_padding2-top layout_padding-bottom">
    <div class="container">
      <div class="heading_container">
        <h2>
          Temukan Mobil Favorit Kamu!
        </h2>
        <p>
          Ayok buruan sewa dirental kami, keburu disewa orang lain gaes
        </p>
      </div>
      <div class="car_container">
        <div class="box">
          <div class="img-box">
            <img src="{{ asset('images/c-1.png') }}" alt="">
          </div>
          <div class="detail-box">
            <h5>
              Pilih Mobil Kamu
            </h5>
            <p>
              Dapatkan penawaran menarik dari mobil yang ada, bersukur saat tidak dapat mobil
            </p>
          
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="{{ asset('images/c-2.png') }}" alt="">
          </div>
          <div class="detail-box">
            <h5>
              Ambil Mobilnya!
            </h5>
            <p>
              Dapatkan penawaran menarik dari mobil yang ada, bersukur saat tidak dapat mobil </p>
            
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="{{ asset('images/c-3.png') }}" alt="">
          </div>
          <div class="detail-box">
            <h5>
              Kontak Dealer kamu
            </h5>
            <p>
              Dapatkan penawaran menarik dari mobil yang ada, bersukur saat tidak dapat mobil </p>
            
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end car section -->

  <!-- about section -->

  <section class="about_section layout_padding-bottom">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-7 px-0">
          <div class="img-box">
            <img src="{{ asset('images/about-img.png') }}" alt="">
          </div>
        </div>
        <div class="col-md-4 col-lg-3">
          <div class="detail-box">
            <h2>
              Tentang Kami
            </h2>
            <p>
              Mobil kami sudah pernah dipake ke luar negri oleh banyak artis
              dari pergi ke jepang hingga ke negri sebrang melewati dataran China.
            </p>
          
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->


  <!-- best section -->

  <section class="best_section">
    <div class="container">
      <div class="book_now">
        <div class="detail-box">
          <h2>
            Mobil Terbaik Kami
          </h2>
          <p>
            Menyewakan mobil terbaik yang bisa disewa dengan harga yang Murah
          </p>
        </div>
        <div class="btn-box">
          <a href="{{ url('/dashboard') }}" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
            Book Now
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- end best section -->

  <!-- rent section -->

  <section class="rent_section layout_padding">
    <div class="container">
      <div class="rent_container">
        <div class="box">
          <div class="img-box">
            <img src="{{ asset('images/r-1.png') }}" alt="">
          </div>
          <div class="price">
            <a href="{{ url('/dashboard') }}" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
              Rent Rp.700.000
            </a>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="{{ asset('images/r-2.png') }}" alt="">
          </div>
          <div class="price">
            <a href="{{ url('/dashboard') }}" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
              Rent Rp.700.000
            </a>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="{{ asset('images/r-3.png') }}" alt="">
          </div>
          <div class="price">
            <a href="{{ url('/dashboard') }}" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
              Rent Rp.700.000
            </a>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="{{ asset('images/r-4.png') }}" alt="">
          </div>
          <div class="price">
            <a href="{{ url('/dashboard') }}" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
              Rent Rp.700.000
            </a>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="{{ asset('images/r-5.png') }}" alt="">
          </div>
          <div class="price">
            <a href="{{ url('/dashboard') }}" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
              Rent Rp.700.000
            </a>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="{{ asset('images/r-6.png') }}" alt="">
          </div>
          <div class="price">
            <a href="{{ url('/dashboard') }}" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
              Rent Rp.700.000
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end rent section -->


  <!-- contact section -->

  <section class="contact_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Request VIP Rental
        </h2>
      </div>
      <div class="row">
        <div class="col-md-8 mx-auto">
          <div class="form_container">
            <form>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <input type="text" class="form-control" id="inputName4" placeholder="Name ">
                </div>
                <div class="form-group col-md-6">
                  <input type="text" class="form-control" id="inputSubject4" placeholder="Phone">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col">
                  <input type="email" class="form-control" id="inputEmail4" placeholder="Email id">
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" id="inputMessage" placeholder="Message">
              </div>
              <div class="d-flex justify-content-center">
                <button type="submit" class="">Send</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="contact_items">

        <a href="">
          <div class="img-box">
            <img src="{{ asset('images/location.png') }}" alt="">
          </div>
          <h6>
            STT Terpadu Nurul Fikri
          </h6>
        </a>
        <a href="">
          <div class="img-box">
            <img src="{{ asset('images/call.png') }}" alt="">
          </div>
          <h6>
            (+12 1234456789)
          </h6>
        </a>
        <a href="">
          <div class="img-box">
            <img src="{{ asset('images/mail.png') }}" alt="">
          </div>
          <h6>
            demo@gmail.com
          </h6>
        </a>

      </div>
      <div class="social_container">
        <div class="social-box">
          <div>
            <a href="">
              <img src="{{ asset('images/fb.png') }}" alt="">
            </a>
          </div>
          <div>
            <a href="">
              <img src="{{ asset('images/twitter.png') }}" alt="">
            </a>
          </div>
          <div>
            <a href="">
              <img src="{{ asset('images/linkedin.png') }}" alt="">
            </a>
          </div>
          <div>
            <a href="">
              <img src="{{ asset('images/insta.png') }}" alt="">
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end contact section -->

  <!-- footer section -->
  <footer class="container-fluid footer_section">
    <p>
      Copyright &copy; 2020 All Rights Reserved. Design by
      <a href="https://html.design/">Kelompok Haji Thoriq</a>
    </p>
  </footer>
  <!-- footer section -->

  <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap.js') }}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <script src="{{ asset('js/custom.js') }}"></script>
</body>

</html>
