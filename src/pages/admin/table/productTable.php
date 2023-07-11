<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Css Links -->
    <link rel="stylesheet" href="../../../css/style.css" />
    <link rel="stylesheet" href="../../../css/reset.css" />

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

    <title>Mercadão da carne</title>
  </head>
  <body>
    <?php
      require_once "../../../components/adminAuthorization.php"
    ?>
    <main class="container-table">
      <div class="tableContent">
        <div class="btns mb-3">
          <a href="" class="btn btn-outline-danger"><i class="fas fa-eye"></i> Ver categorias</a>
          <a href="" class="btn btn-danger"><i class="fas fa-square-plus"></i> Adicionar item</a>
        </div>
        <div class="table-responsive">
          <table class="table table-striped text-center table-panel">
            <thead class="table-light">
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Descrição</th>
                <th scope="col">Categoria</th>
                <th scope="col">Preço</th>
                <th scope="col">Ações</th>
              </tr>
              <?php include "./listProducts.php" ?>
            </thead>
            <tbody>
          
            </tbody>
          </table>
        </div>
      </div>
    </main>
    
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    
  </body>
</html>