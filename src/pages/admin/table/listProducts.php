<?php
  require_once "../../../database/connection.php";

  $sql = "SELECT c.id, c.nome, c.descricao, c.preco, t.nome AS tipo_nome 
          FROM mercadaodacarne.carnes c 
          LEFT JOIN mercadaodacarne.tipo t ON c.tipo_id = t.id";

  if ($result = mysqli_query($conn, $sql)) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)){
            echo "<tr class='panelContent'>";
            echo "<th class='id' scope='row'>$row[id]</th>";
            echo "<td>$row[nome]</td>";
            echo "<td class='descricao'>$row[descricao]</td>";
            echo "<td>$row[tipo_nome]</td>";
            echo "<td>$row[preco]</td>";
            echo "<td>
                  <a href='./deleteProducts.php?id=$row[id]' id='deleteForm'>
                    <i class='fas fa-trash'></i>
                  </a>
                  <a href='./updateProducts.php?id=$row[id]'>
                    <i class='fas fa-pen'></i>
                  </a>
                </td>";
            echo "</tr>";
        }
    }
} 

?>

<script src='./deleteProducts.js'></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    var descricaoElements = document.getElementsByClassName("descricao");
    for (var i = 0; i < descricaoElements.length; i++) {
        var descricao = descricaoElements[i].textContent;
        var limiteCaracteres = 100;

        if (descricao.length > limiteCaracteres) {
            descricaoElements[i].textContent = descricao.substring(0, limiteCaracteres) + "...";
        }
    }
</script>