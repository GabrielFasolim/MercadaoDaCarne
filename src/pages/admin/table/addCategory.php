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
      <div class="tableContent tableAdd">

        <div class="btns mb-3">
          <a href="./categoryTable.php" class="btn btn-outline-danger"><i class="fas fa-eye"></i> Ver categorias</a>
          <a href="./addCategory.php" class="btn btn-danger"><i class="fas fa-square-plus"></i> Adicionar categoria</a>
        </div>

        <form id="form" class="col-md-12 form-product">
          <div class="form-outline mb-4">
            <input type="text" id="nome" class="form-control" name="nome" required/>
            <label class="form-label" for="nome">Nome da categoria</label>
          </div>

          <div class="form-outline mb-4">
            <textarea class="form-control" id="descricao" rows="6" name="descricao" required></textarea>
            <label class="form-label" for="descricao">Descrição</label>
          </div>

          <button type="submit" class="btn btn-danger btn-block mb-4">Criar</button>
        </form>
      </div>
    </main>
    
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <!-- Jquery -->
    <script src="https://ajax.aspnetcdn.com/ajax/jquery/jquery-1.9.0.js"></script>
    <script src="./addCategory.js"></script>

    <!-- Script SweetAlert -->
    <script src="sweetalert2.all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
  </body>
</html>