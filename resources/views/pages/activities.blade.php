<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>NusaDaya - Activities</title>
  <link rel="icon" href="https://static.wixstatic.com/media/e1d0e5_5eebc5780c3341649ad43a5c983dfbb9~mv2_d_2028_2028_s_2.png/v1/fill/w_80,h_80,al_c,q_80,usm_0.66_1.00_0.01/logo%203.webp"/>

  <!-- Bootstrap core CSS -->
  <link href="{{url('Agency/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="{{url('Agency/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="{{url('Agency/css/agency.min.css')}}" rel="stylesheet">
  <!-- Custom style -->
  <link href="{{url('Agency/css/CustomStyle.css')}}" rel="stylesheet">
  <style media="screen">
    #mainNav {
      padding-top: 0px;
      padding-bottom: 0px;
    }
  </style>

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav" style="background-color: #010d68;">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="/">Nusantara Berdaya</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        {{-- Menu --}}
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="/campaigns"><b>Campaign</b></a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="/activities"><b>Kegiatan</b></a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about"><b>Simulasi</b></a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#team"><b>Team</b></a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#"><b>Hubungi</b></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Activities -->
  <section class="page-section" style="background-color: #a2b0f9; padding-top: 70px;">
    <div class="container">
      <div class="row" id="services">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase" >Activities Page</h2>
          {{-- <h3 class="section-subheading text-muted" style="margin-bottom: 20px;">Lorem ipsum dolor sit amet consectetur.</h3> --}}
          <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="/">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Activities</li>
              </ol>
          </nav>
        </div>
      </div>

        <div class="row">
          @foreach ($num as $num)
            <div class="col-md-3 p-2">
                <div class="shadow-Custom card-r-15 bg-light">
                    <a href="#">
                      <img class="card-img-top"
                      src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22286%22%20height%3D%22180%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20286%20180%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_16dd047ab75%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A14pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_16dd047ab75%22%3E%3Crect%20width%3D%22286%22%20height%3D%22180%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22101.5%22%20y%3D%2296.9%22%3E286x180%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E"
                      alt="Card image cap" style="border-radius: 15px 15px 0px 0px;">
                    </a>
                    <div class="card-body">
                      <h6 class="card-title">Campaign 1</h6>
                      {{-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> --}}
                      <div class="progress-group" style="font-size: 10px;">
                          <span class="progress-text">Rp. {{$num}}.000,-</span>
                          <div class="progress xs">
                              <div class="progress-bar progress-bar-aqua" style="width: 80%"></div>
                          </div>
                          <span class="progress-number"><b>28</b> hari</span>
                      </div>
                    </div>
                    <div class="card-footer">
                      <a href="#" class="btn btn-info">Lebih lengkap</a>
                    </div>
                </div>
            </div>
          @endforeach
        </div>
    </div>
  </section>

  {{-- Quote --}}
  <section class="page-section-quote shadow-Custom " style="tex-align:center;">
    <div class="container">
      <h2>hai-hai</h2>
    </div>
  </section>

  <!-- Footer -->
  <footer class="footer" style="background-color: #010d68;">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-4" style="color: white;">
          <span class="copyright">Copyright © <a href="/">Nusantara Berdaya</a> 2019</span>
        </div>
        <div class="col-md-4" style="">
          <ul class="list-inline social-buttons">
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </li>
          </ul>
        </div>
        <div class="col-md-4">
          <ul class="list-inline quicklinks">
            <li class="list-inline-item">
              <a href="#">Privacy Policy</a>
            </li>
            <li class="list-inline-item">
              <a href="#">Terms of Use</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <!-- Portfolio Modals -->

  <!-- Modal 1 -->


  <!-- Bootstrap core JavaScript -->
  <script src="{{url('Agency/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{url('Agency/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Plugin JavaScript -->
  <script src="{{url('Agency/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

  <!-- Contact form JavaScript -->
  <script src="{{url('Agency/js/jqBootstrapValidation.js')}}"></script>
  <script src="{{url('Agency/js/contact_me.js')}}"></script>

  <!-- Custom scripts for this template -->
  <script src="{{url('Agency/js/agency.min.js')}}"></script>

</body>

</html>
