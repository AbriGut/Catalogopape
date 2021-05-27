<?php
    $servername = "sql310.tonohost.com";
    $username = "ottos_28393812";
    $password = "240303";
    $dbname = "ottos_28393812_almacen";
    $port = "3306";
    try{
        $conn = new PDO("mysql:host=$servername;dbname=$dbname;port=$port", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql ="SELECT * FROM articulos";
        $result = $conn->prepare($sql);
        $result->execute();
    }catch(PDOException $e){
        echo "</br>" . $e->getMessage();
    }
    $papeleria = $result->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Papelería</title>
  <meta name="author" content="Abril Gutiérrez Núñez">
  <link rel="icon" href="https://images.emojiterra.com/mozilla/512px/270f.png" type="image/png" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"           integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  <!-- Bootstrap Core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom Fonts -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
  <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="css/stylish-portfolio.min.css" rel="stylesheet">
</head>

<body id="page-top">

  <!-- Navigation -->
  <a class="menu-toggle rounded" href="#">
    <i class="fas fa-bars"></i>
  </a>
  <nav id="sidebar-wrapper">
    <ul class="sidebar-nav">
      <li class="sidebar-brand">
        <a class="js-scroll-trigger" href="#page-top">Menú</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger" href="http://papeleriadeabril.tonohost.com/">Página principal</a>
      </li>
      <input class="form-control me-2" type="search" name="q" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-warning" type="submit">Buscar</button>
    </ul>
  </nav>

  <!-- Header -->
  <header class="masthead d-flex">
    <div class="container text-center my-auto">
      <h1 class="mb-1">Papelería de Abril</h1>
      <h3 class="mb-5">
        <em>Haz explotar tu cretividad</em>
      </h3>
    </div>
    <div class="overlay"></div>
  </header>

  <!-- Portfolio -->
    <div class="container">
        <div class="row">
            <?php
                foreach ($papeleria as $id => $producto){
            ?>
            <div class="col-sm">
                <div class="card py-2" style="width: 18rem;">
                    <img src="<?=$producto['imagen']?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?=$producto['nombre']?></h5>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><?='Stock: '.$producto['stock']?></li>
                        <li class="list-group-item"><?='Contiene: '.$producto['cont']?></li>
                        <li class="list-group-item"><?='Tamaño: '.$producto['size']?></li>
                        <li class="list-group-item"><?='Precio: $'.$producto['precio']?></li>
                    </ul>
                    <!--<div class="card-body">
                        <a href="/papeleria.php?id_papeleria=<?=$id?>" class="btn btn-primary">Ver más</a>
                    </div>-->
                </div>
            </div>
            <?php
                }
            ?>  
        </div>
    </div>

  <!-- Footer -->
  <footer class="footer text-center">
    <div class="container">
      <ul class="list-inline mb-5">
        <li class="list-inline-item">
          <a class="social-link rounded-circle text-white mr-3" href="https://www.facebook.com/profile.php?id=100009541656359">
            <i class="icon-social-facebook"></i>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="social-link rounded-circle text-white mr-3" href="https://twitter.com/AbrilGu44758227?s=09">
            <i class="icon-social-twitter"></i>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="social-link rounded-circle text-white" href="https://github.com/AbriGut">
            <i class="icon-social-github"></i>
          </a>
        </li>
      </ul>
      <p class="text-muted small mb-0">Copyright &copy; Abril Gutiérrez 2021</p>
    </div>
  </footer>

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded js-scroll-trigger" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/stylish-portfolio.min.js"></script>

</body>

</html>
