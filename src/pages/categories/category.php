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

  <!-- FavIcon -->
  <link rel="shortcut icon" href="../../img/favicon.png" type="image/x-icon">

  <?php
    $category = $_GET['category'];
    $title = "Mercadão barato";
    if (isset($category)) {
        $title .= " - " . $category;
    }
  ?>

  <title><?php echo $title; ?></title>  
</head>

<body>
  <?php require_once '../../components/header.php'; ?>
  <main class="container-main">
    <div class="products container-md mt-3">
      <div class="products-content">
        <? require_once '../categories/categoryExe.php'; ?>
      </div>
    </div>
  </main>

  <? require_once "../../components/footer.php"; ?>
  
  <!-- MDB -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.js"></script>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>

  <!-- Category Search -->
  <script src="./categorySearch.js"></script>
  
</body>
</html>