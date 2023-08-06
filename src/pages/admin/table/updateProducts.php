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

    <!-- FavIcon -->
    <link rel="shortcut icon" href="../../../img/favicon.png" type="image/x-icon">

    <title>Mercadão da carne</title>
  </head>
  <body>
    <?php
      require_once "../../../components/adminAuthorization.php";
      require_once "./loadProductsExe.php";
      $id = $_GET['id'];
    ?>
    <main class="container-table">
      <div class="tableContent tableAdd">

        <div class="btns mb-3">
          <a href="./productTable.php" class="btn btn-outline-danger"><i class="fas fa-eye"></i> Ver carnes</a>
          <a href="./addCategory.php" class="btn btn-danger"><i class="fas fa-square-plus"></i> Adicionar categoria</a>
        </div>

        <form method='POST' action='updateProductsExe.php' id="formEdit" class="col-md-12 form-product" enctype="multipart/form-data">
          <div class="form-outline mb-4">
            <input type="text" id="nome" class="form-control" name="nome" value="<?php echo ($nome);?>" required/>
            <label class="form-label" for="nome">Nome do produto</label>
          </div>

          <div class="form-outline mb-4">
            <textarea class="form-control" id="descricao" rows="6" name="descricao" value="<?php echo ($descricao);?>" required></textarea>
            <label class="form-label" for="descricao">Descrição</label>
          </div>

          <select id="categoria" class="form-select mb-4" aria-label="Default select example" name="categoria" required>
            <option selected>Categoria do produto</option>
            <?php require './loadCategory.php' ?>
          </select>

          <div class="form-outline mb-4">
            <input type="text" id="preco" class="form-control" name="preco" value="<?php echo ($preco);?>" required/>
            <label class="form-label" for="preco">Preço do produto</label>
          </div>

          <label class="form-label" for="foto">Foto do produto</label>
          <input type="file" class="form-control mb-4" id="foto" name="foto" required/>

          <button value="<?php echo $id?>" id='update' type='submit' name='id' class="btn btn-danger btn-block mb-4">Editar</button>
        </form>
      </div>
    </main>
    
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <!-- Jquery -->
    <script src="https://ajax.aspnetcdn.com/ajax/jquery/jquery-1.9.0.js"></script>
    <!-- <script src="./updateProducts.js"></script> -->

    <!-- Script SweetAlert -->
    <script src="sweetalert2.all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
  </body>
</html>