<?php

  require_once '../../database/connection.php';

  $category = $_GET['category'];

  if($category === "Tudo") {
    $sql = "SELECT c.id, c.nome, c.preco, c.foto, t.nome AS tipo_nome
          FROM carnes c
          INNER JOIN tipo t ON c.tipo_id = t.id";

    if($result = mysqli_query($conn, $sql)) {
      if(mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
          echo '<div class="product">';
            echo "<img src='data:image/jpeg;base64, " . $row['foto'] . "' alt='' class='img-fluid profile-pic'>";
            echo '<div class="category-and-name">';
              echo "<p class='product-category'>$row[tipo_nome]</p>";
              echo "<p class='product-name'>$row[nome]</p>";
            echo '</div>';
            echo '<div class="price-and-kg">';
              echo "<p class='product-price'>R$ $row[preco]</p>";
              echo "<p class='product-kg'>KG</p>";
            echo '</div>';
            echo '<hr>';
            echo "<a href='../../pages/products/products.php?id=$row[id]' class='btn'><i class='fas fa-basket-shopping'></i> Comprar</a>";
          echo '</div>';
        }
      } else {
        echo "<p class='null'>Não foi encontrado nenhum produto cadastrado!</p>";
      }
    }
  } else {
    $sql = "SELECT c.id, c.nome, c.preco, c.foto, t.nome AS tipo_nome
          FROM carnes c
          INNER JOIN tipo t ON c.tipo_id = t.id
          WHERE t.nome LIKE '%$category%'";
    
    if($result = mysqli_query($conn, $sql)) {
      if(mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
          echo '<div class="product">';
            echo "<img src='data:image/jpeg;base64, " . $row['foto'] . "' alt='' class='img-fluid profile-pic'>";
            echo '<div class="category-and-name">';
              echo "<p class='product-category'>$row[tipo_nome]</p>";
              echo "<p class='product-name'>$row[nome]</p>";
            echo '</div>';
            echo '<div class="price-and-kg">';
              echo "<p class='product-price'>R$ $row[preco]</p>";
              echo "<p class='product-kg'>KG</p>";
            echo '</div>';
            echo '<hr>';
            echo "<a href='../../pages/products/products.php?id=$row[id]' class='btn'><i class='fas fa-basket-shopping'></i> Comprar</a>";
          echo '</div>';
        }
      } else {
        echo "<p class='null marginNull'>Não foi encontrado nenhum produto cadastrado!</p>";
      }
    }
  }

?>