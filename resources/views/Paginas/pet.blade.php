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

  <title>Amigos Peludos</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Dosis:400,500|Poppins:400,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body class="sub_page">
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="{{asset('Principal')}}">
            <img src="images/logo.png" alt="">
            <span>
              Amigos Peludos
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex mx-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item">
                  <a class="nav-link" href="{{url('Servicios')}}">Servicios</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{url('Galeria')}}">Galería</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{url('Registro')}}">Registro</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{url('Tienda')}}">Tienda</a>
                </li>
              </ul>
              <form class="form-inline my-2 my-lg-0 ml-0 ml-lg-4 mb-3 mb-lg-0">
                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
              </form>
            </div>
            <div class="quote_btn-container  d-flex justify-content-center">
              <a href="">
                Celular: +593 0993854928
              </a>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
  </div>

  <!-- gallery section -->
  <section class="gallery-section layout_padding">
    <div class="container">
      <h2>
        Nuestra Galería
      </h2>
    </div>
    <div class="container ">
      <div class="img_box box-1">
        <img src="{{asset('images/medicine-5003631_960_720.jpg')}}" alt="perro,gatos,animales">
      </div>
      <div class="img_box box-2">
        <img src="{{asset('images/product-5b55f04ccfd0f.[1600].jpeg')}}" alt="perro,gatos,animales">
      </div>
      <div class="img_box box-3">
        <img src="{{asset('images/Veterinaria-cuenca-ecuador-Austrovet-emergencia-urgencia-atropello-mascotas-amigos-parte-de-la-familia-perriotos-gatitos-salud0001-1024x683.jpg')}}" alt="perros,gatos,animales">
      </div>
      <div class="img_box box-4">
        <img src="{{asset('images/6e945dce6844a09c2cd9901dc261e880.jpg')}}" alt="perros,gatos,animales">
      </div>
      <div class="img_box box-5">
        <img src="{{asset('images/20210224104801simulador1.jpg')}}" alt="perros,gatos,animales">
      </div>
    </div>
  </section>



  <!-- end gallery section -->

  <!-- info section -->
  <section class="info_section layout_padding2">
    <div class="container">
      <div class="info_items">
        <a href="">
          <div class="item ">
            <div class="img-box box-1">
              <img src="" alt="">
            </div>
            <div class="detail-box">
              <p>
                Localización
              </p>
            </div>
          </div>
        </a>
        <a href="">
          <div class="item ">
            <div class="img-box box-2">
              <img src="" alt="">
            </div>
            <div class="detail-box">
              <p>
                +593 0993854928
              </p>
            </div>
          </div>
        </a>
        <a href="">
          <div class="item ">
            <div class="img-box box-3">
              <img src="" alt="">
            </div>
            <div class="detail-box">
              <p>
                amigos_peludos@gmail.com
              </p>
            </div>
          </div>
        </a>
      </div>
    </div>
  </section>

  <!-- end info_section -->

  <!-- footer section -->
  <section class="container-fluid footer_section">
    <p>
      &copy; 2023 Amigos peludos - Todos los derechos reservados.
    </p>
  </section>
  <!-- footer section -->

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>

</body>

</html>