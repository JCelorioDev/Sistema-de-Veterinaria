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
          <a class="navbar-brand" href="index.html">
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


  <!-- buy section -->

  <section class="buy_section layout_padding">
    <div class="container">
      <h2>
        Puedes comprar mascota en nuestra clínica.
      </h2>
      <p>
        <h2>Requísitos:</h2>
        <span style='font-size:20px;'>&#11088; Ser responsable</span><br>
        <span style='font-size:20px;'>&#11088; Ser mayor de edad</span><br>
        <span style='font-size:20px;'>&#11088; Contar con un trabajo seguro</span><br>
        <span style='font-size:20px;'>&#11088; Hacerse responsable con las vacunas</span><br>
        <span style='font-size:20px;'>&#11088; Entrevista psicológica</span><br>
      </p>
      <div class="d-flex justify-content-center">
        <a href="">
          Comprar ahora!
        </a>
      </div>
    </div>
  </section>

  <!-- end buy section -->

  <!-- client section -->
  <section class="client_section layout_padding-bottom">
    <div class="container">
      <h2 class="custom_heading text-center">
        Que dicen nuestros
        <span>
          Clientes
        </span>
      </h2>
      <p class="text-center">
        En este apartado es para darte a conocer la experiencia de nuestros clientes con respectiva compra.
      </p>
      <div id="carouselExample2Indicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExample2Indicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExample2Indicators" data-slide-to="1"></li>
          <li data-target="#carouselExample2Indicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="layout_padding2 pl-100">
              <div class="client_container ">
                <div class="img_box">
                  <img style="width: 200px; height: 200px;" src="{{asset('images/f804x452-194651_246584_12.jpg')}}" alt="">
                </div>
                <div class="detail_box">
                  <h5>
                    Jesus Moreira
                  </h5>
                  <p>
                    Estoy muy feliz con mi nueva mascota que compre, gracias amigos peludos por hacer mi sueño realidad de tener un chihuahua.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="layout_padding2 pl-100">
              <div class="client_container ">
                <div class="img_box">
                  <img style="width: 200px; height: 200px;" src="{{asset('images/bulldogfrances.jpg')}}" alt="">
                </div>
                <div class="detail_box">
                  <h5>
                    Jazmin Intriago
                  </h5>
                  <p>
                    Mi hija esta muy feliz de haberle regalado su bulldog frances su felicidad es la mia, gracias a amigos peludos por hacerle realidad el sueño.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="layout_padding2 pl-100">
              <div class="client_container ">
                <div class="img_box">
                  <img style="widows: 200px; height: 200px;" src="{{asset('images/1b84bbf64add4bb86fd9ff8c8d448696.jpg')}}" alt="">
                </div>
                <div class="detail_box">
                  <h5>
                    Marco Aveiga
                  </h5>
                  <p>
                    Compre un pitbull americano pequeño y estoy contento de la compra ya que siempre quize uno que fuera 100% de la raza ahora nos llevamos muy bien y espero verlo crecer.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>


    </div>

  </section>
  <!-- end client section -->


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