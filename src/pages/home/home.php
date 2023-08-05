<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Css Links -->
  <link rel="stylesheet" href="../../css/reset.css" />
  <link rel="stylesheet" href="../../css/style.css" />

  <!-- Font Awesome -->
  <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    rel="stylesheet"
  />
  
  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
    rel="stylesheet"
  />

  <!-- MDB -->
  <link
    href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.css"
    rel="stylesheet"
  />

  <title>Mercadão da carne - Home</title>
</head>

<body>
  <?php require_once '../../components/header.php'; ?>
  <main class="container-main">
    <div class="main-head container-md">
      <div class="main-carousel">
        <div id="carouselExampleCrossfade" class="carousel slide carousel-fade" data-mdb-ride="carousel">
          <div class="carousel-indicators">
            <button
              type="button"
              data-mdb-target="#carouselExampleCrossfade"
              data-mdb-slide-to="0"
              class="active"
              aria-current="true"
              aria-label="Slide 1"
            ></button>
            <button
              type="button"
              data-mdb-target="#carouselExampleCrossfade"
              data-mdb-slide-to="1"
              aria-label="Slide 2"
            ></button>
            <button
              type="button"
              data-mdb-target="#carouselExampleCrossfade"
              data-mdb-slide-to="2"
              aria-label="Slide 3"
            ></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <a href="http://localhost/Mercad%C3%A3o%20da%20carne/src/pages/categories/category.php?category=Tudo"><img src="../../img/carrossel 1.png" class="d-block w-100" alt="Wild Landscape"/></a>
            </div>
            <div class="carousel-item">
              <img src="../../img/carrossel 1.png" class="d-block w-100" alt="Camera"/>
            </div>
            <div class="carousel-item">
              <img src="../../img/carrossel 1.png" class="d-block w-100" alt="Exotic Fruits"/>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-mdb-target="#carouselExampleCrossfade" data-mdb-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-mdb-target="#carouselExampleCrossfade" data-mdb-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
      
      <div class="main-infos">
        <div class="info">
          <i class="fas fa-truck-fast"></i>
          <div class="info-text">
            <h3>ENTREGAS AGENDADAS</h3>
            <p>Escolha o horário e faça seu pedido</p>
          </div>
        </div>
        <div class="info">
          <i class="fab fa-whatsapp-square"></i>
          <div class="info-text">
            <h3>WHATSAPP</h3>
            <p>Clique e compre pelo whatsapp</p>
          </div>
        </div>
        <div class="info">
          <i class="fas fa-headset"></i>
          <div class="info-text">
            <h3>SUPORTE AO CLIENTE</h3>
            <p>Diretamente pelo whatsapp</p>
          </div>
        </div>
        <div class="info">
          <i class="fas fa-arrow-down-a-z"></i>
          <div class="info-text">
            <h3>DIVERSIDADE</h3>
            <p>Diversos produtos à sua disposição</p>
          </div>
        </div>
      </div>

      <div class="main-division">
      </div>

      <div class="main-adverts">
        <div class="advert"><a href="http://localhost/Mercad%C3%A3o%20da%20carne/src/pages/categories/category.php?category=Tudo"><img src="../../img/anuncio 1.png" alt=""></div></a>
        <div class="advert"><a href="http://localhost/Mercad%C3%A3o%20da%20carne/src/pages/categories/category.php?category=Kits"><img src="../../img/anuncio 2.png" alt=""></div></a>
        <div class="advert"><img src="../../img/anuncio 3.png" alt=""></div>
        <div class="advert"><img src="../../img/anuncio 4.png" alt=""></div>
      </div>

      <div class="main-division">
      </div>
    </div>
    <div class="products container-md">
      <p class="product-title">NOSSAS CARNES <span>BOVINAS</span></p>
      <div class="products-content">
        <?php require "./loadBovinos.php"?>
      </div>
      <div class="btn-vermais"><a href="http://localhost/Mercad%C3%A3o%20da%20carne/src/pages/categories/category.php?category=Bovinos" class="btn"><i class="fas fa-angles-right"></i> Ver mais</a></div>
      <div class="main-division">
    </div>
    <div class="products container-md mt-3">
      <p class="product-title">NOSSAS CARNES DE <span>AVES</span></p>
      <div class="products-content">
        <?php require "./loadAves.php"?>
      </div>
      <div class="btn-vermais"><a href="http://localhost/Mercad%C3%A3o%20da%20carne/src/pages/categories/category.php?category=Aves" class="btn"><i class="fas fa-angles-right"></i> Ver mais</a></div>
      <div class="main-division">
    </div>
    <div class="products container-md mt-3">
      <p class="product-title">NOSSAS CARNES <span>SUÍNAS</span></p>
      <div class="products-content">
        <?php require "./loadSuinos.php"?>
      </div>
      <div class="btn-vermais"><a href="http://localhost/Mercad%C3%A3o%20da%20carne/src/pages/categories/category.php?category=Suínos" class="btn"><i class="fas fa-angles-right"></i> Ver mais</a></div>
      <div class="main-division">
    </div>
    <div class="products container-md mt-3">
      <p class="product-title">NOSSAS <span>LINGUIÇAS</span></p>
      <div class="products-content">
        <?php require "./loadLinguicas.php"?>
      </div>
      <div class="btn-vermais"><a href="http://localhost/Mercad%C3%A3o%20da%20carne/src/pages/categories/category.php?category=Linguiças" class="btn"><i class="fas fa-angles-right"></i> Ver mais</a></div>
      <div class="main-division">
    </div>
    <div class="products container-md mt-3">
      <p class="product-title">NOSSOS <span>KITS</span></p>
      <div class="products-content">
        <?php require "./loadKits.php"?>
      </div>
      <div class="btn-vermais"><a href="http://localhost/Mercad%C3%A3o%20da%20carne/src/pages/categories/category.php?category=Kits" class="btn"><i class="fas fa-angles-right"></i> Ver mais</a></div>
      <div class="main-division">
    </div>
  </main>
  
  <!-- MDB -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.js"></script>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>

  <!-- Category Search -->
  <script src="../categories/categorySearch.js"></script>
  
</body>
</html>