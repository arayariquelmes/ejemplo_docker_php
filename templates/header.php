<!DOCTYPE html>
<html lang="es">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>INAFETERIA</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">
  <link rel="stylesheet" href="vendor/fontawesome-free-5.15.1-web/css/all.min.css">
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" >
  <!-- Custom styles for this template -->
  <link href="css/business-casual.min.css" rel="stylesheet">

</head>

<body>

  <h1 class="site-heading text-center text-white d-none d-lg-block">
    <span class="site-heading-upper text-primary mb-3">Diseño Web & Mobile</span>
    <span class="site-heading-lower">Dinafé Interactivo</span>
  </h1>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
    <div class="container">
      <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">INAFETERIA</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item <?php echo $activa == "home"? "active": "" ?> px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="index.php">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item  <?php echo $activa == "nosotros"? "active": "" ?> px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="about.php">Sobre Nosotros</a>
          </li>
          <li class="nav-item  <?php echo $activa == "productos"? "active": "" ?> px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="products.php">Nuestros Productos</a>
          </li>
          <li class="nav-item  <?php echo $activa == "locales"? "active": "" ?> px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="store.php">Locales</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <div class="text-primary text-center ">
            <i class="fas fa-shopping-cart fa-2x text-primary"></i>
            <span class="text-primary " id="cantidad-productos-carro"></span>
          </div>
          <button class="btn btn-primary ml-3 my-2 my-sm-0 carro-btn" type="button">Ver Carro</button>
        </form>
      </div>
    </div>
  </nav>