<!-- <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>PT. PJB Muara Tawar</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="Construction Company Website Template" name="keywords">
  <meta content="Construction Company Website Template" name="description">

  <link href="img/favicon.ico" rel="icon">

  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
  <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
  <link href="lib/slick/slick.css" rel="stylesheet">
  <link href="lib/slick/slick-theme.css" rel="stylesheet">

  <link href="css/style.css" rel="stylesheet">
</head>

<body>
  <div class="wrapper">
    <div class="top-bar">
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="col-lg-4 col-md-12">
            <div class="logo">
              <img src="{{asset('gambar/pjb.png')}}" alt="AdminLTE Logo" class="brand-image col-lg-4 col-md-4" style="opacity: 10">PT.PJB MUARA TAWAR</>
            </div>
          </div>
          <div class="col-lg-8 col-md-7 d-none d-lg-block">
            <div class="row">
              <div class="col-4">
                <div class="top-bar-item">
                  <div class="top-bar-icon">
                    <i class="flaticon-calendar"></i>
                  </div>
                  <div class="top-bar-text">
                    <p>Mon - Fri, 8:00 - 9:00</p>
                  </div>
                </div>
              </div>
              <div class="col-4">
                <div class="top-bar-item">
                  <div class="top-bar-icon">
                    <i class="flaticon-call"></i>
                  </div>
                  <div class="top-bar-text">
                    <p>+012 345 6789</p>
                  </div>
                </div>
              </div>
              <div class="col-4">
                <div class="top-bar-item">
                  <div class="top-bar-icon">
                    <i class="flaticon-send-mail"></i>
                  </div>
                  <div class="top-bar-text">
                    <p>info@example.com</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="nav-bar">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark">

          <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <div class="navbar-nav mr-auto">
              <div class="nav-item dropdown">

              </div>
            </div>
            <a href="#" class="navbar-brand">MENU</a>
          </div>

      </div>
      </nav>
    </div>
  </div>
  <!-- Nav Bar End -->


<!-- Carousel Start -->
<!-- <div id="carousel" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carousel" data-slide-to="0" class="active"></li>
    <li data-target="#carousel" data-slide-to="1"></li>
    <li data-target="#carousel" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="gambar/md.jpg" alt="AdminLTE">
      <div class="container">

        <body class="hold-transition login-page">
          <div class="login-box">
            <div class="login-logo">
              <a href="#"><b></b></a>
            </div>
            <div class="card">
              <div class="card-body login-card-body">
                <p class="login-box-msg">SELAMAT DATANG DI WEBSITE PJB</p>

                <form action="{{route('postlogin')}}" method="post">
                  {{ csrf_field() }}
                  <div class="input-group mb-3">
                    <input type="NID" class="form-control" name="NID" placeholder="NID">
                    <div class="input-group-append">
                      <div class="input-group-text">
                        <span class="fas fa-id-badge"></span>
                      </div>
                    </div>
                  </div>
                  <div class="input-group mb-3">
                    <input type="password" class="form-control" name="password" placeholder="Password">
                    <div class="input-group-append">
                      <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                      </div>
                    </div>
                  </div>
                  <div class="col-5 m-auto">
                    <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                  </div>

              </div>
              </form>

              <script src="{{asset('admin/plugins/jquery/jquery.min.js')}}"></script>

              <script src="{{asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

              <script src="{{asset('admin/dist/js/adminlte.min.js')}}"></script>
        </body>
      </div>
      <div class="carousel-caption">
        <p class="animated fadeInRight">We Are Professional</p>
        <h1 class="animated fadeInLeft">For Your Dream Project</h1>
        <a class="btn animated fadeInUp" href="https://htmlcodex.com/construction-company-website-template">Get A Quote</a>
      </div>
    </div>

    <div class="carousel-item">
      <img src="gambar/mu.jpg" alt="AdminLTE">
      <div class="carousel-caption">
        <p class="animated fadeInRight">Professional Builder</p>
        <h1 class="animated fadeInLeft">We Build Your Home</h1>
        <a class="btn animated fadeInUp" href="https://htmlcodex.com/construction-company-website-template">Get A Quote</a>
      </div>
    </div>

    <div class="carousel-item">
      <img src="gambar/ma.jpg" alt="AdminLTE">
      <div class="carousel-caption">
        <p class="animated fadeInRight">We Are Trusted</p>
        <h1 class="animated fadeInLeft">For Your Dream Home</h1>
        <a class="btn animated fadeInUp" href="https://htmlcodex.com/construction-company-website-template">Get A Quote</a>
      </div>
    </div>
  </div>

  <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div> -->
<!-- Carousel End -->

<!-- Video Start -->
<!-- <div class="video wow fadeIn" data-wow-delay="0.1s">
  <div class="container">
    <button type="button" class="btn-play" data-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-target="#videoModal">
      <span></span>
    </button>
  </div>
</div> -->

<!-- <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <!-- 16:9 aspect ratio -->
<!-- <div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="" id="video" allowscriptaccess="always" allow="autoplay"></iframe>
</div>
</div>
</div>
</div> -->
<!-- </div> -->
<!-- Video End -->

<!-- <div class="container copyright">
  <div class="row">
    <div class="col-md-6">
      <p>&copy; <a href="#">Web PPK</a></p>
    </div>
    <div class="col-md-8">
      <p> <a href="https://www.ptpjb.com/">PT.Pembangkit Jawab Bali</a></p>
    </div>
  </div> -->

<!-- JavaScript Libraries -->
<!-- <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/slick/slick.min.js"></script> -->


<!-- <script src="js/main.js"></script> -->